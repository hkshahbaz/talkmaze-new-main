$('input[type="checkbox"]').click(function(){

            let timeZoneClass = $(this).closest('tr').find('.time_zone').attr('class');
            let fromClass = $(this).closest('tr').find('.from').attr('class');
            let toClass = $(this).closest('tr').find('.to').attr('class');

            if(timeZoneClass.includes('false') && fromClass.includes('false') && toClass.includes('false') ){
                $(this).closest('tr').find('.time_zone').removeClass('false');
                $(this).closest('tr').find('.from').removeClass('false');
                $(this).closest('tr').find('.to').removeClass('false');

                $(this).closest('tr').find('.time_zone').prop('disabled',false);
                $(this).closest('tr').find('.from').prop('disabled',false);
                $(this).closest('tr').find('.to').prop('disabled',false);
            }
            else{
                $(this).closest('tr').find('.time_zone').addClass('false');
                $(this).closest('tr').find('.from').addClass('false');
                $(this).closest('tr').find('.to').addClass('false');

                $(this).closest('tr').find('.time_zone').prop('disabled',true);
                $(this).closest('tr').find('.from').prop('disabled',true);
                $(this).closest('tr').find('.to').prop('disabled',true);
            }
        });
