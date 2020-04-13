  @extends('layouts.app')


  @section('content')

  <div id="contact-page">
    <div class="content-box">
      <div class="row">
      <div class="col-md-6">
        <h1>Contact Us</h1>
          <h3>Address</h3>
          <p>
           {{$settings["general"]->address_1}},<br>
          {{$settings["general"]->city}}, {{$settings["general"]->state}} 
          {{$settings["general"]->zipcode}}
          </p>
          <h3>Phone Number</h3>
          <p>
          {{$settings["general"]->phone_number}}
          </p>

      </div>
      <div class="col-sm-6">
        <<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3033.4541368993896!2d-74.24996931253041!3d40.50945224722479!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c3ca9c0c8ec197%3A0xc0c3c59c7e8cae21!2sCracker%20Barrel%20Deli!5e0!3m2!1sen!2sus!4v1584736744873!5m2!1sen!2sus" width="600" height="450" 
        frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>
    </div>
    </div>
  </div>
  @endsection 



