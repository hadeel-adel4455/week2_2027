@extends('layouts.app')

@section('title', 'Sign Up')

@section('content')

<div class="form-card">

    <h2>Create Account</h2>
    <p>Welcome! Create your account to get started.</p>

    <form action="/signup" method="POST">
        @csrf

        <label>Full Name</label>
        <input type="text" name="name" placeholder="Enter your name" required>

        <label>Email Address</label>
        <input type="email" name="email" placeholder="Enter your email" required>

        <label>Password</label>
        <input type="password" name="password" placeholder="Enter your password" required>

        <button type="submit">Sign Up</button>
    </form>

         <p class="auth-link">
            Already have an account?
         <a href="/signin">Sign In</a>
       </p>

</div>

@endsection
