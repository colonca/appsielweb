@extends('layouts.app')

@section('styles')
    <link href="{{asset('css/contacto.css')}}" rel="stylesheet"></head>
@endsection

@section('content')
   <livewire:contacto/>
@endsection

@section('scripts')
    <script src="{{asset('js/contacto.bundle.js')}}"></script>
@endsection

