@extends('user.layouts.main')

@section('title', 'About us')

@section('content')
<!----------------------Nav Bar---------------------------->
@include('user.partials.navbar')
<script src="https://www.amcharts.com/lib/4/core.js"></script>
<script src="https://www.amcharts.com/lib/4/maps.js"></script>
<script src="https://www.amcharts.com/lib/4/geodata/worldLow.js"></script>
  <!--  -->
  <section class="hero-section">
    <div class="container text-center">
      <div class="row" style="margin-right: 0px!important;">
        <div class="col-lg-5 col-md-5 text-justify m-auto">
          <div class="  text-center">
            <h1 class="mt-2 text-uppercase text-white">Get to Know us </h1>
           <a href="#about"><button type="button" class="btn btn-dark text-uppercase mt-4 btn-darkblue">Read More</button></a>

          </div>
        </div>
        <div class="col-lg-7 col-md-7 m-auto">
          <div class="hub-img2">
            <img class="img-fluid mt-4 mb-4" src="images/ill-about.png" width="400">
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="about-us-sec mt-5 "  id="about">
    <div class="container">
      <div class="row">
        <div class="col-md-7">
          <h4 class="text-dark text-uppercase pb-2">About us</h4>
          <div class="inner2">&nbsp;</div>
            <p class="text-justify text-dark about-us-txt mt-5">Access to high quality public speaking and debate training is a luxury that is inaccessible to most students. We’re here to change the status quo. As the world’s first global online hub for public speaking and debate, we’re bringing together people together behind one common cause: empowerment.</p>
            <p class="text-justify text-dark about-us-txt mt-3">Regardless of where you are in your journey of public speaking, we are here for you. Our wide range of programs and resources make high quality training accessible, all from the comfort of your own home!</p>
            <p class="text-justify text-dark about-us-txt mt-3">The times of living in large cities and attending specific schools to access the best training are gone. Now, you can connect with experienced coaches and peers from anywhere in the world at any time.</p>
        </div>
        <div class="col-md-4 offset-md-1">
          <p class="text-center mt-5">
            <img src="images/about-us-concept-illustration_114360-639.jpg" width="80%">
          </p>
        </div>
      </div>
      <div class="row mt-3">
        <div class="col-md-7">
          <h4 class="text-dark text-underline text-uppercase pb-2">
            Our vision</h4>
            <div class="inner2">&nbsp;</div>
            <p class="font-weight-bold text-dark about-us-text mt-5 text-justify">A world where every student has access to communication skills training</p>
            <p class="text-justify text-dark about-us-txt mt-3">Did you know the fear of public speaking cuts wages by 10%? That’s a $6000 cut from a $60,000 potential salary! Don’t let your fear get in the way of you and let us help you conquer it together! </p>
            <p class="text-justify text-dark about-us-txt mt-3">TalkMaze originated in Canada and now has members from all around the world. We are focused on providing the best speaking and debating training platform. Our goal is to help you achieve your objectives, be it talking in front of your class at assembly, polishing your general speaking skills, or presenting that important pitch at work; your needs are our focus. Be it public speaking, all styles of debating, or Model United Nations, we are here to help.</p>
            <p class="text-justify text-dark about-us-txt mt-3">We saw an incredible discrepancy in resources available for speakers and debaters around the world. We know from experience just how important such skills are in the modern world. TalkMaze wants to make such skills accessible to all. Students, professionals, and anyone interested in broadening their horizons is welcome at TalkMaze.
                <br/><br/>
                <a href="{{ url('/register') }}" class="text-underlined"><u>Join now</u></a> to unlock your full potential.
            </p>
        </div>
        <div class="col-md-4 offset-md-1 m-auto">
          <p class="text-center mt-5">
            <img src="images/How-To-Do-Public-Speaking-Properly.jpg" width="90%">
          </p>
        </div>
      </div>
    {{--teacher's bio--}}
        <div class="row mt-3">
            <div class="col-md-12">
                <h4 class="text-dark text-underline text-uppercase pb-2">
                    Our Team</h4>
                <div class="inner2">&nbsp;</div>
                <br/>

                <div class="row">
                    @forelse($coaches as $user)
                        <div class="col m-3">
                            <div class="row justify-content-center">
                                <div style="height: 100px; width: 100px; overflow: hidden; border-radius: 50%" type="button" id="myPopover{{$user->id}}" data-container="body" data-toggle="popover" data-placement="top" data-content="{{ $user->bio }}">
                                    <img src="{{ $user->profile->image }}" width="100%" style="height:100%; object-fit:cover;">
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <p style="font-size: 0.6em;" class="text-muted mt-2">{{ $user->name }}</p>
                            </div>
                        </div>
                    @empty
                        <div class="col-9 bg-gold">
                            <p class="text-uppercase mt-2 mb-2">No member Found</p>
                        </div>
                    @endforelse
                </div>
            </div>

        </div>

        <div class="row mt-3">
            <div class="col-12">
                <h4 class="text-dark text-underline text-uppercase pb-2">
                    Where We Are Operating</h4>
                <div class="inner2">&nbsp;</div>
                <br/>
            </div>
            <div class="row justify-content-center text-center w-100 m-0 p-2">
{{--                <div>--}}
{{--                    <div style="display: inline-block; width: 20px; height: 20px; background-color:#60d0ac; "></div>&nbsp; In Available <div class="ml-4" style="display: inline-block; width: 20px; height: 20px; background-color:#03734f; "></div>&nbsp; Available--}}
{{--                </div>--}}
{{--                <img src="https://i.ya-webdesign.com/images/vector-pointers-world-map-2.png" width="100%">--}}
                <div id="chartdiv"></div>
                <p>We are always looking to grow our reach. Don't see your country on the map? Contact us to become a TalkMaze Ambassador in your region.</p>
            </div>
        </div>
    </div>
  </section>
<!----------------------Footer ---------------------------->
@include('user.partials.footer')

<!----------------------Copyright---------------------------->
@include('user.partials.copyright')

<style>
    #chartdiv {
        width: 100%;
        height: 98vh;
    }
</style>
<script>
    /**
     * ---------------------------------------
     * This demo was created using amCharts 4.
     *
     * For more information visit:
     * https://www.amcharts.com/
     *
     * Documentation is available at:
     * https://www.amcharts.com/docs/v4/
     * ---------------------------------------
     */

// Create map instance
    var chart = am4core.create("chartdiv", am4maps.MapChart);

    // Set map definition
    chart.geodata = am4geodata_worldLow;

    // Set projection
    chart.projection = new am4maps.projections.Miller();

    // Create map polygon series
    var polygonSeries = chart.series.push(new am4maps.MapPolygonSeries());

    // Make map load polygon (like country names) data from GeoJSON
    polygonSeries.useGeodata = true;

    // Configure series
    var polygonTemplate = polygonSeries.mapPolygons.template;
    polygonTemplate.tooltipText = "{name}";
    polygonTemplate.fill = am4core.color("#60d0ac");

    // Create hover state and set alternative fill color
    var hs = polygonTemplate.states.create("hover");
    hs.properties.fill = am4core.color("#60d0ac");

    // Remove Antarctica
    polygonSeries.exclude = ["AQ"];

    // Add some data
    polygonSeries.data = [{
        "id": "US",
        "name": "United States",
        "value": 100,
        "fill": am4core.color("#03734f")
    }, {
        "id": "CA",
        "name": "Canada",
        "value": 50,
        "fill": am4core.color("#03734f")
    }, {
        "id": "IE",
        "name": "Ireland",
        "value": 50,
        "fill": am4core.color("#03734f")
    },{
        "id": "PK",
        "name": "Pakistan",
        "value": 50,
        "fill": am4core.color("#03734f")
    },{
        "id": "BR",
        "name": "Brazil",
        "value": 50,
        "fill": am4core.color("#03734f")
    },{
        "id": "GB",
        "name": "United Kingdom",
        "value": 50,
        "fill": am4core.color("#03734f")
    },{
        "id": "KZ",
        "name": "Kazakhstan",
        "value": 50,
        "fill": am4core.color("#03734f")
    },{
        "id": "GH",
        "name": "Ghana",
        "value": 50,
        "fill": am4core.color("#03734f")
    },{
        "id": "MY",
        "name": "Malaysia",
        "value": 50,
        "fill": am4core.color("#03734f")
    },{
        "id": "PH",
        "name": "Philippines",
        "value": 50,
        "fill": am4core.color("#03734f")
    },{
        "id": "HR",
        "name": "Croatia",
        "value": 50,
        "fill": am4core.color("#03734f")
    },{
        "id": "DE",
        "name": "Germany",
        "value": 50,
        "fill": am4core.color("#03734f")
    },{
        "id": "HK",
        "name": "Hong Kong",
        "value": 50,
        "fill": am4core.color("#03734f")
    }];
     

    // Bind "fill" property to "fill" key in data
    polygonTemplate.propertyFields.fill = "fill";
</script>
 @foreach($coaches as $user)
    <script>
                         $(document).ready(function() {
                              $('#myPopover{{$user->id}}').popover();
                         });

                        </script>
 @endforeach

@endsection
