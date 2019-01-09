@extends('layouts.app')

@section('content')
    <h1>Create a Project</h1>
    <form method="POST" action="/projects">
        @csrf

        <input type="text" name="title">

        <textarea name="description" cols="30" rows="10"></textarea>

        <button type="submit">Create project</button>
        <a href="/projects">Cancel</a>
    </form>
@endsection
