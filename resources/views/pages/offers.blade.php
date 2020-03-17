@extends('layouts.app')


@section('content')

<div id="offers-page">
  <div class="content-box">
    <div class="row">
      <div class="col-md-8
      offset-md-2">
  <h1>Sign up for Rewards!</h1>
  <form>
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="firstnameinput">First Name</label>
          <input type="text" name="fname"
           class="form-control" id="firstnameinput" 
           placeholder="ex. John">
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="lastnameinput">Last Name</label>
          <input type="text" 
          class="form-control"
           id="lastnameinput" name="lname" placeholder="ex. Johnson">
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="emailinput">Email address</label>
          <input type="email" name="email"
           class="form-control" id="emailinput" 
           placeholder="name@example.com">
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="phoneinput">Phone #</label>
          <input type="text" 
          class="form-control"
           id="phoneinput" name="phone" placeholder="(215-XXX-XXXX)">
        </div>
      </div>
    </div>
    
    
    <div class="form-group">
      <button type="submit" class="btn btn-primary mb-2">Register</button>
    </div>
    </div>
    <div class="col-md-6 offset-md-2">
      <p>
       *By registering, I acknowledge that I am 18 years of age or older,
        I want to receieve email offers from Billys Burgers and that in choosing to join
        Dine Rewards, I agree to the terms and conditions of the program.
      </p>
    </div>
  </div>
  </div>
</div>
@endsection 



