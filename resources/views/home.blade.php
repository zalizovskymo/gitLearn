@extends('layouts.app')

@section('title-block') Home page @endsection

@section('content')
    <h1>Home page</h1>
@endsection

@section('aside')
    @parent
    <p>Доп текст</p>
@endsection