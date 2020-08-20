@extends('layouts.app')

@section('title-block') New page @endsection

@section('content')
    <h1>New page</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi accusantium facere culpa rerum? Hic, exercitationem nisi. Atque quas sint natus tempora error, fuga similique rem adipisci placeat molestiae eaque iste.</p>
@endsection

@section('aside')
    @parent
    <p>Доп текст</p>
@endsection