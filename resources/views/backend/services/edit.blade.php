@extends('backend.layouts.app')

@section('style')

@endsection


@section('content')

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Edit Service</h5>

                        <!-- Vertical Form -->
                        <form class="row g-3" action="{{ route('update_services', ['id' => $services->id]) }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="col-12">
                                <label class="form-label">Image *</label>
                                <input type="file" name="image" class="form-control" required >
                                @if(!empty($services->image))
                                    <img src="{{ $services->image }}" style="width: 100px; height: 100px;">
                                @endif
                            </div>

                            <div class="col-12">
                                <label class="form-label">Title *</label>
                                <input type="text" name="title" value="{{ $services->title }}" class="form-control" required >
                                <div style="color:red;">{{ $errors->first('title') }}</div>
                            </div>

                            <div class="col-12">
                                <label class="form-label">Description *</label>
                                <textarea class="form-control tinymce-editor" name="description">{{ $services->description }}</textarea>
                            </div>

                            <div class="col-12">
                                <label class="form-label">Country</label>
                                <input type="text" id="country" value="{{ $services->country }}" name="country" class="form-control"  >
                            </div>

                            <div class="col-12">
                                <label class="form-label">Duration</label>
                                <input type="text" id="duration" value="{{ $services->duration }}" name="duration" class="form-control"  >
                            </div>

                            <div class="col-12">
                                <label class="form-label">Price</label>
                                <input type="text" id="price" value="{{ $services->price }}" name="price" class="form-control"  >
                            </div>

                            <div class="col-12">
                                <label for="inputPassword4" class="form-label">Status *</label>
                                <label>
                                    <select class="form-control" name="status">
                                        <option {{ ($services->status === 0) ? 'selected' : '' }} value="0">Inactive</option>
                                        <option {{ ($services->status === 1) ? 'selected' : '' }} value="1">Active</option>
                                    </select>
                                </label>
                            </div>
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
