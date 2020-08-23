@extends('layouts.app')

@section('title-block') All messages @endsection

@section('content')
    <h1>All messages</h1>
    @foreach($data as $el)
        <div class="alert alert-info">
            <h3>{{ $el->message }}</h3>
            <p>{{ $el->email }}</p>
            <p><small>{{ $el->created_at }}</small></p>
            <a href="{{ route('one-message-show', $el->id) }}"><button class="btn btn-warning">Details</button></a>
        </div>
    @endforeach
@endsection

@section('aside')
    @parent
    <p>Доп текст</p>
@endsection