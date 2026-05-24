<x-mail::message>

<p>{{ $subject }}<br><br>


    {{ $message }}

</p>



Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
