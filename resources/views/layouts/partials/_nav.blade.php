<!-- Fixed navbar -->
<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </button>
    <a class="navbar-brand" href="{{ route('laracarte.home')}}">Laracarte</a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
            <li class="{{ App\Helpers\PageUtilities::activePage('laracarte.home')}}"><a href="{{ route('laracarte.home') }}">Home</a></li>
            <li class="{{ App\Helpers\PageUtilities::activePage('laracarte.about')}}"><a href="{{ route('laracarte.about')}}">About</a></li>
            <li class="{{ App\Helpers\PageUtilities::activePage('laracarte.artisans')}}"><a href="{{ route('laracarte.artisans')}}">Artisans</a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Planet <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a target="_blank" href="https://laravel.com">Laravel.com</a></li>
                    <li><a target="_blank" href="https://laravel.io">Laravel.io</a></li>
                    <li><a target="_blank" href="https://laracasts.com/">Laracasts</a></li>
                    <li><a target="_blank" href="https://larajobs.com/">Larajobs</a></li>
                    <li><a target="_blank" href="https://laravel-news.com/">Laravel News</a></li>
                    <li><a target="_blank" href="https://larachat.co/">Larachat</a></li>
                </ul>
            </li>
            <li class="{{ App\Helpers\PageUtilities::activePage('laracarte.contact')}}"><a href="{{ route('laracarte.contact')}}">Contact</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li class="{{ App\Helpers\PageUtilities::activePage('laracarte.login')}}"><a href="#contact">Login</a></li>
            <li class="{{ App\Helpers\PageUtilities::activePage('laracarte.register')}}"><a href="#contact">Register</a></li>
        </ul>
    </div><!--/.nav-collapse -->
    </div>
</nav>