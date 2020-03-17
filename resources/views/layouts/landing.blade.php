<!DOCTYPE html>
<html lang="en">

<head>
  <title>Billy Burger</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta name="viewport" content="width=device-width, initial-scale=1">


  <link rel="stylesheet" href="/css/app.css">

  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>

<body>
  <section id="app-layout">
    <div class="side-menu">
      <div class="logo">
        <a>
        <img src="/img/clipart-restaurant-restaurant-logo-5.png">
        </a>
      </div>
      <div class="menu">
        <div class="menu-title">
          Menu
        </div>
        <ul class="links">
          <li>
            <a href="/about">About Us</a>
          </li>
          <li>
            <a href="/menu">Food</a>
          </li>
          <li>
            <a href="/reservations">Reservations</a>
          </li>
          <li>
            <a href="/offers">Offers</a>
          </li>
          <li>
            <a href="/contact">Contact</a>
          </li>
        </ul>
      </div>
      <div class="social-icons">
        <a href="#">
          <i class="fa fa-facebook" aria-hidden="true"></i>
        </a>
        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
        <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
      </div>
      <div class="location">
        <div class="address">
          234 Main st,<br>
          New York, New York 11747
        </div>
        <div class="phone-number">
          <a href="tel:7182198652">718-219-8652</a>
        </div>
      </div>
    </div>
    <div class="welcome-jumbo">
      <div class="status">NEW</div>
      <h1>Billy Burger</h1>
      <img src="/img/hamburger-and-fries-png-4.png" class="burger-fries">
    </div>
  </section>
  @yield('content')
  
</body>

</html>