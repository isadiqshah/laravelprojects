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
                        <h5 class="card-title">Add New Blog</h5>

                        <!-- Vertical Form -->
                        <form class="row g-3" action="" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="col-12">
                                <label class="form-label">Title *</label>
                                <input type="text" name="title" class="form-control" required >
                                <div style="color:red;">{{ $errors->first('title') }}</div>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Category *</label>
                                <select class="form-control" name="category_id" required>
                                    <option value="">Select Category</option>
                                    @foreach($getCategory as $value)
                                        <option value="{{ $value->id }}">{{ $value->name }}</option>
                                    @endforeach
                                    <div style="color:red;">{{ $errors->first('category_id') }}</div>
                                </select>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Image *</label>
                                <input type="file" name="image_file" class="form-control" required >
                            </div>

                            <div class="col-12">
                                <label class="form-label">Description *</label>
                                <textarea class="form-control tinymce-editor" name="description"></textarea>
                            </div>

                            <div class="col-12">
                                <label class="form-label">Video Link</label>
                                <input type="text" id="video_link" name="video_link" class="form-control"  >
                            </div>

                            <div class="col-12">
                                <label class="form-label">Tags</label>
                                <input type="text" id="tags" name="tags" class="form-control"  >
                            </div>
                            <hr>

                            <div class="col-12">
                                <label class="form-label">Meta Description</label>
                                <textarea type="text" name="meta_description" value="{{ old('meta_description') }}" class="form-control"></textarea>
                                <div style="color:red;">{{ $errors->first('meta_description') }}</div>
                            </div>

                            <div class="col-12">
                                <label class="form-label">Meta Keywords</label>
                                <input type="text" name="meta_keywords" value="{{ old('meta_keywords') }}" class="form-control">
                                <div style="color:red;">{{ $errors->first('meta_keywords') }}</div>
                            </div>

                            <hr>

                            <div class="col-12">
                                <label for="inputPassword4" class="form-label">Publish *</label>
                                <label>
                                    <select class="form-control" name="is_publish">
                                        <option {{ (old('is_publish') === 0) ? 'selected' : '' }} value="0">No</option>
                                        <option {{ (old('is_publish') === 1) ? 'selected' : '' }} value="1">Yes</option>
                                    </select>
                                </label>
                            </div>


                            <div class="col-12">
                                <label for="inputPassword4" class="form-label">Status *</label>
                                <label>
                                    <select class="form-control" name="status">
                                        <option {{ (old('status') === 0) ? 'selected' : '' }} value="0">Inactive</option>
                                        <option {{ (old('status') === 1) ? 'selected' : '' }} value="1">Active</option>
                                    </select>
                                </label>
                            </div>
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
    <script src="{{ asset('tagsinput/bootstrap-tagsinput.js') }}"></script>

    <script>
        $("#tags").tagsinput('items')
    </script>

@endsection
