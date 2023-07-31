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
        Hi {{ $receiver }}! <br/><br/>
        {{ $sender }} sent you a message, Please visit <a href="https://talkmaze.com/chat/{{ $sender_id }}">Talkmaze</a> to see the message and response the sender.
    </section>
    <br/>
    <br/>
    <br/>
    Regards!
    <a href="https://talkmaze.com">TalkMaze.com </a>&copy;
</body>
</html>
