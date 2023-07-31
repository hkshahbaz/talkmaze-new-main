@component('mail::message')
# Your Password:


# {{ $password }}
<!-- 
@component('mail::button', ['url' => ''])
Button Text
@endcomponent -->

Thanks for registering,<br>
{{ config('app.name') }}
@endcomponent
