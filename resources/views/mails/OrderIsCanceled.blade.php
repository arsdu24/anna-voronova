
@component('mail::message')

# Hello!
# Sorry, but your order {{$order->serial_number}} is canceled. </br>

@if($withCard==1)
    We will refund the full amount as soon as possible.
@endif

Thanks<br>
@endcomponent