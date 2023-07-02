<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #f3f4f6;
        }

        .login-container {
            width: 400px;
            background-color: #ffffff;
            border-radius: 8px;
            padding: 40px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }

        .login-container h2 {
            font-size: 24px;
            font-weight: bold;
            text-align: center;
            margin-bottom: 24px;
        }

        .form-group {
            margin-bottom: 24px;
        }

        .form-group label {
            font-size: 14px;
            font-weight: bold;
            display: block;
            margin-bottom: 8px;
        }

        .form-group input {
            width: 100%;
            padding: 12px;
            border: 1px solid #e5e7eb;
            border-radius: 4px;
        }

        .form-group input:focus {
            outline: none;
            border-color: #6366f1;
        }

        .form-group .error-message {
            font-size: 14px;
            color: #e53e3e;
            margin-top: 4px;
        }

        .form-group .remember-me {
            display: flex;
            align-items: center;
            margin-top: 8px;
            font-size: 14px;
        }

        .form-group .remember-me input[type="checkbox"] {
            margin-right: 8px;
        }

        .form-group .submit-button {
            display: flex;
            justify-content: center;
            margin-top: 24px;
        }

        .form-group .submit-button button {
            padding: 12px 24px;
            background-color: #6366f1;
            color: #ffffff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .form-group .submit-button button:hover {
            background-color: #4f46e5;
        }

        .form-group .forgot-password {
            text-align: center;
            margin-top: 16px;
            font-size: 14px;
        }

        .form-group .forgot-password a {
            color: #6366f1;
            text-decoration: none;
        }

        .form-group .register-link {
            text-align: center;
            margin-top: 24px;
            font-size: 14px;
        }

        .form-group .register-link a {
            color: #6366f1;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required autofocus>
                @error('email')
                    <p class="error-message">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
                @error('password')
                    <p class="error-message">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group remember-me">
                <input type="checkbox" id="remember_me" name="remember">
                <label for="remember_me">Remember me</label>
            </div>

            <div class="form-group submit-button">
                <button type="submit">Log in</button>
            </div>
        </form>

        <div class="form-group forgot-password">
            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}">Forgot your password?</a>
            @endif
        </div>

        <div class="form-group register-link">
            <span>Don't have an account? <a href="{{ route('register') }}">Register</a></span>
        </div>
    </div>
</body>
</html>
