@component('mail::message')
    # Order Placed

    Your order has been placed successfully. Here are the order details:

    @component('mail::table')
        | Attribute     | Value          |
        | ------------- | -------------- |
        @foreach ($order->getAttributes() as $key => $value)
            | {{ ucfirst(str_replace('_', ' ', $key)) }} | {{ $value }} |
        @endforeach
    @endcomponent

    Thanks,
    {{ config('app.name') }}
@endcomponent
