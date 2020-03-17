@extends('layouts.app')


@section('content')

<div id="waitlist-page">
  <div class="content-box">
    <div class="row">
      <div class="col-sm-6">
  <h1>Get on the List!</h1>
  <form>
  <div class="form-group">
      <label for="firstnameinput">First Name</label>
      <input type="text" 
      class="form-control"
       id="firstnameinput" name="fname" placeholder="John">
    </div>
    <div class="form-group">
      <label for="lastnameinput">Last Name</label>
      <input type="text" 
      class="form-control"
       id="lastnameinput" name="lname" placeholder="Doe">
    </div>
    <div class="form-group">
      <label for="emailinput">Email address</label>
      <input type="email" name="email"
       class="form-control" id="emailinput" 
       placeholder="name@example.com">
    </div>
    <div class="form-group">
      <label for="phoneinput">Phone #</label>
      <input type="text" 
      class="form-control"
       id="phoneinput" name="phone" placeholder="(215-XXX-XXXX)">
    </div>
    <div class="form-group">
      <label for="guestinput">How many Guests?</label>
      <select class="form-control" 
      name="guests" id="guestinput">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
      </select>
    </div>
    <div class="form-group">
      <label for="timeinput">What Time?</label>
      <select class="form-control" name="time" id="timeinput">
        <option value="6">6:00PM</option>
        <option value="7">7:00PM</option>
        <option value="8">8:00PM</option>
        <option value="9">9:00PM</option>
        <option value="10">10:00PM</option>
      </select>
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-primary mb-2">Confirm</button>
    </div>
    </div>
    <div class="col-md-6">
      <p>
        Please Note: This is not the final confirmation of your reservation.
        You will be added to the current waiting list. Upon arrival, you may
        encounter a brief wait as we prepare your table.
      </p>
    </div>
  </div>
  </div>
</div>
@endsection 



