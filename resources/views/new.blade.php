@extends('layouts.app')

@section('title-block') New page @endsection
@section('content')
    <h1>New page</h1>
    <form action="{{ route('contact-form') }}" method='post'>
        @csrf
        <div class="form-group">
            <label for="name">Type in name</label>
            <input type="text" placeholder="Type in your name" name='name' id="name" class=form-control>
        </div>

        <div class="form-group">
            <label for="email">Type in email</label>
            <input type="text" placeholder="Type in your emeil" name='email' id="email" class=form-control>
        </div>

        <div class="form-group">
            <label for="message">Type in message</label>
            <textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="message"></textarea>
        </div>
        

        <button class="btn btn-success" type="submit">Send</button>
    </form>
@endsection

@section('aside')
    @parent
    <p>Доп текст</p>
@endsection