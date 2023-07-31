@extends('user.dashboard.layouts.main')

@section('title', 'Payouts')

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                        <h2 class="text-muted">Payouts</h2>
                        <h6>All your earnings here</h6>
                        <div class="row">
                            <div class="col-md-12 mb-2">
                                @if (is_null(auth()->user()->profile->stripe_account))
                                    <a href="{{ route('connect', auth()->user()->id) }}" class="btn btn-size pull-right" target="_blank">Connect Stripe</a>
                                @else
                                    <a href="{{ route('stripe.account') }}" class="btn btn-size pull-right" target="_blank">Go To Stripe</a>
                                @endif
                            </div>
                            <div class="col-md-12">
                                <div class="card ">
                                    <div class="card-body">
                                        <div class="col-lg-12">
                                            <table class="table w-100 data_table" >
                                                <thead>
                                                <tr>
                                                    <th>Date</th>
                                                    <th>Hours</th>
                                                    <th>Amount</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($list as $item)
                                                    <tr>
                                                        <td>{{ $item->created_at->format('d/m/Y') }}</td>
                                                        <td>{{ $item->hours }}</td>
                                                        <td>${{ $item->amount }}</td>
                                                    </tr>
                                                @endforeach

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
    <!-- DatePicker Js -->
