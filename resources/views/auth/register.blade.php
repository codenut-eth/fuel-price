{{-- resources/views/auth/register.blade.php --}}
@extends('layouts.app')

@section('title', 'Register')

@section('content')
    <section id="features" class="features">
        <div class="container">
            <div class="row">
                <div class="section-content" style="margin-left: auto; margin-right: auto;">
                    <div class="">
                        <h1 class="pb-3" style="font-size:24px;">Register</h1>
                    </div>
                    <form method="POST" id="registerForm" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            {{-- Hidden input for title --}}
                            <input type="hidden" name="title" value="0">

                            <div class="form-group col-md-6">
                                <label for="first_name">First Name<span class="required">*</span></label>
                                <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name">
                                <small id="firstNameError" class="form-text text-danger"></small>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="surname">Last Name<span class="required">*</span></label>
                                <input type="text" class="form-control" id="surname" name="surname" placeholder="Last Name">
                                <small id="lastNameError" class="form-text text-danger"></small>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email">Email<span class="required">*</span></label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter email address">
                            <small id="emailError" class="form-text text-danger"></small>
                        </div>

                        <div class="form-group">
                            <label for="password">Password<span class="required">*</span></label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
                            <small id="passwordError" class="form-text text-danger"></small>
                        </div>

                        <div class="form-group">
                            <label for="confirm_password">Confirm Password<span class="required">*</span></label>
                            <input type="password" class="form-control" id="confirm_password" name="password_confirmation" placeholder="Confirm password">
                            <small id="confirmPasswordError" class="form-text text-danger"></small>
                        </div>
                        
                         <div class="form-group">
                            <label for="date_of_birth">Date of birth<span class="required">*</span></label>
                            <input type="date" class="form-control" id="date_of_birth" name="date_of_birth" placeholder="">
                            <small id="dobError" class="form-text text-danger"></small>
                        </div>
                        
                        
                          <div class="form-group">
                                <label for="phone">Phone<span class="required">*</span></label>
                                <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone') }}">
                                 <small id="phoneError" class="form-text text-danger"></small>
                          </div>
                          
                          
                          <div class="form-group">
                            <label for="address">Address<span class="required">*</span></label>
                            <input type="text" class="form-control" id="address" name="address" placeholder="Enter Address">
                            <small id="addressError" class="form-text text-danger"></small>
                        </div>
                        
                        
                           <div class="form-group">
                            <label for="state">State<span class="required">*</span></label>
                            <input type="text" class="form-control" id="state" name="state" placeholder="Enter State">
                            <small id="stateError" class="form-text text-danger"></small>
                        </div>
                        
                        
                           <div class="form-group">
                            <label for="city">City<span class="required">*</span></label>
                            <input type="text" class="form-control" id="city" name="city" placeholder="Enter City ">
                            <small id="cityError" class="form-text text-danger"></small>
                        </div>
                        
                        
                        <div class="form-group">
                            <label for="identity_doc">Identity doc
                              <span class="required">*</span></label>
                            <input type="file" class="form-control" id="identity_doc" name="identity_doc" placeholder="Enter State">
                            <small>Identity doc – which could be Voters Card, National Identity Card, International Passport or Driver’s License</small>
                            <small id="docError" class="form-text text-danger"></small>
                        </div>
                        
                        
                        
                        

{{--                        <div class="form-group">--}}
{{--                            <label for="role">Role<span class="required">*</span></label>--}}
{{--                            <select class="form-control" id="role" name="role">--}}
{{--                                <option value="">Select a role</option>--}}
{{--                                <option value="User">User</option>--}}
{{--                                <option value="Station Manager">Station Manager</option>--}}
{{--                            </select>--}}
{{--                            <small id="roleError" class="form-text text-danger"></small>--}}
{{--                        </div>--}}
                        <div class="form-group">
                            <label>Role<span class="required">*</span></label>
                            <div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="role" id="roleUser" value="User" checked {{ old('role') == 'User' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="roleUser">User</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="role" id="roleStationManager" value="Station Manager" {{ old('role') == 'Station Manager' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="roleStationManager">Station Manager</label>
                                </div>
                            </div>
                            <small id="roleError" class="form-text text-danger">
                                @error('role') {{ $message }} @enderror
                            </small>
                        </div>


                        {{-- Uncomment and include additional fields if needed --}}
                        {{--
                        <div class="form-group">
                          <label for="street_address">Street Address<span class="required">*</span></label>
                          <input type="text" class="form-control" id="street_address" name="street_address" placeholder="Enter street address">
                          <small id="streetAddressError" class="form-text text-danger"></small>
                        </div>
                        --}}

                        <div class="form-group">
                            <input type="hidden" name="form_type" value="register">
                            <button type="submit" class="btn btn-primary">Register</button>
                        </div>
                    </form>
                    <p>Already have an account? <a href="{{ route('login') }}">Login</a></p>
                </div>
            </div>
        </div>
    </section>

    <style>
        #registerForm label .required {
            color: red;
        }
    </style>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#registerForm').on('submit', function(event) {
                event.preventDefault(); // Prevent default form submission

                let valid = true;

                // Clear previous errors
                $('#firstNameError').text('');
                $('#lastNameError').text('');
                $('#emailError').text('');
                
                $('#dobError').text('');
                $('#cityError').text('');
                $('#stateError').text('');
                $('#addressError').text('');
                
                
                $('#passwordError').text('');
                $('#confirmPasswordError').text('');
                $('#roleError').text('');

                // First Name validation
                const firstName = $('#first_name').val().trim();
                if (firstName === '') {
                    $('#firstNameError').text('First Name is required');
                    valid = false;
                }
                
                const dob = $('#date_of_birth').val().trim();

                if (dob === '') {
                    $('#dobError').text('Date of birth is required');
                    valid = false;
                } else {
                    const dobDate = new Date(dob);
                    const today = new Date();
                    const age = today.getFullYear() - dobDate.getFullYear();
                    const monthDiff = today.getMonth() - dobDate.getMonth();
                    const dayDiff = today.getDate() - dobDate.getDate();
                
                    const isUnder18 = (age < 18) || (age === 18 && (monthDiff < 0 || (monthDiff === 0 && dayDiff < 0)));
                
                    if (isUnder18) {
                        $('#dobError').text('You must be at least 18 years old');
                        valid = false;
                    } else {
                        $('#dobError').text('');
                    }
                }



                // Last Name validation
                const lastName = $('#surname').val().trim();
                if (lastName === '') {
                    $('#lastNameError').text('Last Name is required');
                    valid = false;
                }
                
                
                 // Last Name validation
                const Address = $('#address').val().trim();
                if (Address === '') {
                    $('#addressError').text('Address is required');
                    valid = false;
                }
                
                // Last Name validation
                const Phone = $('#phone').val().trim();
                if (Phone === '') {
                    $('#phoneError').text('Phone is required');
                    valid = false;
                }
                
                 // Last Name validation
                const city = $('#city').val().trim();
                if (city === '') {
                    $('#cityError').text('City is required');
                    valid = false;
                }
                
                
                
                
                 // Last Name validation
                const state = $('#state').val().trim();
                if (state === '') {
                    $('#stateError').text('State is required');
                    valid = false;
                }
                
                
                   // Last Name validation
               const image = $('#identity_doc')[0].files[0]; // Get the first selected file

                if (!image) {
                    $('#docError').text('Identity document is required');
                    valid = false;
                } else {
                    $('#docError').text(''); // Clear error if valid
                }
                                
                

                // Email validation
                const email = $('#email').val().trim();
                const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (email === '') {
                    $('#emailError').text('Email is required');
                    valid = false;
                } else if (!emailPattern.test(email)) {
                    $('#emailError').text('Invalid email format');
                    valid = false;
                }

               const password = $('#password').val().trim();
                const capitalLetterRegex = /[A-Z]/;
                
                if (password === '') {
                    $('#passwordError').text('Password is required');
                    valid = false;
                } else if (password.length < 6) {
                    $('#passwordError').text('Password must be at least 6 characters long');
                    valid = false;
                } else if (!capitalLetterRegex.test(password)) {
                    $('#passwordError').text('Password must contain at least one uppercase letter');
                    valid = false;
                } else {
                    $('#passwordError').text(''); // Clear error if valid
                }

                // Confirm Password validation
                const confirmPassword = $('#confirm_password').val().trim();
                if (confirmPassword === '') {
                    $('#confirmPasswordError').text('Confirm Password is required');
                    valid = false;
                } else if (password !== confirmPassword) {
                    $('#confirmPasswordError').text('Passwords do not match');
                    valid = false;
                }

                // Role validation
                const role = $('input[name="role"]:checked').val();

                if (!role) {
                    $('#roleError').text('Role is required');
                    valid = false;
                } else {
                    $('#roleError').text(''); // Clear any previous error messages
                }

                if (valid) {
                    const formData = new FormData(this);

                    $.ajax({
                        url: '{{ route('register.submit') }}',
                        type: 'POST',
                        data: formData,
                        processData: false,
                        contentType: false,
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        success: function(response) {
                            $('#registerForm')[0].reset();
                            alert(response.message);
                            window.location.href = '{{ route('login') }}';
                        },
                        error: function(jqXHR) {
                            if (jqXHR.status === 422) {
                                let errors = jqXHR.responseJSON.errors;
                                $.each(errors, function(key, value) {
                                    $('#' + key.charAt(0).toUpperCase() + key.slice(1) + 'Error').text(value[0]);
                                });
                            } else {
                                alert('An error occurred. Please try again.');
                            }
                        }
                    });
                }
            });
        });
    </script>
@endpush
