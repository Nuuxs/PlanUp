@extends('layouts.auth')

@section('content')

<h2 class="auth-title">Register</h2>

<form method="POST" action="{{ route('register') }}">
    @csrf

    <!-- Name -->
    <div class="form-group">
        <input type="text"
               name="name"
               placeholder="Full Name"
               value="{{ old('name') }}"
               required autofocus>
        <span class="icon">👤</span>
    </div>
    <x-input-error :messages="$errors->get('name')" />

    <!-- Email -->
    <div class="form-group">
        <input type="email"
               name="email"
               placeholder="Email"
               value="{{ old('email') }}"
               required>
        <span class="icon">✉️</span>
    </div>
    <x-input-error :messages="$errors->get('email')" />

    <!-- Password -->
    <div class="form-group">
        <input type="password"
               name="password"
               placeholder="Password"
               required>
        <span class="icon">🔒</span>
    </div>
    <x-input-error :messages="$errors->get('password')" />

    <!-- Confirm Password -->
    <div class="form-group">
        <input type="password"
               name="password_confirmation"
               placeholder="Confirm Password"
               required>
        <span class="icon">🔒</span>
    </div>
    <x-input-error :messages="$errors->get('password_confirmation')" />

    <button class="btn-primary">Create Account</button>

    <p class="auth-footer">
        Already have an account?
        <a href="{{ route('login') }}">Login</a>
    </p>

</form>

@endsection
