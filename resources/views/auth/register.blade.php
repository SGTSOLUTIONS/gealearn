
@extends('layouts.auth')

@section('content')

<main class="gis-login-page">

    <!-- LEFT GIS PANEL: HIDDEN ON MOBILE BY EXISTING CSS -->
    <section class="gis-hero">

        <a href="/" class="gis-brand">
            <span class="gis-brand-icon">
                <i class="bi bi-globe-americas"></i>
            </span>

            <span class="gis-brand-content">
                <span class="gis-brand-name">
                    GeoLearn <span>GIS</span>
                </span>
                <small>Learn · Explore · Analyse · Create</small>
            </span>
        </a>

        <div class="gis-hero-content">
            <span class="gis-eyebrow">
                <i class="bi bi-globe2"></i>
                START YOUR GIS JOURNEY
            </span>

            <h1 class="gis-hero-title">
                Learn GIS.<br>
                <span>Explore More.</span>
            </h1>

            <p class="gis-hero-description">
                Create your account to explore interactive maps,
                learn geospatial concepts and develop spatial analysis skills.
            </p>

            <div class="gis-features">
                <div class="gis-feature">
                    <div class="gis-feature-icon">
                        <i class="bi bi-mortarboard"></i>
                    </div>
                    <h3>Learn</h3>
                    <p>GIS Concepts</p>
                </div>

                <div class="gis-feature">
                    <div class="gis-feature-icon">
                        <i class="bi bi-map"></i>
                    </div>
                    <h3>Explore</h3>
                    <p>Interactive Maps</p>
                </div>

                <div class="gis-feature">
                    <div class="gis-feature-icon">
                        <i class="bi bi-bar-chart-line"></i>
                    </div>
                    <h3>Analyse</h3>
                    <p>Spatial Data</p>
                </div>

                <div class="gis-feature">
                    <div class="gis-feature-icon">
                        <i class="bi bi-people"></i>
                    </div>
                    <h3>Grow</h3>
                    <p>Your Skills</p>
                </div>
            </div>
        </div>

        <div class="gis-hero-footer">
            <span><i class="bi bi-globe"></i> Learn the planet.</span>
            <span><i class="bi bi-geo-alt"></i> Understand the data.</span>
        </div>
    </section>

    <!-- RIGHT REGISTRATION PANEL -->
    <section class="gis-auth-section">

        <div class="gis-auth-wrapper">

            <div class="gis-auth-brand">
                <div class="gis-auth-logo">
                    <i class="bi bi-globe-americas"></i>
                </div>

                <h2>GeoLearn <span>GIS</span></h2>
                <p>Learn · Explore · Analyse · Create</p>
            </div>

            <div class="gis-login-card">

                <div class="gis-welcome">
                    <h1>Create Account</h1>
                    <p>Join GeoLearn GIS and start exploring.</p>
                </div>

                <form id="registerForm">
                    @csrf

                    <!-- NAME -->
                    <div class="gis-form-group">
                        <label for="name" class="gis-label">Full name</label>

                        <div class="gis-input-wrap">
                            <i class="bi bi-person gis-input-icon"></i>

                            <input
                                type="text"
                                name="name"
                                id="name"
                                class="form-control gis-input"
                                placeholder="Enter your full name"
                                autocomplete="name"
                                required
                            >
                        </div>

                        <small class="gis-error" id="nameError"></small>
                    </div>

                    <!-- EMAIL -->
                    <div class="gis-form-group">
                        <label for="email" class="gis-label">
                            Email address
                        </label>

                        <div class="gis-input-wrap">
                            <i class="bi bi-envelope gis-input-icon"></i>

                            <input
                                type="email"
                                name="email"
                                id="email"
                                class="form-control gis-input"
                                placeholder="Enter your email"
                                autocomplete="email"
                                required
                            >
                        </div>

                        <small class="gis-error" id="emailError"></small>
                    </div>

                    <!-- PASSWORD -->
                    <div class="gis-form-group">
                        <label for="password" class="gis-label">
                            Password
                        </label>

                        <div class="gis-input-wrap">
                            <i class="bi bi-lock gis-input-icon"></i>

                            <input
                                type="password"
                                name="password"
                                id="password"
                                class="form-control gis-input gis-password-input"
                                placeholder="Minimum 8 characters"
                                autocomplete="new-password"
                                required
                            >

                            <button
                                type="button"
                                class="gis-password-toggle"
                                data-password="password"
                                aria-label="Show password"
                            >
                                <i class="bi bi-eye"></i>
                            </button>
                        </div>

                        <small class="gis-error" id="passwordError"></small>
                    </div>

                    <!-- CONFIRM PASSWORD -->
                    <div class="gis-form-group">
                        <label for="password_confirmation" class="gis-label">
                            Confirm password
                        </label>

                        <div class="gis-input-wrap">
                            <i class="bi bi-shield-lock gis-input-icon"></i>

                            <input
                                type="password"
                                name="password_confirmation"
                                id="password_confirmation"
                                class="form-control gis-input gis-password-input"
                                placeholder="Confirm your password"
                                autocomplete="new-password"
                                required
                            >

                            <button
                                type="button"
                                class="gis-password-toggle"
                                data-password="password_confirmation"
                                aria-label="Show password"
                            >
                                <i class="bi bi-eye"></i>
                            </button>
                        </div>

                        <small class="gis-error"
                               id="password_confirmationError"></small>
                    </div>

                    <div id="registerError"
                         class="gis-general-error"
                         role="alert"
                         aria-live="polite"></div>

                    <button
                        type="submit"
                        id="registerButton"
                        class="btn gis-login-button"
                    >
                        <span class="button-text">Create Account</span>
                        <i class="bi bi-arrow-right"></i>
                    </button>

                    <p class="gis-signup">
                        Already have an account?
                        <a href="{{ route('login') }}">Login</a>
                    </p>
                </form>

                <div class="gis-card-footer">
                    <i class="bi bi-shield-check"></i>
                    Your learning journey starts here.
                </div>

            </div>
        </div>
    </section>

</main>

@endsection

@push('scripts')
<script>
$(function () {

    // Show / hide password fields
    $('.gis-password-toggle').on('click', function () {
        const input = $('#' + $(this).data('password'));
        const icon = $(this).find('i');

        const show = input.attr('type') === 'password';

        input.attr('type', show ? 'text' : 'password');

        icon.toggleClass('bi-eye', !show);
        icon.toggleClass('bi-eye-slash', show);

        $(this).attr(
            'aria-label',
            show ? 'Hide password' : 'Show password'
        );
    });

    // AJAX registration
    $('#registerForm').on('submit', function (e) {
        e.preventDefault();

        $('.gis-error').text('');
        $('.gis-input').removeClass('is-invalid');
        $('#registerError').text('');

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
                    $('#registerError').text(
                        'Unable to create account. Please try again.'
                    );
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

                            if (input.length) {
                                input.addClass('is-invalid');
                            }
                        } else {
                            $('#registerError').text(messages[0]);
                        }
                    });
                } else if (xhr.status === 419) {
                    $('#registerError').text(
                        'Session expired. Refresh and try again.'
                    );
                } else {
                    $('#registerError').text(
                        'Something went wrong. Please try again.'
                    );
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
