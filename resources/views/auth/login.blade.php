<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- font-awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- custom css -->
    <link rel="stylesheet" href="{{asset('backend/assets/css/adminLogin.css')}}">
</head>
<body style="background-image:linear-gradient(to bottom, rgba(255,255,255,0.7), rgba(255,255,255,0.8)), url({{asset('backend/assets/img/bg-login.jpg')}});">
    <div class="login-form-container">
        <h1>Login</h1>
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="input-box">
                <input type="Email" class="@error('email') is-invalid @enderror" name="email" value="{{old('email')}}" placeholder="Enter your email">
                <i class="fa-solid fa-envelope"></i>

                @error('email')
                    <span class="invalid-feedback error-msg" role="alert">
                        {{ $message }}
                    </span>
                @enderror
                 
            </div>
            <div class="input-box">
                <input type="Password" class="@error('password') is-invalid @enderror" name="password" placeholder="Enter your password">
                <i class="fa-solid fa-lock"></i>
                @error('password')
                <span class="invalid-feedback error-msg" role="alert">
                    {{ $message }}
                </span>
            @enderror
            </div>
            <div class="forget">
                <a href="#">Forget Password</a>
            </div>
            <button type="submit" class="login-btn">Login</button>
        </form>
    </div>
    
</body>
</html>

