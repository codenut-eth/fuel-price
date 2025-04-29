@extends('layouts.app')

@section('title', 'Reset Password')

@section('content')
<section id="features" class="features">
    <div class="container">
        <div class="row">
            <div class="mt-5" style="margin-left: auto; margin-right: auto; width: 500px; margin-bottom: 200px;">
                <div>
                    <h1>Reset Password</h1>
                </div>

                <form method="POST" id="resetForm">
                    @csrf

                    <!-- Add this token field for the reset link -->
                    <input type="hidden" name="token" value="{{ $token }}">

                    <!-- Success Message -->
                    <div id="successMessage" class="alert alert-success d-none"></div>

                    <!-- Error Message -->
                    <small id="resetError" class="form-text text-danger"></small>

                    <!--<div class="form-group">-->
                    <!--    <label for="email">Email <span class="text-danger">*</span></label>-->
                    <!--    <input type="email" class="form-control" id="email" name="email" value="{{ old('email', request()->email) }}" required>-->
                    <!--    <small id="emailError" class="form-text text-danger"></small>-->
                    <!--</div>-->

                    <div class="form-group">
                        <label for="password">New Password <span class="text-danger">*</span></label>
                        <input type="password" class="form-control" id="password" name="password">
                        <small id="passwordError" class="form-text text-danger"></small>
                    </div>

                    <div class="form-group">
                        <label for="password_confirmation">Confirm Password <span class="text-danger">*</span></label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                        <small id="confirmError" class="form-text text-danger"></small>
                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-primary mt-3" value="Reset Password">
                    </div>
                </form>

                <p class="mt-3">Remembered your password? <a href="{{ route('login') }}">Login</a></p>
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script>
    $(document).ready(function () {
        $('#resetForm').on('submit', function (event) {
            event.preventDefault();

            let valid = true;

            // Clear messages
            $('#emailError, #passwordError, #confirmError, #resetError').text('');
            $('#successMessage').addClass('d-none').text('');

         
            const password = $('#password').val().trim();
            const confirm = $('#password_confirmation').val().trim();

            const upperCase = /[A-Z]/;

        

            if (password.length < 6) {
                $('#passwordError').text('Password must be at least 6 characters');
                valid = false;
            } else if (!upperCase.test(password)) {
                $('#passwordError').text('Password must contain at least one uppercase letter');
                valid = false;
            }

            if (password !== confirm) {
                $('#confirmError').text('Passwords do not match');
                valid = false;
            }

            if (valid) {
                const formData = new FormData(this);

                $.ajax({
                 
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    success: function (response) {
                        if (response.status) {
                            $('#successMessage').removeClass('d-none').text('Password has been reset successfully.');
                            $('#resetForm')[0].reset();
                        } else {
                            $('#resetError').text(response.message);
                        }
                    },
                    error: function (jqXHR) {
                        if (jqXHR.status === 422) {
                            let errors = jqXHR.responseJSON.errors;
                            $.each(errors, function (key, value) {
                                $('#' + key + 'Error').text(value[0]);
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
