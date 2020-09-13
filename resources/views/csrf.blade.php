@extends('layout')

@section('title')
    CSRF Form
@endsection

@section('content')
    <form method="POST" action="csrf">
        @csrf
        <input type="text" name="name">name
        <input type="text" name="text">text
        <button type="submit">Send</button>
    </form>
@endsection

