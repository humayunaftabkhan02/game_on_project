<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Reviews - GameOn</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/search-styles.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"/>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body class="reviews">
    <header class="global-header">
        <div class="container">
            <img src="{{ asset('images/logo.png') }}" alt="Game On Logo" class="logo">
            <nav>
                <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('/news') }}">News Section</a></li>
                    <li><a href="{{ url('/reviews') }}" class="active">Game Reviews</a></li>
                    <li><a href="{{ url('/contactus') }}">Contact Us</a></li>
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
    <section class="reviews">
        <div class="container">
            <h2><b>Game Reviews</b></h2>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <br>
            <br>
            <br>
            <div class="admin-reviews mb-4">
                <h2>Admin Reviews</h2>
                <div class="review">
                    <h4>Game Title: The Witcher 3</h4>
                    <p><strong>Admin:</strong> Humayun Aftab</p>
                    <p><strong>Review:</strong> Great graphics.</p>
                </div>
                <div class="review">
                    <h4>Game Title: Cyberpunk 2077</h4>
                    <p><strong>Admin:</strong> Humayun Aftab</p>
                    <p><strong>Review:</strong> It was buggy at the start but the developers made a great comeback.</p>
                </div>
            </div>
            <div class="user-reviews mb-4">
                <h2>User Reviews</h2>
                @if($userReviews->isEmpty())
                    <p>No user reviews yet. Be the first to submit a review!</p>
                @else
                    @foreach($userReviews as $review)
                    <div class="review">
                        <h4>Game Title: {{ $review->game_title }}</h4>
                        <p><strong>User:</strong> {{ $review->user_name }}</p>
                        <p><strong>Review:</strong> {{ $review->review_text }}</p>
                    </div>
                    @endforeach
                @endif
            </div>
            <div class="review-form">
                <h2>Submit Your Review</h2>
                <form method="POST" action="{{ route('reviews.submit') }}" class="review-form">
                    @csrf
                    <div class="form-group">
                        <label for="game_title"><b>Game Title</b></label>
                        <input type="text" class="form-control" id="game_title" name="game_title" required>
                        @error('game_title')
                            <div class="mt-2 text-red-600">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="user_name"><b>Your Name</b></label>
                        <input type="text" class="form-control" id="user_name" name="user_name" required>
                        @error('user_name')
                            <div class="mt-2 text-red-600">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="review_text"><b>Your Review</b></label>
                        <textarea class="form-control" id="review_text" name="review_text" rows="5" required></textarea>
                        @error('review_text')
                            <div class="mt-2 text-red-600">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn-l1">Submit Review</button>
                </form>
            </div>
        </div>
        <br>
    </section>
    <footer>
        <div class="container">
            <p>GameOn - Your Ultimate Gaming Hub - Project by Humayun Aftab (BCS213190)</p>
        </div>
    </footer>
</body>
</html>