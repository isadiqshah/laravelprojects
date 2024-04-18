@component('mail::message')
    <div style="font-family: Arial, sans-serif; max-width: 600px; margin: 0 auto; padding: 20px;">
        <h2>Email Verification</h2>
        <p>Hello, {{ $user->name }}</p>
        <p>You recently requested to register your new account. Click the link below to verify your email:</p>
        @component('mail::button', ['url' => url('verify/' . $user->remember_token)])
            Verify
        @endcomponent
        <p>If you have any further issues, please contact us.</p>
        <p>Thanks,</p>
        <p>{{ config('app.name') }}</p>
    </div>
@endcomponent
