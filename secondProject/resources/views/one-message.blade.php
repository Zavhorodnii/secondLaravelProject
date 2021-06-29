@extends('layouts.app')

@section('title')
    $data->subject
@endsection

@section('content')
    <h1>$data->subject</h1>
    <div class="alert alert-info">
        <h3>{{ $el->subject }}</h3>
        <p>{{ $el->email }}</p>
        <p><small>{{ $el->created_at }}</small></p>
        <a href="{{ route('contact-data-one', $el->id) }}">
            <button class="btn btn-warning">Detail</button>
        </a>
    </div>
@endsection

