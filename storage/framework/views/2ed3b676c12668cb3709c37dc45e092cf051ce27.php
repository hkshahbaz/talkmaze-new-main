<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?php echo e(asset('images/output-onlinepngtools.png')); ?>" type="image/gif" sizes="16x16">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>TalkMaze- <?php echo $__env->yieldContent('title'); ?></title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">

    <!-- Custom Files -->
    <link href="<?php echo e(asset('css/custom.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/styles.css')); ?>" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo e(asset('css/steps.css')); ?>" />

     <link href="<?php echo e(asset('dashboard/dist/css/pignose.calendar.min.css')); ?>" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('dashboard/slick/slick.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('dashboard/slick/slick-theme.css')); ?>">

    <!-- fontawesome -->
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

    <!-- jssocials -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/jssocials.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/jssocials-theme-flat.css')); ?>">
    <link href="<?php echo e(asset('admin/css/myvalidate.css')); ?>" rel="stylesheet" type="text/css">

    <link href="<?php echo e(asset('css/byajmal.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('animation/aos.css')); ?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('dashboard')); ?>/css/bootstrap-datetimepicker.min.css">
    <link href="<?php echo e(asset('css')); ?>/main.css" rel="stylesheet">
    <style>
        /*DateTimePicker Design Customization*/
        .bootstrap-datetimepicker-widget
        {
            background: #60d0ac !important;
            color: #fff;
        }
        .bootstrap-datetimepicker-widget .picker-switch:hover,
        .bootstrap-datetimepicker-widget .prev:hover,
        .bootstrap-datetimepicker-widget .next:hover,
        .bootstrap-datetimepicker-widget .month:hover,
        .bootstrap-datetimepicker-widget .day:hover{
            background: #fff !important;
            color: #60d0ac !important;
        }
        .bootstrap-datetimepicker-widget .prev:hover span,
        .bootstrap-datetimepicker-widget .next:hover span{
            color: #60d0ac !important;
        }
    </style>
    <?php echo $__env->yieldContent('css'); ?>
</head>
<body>

    <?php echo $__env->yieldContent('content'); ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="<?php echo e(asset('dashboard')); ?>/js/moment.min.js"></script>
    <script src="<?php echo e(asset('dashboard')); ?>/js/bootstrap-datetimepicker.min.js"></script>
    <!--Start of Tawk.to Script-->
      <script src="<?php echo e(asset('animation/aos.js')); ?> "></script>

    <script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/5edc11be4a7c6258179a11a3/1eaalmc86';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->
    <script>
         $(document).ready(function() {
            $('#popup').popover();
         });
         $('.datepicker').datetimepicker({
            useCurrent: false,
            icons: {
                time: 'fa fa-clock-o',
                date: 'fa fa-calendar',
                up: 'fa fa-angle-up',
                down: 'fa fa-angle-down',
                previous: 'fa fa-angle-left',
                next: 'fa fa-angle-right',
                today: 'fa fa-bullseye',
                clear: 'fa fa-trash',
                close: 'fa fa-times',
            },
            format: 'YYYY/MM/DD',
        });
    </script>
    <script>
      AOS.init({
        easing: 'ease-in-out-sine'
      });
    </script>
    <?php echo $__env->yieldContent('js'); ?>
</body>
</html>
<!-- <script src="<?php echo e(asset('js/all.js')); ?>"></script> -->
<?php /**PATH /home/vagrant/code/laravel/resources/views/user/layouts/main.blade.php ENDPATH**/ ?>