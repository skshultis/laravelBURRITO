@extends('layouts')

@section('content')
  <h1>{{ $burrito->name }}</h1>
  <h2>{{ $burrito->ingredients }}</h2>

<ul>
  @foreach ($burrito->reviews as $review)
      <li>{{ $review->body }}</li>
  @endforeach
</ul>

@stop
