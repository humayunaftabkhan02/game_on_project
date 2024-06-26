<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - GameOn</title>
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
                    <li><a href="{{ url('/register') }}" style="color: red;">Register</a></li>
                    <li><a href="{{ url('/login') }}" class="active" style="color: red;">Login</a></li>
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
    <section class="login">
        <div class="container">
            <h2><b>Login</b></h2>
            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}" class="login-form">
                @csrf

                <!-- Email Address -->
                <div class="form-group">
                    <label for="email"><b>Email</b></label>
                    <input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                    @error('email')
                        <div class="mt-2 text-red-600">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Password -->
                <div class="form-group mt-4">
                    <label for="password"><b>Password</b></label>
                    <input id="password" class="form-control" type="password" name="password" required autocomplete="current-password" />
                    @error('password')
                        <div class="mt-2 text-red-600">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Remember Me -->
                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                        <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <div class="flex items-center justify-end mt-4">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
                </div>

                <div class="btn-submit-container">
                    <button type="submit" class="btn btn-l1">
                        {{ __('Log in') }}
                    </button>
                </div>
                <p class="mt-3"><b>Not registered yet? Click <a href="{{ url('/register') }}">Here</a> to Register!</b></p>
            </form>
        </div>
    </section>
    <footer>
        <div class="container">
            <p>GameOn - Your Ultimate Gaming Hub - Project by Humayun Aftab (BCS213190)</p>
        </div>
    </footer>
</body>
</html>