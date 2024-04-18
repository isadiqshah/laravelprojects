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
                                Category List
                                <a href="{{ route('add_category') }}" style="float: right; margin-top: -10px"
                                              class="btn btn-primary">Add New</a>
                            </h5>

                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Slug</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Meta Title</th>
                                    <th scope="col">Meta Description</th>
                                    <th scope="col">Meta Keywords</th>
                                    <th scope="col">Menu</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Created Date</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($getRecord as $value)
                                    <tr>
                                        <th scope="row">{{ $value->id }}</th>
                                        <td>{!! strip_tags(Str::substr($value->name,0,10)) !!}</td>
                                        <td>{{ $value->slug }}</td>
                                        <td>{!! strip_tags(Str::substr($value->title,0,16)) !!}</td>
                                        <td>{!! strip_tags(Str::substr($value->meta_title,0,15)) !!}</td>
                                        <td>{!! strip_tags(Str::substr($value->meta_description,0,20)) !!}</td>
                                        <td>{{ $value->meta_keywords }}</td>
                                        <td>{{ !empty($value->is_menu) ? 'Yes' : 'No' }}</td>
                                        <td>{{ !empty($value->status) ? 'Active' : 'Inactive' }}</td>
                                        <td>{{ date('Y-m-d H:i A', strtotime($value->created_at)) }}</td>
                                        <td>
                                            <a href="{{ route('edit_category', ['id' => $value->id]) }}" class="btn btn-primary btn-sm">Edit</a>

                                            <a onclick="return confirm('Are you sure you want to delete this record ?')"
                                               href="{{ route('delete_category', ['id' => $value->id]) }}" class="btn btn-danger btn-sm">Delete</a>
                                        </td>
                                    </tr>

                                    @empty
                                        <tr>
                                            <td colspan="100%">Record not found.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>

                            {{ $getRecord->onEachSide(5)->links() }}
                            <!-- End Table with stripped rows -->

                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main><!-- End #main -->

@endsection

@section('script')

@endsection
