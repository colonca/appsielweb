@extends('layouts.app')

@section('styles')
    <link href="{{asset('css/main.css')}}" rel="stylesheet">
@endsection

@section('title')
    Blog - Appsiel
@endsection

@section('content')

    @include('layouts.campaing')

    <livewire:blog.search-dropdown/>

    <livewire:blog.posts/>

@endsection


