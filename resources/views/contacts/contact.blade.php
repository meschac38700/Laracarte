@extends('layouts.master', ['title'=>'Contact'])

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                <h1>Get In Touch</h1>
                <p class="text-muted">If you having trouble with this service, please <a href="mailto:your-account@helpful.io">ask for help.</a></p>

                <form action="{{ route('laracarte.contact') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group {{ empty($errors->first('name'))? '': 'has-error'}}">
                        <label for="name" class="control-label">Name</label>
                        <input required="required" type="text" id="name" name="name" class="form-control">
                        {!!$errors->first('name', '<span class="text-danger">:message</span>')!!}
                    </div>
                    <div class="form-group {{ empty($errors->first('email'))? '': 'has-error'}}">
                        <label for="email" class="control-label">Email</label>
                        <input required="required" type="email" id="email" name="email" class="form-control">
                        {!!$errors->first('email', '<span class="text-danger">:message</span>')!!}
                    </div>
                    <div class="form-group {{ empty($errors->first('message'))? '': 'has-error'}}">
                        <label for="message" class="control-label sr-only">Message</label>
                        <textarea rows=10 required="required" type="text" id="message" name="message" class="form-control"></textarea>
                        {!!$errors->first('message', '<span class="text-danger">:message</span>')!!}
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-default btn-primary btn-block" name="submit" value="Submit Enquiry &raquo;" />
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop