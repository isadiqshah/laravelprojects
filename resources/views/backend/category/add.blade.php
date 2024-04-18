@extends('backend.layouts.app')

@section('style')
@endsection


@section('content')

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Add New Category</h5>

                        <!-- Vertical Form -->
                        <form class="row g-3" action="" method="POST" id="add_user_form">
                            @csrf
                            <div class="col-12">
                                <label for="inputNanme4" class="form-label">Name *</label>
                                <input type="text" name="name" value="{{ old('name') }}" class="form-control" required id="inputNanme4">
                                <div style="color:red;">{{ $errors->first('name') }}</div>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Title *</label>
                                <input type="text" name="title" value="{{ old('title') }}" class="form-control" required >
                                <div style="color:red;">{{ $errors->first('title') }}</div>
                            </div>

                            <hr>

                            <div class="col-12">
                                <label class="form-label">Meta Title *</label>
                                <input type="text" name="meta_title" value="{{ old('meta_title') }}" class="form-control" required >
                                <div style="color:red;">{{ $errors->first('meta_title') }}</div>
                            </div>

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
                                <label for="inputPassword4" class="form-label">Menu *</label>
                                <label>
                                    <select class="form-control" name="is_menu">
                                        <option {{ (old('status') === 0) ? 'selected' : '' }} value="0">No</option>
                                        <option {{ (old('status') === 1) ? 'selected' : '' }} value="1">Yes</option>
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
                            <div class="col-12">
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
