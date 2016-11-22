@extends('layouts')

@section('content')
  <h1>ALL THE BURRITOS</h1>

  @foreach ($burritos as $burrito)
    <div>
        {{ $burrito->name }}
        {{ $burrito->ingredients }}
    </div>
  @endforeach

  @stop
