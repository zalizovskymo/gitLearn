@extends('layouts.app')

@section('title-block') message {{ $data->name }} @endsection

@section('content')
    <h1>{{ $data->name }}</h1>
        <div class="alert alert-info">
            <p>{{ $data->message }}</p>
            <p>{{ $data->email }}</p>
            <p><small>{{ $data->created_at }}</small></p>
            <a href="{{ route('message-update', $data->id) }}"><button class="btn btn-primary">Update</button></a>
            <a href="{{ route('message-delete', $data->id) }}"><button class="btn btn-danger">Delete</button></a>
        </div>
@endsection

@section('aside')
    @parent
    <p>Доп текст</p>
@endsection