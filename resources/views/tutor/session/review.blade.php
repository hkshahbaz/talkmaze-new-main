@extends('user.dashboard.layouts.main')

@section('title', 'Profile')
@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/rating_star.css') }}">
@endsection
@section('content')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-----------------------MAin Setion----------------------------->
    <section>
        <div class="container-fluid ">
            <div class="row">
                <!---------------------------------------------------------Colloum 1-------------------------------------------->
                @include('user.dashboard.partials.sidebar')
                <!-------------------------------------------------------------colloum2------------------------------------------->
                <div class="col-md-8dot4 bg-light">
                    <br/>
                    @if(Session::has('success'))
                        <div class="alert alert-primary" role="alert">
                            User Updated successfuly
                        </div>
                    @elseif(Session::has('error'))
                        <div class="alert alert-danger" role="alert">
                            {{ Session::get('error') }}
                        </div>
                    @endif
                    <!---------------------------------------------------------------------------------Login detail tab-->
                    <section>
                        <div class="container">
                            <div class="row justify-content-center " style="margin-top: 4rem;">
                                <div class="col-lg-12 mb-3 text-center  ">
                                    <h3 class="text-center text-muted">Review Your Session</h3>
                                </div>
                            </div>
                            <form action="{{ route('tutor.session.review.save') }}" method="POST">
                                @csrf
                                <input type="hidden" name="session_id" value="{{ $id }}">
                                <div id="1stnormal">
                                    <div class="row justify-content-center mt-4 ">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="rating">Rate your session</label>
                                                <input type="hidden" class="form-control" id="rating">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <fieldset class="rating">
                                                    <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                                                    <input type="radio" id="star4half" name="rating" value="4.5" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                                                    <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                                                    <input type="radio" id="star3half" name="rating" value="3.5" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                                                    <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
                                                    <input type="radio" id="star2half" name="rating" value="2.5" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                                                    <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                                                    <input type="radio" id="star1half" name="rating" value="1.5" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                                                    <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                                                    <input type="radio" id="starhalf" name="rating" value="0.5" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-md-12">
                                            @if($errors->has('rating'))
                                                <span class="text-danger">{{ $errors->first('rating') }}</span>
                                            @endif
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="my-3">Review</label>
                                                <textarea class="form-control" rows="8" name="review" placeholder="Review here.."></textarea>
                                                @if($errors->has('review'))
                                                    <span class="text-danger">{{ $errors->first('review') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            
                                <button id="btn11" class="mt-5 mb-5 btn btn-lg btn-size center-btn"
                                        >Submit
                                </button>
                            </form>
                            <br>
                            <br>
                            <br>
                        </div>
                    </section>




                </div>
            </div>
        </div>
    </section>

    <!-- image validate  -->
@endsection
@section('js')



@endsection