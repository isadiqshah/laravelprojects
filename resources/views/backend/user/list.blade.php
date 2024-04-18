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
                                Users List <a href="{{ route('add_user') }}" style="float: right; margin-top: -10px"
                                              class="btn btn-primary">Add New</a>
                            </h5>

                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Email Verified</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Created Date</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($getRecord as $value)
                                    <tr>
                                        <th scope="row">{{ $value->id }}</th>
                                        <td>{{ $value->name }}</td>
                                        <td>{{ $value->email }}</td>
                                        <td>{{ !empty($value->email_verified_at) ? 'Yes' : 'No' }}</td>
                                        <td>{{ !empty($value->email_verified_at) ? 'Active' : 'Inactive' }}</td>
                                        <td>{{ date('Y-m-d H:i A', strtotime($value->created_at)) }}</td>
                                        <td>
                                            <a href="{{ route('edit_user', ['id' => $value->id]) }}" class="btn btn-primary btn-sm">Edit</a>

                                            <a onclick="return confirm('Are you sure you want to delete this record ?')"
                                               href="{{ route('delete_user', ['id' => $value->id]) }}" class="btn btn-danger btn-sm">Delete</a>
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
