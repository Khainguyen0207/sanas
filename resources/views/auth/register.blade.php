@extends('layouts.master')

@section('content')
    <section class="register-section" data-bb-toggle="register-modal">
        <div class="register-wrapper">
            <form action="{{ route('auth.register.store') }}" method="post" class="login-form mb-4 needs-validation"
                  novalidate
                  data-bb-toggle="register-form-toggle">
                @csrf
                <div class="form-header mb-4">
                    <div class="arrow">
                        <a href="{{ route('homepage') }}"><i class="fa-solid fa-arrow-left"></i></a>
                    </div>

                    <div class="login-logo">
                        <img src="{{ asset('assets/images/theme/images/logo.png') }}" alt="logo">
                        <h3 class="fw-bold">Register</h3>
                    </div>
                </div>

                <div class="form-input">
                    <input type="text" name="name" autocomplete="off" required>
                    <label for="text" class="label-name">
                    <span class="content-name">
                      Name
                    </span>
                    </label>
                </div>

                <div class="form-input">
                    <input type="text" name="email" autocomplete="off" required>
                    <label for="text" class="label-name">
                    <span class="content-name">
                      Email/Phone Number
                    </span>
                    </label>
                </div>
                <div class="form-input">
                    <input data-bb-toggle="password-field" type="password" name="password" autocomplete="off"
                           required>
                    <label for="password-field" class="label-name">
                        <span class="content-name">
                          Password
                        </span>
                    </label>
                    <div class="login-btn">
                        <span data-bb-target="password-field" data-bs-toggle="toggle-password"
                              class="fa fa-fw fa-eye field-icon"></span>
                    </div>
                </div>
                <div class="form-input">
                    <input data-bb-toggle="confirm-password-field" type="password" name="password_confirmation"
                           autocomplete="off"
                           required>
                    <label for="confirm-password-field" class="label-name">
                        <span class="content-name">
                          Confirm Password
                        </span>
                    </label>
                    <div class="login-btn">
                        <span data-bb-target="confirm-password-field" data-bs-toggle="toggle-password"
                              class="fa fa-fw fa-eye field-icon"></span>
                        <div class="arrow login-btn-w">
                            <button type="submit"><i class="fas fa-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
            </form>

            <div class="form-footer">
                <div class="footer-link">
                    <a href="{{ route('auth.login.index') }}" class="fst-italic">Already have an account?</a>
                </div>
            </div>
        </div>
    </section>
@endsection

