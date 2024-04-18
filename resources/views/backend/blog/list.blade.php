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
                                Blog List ( Total: {{ $getRecord->total() }} )
                                <a href="{{ route('add_blog') }}" style="float: right; margin-top: -10px"
                                   class="btn btn-primary">Add New</a>
                            </h5>
                                        <form class="row" method="post" action="{{route('blog_search')}}">
                                            @csrf
                                            <div class="col-md-1" style="margin-bottom: 10px;">
                                                <label class="form-label">ID</label>
                                                <input type="text" value="{{ Request::get('id') }}" name="id" class="form-control">
                                            </div>

                                            <div class="col-md-2" style="margin-bottom: 10px;">
                                                <label class="form-label">Username</label>
                                                <input type="text" value="{{ Request::get('username') }}" name="username" class="form-control">
                                            </div>
                                            <div class="col-md-3" style="margin-bottom: 10px; width: 10%;">
                                                <label class="form-label">Title</label>
                                                <input type="text" value="{{ Request::get('title') }}" name="title" class="form-control">
                                            </div>

                                            <div class="col-md-2" style="margin-bottom: 10px;">
                                                <label class="form-label">Category</label>
                                                <input type="text" value="{{ Request::get('category') }}" name="category" class="form-control">
                                            </div>
                                            <div class="col-md-2" style="margin-bottom: 10px;">
                                                <label class="form-label">Publish</label>
                                                <select class="form-control" name="is_publish">
                                                    <option  value="">Select</option>
                                                    <option {{ (Request::get('is_publish') === 1) ? 'selected' : '' }} value="1">Yes</option>
                                                    <option {{ (Request::get('is_publish') === 100) ? 'selected' : '' }} value="0">No</option>
                                                </select>
                                            </div>
                                            <div class="col-md-2" style="margin-bottom: 10px;">
                                                <label class="form-label">Status</label>
                                                <select class="form-control" name="status">
                                                    <option  value="">Select</option>
                                                    <option {{ (Request::get('status') === 1) ? 'selected' : '' }} value="1">Active</option>
                                                    <option {{ (Request::get('status') === 100) ? 'selected' : '' }} value="0">Inactive</option>
                                                </select>
                                            </div>
{{--                                            <div class="col-md-2" style="margin-bottom: 10px;">--}}
{{--                                                <label class="form-label">Start Date</label>--}}
{{--                                                <input type="date" value="{{ Request::get('start_date') }}" name="start_date" class="form-control">--}}
{{--                                            </div>--}}
{{--                                            <div class="col-md-2" style="margin-bottom: 10px;">--}}
{{--                                                <label class="form-label">End Date</label>--}}
{{--                                                <input type="date" value="{{ Request::get('end_date') }}" name="end_date" class="form-control">--}}
{{--                                            </div>--}}

                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-search small"></i> Search</button>
                                                <a href="{{ route('blog_list') }}" type="reset" class="btn btn-secondary btn-sm">
                                                    <i class="fas fa-undo small"></i> Reset</a>
                                            </div>
                                        </form>
                            <hr>

                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">ID</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Username</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Video Link</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Publish</th>
                                    <th scope="col">Created Date</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php $index = 1; @endphp
                                @forelse($getRecord as $value)
                                    <tr>
                                        <th scope="row">{{ $index }}</th>
                                        <th scope="row">{{ $value->id }}</th>
                                        <td>
                                            @if(!empty($value->getImage()))
                                                <img src="{{ $value->getImage() }}" style="width: 100px; height: 100px;">
                                            @endif

                                        </td>
                                        <td>{{ $value->user->name }}</td>
                                        <td>{!! strip_tags(Str::substr($value->title,0,15)) !!}</td>
                                        <td>{{ $value->category->name }}</td>
                                        <td>{!! strip_tags(Str::substr($value->video_link,0,20)) !!}</td>
                                        <td>{{ !empty($value->status) ? 'Active' : 'Inactive' }}</td>
                                        <td>{{ !empty($value->is_publish) ? 'Yes' : 'No' }}</td>
                                        <td>{{ date('Y-m-d H:i A', strtotime($value->created_at)) }}</td>
                                        <td>
                                            <a href="{{ route('edit_blog', ['id' => $value->id]) }}" class="btn btn-primary btn-sm">Edit</a>

                                            <a onclick="return confirm('Are you sure you want to delete this record ?')"
                                               href="{{ route('delete_blog', ['id' => $value->id]) }}" class="btn btn-danger btn-sm">Delete</a>
                                        </td>
                                    </tr>
                                    @php $index++ @endphp
                                @empty
                                    <tr>
                                        <td colspan="100%">Record not found.</td>
                                    </tr>
                                @endforelse



                                </tbody>
                            </table>

                            {{ $getRecord->onEachSide(5)->links() }}

                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main><!-- End #main -->

@endsection

@section('script')

@endsection
