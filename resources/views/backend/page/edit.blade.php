@extends('backend.layouts.app')

@section('style')
    <link rel="stylesheet" type="text/css" href="{{ asset('tagsinput/bootstrap-tagsinput.css') }}">
@endsection


@section('content')

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Edit Page</h5>

                        <!-- Vertical Form -->
                        <form class="row g-3" action="{{ route('update_page', ['id' => $getRecord->id]) }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="col-12">
                                <label class="form-label">Slug *</label>
                                <input type="text" name="slug" value="{{ $getRecord->slug }}" class="form-control" required >
                            </div>

                            <div class="col-12">
                                <label class="form-label">Title *</label>
                                <input type="text" name="title" value="{{ $getRecord->title }}" class="form-control" required >
                            </div>

                            <div class="col-12">
                                <label class="form-label">Description *</label>
                                <textarea class="form-control tinymce-editor"  name="description">{{ $getRecord->description }}</textarea>
                            </div>

                            <hr>

                            <div class="col-12">
                                <label class="form-label">Meta Title</label>
                                <input type="text" name="meta_title" value="{{ $getRecord->meta_title }}" class="form-control">
                            </div>

                            <div class="col-12">
                                <label class="form-label">Meta Description</label>
                                <textarea type="text" name="meta_description" value="{{ $getRecord->meta_description}}" class="form-control"></textarea>
                            </div>

                            <div class="col-12">
                                <label class="form-label">Meta Keywords</label>
                                <input type="text" name="meta_keywords" value="{{ $getRecord->meta_keywords}}" class="form-control">
                            </div>

                            <hr>


                            <div class="col-12" style="margin-top: 30px">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('script')

@endsection
