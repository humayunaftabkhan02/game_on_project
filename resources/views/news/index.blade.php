<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gaming News - GameOn</title>
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
                    <li><a href="{{ url('/news') }}" class="active">News Section</a></li>
                    <li><a href="{{ url('/reviews') }}">Game Reviews</a></li>
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
    <section class="news">
        <div class="container">
            <br><br><br><br><br>
            <h2><b>Gaming News</b></h2>
            <a href="{{ route('news.create') }}" class="btn-l1">Create News Article</a>
            @foreach($newsArticles as $article)
                <div class="news-article">
                    <h3>{{ $article->title }}</h3>
                    <p>{{ $article->content }}</p>
                    <a href="{{ route('news.edit', ['news' => $article->id]) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('news.destroy', ['news' => $article->id]) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            @endforeach
        </div>
    </section>
    <footer>
        <div class="container">
            <p>GameOn - Your Ultimate Gaming Hub - Project by Humayun Aftab (BCS213190)</p>
        </div>
    </footer>
</body>
</html>