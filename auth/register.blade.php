<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>نموذج التسجيل</title>
    <style>
        .error {
            color: red;
        }
    </style>
</head>
<body>
    <h1>نموذج التسجيل</h1>
   
    @if (session('success'))
        <p style="color:green;">{{ session('success') }}</p>
    @endif

    <form action="{{ route('register.store') }}" method="POST">
        @csrf

        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}">
            @error('name')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}">
            @error('email')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div>
            <label for="password">password</label>
            <input type="password" name="password" id="password">
            @error('password')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div>
            <label for="password_confirmation">confirm password</label>
            <input type="password" name="password_confirmation" id="password_confirmation">
        </div>

        <button type="submit">save</button>
    </form>
</body>
</html>