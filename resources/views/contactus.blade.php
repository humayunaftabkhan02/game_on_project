<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - GameOn</title>
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
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('/news') }}">News Section</a></li>
                    <li><a href="{{ url('/reviews') }}">Game Reviews</a></li>
                    <li><a href="{{ url('/contactus') }}" class="active">Contact Us</a></li>
                    <li><a href="{{ url('/register') }}" style="color: red;">Register</a></li>
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
    <section class="contact">
        <div class="container">
            <h2><b>Contact Us</b></h2>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <form method="POST" action="{{ route('contactus.submit') }}" class="contact-form">
                @csrf
                <div class="form-group">
                    <label for="name"><b>Name</b></label>
                    <input type="text" class="form-control" id="name" name="name" required>
                    @error('name')
                        <div class="mt-2 text-red-600">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email"><b>Email</b></label>
                    <input type="email" class="form-control" id="email" name="email" required>
                    @error('email')
                        <div class="mt-2 text-red-600">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="message"><b>Message</b></label>
                    <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                    @error('message')
                        <div class="mt-2 text-red-600">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary btn-block">Send Your Feedback</button>
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