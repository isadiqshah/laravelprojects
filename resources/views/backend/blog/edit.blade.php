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
                        <h5 class="card-title">Edit Blog</h5>

                        <!-- Vertical Form -->
                        <form class="row g-3" action="" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="col-12">
                                <label class="form-label">Title *</label>
                                <input type="text" name="title" class="form-control" value="{{ $getRecord->title }}" required >
                            </div>
                            <div class="col-12">
                                <label class="form-label">Category *</label>
                                <select class="form-control" name="category_id" required>
                                    <option value="">Select Category</option>
                                    @foreach($getCategory as $value)
                                        <option {{ ($getRecord->category_id === $value->id) ? 'selected' : '' }}
                                                value="{{ $value->id }}">{{ $value->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Image</label>
                                <input type="file" name="image_file" class="form-control" >
                                @if(!empty($getRecord->getImage()))
                                    <img src="{{ $getRecord->getImage() }}" style="width: 100px; height: 100px;">
                                @endif
                            </div>

                            <div class="col-12">
                                <label class="form-label">Description *</label>
                                <textarea class="form-control tinymce-editor" name="description">{{ $getRecord->description }}</textarea>
                            </div>

                            <div class="col-12">
                                <label class="form-label">Video Link</label>
                                <input type="text" id="video_link" value="{{ $getRecord->video_link }}" name="video_link" class="form-control"  >
                            </div>

                            <div class="col-12">
                                @php
                                $tags = '';
                                foreach($getRecord->getTag as $value)
                                {
                                   $tags .= $value->name. ',';
                                }
                                @endphp
                                <label class="form-label">Tags</label>
                                <input type="text" value="{{ $tags }}" id="tags" name="tags" class="form-control"  >
                            </div>
                            <hr>

                            <div class="col-12">
                                <label class="form-label">Meta Description</label>
                                <textarea type="text" name="meta_description" class="form-control">{{ $getRecord->meta_description }}</textarea>
                                <div style="color:red;">{{ $errors->first('meta_description') }}</div>
                            </div>

                            <div class="col-12">
                                <label class="form-label">Meta Keywords</label>
                                <input type="text" name="meta_keywords" value="{{ $getRecord->meta_keywords }}" class="form-control">
                                <div style="color:red;">{{ $errors->first('meta_keywords') }}</div>
                            </div>

                            <hr>

                            <div class="col-12">
                                <label for="inputPassword4" class="form-label">Publish *</label>
                                <label>
                                    <select class="form-control" name="is_publish">
                                        <option {{ ($getRecord->is_publish === 1) ? 'selected' : '' }} value="1">Yes</option>
                                        <option {{ ($getRecord->is_publish === 0) ? 'selected' : '' }} value="0">No</option>
                                    </select>
                                </label>
                            </div>

                            <div class="col-12">
                                <label for="inputPassword4" class="form-label">Status *</label>
                                <label>
                                    <select class="form-control" name="status">
                                        <option {{ ($getRecord->status === 1) ? 'selected' : '' }} value="1">Active</option>
                                        <option {{ ($getRecord->status === 0) ? 'selected' : '' }} value="0">Inactive</option>
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
