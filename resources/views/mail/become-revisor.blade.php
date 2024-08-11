<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ECA TRAVELS</title>
</head>
<body>
    <div>
        <h1>{{__('ui.requestReceived')}}: </h1>
        <h3>{{__('ui.senderInfo')}}:</h3>
        <p>{{__('ui.name')}}:{{$user->name}}</p>
        <p>{{__('ui.mail')}}:{{$user->email}}</p>
        <p>{{__('ui.ifbecomeR')}}  </p>
        <a href="{{route('make.revisor',compact('user'))}}">{{__('ui.clickH')}}</a>

    </div>
</body>
</html>