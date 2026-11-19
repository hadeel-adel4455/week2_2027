@extends('layouts.app')

@section('title', 'Home')

@section('content')

<div class="home-card">

    <div class="home-icon">✦</div>

    <h1>Welcome!</h1>

    <p class="welcome-text">
        Welcome to Student Management System.
    </p>

    <div class="user-info">
        <span>Your Email Address</span>
        <h3>{{ $email }}</h3>
    </div>

    <form action="/signout" method="POST">
        @csrf
        <button type="submit" class="signout-btn">Sign Out</button>
    </form>

</div>

@endsection
