@component('mail::message')
# Nueva Cotización de {{$nombre}}

{{$consulta}}

Presupuesto: {{$presupuesto}}

Fecha, <strong>{{date('Y-m-d')}}</strong>
{{ config('app.name') }}
@endcomponent
