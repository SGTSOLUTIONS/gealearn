@extends('layouts.auth')

@section('content')
<div class="container-fluid p-0">
    <div class="row g-0 min-vh-100">
        <div class="col-lg-6 d-none d-lg-flex flex-column auth-hero p-5 text-white">
            <a href="/" class="text-white text-decoration-none d-flex align-items-center gap-2 mb-5">
                <span class="fs-2 auth-accent"><i class="bi bi-globe-americas"></i></span>
                <div>
                    <div class="fw-bold fs-5 auth-brand-name">GeoLearn <span class="auth-accent">GIS</span></div>
                    <small>Learn · Explore · Analyse · Create</small>
                </div>
            </a>
            <div class="my-auto">
                <span class="badge mb-3" style="background: rgba(255,255,255,.15); color:#fff;"><i class="bi bi-globe2 auth-accent"></i> GEOSPATIAL LEARNING PLATFORM</span>
                <h1 class="display-5 fw-bold mb-3">Explore the World<br>with <span class="auth-accent">GIS Learning</span></h1>
                <p class="lead mb-4">Interactive courses, real-world datasets and powerful analysis tools for learners of all levels.</p>
                <div class="row g-3">
                    <div class="col-6"><div class="rounded p-3" style="background: rgba(255,255,255,.12);"><i class="bi bi-mortarboard fs-4 auth-accent"></i><div class="fw-semibold mt-2">Learn</div><small>GIS Concepts</small></div></div>
                    <div class="col-6"><div class="rounded p-3" style="background: rgba(255,255,255,.12);"><i class="bi bi-map fs-4 auth-accent"></i><div class="fw-semibold mt-2">Explore</div><small>Real-world Maps</small></div></div>
                    <div class="col-6"><div class="rounded p-3" style="background: rgba(255,255,255,.12);"><i class="bi bi-bar-chart-line fs-4 auth-accent"></i><div class="fw-semibold mt-2">Analyse</div><small>Spatial Data</small></div></div>
                    <div class="col-6"><div class="rounded p-3" style="background: rgba(255,255,255,.12);"><i class="bi bi-people fs-4 auth-accent"></i><div class="fw-semibold mt-2">Grow</div><small>School to Professional</small></div></div>
                </div>
            </div>
            <div class="mt-auto d-flex gap-3 small">
                <span><i class="bi bi-globe auth-accent"></i> Learn the planet.</span>
                <span><i class="bi bi-geo-alt auth-accent"></i> Understand the data.</span>
            </div>
        </div>

        <div class="col-lg-6 d-flex align-items-center justify-content-center p-4" style="background-color: var(--cream);">
            <div class="w-100" style="max-width: 420px;">
                <div class="text-center mb-4 d-lg-none">
                    <span class="fs-1" style="color: var(--forest);"><i class="bi bi-globe-americas"></i></span>
                    <h2 class="h4 fw-bold mb-0 auth-heading">GeoLearn <span style="color: var(--forest);">GIS</span></h2>
                    <small class="auth-muted">Learn · Explore · Analyse · Create</small>
                </div>

                <div class="auth-card p-4 p-md-5">
                    <h1 class="h5 fw-bold mb-1 auth-heading">Welcome Back!</h1>
                    <p class="auth-muted small mb-4">Login to continue your GIS learning journey</p>

                    <form id="loginForm">
                        @csrf

                        <div class="mb-3">
                            <label for="email" class="form-label auth-heading">Email address</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-envelope" style="color: var(--forest);"></i></span>
                                <input type="email" name="email" id="email" class="form-control auth-input" placeholder="Enter your email" autocomplete="username" required>
                            </div>
                            <small class="text-danger" id="emailError"></small>
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label auth-heading">Password</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-lock" style="color: var(--forest);"></i></span>
                                <input type="password" name="password" id="password" class="form-control auth-input" placeholder="Enter your password" autocomplete="current-password" required>
                                <button type="button" class="btn btn-outline-secondary" id="togglePassword" aria-label="Show password" aria-pressed="false">
                                    <i class="bi bi-eye"></i>
                                </button>
                            </div>
                            <small class="text-danger" id="passwordError"></small>
                        </div>

                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" value="1" id="remember">
                                <label class="form-check-label auth-muted" for="remember">Remember me</label>
                            </div>
                            <a href="#" class="small text-decoration-none auth-link" id="forgotPasswordLink">Forgot password?</a>
                        </div>

                        <div id="loginError" class="alert alert-danger py-2 d-none" role="alert" aria-live="polite"></div>

                        <button type="submit" id="loginButton" class="btn auth-btn w-100">
                            <span class="button-text">Login</span>
                            <i class="bi bi-arrow-right ms-1"></i>
                        </button>

                        <p class="text-center small mt-3 mb-0 auth-muted">
                            Don't have an account?
                            <a href="{{ route('register') }}" class="auth-link" id="signupLink">Sign up</a>
                        </p>

                        <div class="text-center mt-3 small auth-muted">
                            <i class="bi bi-shield-check" style="color: var(--forest);"></i> Learn securely. Explore confidently.
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
$(function () {
    $('#togglePassword').on('click', function () {
        const password = $('#password');
        const icon = $(this).find('i');
        const show = password.attr('type') === 'password';
        password.attr('type', show ? 'text' : 'password');
        icon.toggleClass('bi-eye', !show);
        icon.toggleClass('bi-eye-slash', show);
        $(this).attr('aria-pressed', show ? 'true' : 'false').attr('aria-label', show ? 'Hide password' : 'Show password');
    });

    $('#loginForm').on('submit', function (e) {
        e.preventDefault();
        $('.text-danger').text('');
        $('.form-control').removeClass('is-invalid');
        $('#loginError').addClass('d-none').text('');

        const button = $('#loginButton');
        button.prop('disabled', true);
        button.find('.button-text').text('Signing in...');

        $.ajax({
            url: @json(route('login.submit')),
            type: 'POST',
            data: $(this).serialize(),
            headers: {
                'Accept': 'application/json',
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (response) {
                if (response.success && response.redirect) {
                    window.location.href = response.redirect;
                } else {
                    $('#loginError').removeClass('d-none').text('Unable to log in. Please try again.');
                }
            },
            error: function (xhr) {
                if (xhr.status === 422) {
                    const errors = xhr.responseJSON?.errors || {};
                    $.each(errors, function (field, messages) {
                        const input = $('#' + field);
                        const error = $('#' + field + 'Error');
                        if (error.length) {
                            error.text(messages[0]);
                            input.addClass('is-invalid');
                        } else {
                            $('#loginError').removeClass('d-none').text(messages[0]);
                        }
                    });
                } else if (xhr.status === 419) {
                    $('#loginError').removeClass('d-none').text('Session expired. Refresh and try again.');
                } else {
                    $('#loginError').removeClass('d-none').text('Something went wrong. Please try again.');
                }
            },
            complete: function () {
                button.prop('disabled', false);
                button.find('.button-text').text('Login');
            }
        });
    });
});
</script>
@endpush