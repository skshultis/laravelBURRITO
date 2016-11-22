@extends('layouts')

@section('content')
  <h1>{{ $burrito->name }}</h1>
  <h2>{{ $burrito->ingredients }}</h2>

<ul>
  @foreach ($burrito->reviews as $review)
      <li>{{ $review->body }}</li>
  @endforeach
</ul>

<h3>Add Your Review</h3>

<form method="POST" action="/burritos/{{ $burrito->id }}/reviews">
  {{ csrf_field() }}
    <textarea name="body" placeholder="What'd You Think?"></textarea>
    <button type="submit" class="btn btn-primary btn-lg">submit review</button>
</form>

<!-- {!! Form::open(['url' => '/requests', 'files' => true]) !!}

{!! Form::label('name', 'Burrito') !!}
    {!! Form::text('name') !!}

{!! Form::label('ingredients', "What's in There?") !!}
        {!! Form::text('ingredients') !!}

<button type="submit" class="btn btn-primary btn-lg">SUBMIT BURRITO</button>

{!! Form::close() !!} -->

@stop
