<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login — AgroNet Solutions</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700;800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #0f1e0f 0%, #1e4220 100%);
            min-height: 100vh; display: flex; align-items: center; justify-content: center;
        }
        .login-card {
            background: #fff; border-radius: 10px; width: 420px;
            padding: 48px 44px; box-shadow: 0 24px 80px rgba(0,0,0,0.25);
        }
        .login-brand { text-align: center; margin-bottom: 36px; }
        .login-brand h1 {
            font-family: 'Montserrat', sans-serif; font-size: 26px;
            font-weight: 800; color: #2A5C2A;
        }
        .login-brand h1 span { color: #C8A84B; }
        .login-brand p { font-size: 13px; color: #6B7280; margin-top: 4px; }
        .form-group { margin-bottom: 18px; }
        .form-group label { display: block; font-size: 12.5px; font-weight: 600; color: #1A1A1A; margin-bottom: 6px; }
        .form-group .input-wrap { position: relative; }
        .form-group .input-wrap i { position: absolute; left: 14px; top: 50%; transform: translateY(-50%); color: #9CA3AF; font-size: 14px; }
        .form-group input {
            width: 100%; padding: 11px 14px 11px 40px;
            border: 1.5px solid #e2e8e2; border-radius: 6px;
            font-size: 14px; font-family: 'Inter', sans-serif;
            color: #1A1A1A; outline: none; transition: all 0.2s;
        }
        .form-group input:focus { border-color: #2A5C2A; box-shadow: 0 0 0 3px rgba(42,92,42,0.08); }
        .btn-login {
            width: 100%; padding: 12px; background: #2A5C2A; color: #fff;
            border: none; border-radius: 6px; font-size: 14px; font-weight: 600;
            cursor: pointer; font-family: 'Inter', sans-serif; transition: all 0.2s;
        }
        .btn-login:hover { background: #1e4220; }
        .alert { padding: 12px 16px; border-radius: 6px; margin-bottom: 20px; font-size: 13px; }
        .alert-danger { background: rgba(220,38,38,0.06); border: 1px solid #dc2626; color: #dc2626; }
        .alert-success { background: rgba(42,92,42,0.08); border: 1px solid #2A5C2A; color: #2A5C2A; }
        .divider { border-top: 1px solid #e2e8e2; margin: 24px 0; }
        .back-link { text-align: center; font-size: 13px; color: #6B7280; }
        .back-link a { color: #2A5C2A; font-weight: 600; }
    </style>
</head>
<body>
<div class="login-card">
    <div class="login-brand">
        <h1>Agro<span>Net</span></h1>
        <p>Admin Control Panel — Sign In</p>
    </div>

    @if(session('error'))
    <div class="alert alert-danger">
        <i class="fa-solid fa-circle-exclamation" style="margin-right: 6px;"></i>
        {{ session('error') }}
    </div>
    @endif

    @if(session('success'))
    <div class="alert alert-success">
        <i class="fa-solid fa-circle-check" style="margin-right: 6px;"></i>
        {{ session('success') }}
    </div>
    @endif

    <form action="{{ route('admin.login.post') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="email">Email Address</label>
            <div class="input-wrap">
                <i class="fa-solid fa-envelope"></i>
                <input type="email" id="email" name="email"
                       value="{{ old('email') }}"
                       placeholder="admin@agronet.com" required autofocus>
            </div>
            @error('email')<span style="color:#dc2626;font-size:12px;margin-top:4px;display:block;">{{ $message }}</span>@enderror
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <div class="input-wrap">
                <i class="fa-solid fa-lock"></i>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>
            </div>
            @error('password')<span style="color:#dc2626;font-size:12px;margin-top:4px;display:block;">{{ $message }}</span>@enderror
        </div>
        <button type="submit" class="btn-login">
            <i class="fa-solid fa-right-to-bracket" style="margin-right: 8px;"></i>
            Sign In to Admin Panel
        </button>
    </form>
    <div class="divider"></div>
    <p class="back-link"><a href="{{ route('home') }}">Return to Website</a></p>
</div>
</body>
</html>
