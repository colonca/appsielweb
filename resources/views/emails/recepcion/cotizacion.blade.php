@component('mail::message')
# Nueva Cotización de {{$nombre}}

{{$consulta}}

Fecha, <strong>{{date('Y-m-d')}}</strong>
{{ config('app.name') }}
@endcomponent
