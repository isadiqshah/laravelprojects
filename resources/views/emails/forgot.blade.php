@component('mail::message')
<div style="font-family: Arial, sans-serif; max-width: 600px; margin: 0 auto; padding: 20px;">
    <h2>Forgot Password</h2>
    <p>Hello, {{ $user->name }}</p>
    <p>You recently requested to reset your password for your account. Click the link below to reset it:</p>
    @component('mail::button', ['url' => url('reset/'. $user->remember_token)])
        Reset Password
    @endcomponent
    <p>If you did not request a password reset, please ignore this email or contact support.</p>
    <p>Thanks,</p>
    <p>{{ config('app.name') }}</p>
</div>

@endcomponent