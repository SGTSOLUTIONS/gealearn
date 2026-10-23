
@extends('layouts.auth')

@section('content')

<main class="gis-login-page">

    <!-- LEFT SIDE: DESKTOP ONLY -->
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
                GEOSPATIAL LEARNING PLATFORM
            </span>

            <h1 class="gis-hero-title">
                Explore the World<br>
                with <span>GIS Learning</span>
            </h1>

            <p class="gis-hero-description">
                Interactive courses, real-world datasets and powerful
                analysis tools for learners of all levels.
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
                    <p>Real-world Maps</p>
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
                    <p>School to Professional</p>
                </div>

            </div>
        </div>

        <div class="gis-hero-footer">
            <span><i class="bi bi-globe"></i> Learn the planet.</span>
            <span><i class="bi bi-geo-alt"></i> Understand the data.</span>
        </div>

    </section>


    <!-- RIGHT SIDE: LOGIN -->
    <section class="gis-auth-section">

        <div class="gis-auth-wrapper">

            <!-- BRAND -->
            <div class="gis-auth-brand">
                <div class="gis-auth-logo">
                    <i class="bi bi-globe-americas"></i>
                </div>

                <h2>GeoLearn <span>GIS</span></h2>
                <p>Learn · Explore · Analyse · Create</p>
            </div>

            <!-- LOGIN CARD -->
            <div class="gis-login-card">

                <div class="gis-welcome">
                    <h1>Welcome Back!</h1>
                    <p>Login to continue your GIS learning journey</p>
                </div>

                <form id="loginForm">
                    @csrf

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
                                autocomplete="username"
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
                                placeholder="Enter your password"
                                autocomplete="current-password"
                                required
                            >

                            <button
                                type="button"
                                class="gis-password-toggle"
                                id="togglePassword"
                                aria-label="Show password"
                                aria-pressed="false"
                            >
                                <i class="bi bi-eye"></i>
                            </button>
                        </div>

                        <small class="gis-error" id="passwordError"></small>
                    </div>

                    <!-- REMEMBER AND FORGOT -->
                    <div class="gis-form-options">
                        <label class="gis-remember">
                            <input type="checkbox" name="remember" value="1">
                            <span>Remember me</span>
                        </label>

                        <a href="#" class="gis-link"
                           id="forgotPasswordLink">
                            Forgot password?
                        </a>
                    </div>

                    <div id="loginError"
                         class="gis-general-error"
                         role="alert"
                         aria-live="polite"></div>

                    <!-- LOGIN BUTTON -->
                    <button
                        type="submit"
                        id="loginButton"
                        class="btn gis-login-button"
                    >
                        <span class="button-text">Login</span>
                        <i class="bi bi-arrow-right"></i>
                    </button>

                    <!-- DIVIDER -->
                    <div class="gis-divider">
                        <span>OR CONTINUE WITH</span>
                    </div>

                    {{-- <!-- SOCIAL BUTTONS -->
                    <button type="button" class="btn gis-social-button">
                        <i class="bi bi-google google-icon"></i>
                        Continue with Google
                    </button>

                    <button type="button" class="btn gis-social-button">
                        <i class="bi bi-microsoft microsoft-icon"></i>
                        Continue with Microsoft
                    </button> --}}

                    <!-- REGISTER -->
                    <p class="gis-signup">
                        Don't have an account?
                        <a href="{{ route('register')}}" id="signupLink">Sign up</a>
                    </p>

                </form>

                <div class="gis-card-footer">
                    <i class="bi bi-shield-check"></i>
                    Learn securely. Explore confidently.
                </div>

            </div>
        </div>

    </section>

</main>

@endsection

@push('scripts')
<script>
$(function () {

    // Show / hide password
    $('#togglePassword').on('click', function () {
        const password = $('#password');
        const icon = $(this).find('i');

        const show = password.attr('type') === 'password';

        password.attr('type', show ? 'text' : 'password');

        icon.toggleClass('bi-eye', !show);
        icon.toggleClass('bi-eye-slash', show);

        $(this)
            .attr('aria-pressed', show ? 'true' : 'false')
            .attr('aria-label', show ? 'Hide password' : 'Show password');
    });

    // AJAX login
    $('#loginForm').on('submit', function (e) {
        e.preventDefault();

        $('.gis-error').text('');
        $('.gis-input').removeClass('is-invalid');
        $('#loginError').text('');

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
                    $('#loginError').text(
                        'Unable to log in. Please try again.'
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
                            input.addClass('is-invalid');
                        } else {
                            $('#loginError').text(messages[0]);
                        }
                    });
                } else if (xhr.status === 419) {
                    $('#loginError').text(
                        'Session expired. Refresh and try again.'
                    );
                } else {
                    $('#loginError').text(
                        'Something went wrong. Please try again.'
                    );
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
