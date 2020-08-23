@extends('layouts.app')

@section('title-block') Update message @endsection

@section('content')
<h1>Update message</h1>
    <form action="{{ route('contact-update-submit', $data->id) }}" method='post'>
        @csrf
        <div class="form-group">
            <label for="name">Type in name</label>
            <input type="text" placeholder="Type in your name" name='name' id="name" value="{{ $data->name }}" class=form-control>
        </div>

        <div class="form-group">
            <label for="email">Type in email</label>
            <input type="text" placeholder="Type in your emeil" name='email' value="{{ $data->email }}"  id="email" class=form-control>
        </div>

        <div class="form-group">
            <label for="message">Type in message</label>
            <textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="message">{{ $data->message }}</textarea>
        </div>

        <button class="btn btn-success" type="submit">Send</button>
    </form>
@endsection

@section('aside')
    @parent
    <p>Доп текст</p>
@endsection
