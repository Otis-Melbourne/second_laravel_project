<x-mail::message>
# Introduction

hello, {{  $user->name }}

{{ $post->name }} was created successfully 

<x-mail::button :url="''" color="success">
view post 
</x-mail::button>

Thanks <br>
{{ config('app.name') }}
</x-mail::message>
