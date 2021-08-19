@component('mail::message')
# Introduction
## Sub Intro

Hello, This order is cancel

@component('mail::button', ['url' => 'http://lrandomdev.com'])
Go to our website
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
