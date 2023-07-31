@extends('user.dashboard.layouts.main')

@section('title', 'Call')

@section('content')

    <div class="container-fluid p-0">
        <div class="row h-100 m-0 p-0">
            <div class="col m-0 p-0">
                <i class="fas fa-comment text-white" style="position: absolute;top: 0;right: 0;z-index: 9999;margin: 20px; font-size:24px;cursor:pointer;" onclick="onclosechat()"></i>
                @if($allusers)<i class="fas fa-users text-white" style="position: absolute;top: 0;right: 5%; z-index: 9999;margin: 20px; font-size:24px;cursor:pointer;" data-toggle="modal" data-target="#exampleModalenrol"></i>@endif
                
                <div id="media-div" style="width: 100%; position:relative;height: 100vh; background-color: black;" onmouseover="showicons()" onmouseout="hideicons()">
                    <div style="height: 100%;" id="deletable">
                        <div class="overlayop" style="position: absolute; width: 100%; height: 100%; background-color: black;opacity: 0.3">

                        </div>
                        <div class="row justify-content-center align-items-center h-100 p-0 m-0">
                            <span class="display-4 text-white" style="z-index: 999">Waiting For Partner To Join....</span>
                        </div>
                        <!--<div class="row justify-content-center align-items-center p-0 m-0" id="topicons" style="position:absolute; top: 0; width: 100%; height: 100px;display:block;">
                            <h3 class="text-white">Mute Partner's Audio</h3>
                            <div class="col-auto">
                                 <img src="{{ asset('/images/audioenable.png') }}" id="partaudbtn" onclick="mute_one(big_sid)" style="cursor: pointer">
                            </div>
                            <div class="col-auto">
                                <img src="{{ asset('/images/audioenable.png') }}" id="partaudbtn" onclick="mute_all()" style="cursor: pointer">
                            </div>
                        </div>-->
                        <div class="row justify-content-center align-items-center p-0 m-0" id="bottomicons" style="position:absolute; bottom: 20%; width: 100%; height: 100px;">
                            <div class="col-auto">
                                <img src="{{ asset('/images/videoenable.png') }}" id="vidbtn" onclick="unmute_mute_video()" style="cursor: pointer">
                            </div>
                            <div class="col-auto">
                                <img src="{{ asset('/images/audioenable.png') }}" id="audbtn" onclick="unmute_mute()" style="cursor: pointer">
                            </div>
                            <div class="col-auto">
                                <img src="{{ asset('/images/call_end.png') }}" id="callhang" onclick="window.close();" style="cursor: pointer">
                            </div>
                            
                        </div><input id="running" hidden value="no"/>
                    </div>
                    <div id="my-div" class="row p-0 m-0 w-100 justify-content-end p-3" style="z-index: 999;position: absolute; bottom: 0; right: 0; margin: 20px; background-color: black; height:170px;">
                    </div>
                </div>
            </div>
            <div class="col-md-4" id="chatpan">
                <div class="row justify-content-center" style="background-color: #69d2b1; padding: 15px;">
                    @if(!$group)
                        <div class="col-auto">
                            <div style="width: 35px; height: 35px; border-radius: 50%; overflow: hidden;">
                                <img style="object-position: center; object-fit: cover;" width="100%" height="100%" src="{{ $user->profile->image }}">
                            </div>
                        </div>
                        <div class="col">
                            <p class="mt-auto text-white m-0 p-0" style="font-weight: bold">{{ $user->name }}</p>
                            <p class="mt-auto text-white m-0 p-0" style="font-size: 11px;">Coaching Session</p>
                            <!--<i class="fas fa-comment text-white" style="float:right;" onclick="onclosechat()"></i>-->
                        </div>
                    @else
                        <div class="col">
                            <p class="mt-auto text-white m-0 p-0" style="font-weight: bold; float:left">Group Coaching Session</p>
                            <!--<i class="fas fa-comment text-white" style="float:right;" onclick="onclosechat()"></i>-->
                        </div>
                    @endif
                </div>
                <div class="row p-0 m-0" style="overflow-y: scroll; height: 90vh;position: relative; background-color: white;">
                    <div class="container mb-5" id="messeghere">

                    </div>
                    <hr/>
                </div>
                <div style="position: absolute; left: 0; bottom: 0; width: 100%; padding: 10px; background-color: white; z-index: 999" class="row p-2 m-0">
                    <div class="col-md-1 col-sm-1 mr-2">
                        <input id="filesnd" type="file" hidden>
                        <button onclick="$('#filesnd').click()" style="border: none; background-color: transparent;"><img src="{{ asset('images/plus.png') }}" width="30"></button>
                    </div>
                    <div class="col-md-9 col-sm-9">
                        <div class="input-group">
                                <textarea class="form-control comment-box   bg-card-1 p-1" style=" height: 2.1rem;"
                                          placeholder="Write a message here.." aria-label="With textarea" id="messagbox"></textarea>
                        </div>
                    </div>
                    <div class="col-md-1 col-sm-1">
                        <a href="javascript:send()"><img src="{{ asset('images/send.png') }}" width="30"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if($allusers)
    <div class="modal fade" id="exampleModalenrol" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h2 class="modal-title" id="exampleModalLabel">Group Members </h2>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <form action="{{ route('create.group') }}" method="POST">
                                                    <div class="modal-body">
                                                        @forelse($allusers as $user)
                                                            <ul>
                                                                <li>{{ $user->name }}</li>
                                                            </ul>
                                                        @empty
                                                            <div class="row justify-content-center" style="display:flex; align-items:center;">
                                                                <p class="text-muted">No Enrollments Yet!</p>
                                                            </div>
                                                        @endforelse
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        @endif
    <!--------------MAin Setion------------------------->

    <script src="https://media.twiliocdn.com/sdk/js/video/v1/twilio-video.min.js"></script>
    <script>
        var roomkll;
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
            roomkll = room
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

        function unmute_mute_video() {
            var localParticipant = roomkll.localParticipant;
            localParticipant.videoTracks.forEach(function (videoTracks) {
                if ( videoTracks.isEnabled == true ) {
                    videoTracks.disable();
                    $('#vidbtn').attr("src", "{{ asset('/images/videodisabled.png') }}");
                } else {
                    videoTracks.enable();
                    $('#vidbtn').attr("src", "{{ asset('/images/videoenable.png') }}");
                }
            });
        }

        function unmute_mute() {
            var localParticipant = roomkll.localParticipant;
            localParticipant.audioTracks.forEach(function (audioTrack) {
                if ( audioTrack.isEnabled == true ) {
                    audioTrack.disable();
                    $('#audbtn').attr("src", "{{ asset('/images/audiodisabled.png') }}");
                } else {
                    audioTrack.enable();
                    $('#audbtn').attr("src", "{{ asset('/images/audioenable.png') }}");
                }
            });

        }
        
        
        function mute_all() {
            var isMuted = $('#partaudbtn').attr("data-isMuted");
            console.log(isMuted);
            if(isMuted == 'false') {
            roomkll.participants.forEach(participant => {
                participant.tracks.forEach(publication => {
                    if(publication.kind == 'audio') {
                        publication.mediaStreamTrack.enabled = false;
                        $('#partaudbtn').attr("src", "{{ asset('/images/audiodisabled.png') }}");
                    }
                    console.log(publication);
                });
              
             });
             $('#partaudbtn').attr("data-isMuted", 'true');
             } else {
                 console.log('else');
                 unmute_all();
             }
        }
        
        
        
         function unmute_all() {
             console.log('unmute');
             roomkll.participants.forEach(participant => {
                 participant.tracks.forEach(publication => {
                     if(publication.kind == 'audio') {
                         publication.mediaStreamTrack.enabled = true;
                         $('#partaudbtn').attr("src", "{{ asset('/images/audioenable.png') }}");
                     }
                     console.log(publication);
                 });
              
             });
             $('#partaudbtn').attr("data-isMuted", 'false');
            
         }
         
         function mute_unmute_individual(sid) {
             var isMuted = $(".mute_individual[data-participantid='" + sid + "']").attr("data-isMuted");
             if(isMuted == 'false') {
                roomkll.participants.forEach(participant => {
                    if(participant.sid == sid) {
                        participant.tracks.forEach(publication => {
                            if(publication.kind == 'audio') {
                                publication.mediaStreamTrack.enabled = false;
                                $(".mute_individual[data-participantid='" + sid + "']").attr("src", "{{ asset('/images/audiodisabled.png') }}");
                                $(".mute_individual[data-participantid='" + sid + "']").attr("data-isMuted", "true");
                            }
                        });
                    }
              
                });
            } else {
                unmute_individual(sid);
            }
         }
         
         function unmute_individual(sid) {
             roomkll.participants.forEach(participant => {
                 if(participant.sid == sid) {
                     participant.tracks.forEach(publication => {
                         if(publication.kind == 'audio') {
                             publication.mediaStreamTrack.enabled = true;
                             $(".mute_individual[data-participantid='" + sid + "']").attr("src", "{{ asset('/images/audioenable.png') }}");
                                $(".mute_individual[data-participantid='" + sid + "']").attr("data-isMuted", "false");
                         }
                     });
                 }
             });
         }

        // function mute_all(){
        //     roomkll.participants.forEach(participant => {
        //         participant.audioTracks.forEach(function (audioTrack) {
        //             if ( audioTrack.isEnabled == true ) {
        //                 audioTrack.disable();
        //                 $('#audbtn').attr("src", "{{ asset('/images/audiodisabled.png') }}");
        //             } else {
        //                 audioTrack.enable();
        //                 $('#audbtn').attr("src", "{{ asset('/images/audioenable.png') }}");
        //             }
        //         });
        //     })
        // }
        // function mute_one(sid){
        //     roomkll.participants.forEach(participant => {
        //         console.log(participant.sid);
        //         if(participant.sid === sid){
        //             alert('matched')
        //             participant.audioTracks.forEach(function (audioTrack) {
        //                 if ( audioTrack.isEnabled == true ) {
        //                     audioTrack.disable();
        //                     $('#partaudbtn').attr("src", "{{ asset('/images/audiodisabled.png') }}");
        //                 } else {
        //                     audioTrack.enable();
        //                     $('#partaudbtn').attr("src", "{{ asset('/images/audioenable.png') }}");
        //                 }
        //             });
        //         }
        //     })
        // }

        var big_sid = '';
        function screenclicked(sid){
            big_sid = sid;
            let elo = document.getElementById(sid)
            var elements = document.getElementById('deletable').children
            elements.item(2)
            document.getElementById('my-div').appendChild(elements.item(2))
            document.getElementById('deletable').appendChild(elo)
        }
        var responsey;
        
        function getnames(email){
            return $.ajax({
                url:"{{ url('/get-user-email') }}/"+email,
                method:'GET',
                success:function(response){
                    return response
                    // return(response)
                    // div.innerHTML = "<div style='position:absolute; top:0; left:0;color:white'>" + response +"</div>";
                },
                error:function(error){
                    return email
                    // div.innerHTML = "<div style='position:absolute; top:0; left:0;color:white'>" + participant.identity +"</div>";
                    // return(email)
                }
            })
        }
        
        
        // additional functions will be added after this point
        async function participantConnected(participant) {
            console.log('Participant "%s" connected', participant.identity);

            const div = document.createElement('div');
            div.id = participant.sid;
            div.setAttribute("style", "width:100%; height:100%; display:inline-block; position:relative;");
            div.setAttribute("class", "col");
            let name = await getnames(participant.identity)
            console.log(name);
            
            div.innerHTML = "<div style='position:absolute; top:0; left:0;color:white'>" + name +"</div>";
            
            participant.tracks.forEach(function(track) {
                trackAdded(div, track)
            });

            participant.on('trackAdded', function(track) {
                trackAdded(div, track)
            });
            participant.on('trackRemoved', trackRemoved);

            if(participant.identity != '{{ auth()->user()->email }}' && document.getElementById('running').value === 'no'){
                document.getElementById('deletable').innerHTML = ''
                document.getElementById('deletable').innerHTML= `<div id="bottomicons" class="row justify-content-center align-items-center p-0 m-0" style="position:absolute; bottom: 20%; width: 100%; height: 100px; z-index:9999;">
                            <div class="col-auto">
                                <img src="{{ asset('/images/videoenable.png') }}" id="vidbtn" onclick="unmute_mute_video()" style="cursor: pointer">
                            </div>
                            <div class="col-auto">
                                <img src="{{ asset('/images/audioenable.png') }}" id="audbtn" onclick="unmute_mute()" style="cursor: pointer">
                            </div>
                            <div class="col-auto">
                                <img src="{{ asset('/images/call_end.png') }}" id="callhang" onclick="window.close()" style="cursor: pointer">
                            </div>
                        </div><input id="running" hidden value="yes"/>`
                        big_sid = participant.sid;
                        div.setAttribute('onclick',"screenclicked('"+participant.sid+"')")
                document.getElementById('deletable').appendChild(div);
                $('#topicons').hide()
                $('#bottomicons').hide()
            }else{
                div.setAttribute('onclick',"screenclicked('"+participant.sid+"')")
                document.getElementById('my-div').appendChild(div);
                $('#topicons').hide()
                $('#bottomicons').hide()
            }
        }


        function participantDisconnected(participant) {
            @if($host)
                if(participant.identity === '{{$host->email}}'){
                    window.close();
                }
            @endif
            console.log('Participant "%s" disconnected', participant.identity);
            participant.tracks.forEach(trackRemoved);
            document.getElementById(participant.sid).remove();
            if(roomkll.participants.size <1){
                let x = `<div class="overlayop" style="position: absolute; width: 100%; height: 100%; background-color: black;opacity: 0.3">

                    function getnames(){
                    $.ajax({
                url:"{{ url('/get-user-email') }}/"+participant.identity,
                method:'GET',
                success:function(response){
                    div.innerHTML = "<div style='position:absolute; top:0; left:0;color:white'>" + response +"</div>";
                },
                error:function(error){
                    div.innerHTML = "<div style='position:absolute; top:0; left:0;color:white'>" + participant.identity +"</div>";
                }
            })</div>
                        <div class="row justify-content-center align-items-center h-100">
                            <span class="display-4 text-white" style="z-index: 999">Waiting For Partner To Join....</span>
                        </div>`
                document.getElementById('deletable').innerHTML = x
            }else{
                var allop = document.getElementById('deletable').children
                console.log(allop.item(2))

                if(allop.item(2) === null){
                    if(document.getElementById('my-div').firstChild.id === roomkll.localParticipant.sid){
                        document.getElementById('deletable').innerHTML =''
                        document.getElementById('deletable').innerHTML= `<div class="row justify-content-center align-items-center p-0 m-0" style="position:absolute; bottom: 20%; width: 100%; height: 100px; z-index:999;">
                                    <div class="col-auto">
                                        <img src="{{ asset('/images/videoenable.png') }}" id="vidbtn" onclick="unmute_mute_video()" style="cursor: pointer">
                                    </div>
                                    <div class="col-auto">
                                        <img src="{{ asset('/images/audioenable.png') }}" id="audbtn" onclick="unmute_mute()" style="cursor: pointer">
                                    </div>
                                    <div class="col-auto">
                                        <img src="{{ asset('/images/call_end.png') }}" id="callhang" onclick="window.close()" style="cursor: pointer">
                                    </div>
                                </div><input id="running" hidden value="yes"/>`
                        document.getElementById('deletable').appendChild(document.getElementById('my-div').lastChild)
                    }else{
                        document.getElementById('deletable').innerHTML =''
                        document.getElementById('deletable').innerHTML= `<div class="row justify-content-center align-items-center p-0 m-0" style="position:absolute; bottom: 20%; width: 100%; height: 100px; z-index:999;">
                                    <div class="col-auto">
                                        <img src="{{ asset('/images/videoenable.png') }}" id="vidbtn" onclick="unmute_mute_video()" style="cursor: pointer">
                                    </div>
                                    <div class="col-auto">
                                        <img src="{{ asset('/images/audioenable.png') }}" id="audbtn" onclick="unmute_mute()" style="cursor: pointer">
                                    </div>
                                    <div class="col-auto">
                                        <img src="{{ asset('/images/call_end.png') }}" id="callhang" onclick="window.close()"onclick="window.close()" style="cursor: pointer">
                                    </div>
                                </div><input id="running" hidden value="yes"/>`
                        //         console.log(document.getElementById('my-div').firstChild)
                        document.getElementById('deletable').appendChild(document.getElementById('my-div').children[0])
                    }
                }
            }
        }
        function trackAdded(div, track) {
            
            div.appendChild(track.attach());
            var video = div.getElementsByTagName("video")[0];
            if (video) {
                video.setAttribute("style", "width:100%; height:100%;");
            }
        }
        function trackRemoved(track) {
            track.detach().forEach( function(element) { element.remove() });
        }
    </script>

    <script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>
    <script>
        $('#filesnd').click(function() {
            $('.btn').prop('disabled', false);
            $('#filesnd').change(function() {
                var filename = $('#filesnd').val();
                if (filename.substring(3,11) == 'fakepath') {
                    filename = filename.substring(12);
                } // For Remove fakepath
                $('#messagbox').val(filename);
            });
        });

        var input = document.getElementById("messagbox");

        // Execute a function when the user releases a key on the keyboard
        input.addEventListener("keyup", function(event) {
            // Number 13 is the "Enter" key on the keyboard
            if (event.keyCode === 13) {
                // Cancel the default action, if needed
                event.preventDefault();
                // Trigger the button element with a click
                send()
            }
        });
        // message sending code
        function send() {
            let data;
            if( document.getElementById("filesnd").files.length == 0 ) {
                data = {
                    type: 1,
                    session_id: '{{ $session_id }}',
                    receiver_id: '{{ $user->id }}',
                    message: $("#messagbox").val(),
                    _token: '{{ csrf_token() }}'
                }
                $.ajax({
                    url:'{{ route('send.message') }}',
                    method:'POST',
                    data: data,
                    success:function (data) {
                        $('#filesnd').val('');
                        $("#messagbox").val('');
                    },
                    error:function (error) {
                        console.log(error)
                    }
                })
            }else{
                data = new FormData();
                jQuery.each(jQuery('#filesnd')[0].files, function(i, file) {
                    data.append('file', file);
                });
                data.append('type', 2);
                data.append('session_id', '{{ $session_id }}');
                data.append('receiver_id', '{{ $user->id }}');
                data.append('_token', '{{ csrf_token() }}');
                $.ajax({
                    url:'{{ route('send.message') }}',
                    method:'POST',
                    data: data,
                    cache : false,
                    contentType: false,
                    processData: false,
                    success:function (data) {
                        $('#filesnd').val('');
                        $("#messagbox").val('');
                    },
                    error:function (error) {
                        console.log(error)
                    }
                })
            }
            console.log(data)
        }

        function fetchmsg() {
            $.ajax({
                url:'{{ route('get.message') }}',
                method:'POST',
                data: {
                    type: 1,
                    session_id: '{{ $session_id }}',
                    _token: '{{ csrf_token() }}'
                },
                success:function (data) {
                    document.getElementById('messeghere').innerHTML = data
                },
                error:function (error) {
                    console.log(error)
                }
            })
        }
        setInterval(()=>{
            fetchmsg()
        },1000)

        $('#topicons').hide()
        $('#bottomicons').hide()

        function showicons(){
            $('#topicons').show()
            $('#bottomicons').show()
        }
        function hideicons(){
            $('#topicons').hide()
            $('#bottomicons').hide()
        }
    </script>
    <script>
        function onclosechat(){
           $( "#chatpan" ).toggle();
        }
        
        function doDisconnect() {
        //   roomkll.participants.forEach(remoteParticipant => {
        //     remoteParticipant.disconnect()
        //   })
          roomkll.disconnect()
        }
    </script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
@endsection
