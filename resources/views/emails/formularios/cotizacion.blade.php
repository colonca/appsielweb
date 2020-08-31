@component('mail::message')
# !Hola {{$nombre}}!

Gracias por contactarnos.

Ya hemos recibido tu solicitud y en proximos días te estaremos enviado una
respuesta por este mismo medio.


Mientras, puedes aprender más de como hacer crecer tu negocio en <a href="https://appsiel.com.co/">www.appsiel.com.co</a>

Atentamente,<br/>
Equipo de {{ config('app.name') }}.

@endcomponent
