@extends('layouts.app')

@section('title', 'Home page')

@section('sidebar')

@endsection

@section('content')
    <h1>Demo App</h1>
    <ul>
        <li><a href="/template">Template Error</a></li>
        <li><a href="/blog/1">ORM error</a></li>
        <li><a href="/warning">PHP warning</a></li>
        <li><a href="/logging">Logging</a></li>
    </ul>
@endsection
