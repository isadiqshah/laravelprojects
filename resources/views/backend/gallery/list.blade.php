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
                                Gallery Images List
                                <a href="{{ route('add_image') }}" style="float: right; margin-top: -10px"
                                   class="btn btn-primary">Add New</a>
                            </h5>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Category</th>
                                        <th scope="col">Publish</th>
                                        <th scope="col">Created Date</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($getRecord as $value)
                                        <tr>
                                            <th scope="row">
                                                {{ $value->id }}
                                            </th>
                                            <td>
                                                @if(!empty($value->getImage()))
                                                    <img src="{{ $value->getImage() }}" style="width: 100px; height: 100px;">
                                                @endif
                                            </td>
                                            <td>{{ $value->category->name ?? 'N/A' }}</td>
                                            <td>{{ !empty($value->is_publish) ? 'Yes' : 'No' }}</td>
                                            <td>{{ date('Y-m-d H:i A', strtotime($value->created_at)) }}</td>
                                            <td>
                                                <a onclick="return confirm('Are you sure you want to delete this record ?')"
                                                   href="{{ route('delete_image', ['id' => $value->id]) }}" class="btn btn-danger btn-sm">Delete</a>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="100%">Record not found.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
{{--                            {{ $value->onEachSide(5)->links() }}--}}
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
