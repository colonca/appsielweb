@extends('backoffice.layouts.admin')
@section('content')
    @php($url = ['Inicio'=>url('/home')])
    <livewire:backoffice.breadcrumbs title="Categories" :urls="$url" description="Gestiona las categorías del blog"/>

@endsection
