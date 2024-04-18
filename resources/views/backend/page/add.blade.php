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
                        <h5 class="card-title">Add New Page</h5>

                        <!-- Vertical Form -->
                        <form class="row g-3" action="" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="col-12">
                                <label class="form-label">Slug *</label>
                                <input type="text" name="slug" value="{{ old('slug') }}" class="form-control" required >
                            </div>

                            <div class="col-12">
                                <label class="form-label">Title *</label>
                                <input type="text" name="title" value="{{ old('title') }}" class="form-control" required >
                            </div>

                            <div class="col-12">
                                <label class="form-label">Description *</label>
                                <textarea class="form-control tinymce-editor"  name="description">{{ old('meta_title') }}</textarea>
                            </div>

                            <hr>

                            <div class="col-12">
                                <label class="form-label">Meta Title</label>
                                <input type="text" name="meta_title" value="{{ old('meta_title') }}" class="form-control">
                            </div>

                            <div class="col-12">
                                <label class="form-label">Meta Description</label>
                                <textarea type="text" name="meta_description" value="{{ old('meta_description') }}" class="form-control"></textarea>
                            </div>

                            <div class="col-12">
                                <label class="form-label">Meta Keywords</label>
                                <input type="text" name="meta_keywords" value="{{ old('meta_keywords') }}" class="form-control">
                            </div>

                            <hr>


                            <div class="col-12" style="margin-top: 30px">
                                <button type="submit" class="btn btn-primary">Submit</button>
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
