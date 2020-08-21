@component('mail::message')
# Hola {{ explode(' ', $user->name)[0] }}

Te queremos dar las gracias por tu interés en nuestro libro: <strong>Cinco estrategias para un crecimiento empresarial.</strong>

Esperamos que este contenido ayude a que tu negocio crezca y se fortalezca cada día más.

@component('mail::button', ['url' => route('camapaña.ebook')])
Descargar libro
@endcomponent

Atentamente,<br>

Equipo <strong>{{ config('app.name') }}</strong>

@endcomponent
