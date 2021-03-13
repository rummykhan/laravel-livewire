@component('mail::message')
    # Thankyou for your inquiry

    Hi {{ $data['firstName'] }} {{ $data['lastName'] }}!

    We are received your inquiry

    We will reach out to you as soon as I can.

    Thanks
    {{ config('app.name') }}
@endcomponent
