<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

    <div class="main-container">

        <div class="page-heading">
            <h1>Admin Login</h1>
            <p>Welcome back! Please login to continue.</p>
        </div>

        <div class="form-card">

            <h2>Administrator</h2>
            <p>Enter your account information</p>

            @if ($errors->any())
                <p style="color: red;">
                    {{ $errors->first() }}
                </p>
            @endif

            <form action="{{ route('admin.login.submit') }}" method="POST">
                @csrf

                <label>Email:</label>
                <input type="email" name="email"
                       value="{{ old('email') }}" required>

                <label>Password:</label>
                <input type="password" name="password" required>

                <button type="submit">Login</button>
            </form>

        </div>

    </div>

</body>
</html>
