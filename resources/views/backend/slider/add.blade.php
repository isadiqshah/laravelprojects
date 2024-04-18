@extends('backend.layouts.app')

@section('style')

@endsection


@section('content')

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Add New Slider</h5>

                        <!-- Vertical Form -->
                        <form class="row g-3" action="" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="col-12">
                                <label class="form-label">Title *</label>
                                <input type="text" name="title" class="form-control" required >
                                <div style="color:red;">{{ $errors->first('title') }}</div>
                            </div>


                            <div class="col-12">
                                <label class="form-label">Description *</label>
                                <textarea class="form-control tinymce-editor" name="description"></textarea>
                            </div>

                            <div class="col-12">
                                <label class="form-label">Image *</label>
                                <input type="file" name="image_file" class="form-control" required >
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

@endsection
