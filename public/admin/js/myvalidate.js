
      $("input[name='name']").on('input', function() {
        var input = $(this);
        var is_name=input.val();
        if(is_name){input.removeClass("invalid").addClass("valid");}
        else{input.removeClass("valid").addClass("invalid");}
      });

      $("input[name='email']").on('input', function() {
        var input=$(this);
        var is_name=input.val();
        var email_regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i;
        if(email_regex.test(is_name)){

          $('#email-valid').css('display','none')
          input.removeClass("invalid").addClass("valid");
        }
        else{
          $('#email-valid').css('display','block')
          input.removeClass("valid").addClass("invalid");
      }
      });
      $("input[name='address']").on('input', function() {
        var input = $(this);
        var is_name=input.val();
        if(is_name){input.removeClass("invalid").addClass("valid");}
        else{input.removeClass("valid").addClass("invalid");}
      });
      $("input[name='city']").on('input', function() {
        var input = $(this);
        var is_name=input.val();
        if(is_name){input.removeClass("invalid").addClass("valid");}
        else{input.removeClass("valid").addClass("invalid");}
      });
      $("input[name='country']").on('input', function() {
        var input = $(this);
        var is_name=input.val();
        if(is_name){input.removeClass("invalid").addClass("valid");}
        else{input.removeClass("valid").addClass("invalid");}
      });
      $("input[name='phone']").on('input', function() {
        var input = $(this);
        var is_name=input.val();
        if(is_name){
          input.removeClass("invalid").addClass("valid");
        }
        else{
          $('#phone').css('display','block');
          input.removeClass("valid").addClass("invalid");
      }
      });
      $("textarea[name='feedback']").on('input', function() {
        var input = $(this);
        var is_name=input.val();
        if(is_name){input.removeClass("invalid").addClass("valid");}
        else{input.removeClass("valid").addClass("invalid");}
      });
      $("input[name='link']").on('input', function() {
        var input = $(this);
        var is_name=input.val();
        if(is_name){input.removeClass("invalid").addClass("valid");}
        else{input.removeClass("valid").addClass("invalid");}
      });
      $("input[name='question']").on('input', function() {
        var input = $(this);
        var is_name=input.val();
        if(is_name){input.removeClass("invalid").addClass("valid");}
        else{input.removeClass("valid").addClass("invalid");}
      });
      $("input[name='answer']").on('input', function() {
        var input = $(this);
        var is_name=input.val();
        if(is_name){input.removeClass("invalid").addClass("valid");}
        else{input.removeClass("valid").addClass("invalid");}
      });

      // job fields
      $("input[name='title']").on('input', function() {
        var input = $(this);
        var is_name=input.val();
        if(is_name){input.removeClass("invalid").addClass("valid");}
        else{input.removeClass("valid").addClass("invalid");}
      });
      $("input[name='location']").on('input', function() {
        var input = $(this);
        var is_name=input.val();
        if(is_name){input.removeClass("invalid").addClass("valid");}
        else{input.removeClass("valid").addClass("invalid");}
      });
      $("input[name='requistion_number']").on('input', function() {
        var input = $(this);
        var is_name=input.val();
        if(is_name){input.removeClass("invalid").addClass("valid");}
        else{input.removeClass("valid").addClass("invalid");}
      });
      $("input[name='category']").on('input', function() {
        var input = $(this);
        var is_name=input.val();
        if(is_name){input.removeClass("invalid").addClass("valid");}
        else{input.removeClass("valid").addClass("invalid");}
      });
      $("input[name='role']").on('input', function() {
        var input = $(this);
        var is_name=input.val();
        if(is_name){input.removeClass("invalid").addClass("valid");}
        else{input.removeClass("valid").addClass("invalid");}
      });
      $("textarea[name='requirement']").on('input', function() {
        var input = $(this);
        var is_name=input.val();
        if(is_name){input.removeClass("invalid").addClass("valid");}
        else{input.removeClass("valid").addClass("invalid");}
      });
      $("textarea[name='description']").on('input', function() {
        var input = $(this);
        var is_name=input.val();
        if(is_name){input.removeClass("invalid").addClass("valid");}
        else{input.removeClass("valid").addClass("invalid");}
      });

      //course fields

      $("input[name='tags']").on('input', function() {
        var input = $(this);
        var is_name=input.val();
        if(is_name){input.removeClass("invalid").addClass("valid");}
        else{input.removeClass("valid").addClass("invalid");}
      });

      $("input[name='price']").on('input', function() {
        var input = $(this);
        var is_name=input.val();
        if(is_name){input.removeClass("invalid").addClass("valid");}
        else{input.removeClass("valid").addClass("invalid");}
      });

      //course content field

      $("textarea[name='content']").on('input', function() {
        var input = $(this);
        var is_name=input.val();
        if(is_name){input.removeClass("invalid").addClass("valid");}
        else{input.removeClass("valid").addClass("invalid");}
      });

      //coment field

      $("input[name='comment']").on('input', function() {
        var input = $(this);
        var is_name=input.val();
        if(is_name){input.removeClass("invalid").addClass("valid");}
        else{input.removeClass("valid").addClass("invalid");}
      });

    
      // debate field

      $("input[name='topic']").on('input', function() {
        var input = $(this);
        var is_name=input.val();
        if(is_name){input.removeClass("invalid").addClass("valid");}
        else{input.removeClass("valid").addClass("invalid");}
      });

      //packages field

      $("input[name='duration']").on('input', function() {
        var input = $(this);
        var is_name=input.val();
        if(is_name){input.removeClass("invalid").addClass("valid");}
        else{input.removeClass("valid").addClass("invalid");}
      });

      $("input[name='price']").on('input', function() {
        var input = $(this);
        var is_name=input.val();
        if(is_name){input.removeClass("invalid").addClass("valid");}
        else{input.removeClass("valid").addClass("invalid");}
      });

      // coaching bulk fields

      $("input[name='first_name']").on('input', function() {
        var input = $(this);
        var is_name=input.val();
        if(is_name){input.removeClass("invalid").addClass("valid");}
        else{input.removeClass("valid").addClass("invalid");}
      });
      $("input[name='last_name']").on('input', function() {
        var input = $(this);
        var is_name=input.val();
        if(is_name){input.removeClass("invalid").addClass("valid");}
        else{input.removeClass("valid").addClass("invalid");}
      });
      $("input[name='organization']").on('input', function() {
        var input = $(this);
        var is_name=input.val();
        if(is_name){input.removeClass("invalid").addClass("valid");}
        else{input.removeClass("valid").addClass("invalid");}
      });
      $("textarea[name='message']").on('input', function() {
        var input = $(this);
        var is_name=input.val();
        if(is_name){input.removeClass("invalid").addClass("valid");}
        else{input.removeClass("valid").addClass("invalid");}
      });

      // user_requests fields

      $("input[name='why_would_you_like_to_be_matched_with_a_coach']").on('input', function() {
        var input = $(this);
        var is_name=input.val();
        if(is_name){input.removeClass("invalid").addClass("valid");}
        else{input.removeClass("valid").addClass("invalid");}
      });

      $("input[name='experience_of_public_speaking']").on('input', function() {
        var input = $(this);
        var is_name=input.val();
        if(is_name){
            input.removeClass("invalid").addClass("valid");
        }
        else{
            input.removeClass("valid").addClass("invalid");
        }
      });

      // applicant validation

      $("input[name='fname']").on('input', function(event) {
        var input = $(this);
        var is_name=input.val();
        if(is_name){
          $('#fname').css('display','none');
          input.removeClass("invalid").addClass("valid");
        }
        else{
          $('#fname').css('display','block');
          input.removeClass("valid").addClass("invalid");
        }
      });

      $("input[name='lname']").on('input', function() {
        var input = $(this);
        var is_name=input.val();
        if(is_name){
          $('#lname').css('display','none');
          input.removeClass("invalid").addClass("valid");
      }
        else{
          $('#lname').css('display','block');
          input.removeClass("valid").addClass("invalid");
      }
      });

      $("input[name='education']").on('input', function() {
        var input = $(this);
        var is_name=input.val();
        if(is_name){
           $('#education').css('display','none');
          input.removeClass("invalid").addClass("valid");
      }
        else{
          $('#education').css('display','block');
          input.removeClass("valid").addClass("invalid");
      }
      });
      $("textarea[name='debate']").on('input', function() {
        var input = $(this);
        var is_name=input.val();
        if(is_name){
           $('#debate').css('display','none');
          input.removeClass("invalid").addClass("valid");
      }
        else{
          $('#debate').css('display','block');
          input.removeClass("valid").addClass("invalid");
      }
      });
      // $("textarea[name='experience']").on('input', function() {
      //   var input = $(this);
      //   var is_name=input.val();
      //   if(is_name){
      //     $('#debate').css('display','none');
      //       input.removeClass("invalid").addClass("valid");
      //   }
      //   else{
      //     $('#experience').css('display','block');
      //       input.removeClass("valid").addClass("invalid");
      //   }
      // });

      $("input[name='education_level']").on('input', function() {
        var input = $(this);
        var is_name=input.val();
        if(is_name){input.removeClass("invalid").addClass("valid");}
        else{input.removeClass("valid").addClass("invalid");}
      });
      $("textarea[name='why_to_join']").on('input', function() {
        var input = $(this);
        var is_name=input.val();
        if(is_name){
            $('#why_to_join').css('display','none');
            input.removeClass("invalid").addClass("valid");
        }
        else{
            $('#why_to_join').css('display','block');
            input.removeClass("valid").addClass("invalid");
        }
      });
      $("input[name='educational_level']").on('input', function() {
        var input = $(this);
        var is_name=input.val();
        if(is_name){
            $('#educational_level').css('display','none');
            input.removeClass("invalid").addClass("valid");
        }
        else{
            $('#educational_level').css('display','block');
            input.removeClass("valid").addClass("invalid");
        }
      });
      $("textarea[name='how_here_about_us']").on('input', function() {
        var input = $(this);
        var is_name=input.val();
        if(is_name){
            $('#how_here_about_us').css('display','none');
            input.removeClass("invalid").addClass("valid");
        }
        else{
            $('#how_here_about_us').css('display','block');
            input.removeClass("valid").addClass("invalid");
        }
      });
