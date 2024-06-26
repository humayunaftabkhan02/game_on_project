<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GameOn - Your Hub for Gaming News</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/search-styles.css') }}">
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
    <section class="hero">
        <div class="container">
            <h2>Welcome to Game On</h2>
            <p>Your ultimate source for gaming news, reviews, and updates!</p>
            <a href="#" class="btn">Explore Now</a>
        </div>
    </section>
    <div class="sections-container">
        <section class="latest-news">
            <div class="container">
                <h2>Latest News</h2>
                <div class="news-article">
                    <img src="{{ asset('images/news1.jpg') }}" alt="Latest News 1">
                    <h3>League of Legends is getting a Vampire Survivors-style PvE mode later this year</h3>
                    <p>The upcoming "bullet heaven" mode will support both solo and co-op play.</p>
                    <a href="#">Read More</a>
                </div>
                <br>
                <div class="news-article">
                    <img src="{{ asset('images/news2.jpg') }}" alt="Latest News 2">
                    <h3>Battlefield 2042 won't get more new seasons as next Battlefield game enters full production</h3>
                    <p>The Dead Space remake team at Motive is now working on Battlefield, too.</p>
                    <a href="#">Read More</a>
                </div>
            </div>
        </section>
        <section class="videos">
            <div class="container">
                <h2>Game Trailers</h2>
                <div class="video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/g122XN-DQoY" frameborder="0" allowfullscreen></iframe>
                    <h3>Helldivers 2 - Warbond: Democratic Detonation Trailer | PS5 & PC Games</h3>
                    <p>Noble patriots of Super Earth, the time for stealth is over this April 11th. Make the biggest bang since the dawn of time with the Democratic Detonation Premium Warbond for HELLDIVERS 2.</p>
                </div>
                <br>
                <div class="video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/PDpsmhRBev8" frameborder="1" allowfullscreen></iframe>
                    <h3>Nobody Wants to Die - Official Reveal Trailer</h3>
                    <p>Lose yourself in the dystopian world of New York in the year 2329 in Nobody Wants to Die, a new detective noir adventure where immortality comes at a price that someone has to pay.</p>
                </div>
            </div>
        </section>
        <section class="featured-games">
            <div class="container">
                <h2>Featured Games</h2>
                <div class="game">
                    <img src="{{ asset('images/game1.jpg') }}" alt="Featured Game 1">
                    <h3>Grand Theft Auto VI</h3>
                    <p>Grand Theft Auto VI is an upcoming action-adventure game in development by Rockstar Games.</p>
                    <br>
                    <a href="#">Learn More</a>
                </div>
                <br>
                <div class="game">
                    <img src="{{ asset('images/game2.jpg') }}" alt="Featured Game 2">
                    <h3>Counter-Strike 2</h3>
                    <p>Counter-Strike 2 (CS2) is a first-person shooter video game developed by Valve Corporation.</p>
                    <br>
                    <a href="#">Learn More</a>
                </div>
            </div>
        </section>
    </div>
    <aside class="trending-topics">
        <div class="container">
            <h2>Trending Topics</h2>
            <ul>
                <li><a href="#">Cloud and Streaming Video Games</a></li>
                <br>
                <li><a href="#">Upcoming Esports Tournaments</a></li>
                <br>
                <li><a href="#">AR and VR in Gaming</a></li>
            </ul>
        </div>
    </aside>
    <footer>
        <div class="container">
            <p>GameOn - Your Ultimate Gaming Hub - Project by Humayun Aftab (BCS213190)</p>
        </div>
    </footer>
</body>
</html>