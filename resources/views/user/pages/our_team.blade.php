@extends('user.layouts.main')

@section('title', 'About us')

@section('content')
    <!----------------------Nav Bar---------------------------->
    @include('user.partials.navbar')

    <section class="about-us-sec mt-5 "  id="about">
        <!-- Page Content -->
        <div class="container">
            <style>
                a {
                    color: #0254EB
                }
                a:visited {
                    color: #0254EB
                }
                a.morelink {
                    text-decoration:none;
                    outline: none;
                }
                span {
                    color: #000000 !important;
                }
                .morecontent span {
                    display: none;
                }

                /*.square {*/
                /*    position: relative;*/
                /*    width: 300px;*/
                /*    height: 300px;*/
                /*    overflow: hidden;*/
                /*}*/
                /*.square img {*/
                /*    position: absolute;*/
                /*    max-width: 100%;*/
                /*    width: 100%;*/
                /*    height: auto;*/
                /*    top: 50%;*/
                /*    left: 50%;*/
                /*    transform: translate( -50%, -50%);*/
                /*    padding-left: 45px;*/
                /*}*/
                /*.square img.landscape {*/
                /*    height: 100%;*/
                /*    width: auto;*/
                /*}*/

                .shadow img {
                    max-width: 100%;
                    height: 250px;
                    object-fit:cover;
                    object-position:50% 50%;
                }

            </style>

            @foreach ($coaches as $data)
                <div class="row">
                @foreach ($data as $coach)
                        <!-- Team Member 1 -->
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-0 shadow">
                                <div class="square"><img src="{{ $coach->profile->image }}" class="card-img-top" alt="..." style=""></div>

                                <div class="card-body text-center">
                                    <h3 class="card-title mb-0">{{ $coach->name }}</h3>
                                    <div class="card-text text-black-50">{{ ucwords($coach->role) }}</div>
                                    <p class="comment more">{{ $coach->bio}}
                                    </p>
                                </div>
                            </div>
                        </div>

                @endforeach
                </div>
            @endforeach
            <!-- /.row -->

        </div>
        <!-- /.container -->
    </section>

    @include('user.partials.footer')

    <!----------------------Copyright---------------------------->
    @include('user.partials.copyright')
    <script>
        $(document).ready(function() {
            var showChar = 100;
            var ellipsestext = "...";
            var moretext = "more";
            var lesstext = "less";
            $('.more').each(function() {
                var content = $(this).html();

                if(content.length > showChar) {

                    var c = content.substr(0, showChar);
                    var h = content.substr(showChar-1, content.length - showChar);

                    var html = c + '<span class="moreellipses">' + ellipsestext+ '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext + '</a></span>';

                    $(this).html(html);
                }

            });

            $(".morelink").click(function(){
                if($(this).hasClass("less")) {
                    $(this).removeClass("less");
                    $(this).html(moretext);
                } else {
                    $(this).addClass("less");
                    $(this).html(lesstext);
                }
                $(this).parent().prev().toggle();
                $(this).prev().toggle();
                return false;
            });
        });
    </script>
@endsection

