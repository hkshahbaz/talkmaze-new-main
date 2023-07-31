@extends('user.layouts.main')

@section('title', 'About us')

@section('content')
    <!----------------------Nav Bar---------------------------->
    @include('user.partials.navbar')
    <section>
        <div class="container-fluid ">
            <div class="row">
                <!---------------------------------------------------------Colloum 1-------------------------------------------->

            <!-------------------------------------------------------------colloum2------------------------------------------->
                <div class="col-md-8dot4">
                    <div class="container-fluid mt-3">
                        <div class="row justify-content-center">
                            <div class="col-md-4 m-1">
                                <div class="row mt-3 ">
                                    <select class="form-control shadow-card border-curve" onChange="nextpagefilt(this.value)">
                                        <option value="">All Coaches</option>
                                        <option value="1" @if(isset($type) && $type == 1) {{ 'selected' }} @endif>Bronze</option>
                                        <option value="2" @if(isset($type) && $type == 2) {{ 'selected' }} @endif>Silver</option>
                                        <option value="3" @if(isset($type) && $type == 3) {{ 'selected' }} @endif>Gold</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 m-1">
                                <div class="row mt-3 ">
                                    <select class="form-control shadow-card border-curve" onChange="nextpage(this.value)">
                                        <option value="">Please Select Timezone</option>
                                        <option value="0" @if(isset($time) && $time == "0") {{ 'selected' }} @endif>GMT 0</option>
                                        <option value="+1" @if(isset($time) && $time == "+1") {{ 'selected' }} @endif>GMT +1</option>
                                        <option value="+2" @if(isset($time) && $time == "+2") {{ 'selected' }} @endif>GMT +2</option>
                                        <option value="+3" @if(isset($time) && $time == "+3") {{ 'selected' }} @endif>GMT +3</option>
                                        <option value="+4" @if(isset($time) && $time == "+4") {{ 'selected' }} @endif>GMT +4</option>
                                        <option value="+5" @if(isset($time) && $time == "+5") {{ 'selected' }} @endif>GMT +5</option>
                                        <option value="+6" @if(isset($time) && $time == "+6") {{ 'selected' }} @endif>GMT +6</option>
                                        <option value="+7" @if(isset($time) && $time == "+7") {{ 'selected' }} @endif>GMT +7</option>
                                        <option value="+8" @if(isset($time) && $time == "+8") {{ 'selected' }} @endif>GMT +8</option>
                                        <option value="+9" @if(isset($time) && $time == "+9") {{ 'selected' }} @endif>GMT +9</option>
                                        <option value="+10" @if(isset($time) && $time == "+10") {{ 'selected' }} @endif>GMT +10</option>
                                        <option value="+11" @if(isset($time) && $time == "+11") {{ 'selected' }} @endif>GMT +11</option>
                                        <option value="+12" @if(isset($time) && $time == "+12") {{ 'selected' }} @endif>GMT +12</option>
                                        <option value="-1" @if(isset($time) && $time == "-1") {{ 'selected' }} @endif>GMT -1</option>
                                        <option value="-2" @if(isset($time) && $time == "-2") {{ 'selected' }} @endif>GMT -2</option>
                                        <option value="-3" @if(isset($time) && $time == "-3") {{ 'selected' }} @endif>GMT -3</option>
                                        <option value="-4" @if(isset($time) && $time == "-4") {{ 'selected' }} @endif>GMT -4</option>
                                        <option value="-5" @if(isset($time) && $time == "-5") {{ 'selected' }} @endif>GMT -5</option>
                                        <option value="-6" @if(isset($time) && $time == "-6") {{ 'selected' }} @endif>GMT -6</option>
                                        <option value="-7" @if(isset($time) && $time == "-7") {{ 'selected' }} @endif>GMT -7</option>
                                        <option value="-8" @if(isset($time) && $time == "-8") {{ 'selected' }} @endif>GMT -8</option>
                                        <option value="-9" @if(isset($time) && $time == "-9") {{ 'selected' }} @endif>GMT -9</option>
                                        <option value="-10" @if(isset($time) && $time == "-10") {{ 'selected' }} @endif>GMT -10</option>
                                        <option value="-11" @if(isset($time) && $time == "-11") {{ 'selected' }} @endif>GMT -11</option>
                                        <option value="-12" @if(isset($time) && $time == "12") {{ 'selected' }} @endif>GMT -12</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3 m-1">
                                <div class="row mt-3 ">
                                    <form>
                                        <input class="margin-search top-search-bar3" type="text" name="search" style="margin-left:0!important;"
                                               placeholder="Search..." style="width: 100%;" value="@if(isset($search)) {{ $search }} @endif">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container ">
                        <br/>
                        <!--------------------------------------------------------------1st card-------------------------->
                        @foreach($tuts as $tut)
                            <div class="row mt-3">
                                <div class="container">
                                    <div class="bg-white shadow-card" style="border-radius: 14px; overflow: hidden;">
                                        <div class="row p-0">
                                            <div class="col-md-2">
                                                <div style="height: 120px; overflow: hidden;">
                                                    <img src="{{ $tut->profile->image }}" width="100%" height="100%" style="object-fit: cover;">
                                                </div>

                                            </div>
                                            <div class="col-md-auto col-sm-12 p-2 m-auto">
                                                @if($tut->type == 1)
                                                    <img src="{{ asset('images/Layer 2.png') }}" width="25px" />
                                                    <h6 class="m-auto text-center text-muted mt-2">Bronze</h6>
                                                @elseif($tut->type == 2)
                                                    <img src="{{ asset('images/Layer 3.png') }}" width="25px" />
                                                    <h6 class="m-auto text-center text-muted mt-2">Silver</h6>
                                                @else
                                                    <img src="{{ asset('images/Layer 4.png') }}" width="25px" />
                                                    <h6 class="m-auto text-center text-muted mt-2">Gold</h6>
                                                @endif
                                            </div>
                                            <div class="col-md-auto col-sm-12 p-2 m-auto">
                                                <h4 class="text-center font-weight-bold mt-2">{{ $tut->name }}</h4>
                                                <h6 class="text-center text-muted"><b>Timezone</b> : GMT {{ $tut->timezone }}</h6>
                                            </div>

                                            <div class="col-md-3 col-sm-12 p-2 m-auto">
                                                <h4 class="text-center font-weight-bold mt-2">{{$tut->name}}'s Bio</h4>
                                                @if($tut->bio)<h6 class="text-center">{{ substr($tut->bio,0,30) }}....<a data-toggle="modal" data-target="#detailmodel{{ $tut->id }}" href="#">Read More</a></h6>@endif
                                            </div>
                                            {{--                                            <div class="col-md-auto p-4">--}}
                                            {{--                                                <div class="text-center mt-3" style="font-size: 12px;">--}}
                                            {{--                                                    <span class="fa-star {{ ($tut->avg('rating') >= 1) ? 'fas':'far' }}" ></span>--}}
                                            {{--                                                    <span class="fa-star {{ ($tut->avg('rating') >= 2) ? 'fas':'far' }}"></span>--}}
                                            {{--                                                    <span class="fa-star {{ ($tut->avg('rating') >= 3) ? 'fas':'far' }}"></span>--}}
                                            {{--                                                    <span class="fa-star {{ ($tut->avg('rating') >= 4) ? 'fas':'far' }}"></span>--}}
                                            {{--                                                    <span class="fa-star {{ ($tut->avg('rating') >= 5) ? 'fas':'far' }}"></span>--}}
                                            {{--                                                    <span>{{ floor($tut->avg('rating')) }}.0</span>--}}
                                            {{--                                                    <br>--}}
                                            {{--                                                    <span>{{ $tut->rating_count }} People Rated</span>--}}
                                            {{--                                                </div>--}}
                                            {{--                                            </div>--}}
                                            <div class="col-md-auto p-3 pr-4 m-auto">

                                                <div class="text-center">


                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="modal fade" id="detailmodel{{ $tut->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h2 class="modal-title" id="exampleModalLabel">{{$tut->name}}'s Bio</h2>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body text-left">
                                            <p>{{ $tut->bio }}</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <script>
                            var typeu = '';
                            function changeurl(type){
                                if(type === 1){
                                    typeu = 'bronze';
                                }
                                if(type === 2){
                                    typeu = 'silver';
                                }
                                if(type === 3){
                                    typeu = 'gold';
                                }

                            }
                            function goupgrade(){
                                //price-table
                                window.location.replace('{{ url("/private-coaching") }}'+'?type='+typeu+'&from=dashboard&data_id={{ $id }}'+"#price-table")
                            }
                        </script>
                        <br/>
                        <div class="modal fade" id="upgradeplan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h2 class="modal-title" id="exampleModalLabel">Upgrade plan</h2>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body text-left">
                                        <p>The Plan you have subscribed to does not support this coach please upgrade your plan and try again! Thank You</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button onclick="goupgrade()" class="btn btn-secondary">Upgrade</button>
                                        <button type="button" class="btn btn-dander" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!---------------------------------------------------------------------------------Login detail tab-->
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('user.partials.footer')

    <!----------------------Copyright---------------------------->
    @include('user.partials.copyright')

@endsection