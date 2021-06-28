@extends('layouts.app')

@section('title')
    contact
@endsection

@section('content')
    <h1>contact</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li> {{ $error }} </li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route('contact-form')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Enter your name</label>
            <input type="text" name="name" placeholder="Enter your name" id="name" class="form-control">
        </div>

        <div class="form-group">
            <label for="email">Enter your name</label>
            <input type="email" name="email" placeholder="Enter your email" id="email" class="form-control">
        </div>

        <div class="form-group">
            <label for="subject">Enter subject</label>
            <input type="text" name="subject" placeholder="Enter subject" id="subject" class="form-control">
        </div>

        <div class="form-group">
            <label for="message">Enter your name</label>
            <textarea name="message" id="message" class="form-control" placeholder="message"></textarea>
        </div>

        <button type="submit" class="btn btn-success">Send</button>
    </form>

@endsection
