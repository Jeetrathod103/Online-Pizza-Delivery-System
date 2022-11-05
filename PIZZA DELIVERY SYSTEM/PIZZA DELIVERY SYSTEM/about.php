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
<html>
  <head>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Raleway&family=Righteous&family=Rubik&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <style>

      html {
        box-sizing: border-box;
      }

      h1 {
        font-family: "Righteous", sans-serif;
      }

      a {
        color: white;
      }

      *,
      *:before,
      *:after {
        box-sizing: inherit;
      }

      .row{
        display: flex;
        gap: 1rem;
        padding: 1rem;
        margin: 1rem;
        margin-right: 0px !important;
      }

      /* .column {
        float: left;
        width: 33.3%;
        margin-bottom: 16px;
        padding: 0 8px;
      } */

      .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        padding: 1rem;
      }

      .about-section {
        padding: 50px;
        text-align: center;
        background-color: #1087ac;
        color: white;
      }

      .container {
        padding: 16px;
      }

      .container::after,
      .row::after {
        content: "";
        clear: both;
        display: table;
      }

      .title {
        color: grey;
      }

      .button {
        border: none;
        outline: 0;
        display: inline-block;
        padding: 8px;
        color: white;
        background-color: #000;
        text-align: center;
        cursor: pointer;
        width: 100%;
        border-radius: 5px;
      }

      .button:hover {
        background-color: #555;
        color: white;
        text-decoration: none;
      }

      @media screen and (max-width: 650px) {
        .column {
          width: 100%;
          display: block;
        }
      }
    </style>
  </head>
  <body>
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
      <li class="nav-item">
        <a class="nav-link" href="menu.php">Menu</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Gift Card</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact Us</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">About Us</a>
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
    <div class="about-section">
      <h1>JY Pizzeria</h1>
      <h2>Who we are.</h2>
      <p>Some text about who we are and what we do.</p>
    </div>

    <h2 style="text-align: center; padding: 1rem; margin-bottom: 0px !important;">Our Team</h2>
    <div class="row">
      <div class="column">
        <div class="card">
          <!-- <img src="" alt="Yash Burshe" style="width: 100%" /> -->
          <div class="container">
            <h2>Yash Burshe</h2>
            <p class="title">Co-Founder & MD</p>
            <p>Some text that describes me.</p>
            <p>yashburshe15@gmail.com</p>
            <p><a href="mailto:yashburshe15@gmail.com" class="button">Contact</a></p>
          </div>
        </div>
      </div>

      <div class="column">
        <div class="card">
          <!-- <img src="" alt="Jeet Rathod" style="width: 100%" /> -->
          <div class="container">
            <h2>Jeet Rathod</h2>
            <p class="title">Co-Founder & CEO</p>
            <p>Some text that describes me.</p>
            <p>jeetrathod16@gmail.com</p>
            <p><a href="mailto:jeetrathod16@gmail.com" class="button">Contact</a></p>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
