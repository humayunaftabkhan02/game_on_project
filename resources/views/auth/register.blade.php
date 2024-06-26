<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - GameOn</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/search-styles.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"/>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <header class="global-header">
        <div class="container">
            <img src="{{ asset('images/logo.png') }}" alt="Game On Logo" class="logo">
            <nav>
                <ul>
                    <li><a href="{{ url('/') }}" class="active">Home</a></li>
                    <li><a href="{{ url('/news') }}">News Section</a></li>
                    <li><a href="{{ url('/reviews') }}">Game Reviews</a></li>
                    <li><a href="{{ url('/contactus') }}">Contact Us</a></li>
                    <li><a href="{{ url('/register') }}" class="active" style="color: red;">Register</a></li>
                    <li><a href="{{ url('/login') }}" style="color: red;">Login</a></li>
                </ul>
                <section class="search-container">
                    <div class="container">
                        <form action="#" method="get">
                            <input type="text" placeholder="Search..." name="search">
                            <button type="submit">Search</button>
                        </form>
                    </div>
                </section>
            </nav>
        </div>
    </header>
    <section class="register">
        <div class="container">
            <h2><b>Registration</b></h2>
            <form method="POST" action="{{ route('register') }}" class="register-form">
                @csrf

                <!-- Name -->
                <div class="form-group">
                    <label for="name"><b>Name</b></label>
                    <input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    @error('name')
                        <div class="mt-2 text-red-600">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Email Address -->
                <div class="form-group mt-4">
                    <label for="email"><b>Email</b></label>
                    <input id="email" class="form-control" type="email" name="email" :value="old('email')" required autocomplete="username" />
                    @error('email')
                        <div class="mt-2 text-red-600">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Password -->
                <div class="form-group mt-4">
                    <label for="password"><b>Password</b></label>
                    <input id="password" class="form-control" type="password" name="password" required autocomplete="new-password" />
                    @error('password')
                        <div class="mt-2 text-red-600">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Confirm Password -->
                <div class="form-group mt-4">
                    <label for="password_confirmation"><b>Confirm Password</b></label>
                    <input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" />
                    @error('password_confirmation')
                        <div class="mt-2 text-red-600">{{ $message }}</div>
                    @enderror
                </div>

                <div class="btn-submit-container mt-4">
                    <button type="submit" class="btn btn-l1 btn-block">
                        {{ __('Register') }}
                    </button>
                </div>
                <p class="mt-3"><b>Already Registered? Click <a href="{{ route('login') }}">Here</a> to Login!</b></p>
            </form>
            <div class="registration-success" style="display: none;">
                <p><b>You have registered successfully!<b></p>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <p>GameOn - Your Ultimate Gaming Hub - Project by Humayun Aftab (BCS213190)</p>
        </div>
    </footer>
</body>
</html>
