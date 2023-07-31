<!doctype html>
<html lang="`en`">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
<br/>
<br/>
<section style="padding-left: 20px; padding-right: 20px;">
    Hi, <br/><br/>

    {{$content->first_name . ' '.$content->last_name}} is interested in TalkMaze. <br>
    He/She has the following query, <br> {{$content->message}}. <br><br>
    Please reach out to him/her.

</section>
<br/>
<br/>
<br/>
Regards, <br/>
<a href="https://talkmaze.com">TalkMaze</a> <br/><br/>
<img src="https://talkmaze.com/images/logo.png" alt="talkmazeLogo">

</body>
</html>
