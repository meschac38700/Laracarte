@extends('layouts.master', ['title'=>'About'])

@section('content')

<div class="container">
    <section>
        <h2>What is Laracarte?</h2>
        <p>Laracarte is a clone app of <a target="_blank" href="https://laramap.com">Laramap.com</a>.</p>

        <div class="alert alert-warning">
            
            <p class="text-warning"><strong><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> This app has been built by <a class="text-primary" target="_blank" href="https://laramap.com">@etsmo</a> for learning purposes.</strong></p>
        </div>

        <p>Feel free to help to improve the <a target="_blank" href="https://github.com/mercuryseries/laracarte"> source code.</a></p>
    </section>

    <section>
        <h2>What is Laramap?</h2>
        <p>Laramap is the website by which Laracarte was inspired :).</p>
        <p>More info <a target="_blank" href="https://laramap.com/">here</a></p>
    </section>

    <section>
        <h2>Which tools and services are used in Laracarte?</h2>
        <p>Basically it's built on Laravel & Bootstrap. But there's a bunch of services used for email and other sections.</p>
        
        <ul>
            <li>Laravel</li>
            <li>Bootstrap</li>
            <li>Amazon S3</li>
            <li>Mandrill</li>
            <li>Google Maps</li>
            <li>Gravatar</li>
            <li>Antony Martin's Geolocation Package</li>
            <li>Michel Fortin's Markdown Parser Package</li>
            <li>Heroku</li>
        </ul>
        
    </section>

</div>
@stop