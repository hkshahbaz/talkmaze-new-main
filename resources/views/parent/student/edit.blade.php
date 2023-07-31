@extends('user.dashboard.layouts.main')

@section('title', 'Coach Requests')

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        label{
            font-weight: bold;
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
                        @include('components.welcome_message')
                       <div class="row">
                            <div class="col-md-12 mt-3">
                                <h2 class="text-muted">Edit Student</h2>
                            </div>
                            <div class="col-lg-12 p-3">
                                <div class="card">
                                    <div class="card-body">
                                            <form action="{{ route('parent.student.save') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="id" value="{{ $student->id }}">
                                                <div id="1stnormal">
                                                    <div class="row justify-content-center mt-4 ">
                                                        <div class="col-md-12">
                                                            <div class="form-goup">
                                                                <label for="student_name">Student Name</label>
                                                                <input type="text" id="student_name" class="form-control" name="student_name" value="{{ $student->student_name }}" placeholder="Student Name">
                                                                @if($errors->has('student_name'))
                                                                    <span class="text-danger">{{ $errors->first('student_name') }}</span>
                                                                @endif
                                                            </div>  
                                                        </div>
                                                        <div class="col-md-12 mt-2">
                                                            <div class="form-goup">
                                                                <label for="student_dob">Student DOB</label>
                                                                <input type="text" class="form-control datepicker" id="student_dob" name="student_dob" value="{{ $student->student_dob }}" placeholder="Student DOB">
                                                                @if($errors->has('student_dob'))
                                                                    <span class="text-danger">{{ $errors->first('student_dob') }}</span>
                                                                @endif
                                                            </div>  
                                                        </div>
                                                    </div>
                                                </div>
                                                <button id="btn11" class="mt-5 mb-5 btn btn-lg btn-size center-btn"
                                                        >UPDATE
                                                </button>
                                            </form>
                                        
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

@endsection
@section('js')
 
@endsection
    <!-- DatePicker Js -->
