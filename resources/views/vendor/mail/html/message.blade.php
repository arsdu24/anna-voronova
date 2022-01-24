@component('mail::layout')
{{-- Header --}}
@slot('header')
@component('mail::header', ['url' => route('home'),'site'=>$site ?? Null])
<h1 style="color:#1a1a1a">Thank you for choosing our company!</h1>
@endcomponent
@endslot

{{-- Body --}}
{{ $slot }}

{{-- Subcopy --}}
@isset($subcopy)
@slot('subcopy')
@component('mail::subcopy')
{{ $subcopy }}
@endcomponent
@endslot
@endisset

{{-- Footer --}}
@slot('footer')
@component('mail::footer')
© {{ date('Y') }} {{$site->company_name ?? ' '}}. @lang('All rights reserved.')
@endcomponent
@endslot
@endcomponent
