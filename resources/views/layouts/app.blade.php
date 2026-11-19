<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Student Management System')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

    <header class="main-header">
        <h2>Student Management System</h2>

        <nav>
            <a href="/page">Home</a>
            <a href="/students">Students</a>
            <a href="/courses">Courses</a>
        </nav>
    </header>

    <main class="main-container">
        @yield('content')
    </main>

    <footer class="main-footer">
        Student Management System © 2026
    </footer>

</body>
</html>
