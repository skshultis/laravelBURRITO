@extends('layouts')

@section('title', 'Contact page')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="page-header">
                    <h1>CONTACT US</h1>
                </div>

                <p class="lead">FEEL FREE TO CONTACT US ABOUT BURRITOS</p>

                <form method="POST" action="{{ url('/contact') }}">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Your name">
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Your E-mail">
                    </div>
                    <div class="form-group">
                        <label for="comment">Message</label>
                        <textarea rows="10" id="comment" class="form-control" name="comment" placeholder="Your message">{{ old('comment') }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg">Send</button>
                </form>

            </div>
        </div>
    </div>
@stop
