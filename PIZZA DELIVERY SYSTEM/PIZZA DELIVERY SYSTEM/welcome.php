<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #1087ac;">
  <a class="navbar-brand" href="#">JY Pizzeria</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="welcome.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="menu.php">Menu</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Gift Card</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About Us</a>
      </li>
      <li class="nav-item">
        <a class="btn btn-primary" href="cart.php" role="button">Cart</a>
      </li>
    </ul>
    <span class="navbar-text">
      Welcome, <?php echo htmlspecialchars($_SESSION["username"]); ?>
      <a class="btn btn-danger btn-sm" href="logout.php" role="button">Logout</a>
    </span>
  </div>
</nav>
    <section class="order-banner">
      <div class="fade-div"></div>
      <img class="hero-pizza" src="assets/pizza-hero.jpg" alt="" />
      <img class="hero-delivery" src="assets/delivery.png" alt="" />
      <div class="call-to-action">
        <p>Yummy fresh pizza delivered to your doorstep</p>
        <button class="btn btn-success btn-lg" style="width: 150px;">Order now</button>
      </div>
    </section>
    <section class="offers">
      <img class="offer-celeb" src="assets/offer-celeb.png" alt="" />
      <div class="offer-display">
        <img src="assets/offer-pizza.png" alt="" class="pizza1" />
        <img src="assets/offer-pizza.png" alt="" class="pizza2" />
        <img src="assets/offer-coke.png" alt="" class="coke1" />
        <img src="assets/offer-coke.png" alt="" class="coke2" />
      </div>
      <div class="call-to-action">
        <h2>Exclusive website offers!</h2>
        <p>
          Browse amazing value offers on our website such as: Buy 2 pizzas and
          get 2 cokes free!
        </p>
        <button class="btn btn-primary btn-lg" style="width: 250px;">
          Explore Exciting Offers
        </button>
      </div>
    </section>
    <footer></footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
