@component('mail::message')
    {{ config('app.name') }}
    # Hi Dear welcome from Samahaa website
<p> كود إعادة تعيين كلمة السر {{$code}}</p>
Thanks,<br>
{{ config('app.name') }}
@endcomponent


