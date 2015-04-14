@extends('app')

  @section('content')

    @if ($first == 'Max')
    <h1>About me {{ $first }}</h1>
    @else <h3>else</h3>
    @endif

    @if (count($people))
    <ul>
      @foreach ($people as $person)
        <li>{{$person}}</li>
      @endforeach
    </ul>
    @endif

    @stop
