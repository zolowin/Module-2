@extends('layouts.master')

@section('content')
<h2>Hello World!! {{$name}}</h2>
<h1>{{$age}} tuổi</h1>
    @if($age >20)
        <p>{{$name}} đủ tuổi đi học</p>
    @else
    <p>{{$name}} chưa đủ tuổi đi học</p>
    @endif

    @for($i = 0; $i < 5; $i++)
        <p>{{$i + 1}}</p>
    @endfor

    @foreach($students as $key => $student)
    <p>{{$key}}  {{$student}}</p>
    @endforeach
@endsection
