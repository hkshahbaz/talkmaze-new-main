@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Error!</div>

                    <div class="card-body">
                            <div class="alert alert-success" role="alert">
                                Whoops, looks like something went wrong. Sorry for the inconvenience.<br>
                                Please click <a href="{{url('/home')}}">here</a> to go back to home page.
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
