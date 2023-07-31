
@extends('user.layouts.main')

@section('title', 'Plans')

@section('content')

    <!----------------------Nav Bar---------------------------->
    @include('user.partials.navbar')

    <section class="hero-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 m-auto">
                    <div class="text-center text-justify">
                        <h2 class="text-uppercase text-white" style="font-size: 32px;">PERSONALIZED COACHING</h2>
                        <h4 class="text-capitalize mt-2 text-white" style="font-size: 20px;">Online Instruction for All Skill Levels</h4>
                        @auth
                            <button onclick="location.href='{{ url('private-coaching#price-table') }}'" class="btn-dark mt-3 btn-darkblue">REGISTER NOW</button>
                        @endauth
                        @guest
                            <button onclick="location.href='{{ url('register') }}'" class="btn-dark mt-3 btn-darkblue">REGISTER NOW</button>
                        @endguest
                    </div>
                </div>
                <div class=" col-md-6">
                    <div class=" text-center">
                        <img class="img-fluid mt-5 mb-5" src="images/private 1ldpi.png" width="100%">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="pricing-steps-sec hero-section-price">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-4">
                    <div class="shape">
                        <h3 class="sh-1 text-capitalize text-white">
                            <span class="one">1</span><br>
                            <span class="tell" style="margin-left: 1rem;">Tell us</span><br>
                            <span class="about">about</span><br>
                            <span class="yours" style="margin-left: 2rem;">yourself</span>
                        </h3>
                    </div>
                </div>
                <div class="col-md-8">
                    <p class="shape-txt">
                        Your unique skill level and needs are our priority. To personalize your sessions, we need to know a little bit about you!
                    </p>
                </div>
            </div>
            <!------------------ row ---------------------------->
            <div class="row">
                <div class="col-md-8">
                    <p class="shape-txt">
                        All of our plans include regular coaching because we know the importance of consistency in developing key skills.
                    </p>
                </div>
                <div class="col-md-4">
                    <div class="shape-1">
                        <h3 class="sh-2 text-capitalize text-white">
                            <span style="margin-left: 6rem; font-size: 48px;">2</span><br><br>
                            <span>Select a</span><br>
                            <span class="ml-5">Plan that</span><br>
                            <span>works</span>
                        </h3>
                    </div>
                </div>
            </div>
            <!------------------ row ---------------------------->
            <div class="row">
                <div class="col-md-4">
                    <div class="shape-2">
                        <h3 class="sh-3 text-capitalize text-white">
                            <span style="font-size: 48px;">3</span><br>
                            <span class="get" style="margin-left:2rem;" >Get Matched</span><br>
                            <span class="witha">With a</span><br>
                            <span class="coac" style="margin-left:4rem;" >Coach</span>
                        </h3>
                    </div>
                </div>
                <div class="col-md-8">
                    <p class="shape-txt">
                        Simple as that! Within minutes, you’ll be able to schedule your initial session with your coach and begin your life changing journey.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="pricing packages-sec mt-4" id="price-table">
        <h2 class="text-center text-uppercase mb-5 pt-3">Plans</h2>
        <div class="container mt-5 mt-5">
            <div class="row">

                <!-- Free Tier -->
                @foreach ($packages as $plan)
                        
                    <div class="col-lg-4 mt-5">
                        <div class="card mb-5 mb-lg-0">
                            <div class="card-body">
                                <h6 class="card-price text-center shadow-lg">
                                    {{ $plan->name }}
                                </h6>
                                <h3 class="text-center color-a mt-2 mb-2">{{ $plan->hours }} - Hours</h3>
                                <div class="pricingTable-header mt-3 mb-3">
                                    <div class="price-value text-right">Starting From ${{ $plan->total_amount }}</div>
                                </div>
                                <div class="mt-5 mb-5">
                                    @php
                                        $data = explode(PHP_EOL,$plan->description)
                                    @endphp
                                        <ul style="list-style: disc;">
                                            @foreach($data as $rf)
                                                <li><h5>{{ $rf }}</h5></li>
                                            @endforeach
                                        </ul>
                                </div>
                                <div class="row m-0">
                                    <div class="col-12 text-center">
                                        @if(!Auth::check())
                                            <a href="{{ route('login') }}?p={{ base64_encode($plan->id) }}">
                                                <button href="#" class="btn-dark text-uppercase" style="padding: 8px 22px;">Select</button>
                                            </a>
                                        @elseif(Auth::check() && auth()->user()->role != 'coach')
                                            <a href="{{ route('student.buy.package', $plan->id) }}">
                                                <button  class="btn-dark text-uppercase" style="padding: 8px 22px;">Select</button>
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row justify-content-center p-4">
                @guest
                    <a href="{{ url('/tutor-list-public') }}" class="btn-dark text-uppercase">Meet our Coaches</a>

                @endguest
                @auth
                <a href="{{ url('/findacoach') }}" class="btn-dark text-uppercase">View All Coaches</a>
                @endauth
            </div>
        </div>
    </section>
    <section class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="ment-txt mt-5">
                    <h3>Add on up to 3 friends to your sessions!</h3>
                    <li style="font-size: 20px;">2 people = 10% off for both</li>
                    <li style="font-size: 20px;">3 people = 15% off for all</li>
                    <li style="font-size: 20px;">4 people = 20% off for all</li>
                    <br>
                    <h5>Email us at hello@talkmaze.com to learn more.</h5>
                </div>
            </div>
            <div class="col-md-4">
                <img class="w-100" src="images/money-illustration-png-3.png">
            </div>
        </div>
    </section>

    <!-- Modal for Sucessfully Sent Request -->
    <div class="modal fade" id="exampleModalRequestSent" tabindex="-1" role="dialog"
         aria-labelledby="ModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content p-3" style="width: 80%; margin-left: auto; margin-right:auto; display: block;">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title ml-auto text-dark" id="exampleModalLongTitle" >
                        <strong>Your Request Successfully Sent!</strong>
                    </h4>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Activate Package</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @auth
                        <script src="https://www.paypal.com/sdk/js?client-id=AazHRzuh9sDwQwxGnct3SPzceWOFUBWfqPimRsa3ELtVVBxacjX4ARgFaXwNqb1Hmb7vxRqUvs_A4I3v&vault=true" data-sdk-integration-source="button-factory"></script>

                        <div id="paypal-button-container"></div>

                        <script>
                            paypal.Buttons({
                                createSubscription: function(data, actions) {
                                    return actions.subscription.create({
                                        'plan_id': packg
                                    });
                                },
                                onApprove: function(data, actions) {
                                    console.log(data)
                                    alert('Your subscription has been activated. Go to your dashboard and click “Find Coach” to get matched with a coach!');
                                    $.ajax({
                                        url:'{{ route('update.plan') }}',
                                        method:'POST',
                                        data:{
                                            from:'{{ $from }}',
                                            data_id:'{{ $data_id }}',
                                            plan:plan_id,
                                            price:Lprice,
                                            type:type,
                                            _token:'{{ csrf_token() }}'
                                        },
                                        success:function (data) {
                                            window.location.replace(data.url)
                                        },
                                        error:function (error) {

                                        }
                                    })
                                }
                            }).render('#paypal-button-container');

                        </script>
                    @endauth
                </div>
            </div>
        </div>
    </div>


    <!-- Payment Type Selector -->
    <div class="modal fade" id="paymentModal"  tabindex="-1" role="dialog" aria-labelledby="paymentModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="paymentModalLabel">Choose Payment Method</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="text-align: center;">
                    @auth
                        <button id="paypalMethod" class="btn btn-danger">PayPal</button>
                        <button id="stripeMethod" class="btn btn-success">Stripe</button> <br>

                        <h5 style="color: #0aa7ef">Note: Select Stripe if you have a referral code..</h5>
                    @endauth
                </div>
            </div>
        </div>
    </div>


    <!-- Modal For pop Up sign in -->
    <div class="modal fade p-0 " id="loginModal" tabindex="-1" role="dialog"
         aria-labelledby="loginModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content p-3" style="width: 80%; margin-left: auto; margin-right:auto; display: block;">
                <div class="modal-header">
                    <h4 class="modal-title ml-auto" id="exampleModalLongTitle">Log In</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('guest.login') }}" class="js-form-login form">
                        @csrf
                        <label class="text-muted h8 font-weight-bolder">Email/Username</label><span class="text-danger">*</span>
                        <input class="form-control bg-light" type="email" name="email"  style="height: 2.2rem;" value="{{old('email')}}" id="email" data-validate-field="email"
                        >
                        {!! $errors->first('email', '<label id="email-error-default" style="color:#D75A4A" for="email">:message</label>') !!}
                        <label id="email-error" for="email" class="d-none" style="color:#D75A4A">Email is required!</label>
                        <label id="email-error-valid" for="valid-email" class="d-none" style="color:#D75A4A">Please enter a valid Email Address!</label>

                        <label class="text-muted h8 font-weight-bold mt-2">Password</label><span class="text-danger">*</span>
                        <input class="form-control bg-light" type="password" name="password" style="height: 2.2rem;" id="password" data-validate-field="password" >
                        {!! $errors->first('password', '<label id="password-error-default" style="color:#D75A4A" for="password">:message</label>') !!}
                        <label id="password-error" for="password" class="d-none" style="color:#D75A4A">Password is required!</label>

                        <button id="btn-default-login" type="submit" class="btn btn-default-login mt-4">SEND</button>

                        <a href="{{url('register')}}">
                            <h6 class="text-center mt-2 color-a" style="font-size: 0.8em;">Create new account</h6>
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!----------------------Footer ---------------------------->
    @include('user.partials.footer')

    <!----------------------Copyright---------------------------->
    @include('user.partials.copyright')

    <script src="{{ asset('js/just-validate.min.js') }}"></script>
    <script src="https://js.stripe.com/v3"></script>
    <script>
        $(document).ready(function(){

            @if(Session::has('message'))
            $('#exampleModalRequestSent').modal('show');
            @elseif($errors->get('email') || $errors->get('password'))
            $('#loginModal').modal('show');
            @endif

            // var stripe = Stripe('pk_live_CBJXOtyoCOu9eSJ5DlNonmgM00OfrCfg2E');
            var stripe = Stripe('pk_test_51GsRHaFIQnHdLDIGTLSqcVcu8KCJxuLOsA5xpBDiBaz9OU3fsIvud4kJYKtr78qT3qv7IcDuFjWhjF7pWFLyShOf009Nm67zCP');

           $('#stripeMethod').click(function () {
                $('#paymentModal').modal('hide');
                $.ajax({
                    url:'{{ route('stripe.checkout') }}',
                    method:'POST',
                    data: {
                        from: '{{ $from }}',
                        data_id: '{{ $data_id }}',
                        plan: plan_id,
                        price: Lprice,
                        type: type,
                        _token:'{{ csrf_token() }}'
                    },
                        success:function (data) {
                        stripe.redirectToCheckout({
                            sessionId: data.session.id
                        }).then(function (result) {
                            alert('ERROR!, Your payment couldn\'t be processed.' );
                        });
                    },
                    error:function (error) {

                    }
            });
        });
            $('#paypalMethod').click(function () {
                $('#paymentModal').modal('hide');
                $('#exampleModal').modal('show');
            });
        });

        new window.JustValidate('.js-form', {
            rules: {
                first_name: {
                    required: true
                },
                last_name: {
                    required: true
                },
                email: {
                    required: true,
                    email: true,
                },
                phone : {
                    required: true,
                },
                organization : {
                    required: true,
                },
                role : {
                    required: true,
                },
                country: {
                    required: true,
                },
                message: {
                    required: true,
                },

            },
            messages: {

                first_name: {
                    required: 'First Name is required',
                },
                last_name: {
                    required: 'Last Name is required',
                },
                email: {
                    required: 'Email address is required',
                },
                role: {
                    required: 'Role is required',
                },
                phone: {
                    required: 'Phone number is required',
                },
                organization: {
                    required: 'Organization is required',
                },
                country: {
                    required: 'Country is required',
                },
                message: {
                    required: 'Message is required',
                },
            },
        });
        
    </script>
     @foreach ($plans as $plan)
                        <script>
                         $(document).ready(function() {
                              $('#myPopover{{$plan->id}}bronze').popover();
                         });
                         $(document).ready(function() {
                              $('#myPopover{{$plan->id}}silver').popover();
                         });
                         $(document).ready(function() {
                              $('#myPopover{{$plan->id}}gold').popover();
                         });
                        </script>
    @endforeach 
    <script>
    var plan_id = 0;
            var Lprice = 0;
            var type = '';
            var packg = '';
            function sum(){
                return 1+3;
            }
            function changevar(id,actid,price) {
                plan_id = actid
                if(id === 1) {
                    // packg = 'P-90B48115UU553891AL3ZZAEQ';
                    packg = 'P-90B48115UU553891AL3ZZAEQ';
                    Lprice = price
                    type = "Bronze"
                } else if(id === 11) {
                    packg = 'P-6VV67371WT954460GL3ZZAVA';
                    Lprice = price
                    type = "Silver"
                } else if(id === 12) {
                    packg = 'P-1ME8841947001400ML3ZZBEA';
                    Lprice = price
                    type = "Gold"
                } else if(id === 2) {
                    //packg = 'P-2L054279U78757546L3ZZGSIP-2L054279U78757546L3ZZGSI';
                    packg = 'P-13362444GH867314NL5XYYTI';
                    Lprice = price
                    type = "Bronze"
                }else if(id === 21){
                    packg = 'P-97T098659N391504EL5XYZVI';
                    Lprice = price
                    type = "Silver"
                }else if(id === 22){
                    packg = 'P-47R61856EU757470YL5XY2HI';
                    Lprice = price
                    type = "Gold"
                }else if(id === 3){
                    packg = 'P-9KY39401AS910092WL5XY3SY';
                    Lprice = price
                    type = "Bronze"
                }else if(id === 31){
                    packg = 'P-57C31382MV847341NL5XY34Y';
                    Lprice = price
                    type = "Silver"
                }else if(id === 32){
                    packg = 'P-8E521572XK110202WL5XY4GQ';
                    Lprice = price
                    type = "Gold"
                }
            }
</script>
@endsection
