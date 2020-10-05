@component('mail::message')
# Contacto desde MIZA

Usted a recibido un mensaje con los siguientes datos:

Persona contacto: {{ $message->name }}

Email: {{ $message->email }}

Mensaje: 

{{ $message->description }}


**{{ config('app.name') }}**
@endcomponent
