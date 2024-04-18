@extends('backend.layouts.app')

@section('style')
@endsection


@section('content')

    <main id="main" class="main">
        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    @include('layouts._message')

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">
                                Orders List
                            </h5>
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">First Name</th>
                                    <th scope="col">Gender</th>
                                    <th scope="col">Country</th>
                                    <th scope="col">Visa Type</th>
                                    <th scope="col">Passport Number</th>
                                    <th scope="col">Contact Number</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($orders as $order)
                                    <tr>
                                        <th scope="row">{{ $order->id }}</th>
                                        <th scope="row">{{ $order->service_name }}</th>
                                        <th scope="row">{{ $order->fname }}</th>
                                        <th scope="row">{{ $order->gender }}</th>
                                        <th scope="row">{{ $order->country }}</th>
                                        <th scope="row">{{ $order->visa_type }}</th>
                                        <th scope="row">{{ $order->passport_number }}</th>
                                        <th scope="row">{{ $order->mobile_number }}</th>
{{--                                        <td>{{ !empty($order->status) ? 'Completed' : 'Pending' }}</td>--}}
                                        <th scope="row">{{ $order->status }}</th>
                                        <td>
                                            <a onclick="return confirm('Are you sure you want to delete this record ?')"
                                               href="{{ route('delete_order', ['id' => $order->id]) }}" class="btn btn-danger btn-sm">Delete</a>

                                            <a href="{{ route('order_done', ['id' => $order->id]) }}" class="btn btn-primary btn-sm">Done</a>

                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="100%">Record not found.</td>
                                    </tr>
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- End #main -->

@endsection

@section('script')


@endsection
