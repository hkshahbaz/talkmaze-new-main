
@extends('user.layouts.main')

@section('title', 'Plans')

@section('content')
   <script src="https://www.paypal.com/sdk/js?client-id=AazHRzuh9sDwQwxGnct3SPzceWOFUBWfqPimRsa3ELtVVBxacjX4ARgFaXwNqb1Hmb7vxRqUvs_A4I3v&vault=true" data-sdk-integration-source="button-factory"></script>
    <!----------------------Nav Bar---------------------------->
    @include('user.partials.navbar')
    <script>
        var plan_id = 0;
        var packg = '';
        function changevar(id) {
            plan_id = id
            if(id === 1){
                packg = 'P-9GK03533AU437713LL2IWHYA';
            }else if(id === 2){
                packg = 'P-0YM58809KR8868934L2IZQRI';
            }else if(id === 3){
                packg = 'P-1YW725332U087481JL2IZSKA';
            }
        }
    </script>

    <section class="hero-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 m-auto">
                    <div class="text-center text-justify">
                        <h2 class="text-uppercase text-white" style="font-size: 32px;">Limited Spots Available</h2>
                        <h4 class="text-capitalize mt-2 text-white" style="font-size: 20px;">Online Instruction for All Skill Levels</h4>

                         <button onclick="location.href='{{ url('group-coaching#signup-table') }}'" class="btn-dark mt-3 btn-darkblue">REGISTER NOW</button>
                       <!-- <button onclick="location.href='{{ url('register') }}'" class="btn-dark mt-3">REGISTER NOW</button>-->
                    </div>
                </div>
                <div class=" col-md-6">
                    <div class=" text-center">
                        <img class="img-fluid mt-5 mb-5" src="images/group coaching 1ldpi.png" width="65%">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="more-reason-section">
        <div class="container">
            <div class="more-text text-center mt-5 mb-5 text-capitalize">
                <h1>What Sets Us Apart?</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-3">
                    <div class="text-center">
                        <img src="images/intarctive.png" width="173">
                        <h4 class="text-uppercase text-center mt-4 mb-4 color-a">INTERACTIVE</h4>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="text-center">
                        <img src="images/class.png"  width="173">
                        <h4 class="text-uppercase text-center mt-4 mb-4 color-a">SMALL SIZE</h4>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="text-center">
                        <img src="images/hands-and-gestures.png" width="173">
                        <h4 class="text-uppercase mt-4 mb-4 color-a">AFFORDABLE</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br/>
    <br/>
    <section class="container" id="signup-table">
        <div class="row justify-content-center mt-3">
            <h1>Upcoming Courses on TalkMaze</h1>
        </div>
        <style>
            .tag{
                display:inline-block;
                padding:3px 10px;
                background-color:#60d0ac;
                color:white;
                border:none;
                border-radius:10px;
                margin:5px;
            }
        </style>

        @foreach($classcats as $cat)
            <h2 class="text-dark text-underline text-uppercase pb-2 text-center mt-4">
                {{$cat->title}}</h2>
            <div class="inner2 m-auto">&nbsp;</div>
            @foreach($cat->plans as $plan)
                <div class="row justify-content-center py-2 container mt-3 mb-3" id="boxd{{ $plan->id }}">
                <div style="border: 1px solid #b6b6b6; border-radius: 10px" class="row px-3 py-3">
                    <div class="col-md-5 m-auto">
                        <div>
                            <img src="{{ $plan->image }}" width="100%">
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="row">
                            <div class="col">
                                <h3 class="p-0 m-0">{{ $plan->title }}</h3>
                                <h4 class="p-0 m-0 text-muted">{{ $plan->host? 'By '.$plan->host->name :'' }}</h4>
                                <h5 class="p-0 m-0">{!! $plan->description !!}</h5>
                            </div>
                        </div>
                        <br/>
                        <div class="row">
                            <div class="col">
                                <h5 class="p-0 m-0">{{ $plan->num_series }}</h5>
                                <h5 class="p-0 m-0"><strong>Start Date: </strong> {{ date('d M Y',strtotime($plan->date_time)) }} - GMT {{ $plan->time_zone }}</h5>
                                <h5 class="p-0 m-0"><strong>Time : </strong> {{ date('H:i a',strtotime($plan->date_time)) }} </h5>
                                <!--<h5 class="p-0 m-0" style="color: gree;">Price for {{ $plan->children->count() + 1 }} hours - <strong>${{ $plan->price }}</strong></h5>-->
                                @if($plan->end_time)
                                <h5 class="p-0 m-0"><strong>End Time : </strong> {{ date('H:i a',strtotime($plan->end_time)) }} </h5>
                                @endif

                                @if($plan->num_hours)
                                <h5 class="p-0 m-0" style="color: gree;">Price for {{ $plan->num_hours }} hours - <strong>${{ $plan->price?$plan->price:0 }}</strong></h5>
                                @else
                                <h5 class="p-0 m-0" style="color: gree;">Price for {{ $plan->children->count() + 1 }} hours - <strong>${{ $plan->price }}</strong></h5>
                                @endif
                                <h5 class="p-0 m-0" style="color: gree;">@if($plan->children->count() > 0) <strong>Sessions will Continue on</strong> <br/>@forelse($plan->children as $child) <div class="tag">{{ date('d M Y',strtotime($child->date_time)) }}</div> @empty @endforelse @endif</strong></h5>
                            </div>
                        </div>
                        <div class="row justify-content-end">
                            @auth
                                @if(!auth()->user()->enrollments()->where('class_plan_id',$plan->id)->exists() && $plan->price > 0)
                                    <a type="button" class="btn btn-dark text-white" onclick="set_price({{ $plan->price }},{{ $plan->id }})" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter{{ $plan->id }}">Sign Up</a>
                                @else
                                    <button onclick="regclass({{ $plan->id }},{{ $plan->price }},'{{$plan->title}}')" type="button" class="btn btn-dark text-white" class="btn btn-primary" >Sign Up</button>
                                @endif
                            @endauth

                            @guest
                                <a type="button" class="btn btn-dark text-white" class="btn btn-primary" data-toggle="modal" data-target="#loginModal">Sign Up</a>
                            @endguest
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="exampleModalCenter{{ $plan->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Complete your payment to register in {{ $plan->title }}</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Promo Code :
                                <div class="row p-0 m-3">
                                    <div class="col-9 mt-auto mb-auto">
                                        <input name="promo" class="form-control" id="promocode{{ $plan->id }}" style="display:inline-block;">
                                    </div>
                                    <div class="col-auto mt-auto mb-auto">
                                        <button class="btn btn-primary" onclick="check_promo({{ $plan->id }})" id="applbtn{{ $plan->id }}" style="display:inline-block;">Apply</button>
                                    </div>
                                </div>
                                <div class="row p-0 m-3" id="pricediv{{$plan->id}}">
                                    
                                </div>

                                <div id="paypal-button-container{{ $plan->id }}"></div>
                                <script>
                                    paypal.Buttons({
                                        createOrder: function(data, actions) {
                                            // This function sets up the details of the transaction, including the amount and line item details.
                                            return actions.order.create({
                                                purchase_units: [{
                                                    amount: {
                                                        value: value
                                                    }
                                                }]
                                            });
                                        },
                                        onApprove: function(data, actions) {
                                            // This function captures the funds from the transaction.
                                            return actions.order.capture().then(function(details) {
                                                // This function shows a transaction success message to your buyer.
                                                // alert('Transaction completed by ' + details.payer.name.given_name);

                                                $.ajax({
                                                    url:'{{ route('register.user.plan') }}',
                                                    data:{
                                                        id:'{{ $plan->id }}',
                                                        is_paid:1,
                                                        amount:value,
                                                        _token:'{{ csrf_token() }}'
                                                    },
                                                    success:function(data){
                                                        console.log('success')
                                                        $('boxd{{ $plan->id }}').hide();
                                                        window.location.replace('{{ url('/dashboard-coaching') }}')
                                                    },
                                                    error:function (error) {
                                                        console.log('error')
                                                    }
                                                })
                                            });
                                        }
                                    }).render('#paypal-button-container{{ $plan->id }}');
                                    //This function displays Smart Payment Buttons on your web page.
                                    
                                    function set_price(price,id){
                                        value = price
                                        class_id = id
                                    }

                                    function regclass(id, price,name){
                                        $.ajax({
                                            url:'{{ route('register.user.plan') }}',
                                            data:{
                                                id:id,
                                                is_paid:1,
                                                amount:price,
                                                _token:'{{ csrf_token() }}'
                                            },
                                            success:function(data){
                                                //open popup 
                                                document.getElementById('coursename').innerHTML = name
                                                $('#examplemodelregister').modal('show');
                                                setTimeout(()=>{
                                                    window.location.replace('{{ url('/dashboard-coaching') }}')
                                                },2000);
                                            },
                                            error:function (error) {
                                                console.log('error')
                                            }
                                        })
                                    }
                                    var value = 0
                                    var class_id = 0
                                    function check_promo(id){
                                        var io = document.getElementById('promocode'+id).value;
                                        $.ajax({
                                            url:'{{ url("/discount") }}'+'/'+io,
                                            method:'POST',
                                            data:{
                                                id:id,
                                                price:value,
                                                _token:'{{ csrf_token() }}'
                                            },
                                            success:function(data){
                                                value = data.value
                                                
                                                if(data.value === 0){
                                                    regclass(class_id,value,'class')
                                                }else{
                                                    document.getElementById('pricediv'+id).innerHTML = `<p style="color:green;">You will pay $`+data.value+` for this Class</p>`
                                                    alert('Promo code applied!')
                                                }
                                                document.getElementById('promocode'+id).disabled = true
                                                document.getElementById('applbtn'+id).disabled = true
                                            },
                                            error:function (error) {
                                                document.getElementById('pricediv'+id).innerHTML = `<p style="color:red;">Promo code is Invalid or Expired</p>`
                                                console.log('error')
                                            }
                                        })
                                    }
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @endforeach

    </section>
    <br/>
    <section>
        <div class="tips-section py-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-auto">
                        <div class=" text-center">
                            <h1 >Prefer to work one on one with a coach?</h1>
                            <button onclick="location.href='{{ url('private-coaching') }}'" class="btn-dark mt-3">Private Coaching</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Modal for Sucessfully Sent Request -->
    <div class="modal fade" id="examplemodelregister" tabindex="-1" role="dialog"
         aria-labelledby="ModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content p-3" style="width: 80%; margin-left: auto; margin-right:auto; display: block;">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title ml-auto text-dark" id="exampleModalLongTitle" >
                        <strong>Thank you for enrolling in <strong id="coursename"></strong>. The upcoming sessions will appear in your dashboard.</strong>
                    </h4>
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
                        <input type="text" value="coaching" name="from" hidden>

                        <button id="btn-default-login" type="submit" class="btn btn-default-login mt-4">SEND</button>

                        <a href="{{url('register')}}">
                            <h6 class="text-center mt-2 color-a" style="font-size: 0.8em;">Create new account</h6>
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Modal For pop Up Vote Required Before Comment -->
    <div class="modal fade" id="exampleModalRequestSent" tabindex="-1" role="dialog"
         aria-labelledby="ModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content p-3" style="width: 80%; margin-left: auto; margin-right:auto; display: block;">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title ml-auto text-dark" id="exampleModalLongTitle" >
                        <strong>Please check your email to confirm subscription.</strong>
                    </h4>
                </div>
            </div>
        </div>
    </div>
    <!----------------------Footer ---------------------------->
    @include('user.partials.footer')

    <!----------------------Copyright---------------------------->
    @include('user.partials.copyright')

    <script src="{{ asset('js/just-validate.min.js') }}"></script>
    <script>

        $(document).ready(function(){

            @if(Session::has('message'))
            $('#exampleModalRequestSent').modal('show');
            @elseif($errors->get('email') || $errors->get('password'))
            $('#loginModal').modal('show');
            @endif

        })
    </script>
@endsection
