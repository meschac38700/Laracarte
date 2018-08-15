@extends('layouts.master', ['title'=>'Contact'])

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                <h1>Get In Touch</h1>
                <p class="text-muted">If you having trouble with this service, please <a href="mailto:your-account@helpful.io">ask for help.</a></p>

                <form action="#" method="POST">

                    <div class="form-group">
                        <label for="name" class="form-label">Name</label>
                        <input required="required" type="text" id="name" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email" class="form-label">Email</label>
                        <input required="required" type="email" id="email" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="message" class="form-label sr-only">Message</label>
                        <textarea rows=10 required="required" type="text" id="message" name="message" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-default btn-primary btn-block" name="submit" value="Submit Enquiry &raquo;" />
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop