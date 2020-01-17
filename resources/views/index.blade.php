@extends('layouts.app')

@section('title', 'Laravel 5.8 - Vue.js')

@section('head')
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
@endsection

@section('content')
    <div id='app'>
        <example-component></example-component>
    </div>
@endsection

@section('script')
    <script src="{{ mix('js/app.js') }}"></script> 
@endsection