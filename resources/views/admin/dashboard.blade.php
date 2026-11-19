<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

    <div class="main-container">

        <div class="page-heading">
            <h1>Welcome to Admin Dashboard</h1>
            <p>Manage your administration account.</p>
        </div>

        <div class="home-card">

            <div class="home-icon">♛</div>

            <h1>Admin Information</h1>

            <p class="welcome-text">
                Welcome, {{ session('admin_name') }}
            </p>

            <div class="user-info">
                <span>Admin ID</span>
                <h3>{{ session('admin_id') }}</h3>

                <span>Admin Name</span>
                <h3>{{ session('admin_name') }}</h3>

                <span>Admin Email</span>
                <h3>{{ session('admin_email') }}</h3>
            </div>

            <form action="{{ route('admin.logout') }}" method="POST">
                @csrf
                <button type="submit" class="signout-btn">
                    Logout
                </button>
            </form>

        </div>

    </div>

</body>
</html>
