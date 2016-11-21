@extends('layouts')

@section('content')
  <h1>{{ $burrito->name }}</h1>
  <h2>{{ $burrito->ingredients }}</h2>

@stop
