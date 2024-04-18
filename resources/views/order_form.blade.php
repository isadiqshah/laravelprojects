<!-- Modal -->
<div class="modal fade" size="large" id="order_form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title font-weight-bold" id="exampleModalLabel">Order Form</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <h5 class="modal-title mt-2 text-center" id="exampleModalLabel">Please Fill the Form Correctly</h5>
            <div class="modal-body">
                <form action="{{ route('store_order') }}" method="POST" id="add_user_form" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="service_name" value="Travel Itinerary">
                    <div class="row">
                        <div class="col-4">
                            <label class="form-label mt-2 mb-0">First Name *</label>
                            <input type="text" name="fname" placeholder="First Name" value="{{ old('fname') }}"
                                   class="form-control" id="inputFirstName" required>
                            <div style="color:red;">{{ $errors->first('fname') }}</div>
                        </div>
                        <div class="col-4">
                            <label class="form-label mt-2 mb-0">Last Name *</label>
                            <input type="text" name="lname" placeholder="Last Name" value="{{ old('lname') }}"
                                   class="form-control" id="inputLastName" required>
                            <div style="color:red;">{{ $errors->first('lname') }}</div>
                        </div>
                        <div class="col-4">
                            <label for="inputGender" class="form-label mt-2 mb-0">Gender *</label>
                            <select name="gender" id="inputGender" class="form-select" required>
                                <option value="">Select</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="other">Other</option>
                            </select>
                            <div style="color:red;">{{ $errors->first('gender') }}</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <label class="form-label mt-3 mb-0">Email *</label>
                            <input type="text" name="email" placeholder="example@gmail.com" value="{{ old('email') }}"
                                   class="form-control" id="email" required>
                            <div style="color:red;">{{ $errors->first('email') }}</div>
                        </div>
                        <div class="col-4">
                            <label class="form-label mt-3 mb-0">Date of Birth *</label>
                            <input type="date" name="dob" value="{{ old('dob') }}" class="form-control" id="inputDob" required>
                            <div style="color:red;">{{ $errors->first('dob') }}</div>
                        </div>
                        <div class="col-4">
                            <label class="form-label mt-3 mb-0">Your Country *</label>
                            <select name="country" class="form-select" id="country" required>
                                @foreach(getCountries() as $index => $country)
                                    <option data-country-code="{{$country['phone_code']}}" value="{{$index}}">{{$country['name']}}</option>
                                @endforeach
                            </select>
                            <div style="color:red;">{{ $errors->first('country') }}</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <label class="form-label mt-3 mb-0">Passport Number *</label>
                            <input type="text" name="passport_number" placeholder="AB1234567" value="{{ old('passport_number') }}"
                                   class="form-control" id="passport_number" required>
                            <div style="color:red;">{{ $errors->first('passport_number') }}</div>
                        </div>
                        <div class="col-4">
                            <label class="form-label mt-3 mb-0">Passport Issue Date *</label>
                            <input type="date" name="passport_issue" value="{{ old('passport_issue') }}"
                                   class="form-control" id="passport_issue" required>
                            <div style="color:red;">{{ $errors->first('passport_issue') }}</div>
                        </div>
                        <div class="col-4">
                            <label class="form-label mt-3 mb-0">Passport Expiry Date *</label>
                            <input type="date" name="passport_expiry" value="{{ old('passport_expiry') }}"
                                   class="form-control" id="passport_expiry" required>
                            <div style="color:red;">{{ $errors->first('passport_expiry') }}</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <label class="form-label mt-3 mb-0">No of Applicants *</label>
                            <input type="text" name="applicants" placeholder="For Required Applicants" value="{{ old('applicants') }}"
                                   class="form-control" id="applicants" required>
                            <div style="color:red;">{{ $errors->first('applicants') }}</div>
                        </div>
                        <div class="col-4">
                            <label class="form-label mt-3 mb-0">Visa Type *</label>
                            <select name="visa_type" id="visa_type" class="form-select" required>
                                <option value="male">Select</option>
                                <option value="tourist">Tourist</option>
                                <option value="work">Work</option>
                                <option value="student">Student</option>
                            </select>
                            <div style="color:red;">{{ $errors->first('visa_type') }}</div>
                        </div>
                        <div class="col-4">
                            <label class="form-label mt-3 mb-0">No of Days Required *</label>
                            <input type="text" name="days_required" placeholder="Input Required Days" value="{{ old('days_required') }}"
                                   class="form-control" id="days_required" required>
                            <div style="color:red;">{{ $errors->first('days_required') }}</div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-4">
                            <label class="form-label mt-3 mb-0">Mobile Number *</label>
                            <div class="row">
                                <div class="col-3">
                                    <input type="text" name="country_code" id="country_code" class="form-control " readonly>
                                </div>
                                <input type="text" name="mobile_number" placeholder="000 1234567" value="{{ old('mobile_number') }}"
                                       class="col-9 form-control "style="margin-left: -13px;" id="mobile_number" required>
                            </div>
                        </div>
                        <div class="col-4">
                            <label class="form-label mt-3 mb-0">Arrival Date *</label>
                            <input type="date" name="arrival_date" value="{{ old('arrival_date') }}"
                                   class="form-control" id="arrival_date" required>
                            <div style="color:red;">{{ $errors->first('arrival_date') }}</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <label class="form-label mt-3 mb-0">Passport Copy *</label>
                            <input type="file" name="passport_copy" class="form-control" id="passport_copy" required>
                            <div style="color:red;">{{ $errors->first('passport_copy') }}</div>
                        </div>
                    </div>
                    <div class="modal-footer mt-2">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
@section('script')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const countrySelect = document.getElementById('country');
        const countryCodeInput = document.getElementById('country_code');

        // Event listener for country select change
        countrySelect.addEventListener('change', function() {
            const selectedOption = countrySelect.options[countrySelect.selectedIndex];
            console.log(selectedOption,'asdf');
            const countryCode = selectedOption.getAttribute('data-country-code');

            // Update the country code input field
            countryCodeInput.value = countryCode || ''; // Use empty string if country code is not found
        });
    });
</script>
@endsection
