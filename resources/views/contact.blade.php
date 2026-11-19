<!DOCTYPE html>
<html>
<head>
    <title>Contact Form</title>
</head>
<body>

    <h2>User Information Form</h2>

    <form action="/submit" method="POST">
        @csrf

        <label>Full Name:</label>
        <input type="text" name="Fullname" required>
        <br><br>

        <label>Email:</label>
        <input type="email" name="email" required>
        <br><br>

        <label>Password:</label>
        <input type="password" name="password" required>
        <br><br>

        <label>Message:</label>
        <textarea name="message" required></textarea>
        <br><br>

        <button type="submit">Submit</button>
    </form>

    @if(session('success'))
        <div style="color: green; border: 1px solid green; padding: 10px;">
            {{ session('success') }}
        </div>

        <h3>Your Information:</h3>

        @foreach(session('data') as $label => $value)
            <p>
                <strong>{{ $label }}:</strong> {{ $value }}
            </p>
        @endforeach
    @endif

    @if(session('error'))
        <div style="color: red; border: 1px solid red; padding: 10px;">
            {{ session('error') }}
        </div>
    @endif

</body>
</html>