@extends('layouts.app')


@section('content')

<div id="waitlist-page">
  <div class="content-box">
    <div class="row">
      <div class="col-sm-6">
  <h1>Get on the List!</h1>
   <form method="POST" action="/reservations">
              @csrf
  <div class="form-group">
        <label for="inputfname">First Name</label>
        <input id="inputfname" type="text" class="form-control
        form-control-lg @error('fname') is-invalid @enderror" 
        name="fname" value="{{ old('fname') }}" required autocomplete="fname" 
       autofocus placeholder="John">
                 @error('fname')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
              </span>
         @enderror
    </div>
    <div class="form-group">
      <label for="inputlname">Last Name</label>
      <input id="inputfname" type="text" class="form-control
        form-control-lg @error('lname') is-invalid @enderror" 
        name="lname" value="{{ old('lname') }}" required autocomplete="lname" 
       autofocus placeholder="Doe">
                 @error('lname')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
              </span>
         @enderror
    </div>
    <div class="form-group">
      <label for="inputemail">Email address</label>
      <input id="inputemail" type="email" class="form-control
        form-control-lg @error('email') is-invalid @enderror" 
        name="email" value="{{ old('email') }}" required autocomplete="email" 
       autofocus placeholder="John">

                 @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
              </span>
         @enderror
    </div>
    <div class="form-group">
      <label for="inputphonenumber">Phone #</label>
      <input id="inputphonenumber" type="tel" class="form-control
        form-control-lg @error('phone_number') is-invalid @enderror" 
        name="phone_number" value="{{ old('phone_number') }}" required autocomplete="phone_number" 
       autofocus placeholder="ex. 214-234-3409">
                 @error('phone_number')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
              </span>
         @enderror
    </div>
    <div class="form-group">
      <label for="guestinput">How many Guests?</label>
      <select name="guests_total" class="form-control
        form-control-lg @error('guests_total') is-invalid @enderror" 
      name="guests" id="guestinput">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
      </select>
      @error('guests_total')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
              </span>
         @enderror
    </div>
    <div class="form-group">
      <label for="timeinput">What Time?</label>
      <select class="form-control
        form-control-lg @error('time') is-invalid @enderror" name="time" id="timeinput">
        <option value="6">6:00PM</option>
        <option value="7">7:00PM</option>
        <option value="8">8:00PM</option>
        <option value="9">9:00PM</option>
        <option value="10">10:00PM</option>
      </select>
      @error('time')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
              </span>
         @enderror
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



