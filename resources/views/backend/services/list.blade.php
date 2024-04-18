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
                                Services List
                                <a href="{{ route('add_services') }}" style="float: right; margin-top: -10px"
                                   class="btn btn-primary">Add New</a>
                            </h5>
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Country</th>
                                    <th scope="col">Duration</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Created Date</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($services as $service)
                                    <tr>
                                        <th scope="row">{{ $service->id }}</th>

                                        <td>
                                            @if(!empty($service->image))
                                                <img src="{{ asset('images/'.$service->image) }}" style="width: 100px; height: 100px;">
                                            @endif
                                        </td>
                                        <td>{!! strip_tags(Str::substr($service->title,0,20)) !!}</td>
                                        <th scope="row">{{ $service->country }}</th>
                                        <th scope="row">{{ $service->duration }}</th>
                                        <th scope="row">{{ $service->price }}</th>
                                        <td>{{ !empty($service->status) ? 'Active' : 'Inactive' }}</td>
                                        <td>{{ date('Y-m-d H:i A', strtotime($service->created_at)) }}</td>
                                        <td>
                                            <a href="{{ route('edit_services', ['id' => $service->id]) }}" class="btn btn-primary btn-sm">Edit</a>

                                            <a onclick="return confirm('Are you sure you want to delete this record ?')"
                                               href="{{ route('delete_services', ['id' => $service->id]) }}" class="btn btn-danger btn-sm">Delete</a>
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
