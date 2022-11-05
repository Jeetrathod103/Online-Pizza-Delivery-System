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
    <link rel="stylesheet" href="styles/styles.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Raleway&family=Righteous&family=Rubik&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  </head>
  <body class="menu-body" style="background-color: #e6e6e6;">
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #1087ac;">
  <a class="navbar-brand" href="#">JY Pizzeria</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="welcome.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Menu</a>
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
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="card" style="width: 18rem; margin: 1rem;">
            <img class="card-img-top" src="assets\farmhouse.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Farmhouse</h5>
              <p class="card-text">Combination of onion, capsicum, tomato and grilled mushroom</p>
              <a href="#" class="btn btn-primary">Add to Cart</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card" style="width: 18rem; margin: 1rem;">
            <img class="card-img-top" src="assets\cheesedom.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Cheese Dominator</h5>
              <p class="card-text">1 Pound of Mozzarella and liquid cheese</p>
              <a href="#" class="btn btn-primary">Add to Cart</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card" style="width: 18rem; margin: 1rem;">
            <img class="card-img-top" src="assets\indipaneer.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Indi Tandoori Paneer</h5>
              <p class="card-text">It is hot and spicy with mint chutney on tandoori paneer</p>
              <a href="#" class="btn btn-primary">Add to Cart</a>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <div class="card" style="width: 18rem; margin: 1rem;">
            <img class="card-img-top" src="assets\vegloaded.png" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Veg Loaded</h5>
              <p class="card-text">Jalapeno, Corn, Grilled Mushroom, Tomato</p>
              <a href="#" class="btn btn-primary">Add to Cart</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card" style="width: 18rem; margin: 1rem;">
            <img class="card-img-top" src="assets\peppypaneer.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Peppy Paneer</h5>
              <p class="card-text">Flavourful trio of juicy paneer, crisp capsicum and spicy red paprika</p>
              <a href="#" class="btn btn-primary">Add to Cart</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card" style="width: 18rem; margin: 1rem;">
            <img class="card-img-top" src="assets\vegextra.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Veg Extravaganza</h5>
              <p class="card-text">Black olives, capscium, onion, grilled mushroom</p>
              <a href="#" class="btn btn-primary">Add to Cart</a>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <div class="card" style="width: 18rem; margin: 1rem;">
            <img class="card-img-top" src="assets\pepperoni.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Pepperoni Pizza</h5>
              <p class="card-text">Classic pepperoni pizza</p>
              <a href="#" class="btn btn-primary">Add to Cart</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card" style="width: 18rem; margin: 1rem;">
            <img class="card-img-top" src="assets\paneeronion.png" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Paneer and Onion</h5>
              <p class="card-text">Creamy paneer with crispy onions</p>
              <a href="#" class="btn btn-primary">Add to Cart</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card" style="width: 18rem; margin: 1rem;">
            <img class="card-img-top" src="assets\marg.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Margherita</h5>
              <p class="card-text">Classic New York style cheese pizza</p>
              <a href="#" class="btn btn-primary">Add to Cart</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
