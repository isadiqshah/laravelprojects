@extends('backend.layouts.app')

@section('style')
@endsection


@section('content')

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Account Setting</h5>

                        <!-- Vertical Form -->
                        <form class="row g-3" action="" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="col-12">
                                <label class="form-label">Name</label>
                                <input type="text"  name="name" value="{{ $accountSetting->name }}" class="form-control">
                                <div style="color:red;">{{ $errors->first('name') }}</div>
                            </div>

                            <div class="col-12">
                                <label class="form-label">Email</label>
                                <input type="text"  name="password" value="{{ $accountSetting->email }}" class="form-control">
                                <div style="color:red;">{{ $errors->first('email') }}</div>
                            </div>

                            <div class="col-12">
                                <label class="form-label">Profile Picture</label>
                                <input type="file"  name="profile_picture" class="form-control">
                                <div style="color:red;">{{ $errors->first('profile_picture') }}</div>
                                <img src="{{ $accountSetting->getProfile }}">
                            </div>

                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Update Setting</button>
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
