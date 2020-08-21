@component('mail::message')
# !Hola

Te queremos dar las gracias por tu interés en nuestro libro: <strong>Cinco estrategias para un crecimiento empresarial.</strong>

Esperamos que este contenido ayude a que tu negocio crezca y se fortalezca cada día más.

@component('mail::button', ['url' => ''])
Descargar libro
@endcomponent

Attentamente,<br>

Equio <strong>{{ config('app.name') }}</strong>

@endcomponent
