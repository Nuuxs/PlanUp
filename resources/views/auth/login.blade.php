@extends('layouts.auth')

@section('content')

<x-auth-session-status class="mb-3 text-center" :status="session('status')" />

<h2 class="auth-title">Login</h2>

<form method="POST" action="{{ route('login') }}">
    @csrf

    <div class="form-group">
        <input type="email"
               name="email"
               placeholder="Email"
               value="{{ old('email') }}"
               required autofocus>
        <span class="icon">✉️</span>
    </div>
    <x-input-error :messages="$errors->get('email')" />

    <div class="form-group">
        <input type="password"
               name="password"
               placeholder="Password"
               required>
        <span class="icon">🔒</span>
    </div>
    <x-input-error :messages="$errors->get('password')" />

    <div class="options">
        <label>
            <input type="checkbox" name="remember">
            Remember me
        </label>

        @if (Route::has('password.request'))
            <a href="{{ route('password.request') }}">Forgot Password?</a>
        @endif
    </div>

    <button class="btn-primary">Login</button>

    <p class="auth-footer">
        Don’t have an account?
        <a href="{{ route('register') }}">Register</a>
    </p>

</form>

@endsection
