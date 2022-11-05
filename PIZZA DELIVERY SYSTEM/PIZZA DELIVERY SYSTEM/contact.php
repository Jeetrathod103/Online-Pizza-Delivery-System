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
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Contact Us Page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Raleway&family=Righteous&family=Rubik&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"
    />
    <script src="https://use.fontawesome.com/20ab91acc4.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link rel="stylesheet" href="styles/contact.css" />
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
      <li class="nav-item active">
        <a class="nav-link" href="#">Contact Us</a>
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
    <section id="contact">
      <div class="about-section">
        <h1> JY Pizzeria</h1>
        <h3>Send us a message.</h3>
      </div>
      <div class="contact-wrapper">
        <!-- Left contact page -->

        <form id="contact-form" class="form-horizontal" role="form">
          <div class="form-group">
            <div class="col-sm-12">
              <input
                type="text"
                class="form-control"
                id="name"
                placeholder="NAME"
                name="name"
                value=""
                required
              />
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-12">
              <input
                type="email"
                class="form-control"
                id="email"
                placeholder="EMAIL"
                name="email"
                value=""
                required
              />
            </div>
          </div>

          <textarea
            class="form-control"
            rows="5"
            placeholder="MESSAGE"
            name="message"
            required
            style="margin: .95rem; max-width: 370px;"
          ></textarea>

          <button
            class="btn btn-primary send-button"
            id="submit"
            type="submit"
            value="SEND"
            style="margin: .95rem; max-width: 373px;"
          >
            <div class="alt-send-button">
              <i class="fa fa-paper-plane"></i
              ><span class="send-text">SEND</span>
            </div>
          </button>
        </form>

        <!-- Left contact page -->

        <div class="direct-contact-container">
          <ul class="contact-list">
            <li class="list-item">
              <i class="fa fa-map-marker fa-2x"
                ><span class="contact-text place"
                  >Vile Parle, Mumbai, Maharashtra.</span
                ></i
              >
            </li>

            <li class="list-item">
              <i class="fa fa-phone fa-2x"
                ><span class="contact-text phone"
                  ><a href="tel:1-212-555-5555" title="Give me a call"
                    >022-2574-3771</a
                  ></span
                ></i
              >
            </li>

            <li class="list-item">
              <i class="fa fa-envelope fa-2x"
                ><span class="contact-text gmail"
                  ><a href="mailto:#" title="Send me an email"
                    >jypizzeria@gmail.com</a
                  ></span
                ></i
              >
            </li>
          </ul>

          <hr />

          <div class="copyright">&copy; ALL RIGHTS RESERVED</div>
        </div>
      </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="js/contact.js"></script>
  </body>
</html>
