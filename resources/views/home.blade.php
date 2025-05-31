<!-- File: resources/views/home.blade.php -->
@extends('layouts.app')
@section('title', 'Home Page')
@section('content')
    <h2>Welcome to the Home Page</h2>
    <p>This is the content of the home page.</p>
    <x-alert type="success">
        This is a success alert.
    </x-alert>
    <x-alert type="danger">
        This is a danger alert.
    </x-alert>
@endsection