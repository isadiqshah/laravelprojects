@extends('backend.layouts.app')

@section('style')
@endsection


@section('content')

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Change Password</h5>

                        <!-- Vertical Form -->
                        <form class="row g-3" action="" method="POST" id="add_user_form">
                            @csrf

                            <div class="col-12">
                                <label for="inputPassword4" class="form-label">Old Password</label>
                                <input type="password"  name="password" class="form-control" id="inputPassword4">
                                <div style="color:red;">{{ $errors->first('password') }}</div>
                            </div>

                            <div class="col-12">
                                <label for="inputPassword4" class="form-label">New Password</label>
                                <input type="password"  name="password" class="form-control" id="inputPassword4">
                                <div style="color:red;">{{ $errors->first('password') }}</div>
                            </div>

                            <div class="col-12">
                                <label for="inputPassword4" class="form-label">Confirm Password</label>
                                <input type="password"  name="password" class="form-control" id="inputPassword4">
                                <div style="color:red;">{{ $errors->first('password') }}</div>
                            </div>

                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Change Password</button>
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
