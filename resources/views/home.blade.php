@extends('layouts.app')

@section('title-block') Home page @endsection

@section('content')
    <h1>Home page</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, veniam? Soluta officiis laborum corporis neque, reiciendis dolor autem laudantium distinctio sed ullam odit sit. A natus magnam corporis eum nobis.</p>
@endsection

@section('aside')
    @parent
    <p>Доп текст</p>
@endsection