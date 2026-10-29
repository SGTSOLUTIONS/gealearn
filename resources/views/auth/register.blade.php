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
                <span class="badge mb-3" style="background: rgba(255,255,255,.15); color:#fff;"><i class="bi bi-globe2 auth-accent"></i> START YOUR GIS JOURNEY</span>
                <h1 class="display-5 fw-bold mb-3">Learn GIS.<br><span class="auth-accent">Explore More.</span></h1>
                <p class="lead mb-4">Create your account to explore interactive maps, learn geospatial concepts and develop spatial analysis skills.</p>
                <div class="row g-3">
                    <div class="col-6"><div class="rounded p-3" style="background: rgba(255,255,255,.12);"><i class="bi bi-mortarboard fs-4 auth-accent"></i><div class="fw-semibold mt-2">Learn</div><small>GIS Concepts</small></div></div>
                    <div class="col-6"><div class="rounded p-3" style="background: rgba(255,255,255,.12);"><i class="bi bi-map fs-4 auth-accent"></i><div class="fw-semibold mt-2">Explore</div><small>Interactive Maps</small></div></div>
                    <div class="col-6"><div class="rounded p-3" style="background: rgba(255,255,255,.12);"><i class="bi bi-bar-chart-line fs-4 auth-accent"></i><div class="fw-semibold mt-2">Analyse</div><small>Spatial Data</small></div></div>
                    <div class="col-6"><div class="rounded p-3" style="background: rgba(255,255,255,.12);"><i class="bi bi-people fs-4 auth-accent"></i><div class="fw-semibold mt-2">Grow</div><small>Your Skills</small></div></div>
                </div>
            </div>
            <div class="mt-auto d-flex gap-3 small">
                <span><i class="bi bi-globe auth-accent"></i> Learn the planet.</span>
                <span><i class="bi bi-geo-alt auth-accent"></i> Understand the data.</span>
            </div>
        </div>

        <div class="col-lg-6 d-flex align-items-center justify-content-center p-4" style="background-color: var(--cream);">
            <div class="w-100" style="max-width: 460px;">
                <div class="text-center mb-4 d-lg-none">
                    <span class="fs-1" style="color: var(--forest);"><i class="bi bi-globe-americas"></i></span>
                    <h2 class="h4 fw-bold mb-0 auth-heading">GeoLearn <span style="color: var(--forest);">GIS</span></h2>
                    <small class="auth-muted">Learn · Explore · Analyse · Create</small>
                </div>

                <div class="auth-card p-4 p-md-5">
                    <h1 class="h5 fw-bold mb-1 auth-heading">Create Account</h1>
                    <p class="auth-muted small mb-4">Join GeoLearn GIS and start exploring.</p>

                    <form id="registerForm">
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label auth-heading">Full name</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-person" style="color: var(--forest);"></i></span>
                                <input type="text" name="name" id="name" class="form-control auth-input" placeholder="Enter your full name" autocomplete="name" required>
                            </div>
                            <small class="text-danger" id="nameError"></small>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label auth-heading">Email address</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-envelope" style="color: var(--forest);"></i></span>
                                <input type="email" name="email" id="email" class="form-control auth-input" placeholder="Enter your email" autocomplete="email" required>
                            </div>
                            <small class="text-danger" id="emailError"></small>
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label auth-heading">Password</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-lock" style="color: var(--forest);"></i></span>
                                <input type="password" name="password" id="password" class="form-control auth-input" placeholder="Minimum 8 characters" autocomplete="new-password" required>
                                <button type="button" class="btn btn-outline-secondary gis-password-toggle" data-password="password" aria-label="Show password">
                                    <i class="bi bi-eye"></i>
                                </button>
                            </div>
                            <small class="text-danger" id="passwordError"></small>
                        </div>

                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label auth-heading">Confirm password</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-shield-lock" style="color: var(--forest);"></i></span>
                                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control auth-input" placeholder="Confirm your password" autocomplete="new-password" required>
                                <button type="button" class="btn btn-outline-secondary gis-password-toggle" data-password="password_confirmation" aria-label="Show password">
                                    <i class="bi bi-eye"></i>
                                </button>
                            </div>
                            <small class="text-danger" id="password_confirmationError"></small>
                        </div>

                        <div id="registerError" class="alert alert-danger py-2 d-none" role="alert" aria-live="polite"></div>

                        <button type="submit" id="registerButton" class="btn auth-btn w-100">
                            <span class="button-text">Create Account</span>
                            <i class="bi bi-arrow-right ms-1"></i>
                        </button>

                        <p class="text-center small mt-3 mb-0 auth-muted">
                            Already have an account?
                            <a href="{{ route('login') }}" class="auth-link">Login</a>
                        </p>

                        <div class="text-center mt-3 small auth-muted">
                            <i class="bi bi-shield-check" style="color: var(--forest);"></i> Your learning journey starts here.
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
    $('.gis-password-toggle').on('click', function () {
        const input = $('#' + $(this).data('password'));
        const icon = $(this).find('i');
        const show = input.attr('type') === 'password';
        input.attr('type', show ? 'text' : 'password');
        icon.toggleClass('bi-eye', !show);
        icon.toggleClass('bi-eye-slash', show);
        $(this).attr('aria-label', show ? 'Hide password' : 'Show password');
    });

    $('#registerForm').on('submit', function (e) {
        e.preventDefault();
        $('.text-danger').text('');
        $('.form-control').removeClass('is-invalid');
        $('#registerError').addClass('d-none').text('');

        const button = $('#registerButton');
        button.prop('disabled', true);
        button.find('.button-text').text('Creating account...');

        $.ajax({
            url: @json(route('register.submit')),
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
                    $('#registerError').removeClass('d-none').text('Unable to create account. Please try again.');
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
                            if (input.length) input.addClass('is-invalid');
                        } else {
                            $('#registerError').removeClass('d-none').text(messages[0]);
                        }
                    });
                } else if (xhr.status === 419) {
                    $('#registerError').removeClass('d-none').text('Session expired. Refresh and try again.');
                } else {
                    $('#registerError').removeClass('d-none').text('Something went wrong. Please try again.');
                }
            },
            complete: function () {
                button.prop('disabled', false);
                button.find('.button-text').text('Create Account');
            }
        });
    });
});
</script>
@endpush