@extends('user.dashboard.layouts.main')

@section('title', 'Packages')

@section('css')
<style>
.packages {
  margin: 20px;
  height: auto;
  width: 300px;
  padding: 1.5em;
  background-color: #ffffff;
  border: 1px solid #e7e7e7;
  display: flex;
  flex-direction: column;
  align-items: center;
  text-align: center;
  border-radius: 20px;
  box-shadow: 0 19px 38px rgb(255 255 255), 0 15px 12px rgb(146 146 146 / 20%);
  flex-wrap: wrap;
  color: #69d2b1;
}
.list li {
  font-size: 16px;
  line-height: 20px;
  list-style: none;
  border-bottom: 1px solid #f4f4f4;
  padding-inline-start: 0;
  border-width: 1px;
  padding: 10px;
}
.first {
  margin-top: 20px;
  border-top: 1px solid #f4f4f4;
}
.list {
    width: 100%;
    display: contents;
}
.top {
  display: flex;
  flex-direction: column;
  align-items: center;
}
input,
label {
  display: inline-block;
  vertical-align: middle;
  margin: 10px 0;
}
.button {
  padding: 10px 30px;
  text-decoration: none;
  font-size: 1.4em;
  margin: 15px 15px;
  border-radius: 50px;
  color: #f4f4f4;
}
.pricing-button {
  color: white;
  background-color: black;
  font-weight: 600;
  font-size: 18px;
  margin-top: 10px;
  padding: 15px 40px 15px 40px;
  width: auto;
  height: auto;
  border-radius: 50px;
}
.pricing-button:hover {
  color: white;
  background-color: rgb(32, 32, 32);
}
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}
.switch input {
  opacity: 0;
  width: 0;
  height: 0;
}
.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #1e2321;
  -webkit-transition: 0.4s;
  transform: translate(0px, 0px);
  transition: 0.6s ease transform, 0.6s box-shadow;
}
.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: 0.4s;
  transition: 0.4s;
}
input:checked + .slider {
  background-color: #50bfe6;
}
input:focus + .slider {
  box-shadow: 0 0 1px #50bfe6;
}
input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}
.slider.round {
  border-radius: 34px;
}
.slider.round:before {
  border-radius: 50%;
}
.package-container {
  display: flex;
  align-items: center;
  justify-content: center;
  flex-wrap: wrap;
}
.pricing-title {
  font-size: 27px;
  color: #6c757d;
  font-weight: bold;
}
.pricing-head {
  font-size: 25px;
}

.pricing-text
{
  font-size: 27px !important;
  padding: 1.5rem !important;
  font-weight: bold;
}

.text1 {
  padding-top: 20px;
  padding-bottom: 20px;
  font-size: 20px;
}
.text2 {
  padding-top: 20px;
  padding-bottom: 20px;
  font-size: 20px;
}

</style>
@endsection
@section('content')
    <!----------------------------MAin Setion------------------------>
    <section>
        <div class="container-fluid ">

            <div class="row">
                <!---------------------------------------------------------Colloum 1-------------------------------------------->
                @include('user.dashboard.partials.sidebar')
                <!-------------------------------------------------------------colloum2------------------------------------------->
                <div class="col-md-8dot4">
                    <div class="container-fluid">
                        @include('components.header')
                        <!--------------------------------------------------------------1st card-------------------------->
                        <div class="row dashboard">
                            <section class="pricing mb-5">
                                <div class="container">
                                    <div class="pricing-head text-muted mb-3">
                                        Buy Package
                                    </div>
                                    <div class="row">
                                      <div class="col-md-12 text-center">
                                          <div class="package-container">
                                            @foreach($list as $item)
                                                <div class="packages card-help">
                                                    <div class="pricing-title pb-3">
                                                        {{ $item->name }}
                                                    </div>
                                                    <ul class="list text-center">
                                                        <li>{{ $item->hours }} - Hours<small></small></li>
                                                        <li class="pricing-text">${{ $item->total_amount }}</li>
                                                    </ul>
                                                    <p class="description mt-2" style="height: 30px;color:#6c757d;">{{ $item->description }}</p>
                                                    <a href="{{ route('student.buy.package', $item->id) }}" class="btn btn-theme btn-lg text-white">$ Purchase</a>
                                                </div>
                                            @endforeach
                                        </div>
                                      </div>
                                    </div>
                                </div> 
                            </section>
                        </div>
                        <br/>
                        <!---------------------------------------------------------------------------------Login detail tab-->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    <script src="{{ asset('dashboard/js/jquery-3.3.1.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="{{ asset('dashboard/js/jquery.steps.js')}}"></script>
    <script src="{{asset('dashboard/js/main.js')}}"></script>
    <script src="{{asset('dashboard/js/moment.min.js')}}"></script>
    <script src="{{ asset('dashboard/js/bootstrap-datetimepicker.min.js') }}"></script>
    <script src="{{asset('dashboard/js/bootstrap-multiselect.min.js')}}"></script>
    <!--steps-->
    <script>
        function check() {
    var checkBox = document.getElementById("checbox");
    var text1 = document.getElementsByClassName("text1");
    var text2 = document.getElementsByClassName("text2");
  
    for (var i = 0; i < text1.length; i++) {
      if (checkBox.checked == true) {
        text1[i].style.display = "block";
        text2[i].style.display = "none";
      } else if (checkBox.checked == false) {
        text1[i].style.display = "none";
        text2[i].style.display = "block";
      }
    }
  }
  check();
  
    </script>
@endsection
