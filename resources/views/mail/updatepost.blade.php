<x-mail::message>
# Introduction

hello, {{ $user->name }}

you have updated a new post .

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
