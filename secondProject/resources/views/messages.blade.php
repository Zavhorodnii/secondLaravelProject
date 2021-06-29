@extends('layouts.app')

@section('title')
    messages page
@endsection

@section('content')
    <h1>Message section</h1>
    @foreach($data as $el)
        <div class="alert alert-info">
            <h3>{{ $el->subject }}</h3>
            <p>{{ $el->email }}</p>
            <p><small>{{ $el->created_at }}</small></p>
            <a href="#"><button class="btn btn-warning">Detail</button></a>
        </div>
    @endforeach
@endsection

