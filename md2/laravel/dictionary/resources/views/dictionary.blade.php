<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
</head>
<body>
<div class="flex-center position-ref full-height">
    <form method="POST" action="{{route('post')}}">
        @csrf
        <input type="text" name="input" placeholder="Enter word">
        <input type="submit">
    </form>
    @if(Session::has('result'))
        <h5 style="color: red"> {{Session::get('result')}} </h5>
    @endif
</div>
</body>
</html>
