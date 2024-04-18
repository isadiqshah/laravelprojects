@extends('backend.layouts.app')

@section('style')

@endsection


@section('content')

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Add New Image</h5>

                        <!-- Vertical Form -->
                        <form class="row g-3" action="" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="col-12">
                                <label class="form-label">Image *</label>
                                <input type="file" name="image_file" class="form-control" required >
                            </div>

                            <div class="col-12">
                                <label class="form-label">Category *</label>
                                <select class="form-control" name="category_id" required>
                                    <option value="">Select Category</option>
                                    @foreach($categories as $value)
                                        <option value="{{ $value->id }}">{{ $value->name }}</option>
                                    @endforeach
                                    <div style="color:red;">{{ $errors->first('category_id') }}</div>
                                </select>
                            </div>

                            <div class="col-12">
                                <label for="inputPassword4" class="form-label">Publish *</label>
                                <label>
                                    <select class="form-control" name="is_publish">
                                        <option {{ (old('is_publish') === 0) ? 'selected' : '' }} value="0">No</option>
                                        <option {{ (old('is_publish') === 1) ? 'selected' : '' }} value="1">Yes</option>
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
