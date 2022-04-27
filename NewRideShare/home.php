<?php
include 'session.php';
    if(!isset($login_session)){
      header('location: index.php');
    }
    ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="=IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>AshesiConnect</title>

    <link rel="stylesheet" href="index.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css"
    />
    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1"
      crossorigin="anonymous"
    />
    <style>
      .column {
        float: left;
        width: 33.33%;
      }
      /* Clear floats after the columns */
      .row:after {
        content: "";
        display: table;
        clear: both;
      }
    </style>
  </head>
  <body>
    <header>
      <a href="#" class="logo"><img src="images/carnew.jpeg" alt="" /></a>

      <div class="bx bx-menu" id="menu-icon"></div>

      <ul class="navbar">
        <li><a href="home.php">Home</a></li>
        <li><a href="#trip">Trips</a></li>
        <li><a href="BookRide.php">Book-Ride</a></li>
        <li><a href="ActiveRides.php">Indicate-Active-Ride</a></li>
        <li><a href="#contact">Contact Us</a></li>
        <li><a href="drivers.php">Berekuso Drivers</a></li>

      </ul>
      <div class="header-btn">
        <a href="logOut.php" class="login">Sign Out</a>
      </div>
    </header>

    <section class="home" id="home">
      <div class="text">
        <h1>
          <b><span> Welcome To</span> AshesiConnect </b>
        </h1>
        <p style="color:orange; font-size:x-large; font-weight:bolder">
          We will take you there! Fast and affrodable ride for Ashesi community 
        </p>
      </div>
    </section>

    <!--Trip-->
    <div class="rowA" id="trip">
      <div class="colA">
        <h4>Leaving Campus</h4>
        <div class="dropdown">
          <button class="dropbtn" style="background-color: #474fa0">
            Options
          </button>
          <div class="dropdown-content">
            <a href="scheduledRide.php">See Already Scheduled Rides</a>
            <a href="BookRide.php">Book a New Ride</a>
          </div>
        </div>
      </div>

      <div class="colA">
        <h4>Drivers Coming</h4>
        <div class="dropdown">
          <button class="dropbtn" style="background-color: #474fa0">
            Check the drivers on the way
          </button>
          <div class="dropdown-content">
            <a href="getdrivers.php">See Currently Active Rides</a>
            <a href="BookRide.php">Book a New Ride</a>
          </div>
        </div>
      </div>

      <div class="colA">
        <h4>Trip History</h4>
        <div class="dropdown">
          <button class="dropbtn" style="background-color: #474fa0">
            Check your history
          </button>
          <div class="dropdown-content">
            <a href="history.php">Check Your History</a>
            <a href="BookRide.php"
              >Add to Your History by Booking a New Ride</a
            >
          </div>
        </div>
      </div>
    </div>

    <!--Footer-->
    <div class="card-footer bg-transparent border-success footer mb-5">
      <footer class="rowB" id="contact">
        <div class="row">
          <div class="column pt-3">
            <h3 id="Heading1">
              <b>Connect with us on our Social Media Platforms</b>
            </h3>
            <p>
              <a href="https://www.facebook.com/claris.nadini/" target="_blank"
                ><img id="image" src="images/facebook.jfif"
              /></a>
              <a href="https://twitter.com/ClarisNadini" target="_blank"
                ><img id="image" src="images/twitter.png"
              /></a>
              <a
                href="https://www.youtube.com/watch?v=jNdWDJqxSOE"
                target="_blank"
                ><img id="image" src="images/YouTube.png"
              /></a>
              <a
                href="https://www.linkedin.com/in/claris-oyunga/"
                target="_blank"
                ><img id="image" src="images/LinkedIn.png"
              /></a>
              <br />
              <a href="https://medium.com/@kenyandaughter" target="_blank"
                ><img id="image" src="images/medium.jfif"
              /></a>
              <a
                href="https://www.instagram.com/kenyan.daughter/"
                target="_blank"
                ><img id="image" src="images/instagram.jpg"
              /></a>
              <a href="https://medium.com/@kenyandaughter" target="_blank"
                ><img id="image" src="images/tiktok.jpg"
              /></a>
            </p>
          </div>

          <div class="column pt-3">
            <p id="Heading1"><b>Postal Address</b></p>
            <p id="subheading">Greater Accra,<br />Ghana.</p>
            <p id="Heading1"><strong>Phone & Email</strong></p>
            <p id="subheading">
              (T)+233 24 869 7356 <br />
              (E)mary.domfeh@ashesi.edu.gh
            </p>
          </div>
        </div>

        <section id="contact2">
          <div class="row">
            <div class="column1">
              <p id="subheading1">
                <b
                  ><a id="subheading" style="align-items: right; color: #fe5b3d"
                    >All Rights reserved
                  </a></b
                >
              </p>
            </div>
          </div>
        </section>
      </footer>
    </div>

    <script src="#"></script>
  </body>
</html>
