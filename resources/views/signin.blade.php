@extends('layouts.app')

@section('title', 'Sign In')

@section('content')

<div class="form-card">

    <h2>Welcome Back</h2>
    <p>Sign in to your account to continue.</p>

    @if ($errors->any())
        <p style="color:red; text-align:center;">
            {{ $errors->first() }}
        </p>
    @endif

    <form action="/signin" method="POST">
        @csrf

        <label>Email Address</label>
        <input
            type="email"
            name="email"
            value="{{ $email }}"
            placeholder="Enter your email"
            required
        >

        <label>Password</label>
        <input
            type="password"
            name="password"
            placeholder="Enter your password"
            required
        >

        <button type="submit">Sign In</button>
    </form>

    <p class="auth-link">
        Don't have an account?
        <a href="/signup">Sign Up</a>
    </p>

</div>

@endsection
