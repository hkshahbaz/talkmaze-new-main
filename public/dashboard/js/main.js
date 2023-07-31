$(function(){

    $("#fcoach").click(function () {
        $.ajax({
            url:'/user/request',
            method:'POST',
            data:{
                'why_would_you_like_to_be_matched_with_a_coach':'To help improve my public speaking',
                'experience_of_public_speaking':'to learn',
                'do_you_have_access_to_a_webcam_and_mic':1,
                '_token':$('#csrf').val()
            },
            success:function(data){
                if(data) {
                    console.log(data);
                    window.location.replace('/findacoach/'+data.id);
                }
            },
            error:function (error) {
                $('#gotopay').attr("href", "/private-coaching?redirect=dashboard&data_id="+error.responseJSON.id);
                $("#form-total").hide();
                $("#lastmodal").show();
            }
        })
    });

    /*$("#form-total").steps({
        bodyTag: "section",
        transitionEffect: "fade",
        enableAllSteps: true,
        autoFocus: true,
        transitionEffectSpeed: 300,
        titleTemplate : '<span class="title">#title#</span>',
        labels: {
            previous : 'ffff',
            next : 'Next Step',
            finish : ' YES',
            current : ''
        },
        onFinished: function () {
            $.ajax({
                url:'/user/request',
                method:'POST',
                data:{
                    'why_would_you_like_to_be_matched_with_a_coach':'To help improve my public speaking',
                    'experience_of_public_speaking':'to learn',
                    'do_you_have_access_to_a_webcam_and_mic':1,
                    '_token':$('#csrf').val()
                },
                success:function(data){
                    if(data) {
                        window.location.replace('/tutor-list/'+data.id);
                    }
                },
                error:function (error) {
                    $('#gotopay').attr("href", "/private-coaching?redirect=dashboard&data_id="+error.responseJSON.id);
                    $("#form-total").hide();
                    $("#lastmodal").show();
                }
            })
        }
    });*/
});


