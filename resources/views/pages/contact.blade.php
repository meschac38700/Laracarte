@extends('layouts.master')
@section('title', 'Contact')

@section('content')

    <div class="container">
        <h1>Get In Touch</h1>
        <p>If you having trouble with this service, please <a href="mailto:your-account@helpful.io">ask for help.</a></p>

        <form action="#" method="POST">

            <div class="form-group">
                <label for="name" class="form-label">Name</label>
                <input type="text" id="name" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="email" class="form-label">Email</label>
                <input type="email" id="email" name="email" class="form-control">
            </div>
            <div class="form-group">
                <textarea type="text" id="message" name="message" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <input type="btn btn-primary btn-block" name="submit" value="Submit Enquiry >>">
            </div>
        </form>
    </div>
@stop