@extends('user.dashboard.layouts.main')

@section('title', 'Call')

@section('content')
    <!--------------MAin Setion------------------------->
    <section class=" bg-light" >
        <div class="container bg-light">
            <div class="row justify-content-center mb-2">
                <!-------------------------------------------------------------colloum2------------------------------------------->
                <div class="col-md-3 mt-2 bg-main  border-curve shadow-card overflow-hidden" style="height: 97vh;">
                    <div class="row bg-main p-3">
                        <div class="col-4">
                            <div class="text-center">
                                <img src="{{ asset('images/profileavatar.png') }}" width="40">
                            </div>
                        </div>
                        <div class="col-8">
                            <h4 class="text-white mt-2">John Doe</h4>
                        </div>
                    </div>

                   <div class="row bg-white pb-5">
                       <div class="col-md-12">
                           <div class="text-center">
                               <h1 class="mt-5 mb-5"  id="display">00:00:00</h1>
                               <img class="pointr"  src="{{ asset('images/resume.png') }}" width="40" onclick="Stopstart()">
                               <img class="ml-3 pointr" src="{{ asset('images/play (2).png') }}" width="60" id="startStop" onclick="startStop(  )">
                               <img class="ml-3 pointr" src="{{ asset('images/stop (2).png') }}" width="40"  id="reset" onclick="reset( )">
                           </div>
                       </div>
                   </div>
                   <div class="row " >
                       <div class="col-md-12">
                           <div class="container text-white">
                          <div class="row mt-3">
                              <div class="col-6">
                                  <div class="text-right">
                                      <h4 style="font-weight: 700 !important;" >Start Time</h4>
                                  </div>
                              </div>
                              <div class="col-6">
                                <div class="text-right">
                                    <h4  style="font-weight: 700 !important;">End Time</h4>
                                </div>
                              </div>
                          </div>
                          <div class="row mt-2 pb-2">
                            <div class="col-6">
                                <img src="{{ asset('images/VectorSmartObject.png') }}" width="15">
                                <span class="float-right mr-2">15:03:40</span>
                            </div>
                            <div class="col-6">
                              <div class="text-right">
                                  <h4 class="mr-2">15:03:40</h4>
                              </div>
                            </div>
                        </div>
                        <div class="row pt-2 pb-2" style="border-top: 1px solid white;">
                            <div class="col-6">
                                <img src="{{ asset('images/VectorSmartObject.png') }}" width="15">
                                <span class="float-right mr-2">15:03:40</span>
                            </div>
                            <div class="col-6">
                              <div class="text-right">
                                  <h4 class="mr-2">15:03:40</h4>
                              </div>
                            </div>
                        </div>
                        <div class="row pt-2 pb-2" style="border-top: 1px solid white;">
                            <div class="col-6">
                                <img src="{{ asset('images/VectorSmartObject.png') }}" width="15">
                                <span class="float-right mr-2">15:03:40</span>
                            </div>
                            <div class="col-6">
                              <div class="text-right">
                                  <h4 class="mr-2">15:03:40</h4>
                              </div>
                            </div>
                        </div>
                        </div>
                       </div>
                   </div>
                    <br>
                    <br>
                    <br>
                    <br>
        </div>
        <div class="col-md-5 mr-4 ml-4 mt-2   border-curve  overflow-hidden p-0"  >
                    <div class="row bg-main p-3">
                        <div class="col-3">
                            <div class="text-right">
                                <img src="{{ asset('images/profileavatar.png') }}" width="50" >
                            </div>
                        </div>
                        <div class="col-5">
                            <h4 class="text-white mt-3">John Doe</h4>
                        </div>
                        <div class="col-4">
                            <div class="text-right">
                            <a href="#"> <img class="mt-2 mr-3" src="{{ asset('images/fullscreen.png') }}" width="30"></a>
                            </div>
                        </div>
                    </div>
                    <div id="media-div" style="width: 100%; position:relative;">
                        <div id="my-div" style="position: absolute; bottom: 0; right: 0; margin: 20px; width: 100px;">
                        </div>
                    </div>
{{--                    <img class="img-fluid" src="images/videocallperson.png" width="auto" >--}}
                    <div class="row bg-main mt-5 mb-3 m-1" style="border-radius: 50px;">
                        <div class="col-12 ">
                            <div class="text-center">
                                <a href="#"> <img src="{{ asset('images/videodisabled.png') }}" width="60"></a>
                                <a href="#"><img src="{{ asset('images/audiodisabled.png') }}" width="60"></a>
                                <a href="#"><img src="{{ asset('images/call_end.png') }}" width="44"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mt-2 bg-white  border-curve shadow-card overflow-hidden"  style="height: 97vh;">
                    <div class="row bg-main p-3">
                        <div class="col-12">
                            <h4 class="text-white text-center mt-2">Chat</h4>
                        </div>
                    </div>
                    <div>
                        <!-------------1st msg-->
                        <div class="row justify-content-start p-1 mt-2 ">
                            <div class="col-10 padding-custom border-curve bg-light">
                                <h5 class="ml-3 mt-1">Hi, How are you</h5>
                            </div>
                        </div>
                        <div class="row">
                            <h6 class="ml-4 h7">09:20 AM</h6>
                        </div>
                        <!----------------2nd msg-->
                        <div class="row justify-content-end p-1 mt-2 ">
                            <div class="col-10 padding-custom  border-curve bg-light">
                                <h5 class="ml-3 mt-1">I am good how are you</h5>
                            </div>
                        </div>
                        <div class="row">
                            <h6 class="mr-4 ml-auto h7">09:22 AM</h6>
                        </div>
                        <!-------------3rd msg-->
                        <div class="row justify-content-start p-1 mt-2 ">
                            <div class="col-10 padding-custom border-curve bg-light">
                                <h5 class="ml-3 mt-1">a new message</h5>
                            </div>
                        </div>
                        <div class="row">
                            <h6 class="ml-4 h7">09:30 AM</h6>
                        </div>
                        <!----$th msg-->
                        <div class="row justify-content-end p-1 mt-2 ">
                            <div class="col-10 padding-custom border-curve bg-light">
                                <h5 class="ml-3 mt-1">a new message</h5>
                            </div>
                        </div>
                        <div class="row">
                            <h6 class="mr-4 ml-auto h7">09:30 AM</h6>
                        </div>

                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="row justify-content-center  mt-2 w-100  border-t pt-4 " style="position: absolute; bottom: 10px; ">
                        <div class="col-9 p-2">
                            <div class="input-group">
                                <textarea class="form-control comment-box   bg-card-1 p-1" style=" height: 2.1rem;"
                                    placeholder="Write a message here.." aria-label="With textarea"></textarea>
                            </div>
                        </div>
                        <div class="col-2 p-2">
                            <a href="#"><img src="{{ asset('images/send.png') }}" width="30"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://media.twiliocdn.com/sdk/js/video/v1/twilio-video.min.js"></script>
    <script>
        Twilio.Video.createLocalTracks({
            audio: true,
            video: { width: 640 }
        }).then(function(localTracks) {
            return Twilio.Video.connect('{{ $accessToken }}', {
                name: '{{ $roomName }}',
                tracks: localTracks,
                video: { width: 640 }
            });
        }).then(function(room) {
            console.log('Successfully joined a Room: ', room.name);

            room.participants.forEach(participantConnected);

            var previewContainer = document.getElementById(room.localParticipant.sid);

            if (!previewContainer || !previewContainer.querySelector('video')) {
                participantConnected(room.localParticipant);
            }

            room.on('participantConnected', function(participant) {
                console.log("Joining: '" +  participant.identity   +"'");
                participantConnected(participant);
            });

            room.on('participantDisconnected', function(participant) {
                console.log("Disconnected: '" +  participant.identity+   "'");
                participantDisconnected(participant);
            });
        });

        // additional functions will be added after this point
        function participantConnected(participant) {
            console.log('Participant "%s" connected', participant.identity);

            const div = document.createElement('div');
            div.id = participant.sid;
            div.setAttribute("style", "width:100%;");
            // div.innerHTML = "<div style='clear:both'>" +participant.identity +"</div>";

            participant.tracks.forEach(function(track) {
                trackAdded(div, track)
            });

            participant.on('trackAdded', function(track) {
                trackAdded(div, track)
            });
            participant.on('trackRemoved', trackRemoved);

            if(participant.identity != '{{ auth()->user()->email }}'){
                document.getElementById('media-div').appendChild(div);
            }else{
                document.getElementById('my-div').appendChild(div);
            }
        }
        function participantDisconnected(participant) {
            console.log('Participant "%s" disconnected', participant.identity);

            participant.tracks.forEach(trackRemoved);
            document.getElementById(participant.sid).remove();
        }
        function trackAdded(div, track) {
            div.appendChild(track.attach());
            var video = div.getElementsByTagName("video")[0];
            if (video) {
                video.setAttribute("style", "max-width:100%;");
            }
        }
        function trackRemoved(track) {
            track.detach().forEach( function(element) { element.remove() });
        }
    </script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
@endsection
