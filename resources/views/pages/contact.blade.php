@extends('layouts.default')

@section('content')
    <h1>Contact Page</h1>
    <p class="lead">this is my contact page</p>
    <form role = "form" id = "contact-form" class="contact-form" method="POST" action="{{route('contact.store')}}">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="email">Email address</label>
            <input name="email" type="email" class="form-control" id="exampleFormControlInput1" placeholder="youremail@example.com">
        </div>
        <div class="form-group">
            <label for="Name">Name</label>
            <input name="name" type="name" class="form-control" id="exampleFormControlInput1" placeholder="Rod Example">
        </div>
        <div class="form-group">
            <label for="Message">Type in your message</label>
            <textarea name="message" class="form-control" id="message" rows="5"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection

@include('includes.jsfooter')
