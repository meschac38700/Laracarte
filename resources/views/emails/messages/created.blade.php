@component('mail::message')
# Message from {{ config('app.name') }} app 
- {{ $email }}

@component('mail::panel')
{{$msg}}
@endcomponent
    

Thanks,<br>
{{ $name }}
@endcomponent
