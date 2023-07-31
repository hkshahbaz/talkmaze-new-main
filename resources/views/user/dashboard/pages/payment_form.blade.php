@extends('user.dashboard.layouts.main')

@section('title', 'Resources')

@section('css')
    <style>
        .StripeElement {
            box-sizing: border-box;
            height: 40px;
            padding: 12px 15px;
            border: 1px solid #ced4da;
            height: 43px;
        }
        .StripeElement--invalid {
            border-color: #fa755a;
        }
        .StripeElement--webkit-autofill {
            background-color: #fefde5 !important;
        }
        #card-errors{
            color: #fa755a;
        }
        #discount_code_message p{
            font-weight: 500;
            display: block;
            width: 100%;
            font-size: larger;
        }
    </style>
@endsection
@section('content')
    <!--------------------------MAin Setion---------------->
    <section>
        <div class="container-fluid ">
            <div class="row">

                <!---------------------------------------------------------Colloum 1-------------------------------------------->
            @include('user.dashboard.partials.sidebar')
            <!-------------------------------------------------------------colloum2------------------------------------------->
                <div class="col-md-8dot4">
                    <div class="container-fluid">
                        @include('components.header')
                       <div class="row">
                            <div class="col-12">
                                <h2 class="text-muted text-center">Card details</h2>
                            </div>
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <div class="card card-help">
                                    <div class="card-body">
                                        <p class="font-weight-bold text-center theme-font-color">Pay coach fee of ${{ $plan->total_amount }}</p>
                                        <form action="{{ route('student.payment.save') }}" method="POST" id="payment-form" class=" text-center">
                                            @csrf
                                            <input type="hidden" name="plan_id" value="{{ request()->plan }}">
                                            <input type="hidden" name="price" id="plan_price" value="{{$plan->total_amount}}">
                                            <input type="hidden" name="code_type" id="code_type" value="private_sessions">
                                            <input type="hidden" name="duration" id="duration" value="">

                                            <input id="card-holder-name" type="text" class="form-control" name="name" placeholder="Card Holder Name" autocomplete="off">
                                            <div id="card-element" class="mt-3"></div>
                                            <div id="card-errors" role="alert"></div>

                                             @if($plan->id == 3 || $plan->id == 4)

                                                @if(auth()->user()->plan_coupon_status == 'false')
                                                    <div class="row mt-3">
                                                        <div class="col-9">
                                                            <input id="discount_code" type="text" class="form-control" name="name" placeholder="Coupon Code (Optional)" autocomplete="off" style="height: calc(1.6em + 0.75rem + 2px);">
                                                        </div>
                                                        <div class="col-3">
                                                            <button type="button" class="btn btn-primary" id="apply-coupon" style="display:inline-block;">Apply</button>
                                                        </div>
                                                    </div>
                                                @else
                                                    <div class="alert alert-primary mt-3" role="alert">
                                                      You can't use coupon code because you have already use it.
                                                    </div>
                                                @endif
                                             @else

                                             
                                                <div class="row mt-3">
                                                    <div class="col-9">
                                                        <input id="discount_code" type="text" class="form-control" name="name" placeholder="Coupon Code (Optional)" autocomplete="off" style="height: calc(1.6em + 0.75rem + 2px);">
                                                    </div>
                                                    <div class="col-3">
                                                        <button type="button" class="btn btn-primary" id="apply-coupon" style="display:inline-block;">Apply</button>
                                                    </div>
                                                </div>
                                             @endif 

                                             <div class="row p-0 m-3 justify-content-center" id="discount_code_message"></div>

                                            <button type="submit" class="btn btn-theme text-white mt-3" id="purchase-btn">
                                                Pay Now
                                            </button>
                                        </form>
                                        <img src="{{ asset('images/powered_by_stripe.png') }}" class="powered_by_img">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3"></div>
                        </div> 
                    </div>
                    <br/>
                </div>
            </div>
        </div>
    </section>
    <!-----------------------drop down script--------------------------->
@endsection
    <script src="{{ asset('dashboard/js/jquery-3.3.1.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="{{ asset('dashboard/js/jquery.steps.js')}}"></script>
    <script src="{{asset('dashboard/js/main.js')}}"></script>
    <script src="{{asset('dashboard/js/moment.min.js')}}"></script>
    <script src="{{ asset('dashboard/js/bootstrap-datetimepicker.min.js') }}"></script>
    <script src="{{asset('dashboard/js/bootstrap-multiselect.min.js')}}"></script>
    <script src="https://js.stripe.com/v3/"></script>
    <script>
        $(document).ready(function () {

            // Validate coupan code using aJax request  

    $('#apply-coupon').click(function(e) {

        document.getElementById('apply-coupon').disabled = true;
        $('#apply-coupon').css('cursor','default');

        var io = $('#discount_code').val();
        if(io !== ''){
           $.ajax({
                url:'{{ url("/check_discount_code") }}'+'/'+io,
                method:'POST',
                data:{
                    code_type:$("#code_type").val(),
                    price:'{{$plan->total_amount}}',
                    _token:'{{ csrf_token() }}'
                },
                success:function(data){
                    console.log(data)
                    // console.log('NEW PRICE: '+ data.value)
                    document.getElementById('discount_code_message').innerHTML = `<p style="color:green;">Congratulations! coupon code worked.</p>
                        <p style="color:green;">You will pay $`+data.price+` for this plan</p>`;

                    document.getElementById('discount_code').disabled = true;
                    $('#plan_price').val(data.price)
                    $('#duration').val(data.duration)
                },
                error:function (error) {
                    document.getElementById('discount_code_message').innerHTML = `<p style="color:#fa755a;">Promo code is Invalid or Expired</p>`;
                    console.log('error')
                    document.getElementById('apply-coupon').disabled = false;
                    $('#apply-coupon').css('cursor','pointer');
                }
            }) 
        }
        
    }) 

    // END Validate coupan code using aJax request


            // Create a Stripe client.
            var stripe = Stripe("{{ env('STRIPE_KEY') }}");

            // Create an instance of Elements.
            var elements = stripe.elements();

            // Custom styling can be passed to options when creating an Element.
            // (Note that this demo uses a wider set of styles than the guide below.)
            var style = {
                base: {
                    color: '#32325d',
                    fontFamily: '"proxima-nova", "Helvetica Neue", Helvetica, sans-serif',
                    fontSmoothing: 'antialiased',
                    fontSize: '16px',
                    '::placeholder': {
                    color: '#aab7c4'
                    }
                },
                invalid: {
                    color: '#fa755a',
                    iconColor: '#fa755a'
                }
            };

            // Create an instance of the card Element.
            var card = elements.create('card', {style: style, hidePostCode:true});

            // Add an instance of the card Element into the `card-element` <div>.
            card.mount('#card-element');

            // Handle real-time validation errors from the card Element.
            card.on('change', function(event) {
                var displayError = document.getElementById('card-errors');
                if (event.error) {
                    displayError.textContent = event.error.message;
                } else {
                    displayError.textContent = '';
                }
            });

            // Handle form submission.
            var form = document.getElementById('payment-form');
            form.addEventListener('submit', function(event) {
                event.preventDefault();

                // Disable The submit button on click
                document.getElementById('purchase-btn').disabled = true;

                var options = {
                    name: document.getElementById('card-holder-name').value,
                }
                stripe.createToken(card, options).then(function(result) {
                    if (result.error) {
                        // Inform the user if there was an error.
                        var errorElement = document.getElementById('card-errors');
                        errorElement.textContent = result.error.message;

                        // Enable The submit button
                        document.getElementById('purchase-btn').disabled = false;
                    } else {
                        // Send the token to your server.
                        stripeTokenHandler(result.token);
                    }
                });
            });

            // Submit the form with the token ID.
            function stripeTokenHandler(token) {
                // Insert the token ID into the form so it gets submitted to the server
                var form = document.getElementById('payment-form');
                var hiddenInput = document.createElement('input');
                hiddenInput.setAttribute('type', 'hidden');
                hiddenInput.setAttribute('name', 'stripeToken');
                hiddenInput.setAttribute('value', token.id);
                form.appendChild(hiddenInput);

                // Submit the form
                form.submit();
            }
        });
    </script>
</script>