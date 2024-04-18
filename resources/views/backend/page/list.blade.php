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
                                Page List
                                <a href="{{ route('add_page') }}" style="float: right; margin-top: -10px"
                                   class="btn btn-primary">Add New</a>
                            </h5>


                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Slug</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Meta Title</th>
                                    <th scope="col">Created Date</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($getRecord as $value)
                                    <tr>
                                        <th scope="row">{{ $value->id }}</th>
                                        <td>{{ $value->slug }}</td>
                                        <td>{!! strip_tags(Str::substr($value->title,0,15)) !!}</td>
                                        <td>{{ $value->meta_title }}</td>

                                        <td>{{ date('Y-m-d H:i A', strtotime($value->created_at)) }}</td>
                                        <td>
                                            <a href="{{ route('edit_page', ['id' => $value->id]) }}" class="btn btn-primary btn-sm">Edit</a>

                                            <a onclick="return confirm('Are you sure you want to delete this record ?')"
                                               href="{{ route('delete_page', ['id' => $value->id]) }}" class="btn btn-danger btn-sm">Delete</a>
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

    </main><!-- End #main -->

@endsection

@section('script')

@endsection
