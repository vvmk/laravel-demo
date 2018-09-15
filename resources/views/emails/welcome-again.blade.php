@component('mail::message')
# Welcome to the couchjes.us blog!

The body of your message.

- one
- two
- three

@component('mail::button', ['url' => 'blog.test'])
Get a move on!
@endcomponent

@component('mail::panel', ['url' => ''])
Lorem Ipsum dolar sit amet.
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
