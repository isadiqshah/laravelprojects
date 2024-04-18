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
                                Sliders List
                                <a href="{{ route('add_slider') }}" style="float: right; margin-top: -10px"
                                   class="btn btn-primary">Add New</a>
                            </h5>
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Created Date</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($sliders as $slider)
                                    <tr>
                                        <th scope="row">{{ $slider->id }}</th>

                                        <td>{!! strip_tags(Str::substr($slider->title,0,30)) !!}</td>
                                        <td>{!! strip_tags(Str::substr($slider->description,0,60)) !!}</td>
                                        <td>
                                            @if(!empty($slider->getImage()))
                                                <img src="{{ $slider->getImage() }}" style="width: 100px; height: 100px;">
                                            @endif
                                        </td>
                                        <td>{{ !empty($slider->status) ? 'Active' : 'Inactive' }}</td>
                                        <td>{{ date('Y-m-d H:i A', strtotime($slider->created_at)) }}</td>
                                        <td>
                                            <a href="{{ route('edit_slider', ['id' => $slider->id]) }}" class="btn btn-primary btn-sm">Edit</a>

                                            <a onclick="return confirm('Are you sure you want to delete this record ?')"
                                               href="{{ route('delete_slider', ['id' => $slider->id]) }}" class="btn btn-danger btn-sm">Delete</a>
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
