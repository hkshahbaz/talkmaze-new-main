$(document).on('click','input[type="checkbox"]',function(){

            let timeZoneClass = $(this).parents('.row.mt-2').find('.time_zone').attr('class');
            let fromClass = $(this).parents('.row.mt-2').find('.from').attr('class');
            let toClass = $(this).parents('.row.mt-2').find('.to').attr('class');

            if(timeZoneClass.includes('false') && fromClass.includes('false') && toClass.includes('false') ){
                $(this).parents('.row.mt-2').find('.time_zone').removeClass('false');
                $(this).parents('.row.mt-2').find('.from').removeClass('false');
                $(this).parents('.row.mt-2').find('.to').removeClass('false');

                $(this).parents('.row.mt-2').find('.time_zone').prop('disabled',false);
                $(this).parents('.row.mt-2').find('.from').prop('disabled',false);
                $(this).parents('.row.mt-2').find('.to').prop('disabled',false);
            }
            else{
                $(this).parents('.row.mt-2').find('.time_zone').addClass('false');
                $(this).parents('.row.mt-2').find('.from').addClass('false');
                $(this).parents('.row.mt-2').find('.to').addClass('false');

                $(this).parents('.row.mt-2').find('.time_zone').prop('disabled',true);
                $(this).parents('.row.mt-2').find('.from').prop('disabled',true);
                $(this).parents('.row.mt-2').find('.to').prop('disabled',true);
            }
});



// time table validation
    $('button[type="submit"]').click(function(event){

    let fname = $("input[name='fname']").val();
    let lname = $("input[name='lname']").val();
    let email = $("input[name='email']").val();
    let phone = $("input[name='phone']").val();
    let education = $("input[name='education']").val();
    let debate = $("textarea[name='debate']").val();
    let why_to_join = $("textarea[name='why_to_join']").val();
    let how_here_about_us = $("textarea[name='how_here_about_us']").val();
    let resume = $("input[name='resume']").val().split('.').pop().toLowerCase();
    let allow_device = $("input[name='allow_device']");
    var email_regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i;

    if(fname == ''){
        $('#fname').css('display','block');
        event.preventDefault();
    }
    else if(lname == ''){
        $('#lname').css('display','block');
        event.preventDefault();
    }
    else if(email == ''){
        $('#email').css('display','block');
        event.preventDefault();
    }
    else if(phone == ''){
        $('#phone').css('display','block');
        event.preventDefault();
    }
    else if(education == ''){
        $('#education').css('display','block');
        event.preventDefault();
    }
    else if(debate == ''){
        $('#debate').css('display','block');
        event.preventDefault();
    }
    else if(why_to_join == ''){
        $('#why_to_join').css('display','block');
        event.preventDefault();
    }
    else if(how_here_about_us == ''){
        $('#how_here_about_us').css('display','block');
        event.preventDefault();
    }
    else if(resume.length == ''){
        $('#resume-required').slideDown("slow");
        event.preventDefault();
    }
    else if (!(allow_device[0].checked || allow_device[1].checked)) {
       $('#allow-device-required').css('display','block');
       event.preventDefault();
    }
    else {
        $('.js-form').submit();
    }

    const checkboxes = Array.from(document.querySelectorAll(".checkbox"));
    let result =  checkboxes.reduce((acc, curr) => acc || curr.checked, false);
    

    if(result == false){
        $('#timetable').css('display','block');
        return false;
    }
    else{
        $('#timetable').css('display','none');
    }
    

});

  function hideElementZero()  {
    if (document.getElementById('plus')) {

        if (document.getElementById('plus').style.display == 'none') {
            document.getElementById('plus').style.display = 'block';
            document.getElementById('minus').style.display = 'none';
        }
        else {
            document.getElementById('plus').style.display = 'none';
            document.getElementById('minus').style.display = 'block';
        }
    }
  }

// webcam and microphone permissions
  $(document).on('click','#check_devices',function(){

    navigator.getUserMedia = ( navigator.getUserMedia ||
                       navigator.webkitGetUserMedia ||
                       navigator.mozGetUserMedia ||
                       navigator.msGetUserMedia);

    if (navigator.getUserMedia) {
       navigator.getUserMedia (

          // constraints
          {
             video: true,
             audio: true
          },

          // successCallback
          function(localMediaStream) {

            let allow_device = $('input[name="allow_device"]')[0];
            $(allow_device).attr('checked',true)
            $('#allowed').fadeIn( "slow", function() {
              $(this).removeClass('d-none')
              // Animation complete
            });

          },

          // errorCallback
          function(err) {

            let dont_allow_device = $('input[name="allow_device"]')[1];
            $(dont_allow_device).attr('checked',true)
            $('#not-allowed').fadeIn( "slow", function() {
              $(this).removeClass('d-none')
              // Animation complete
            });

          }
       );
    } else {
       alert("getUserMedia not supported");
    }
  })


