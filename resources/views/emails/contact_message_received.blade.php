@component('mail::message')

    You have received a new message from:<br>

    Name: {{ $request->input('name') }}
    Email: {{ $request->input('email') }}
    Message: {{ $request->input('message') }}

    Thank you.

    {{ config('app.name') }}

@endcomponent
