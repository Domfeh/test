<?php
include 'insert.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="signUp.css">
    <title>Sign Up Page</title>

</head>
<body>
    <div class="container" style="margin: 5%;">
        <form id="form" class="form" action="insert.php" method="POST">
            <h3 class="my-1 fs-1">Book a Rideß</h3>
            <div class="form-control">
                <label for="PickUpPoint">Pick-Up-Point</label>
                <input type="text" id="PickUpPoint" name = "pickUpPoint" placeholder="input where you want to be picked up from">
                <small id='PickUpPointError'></small>
            </div>
            <div class="form-control">
                <label for="WhereTo">Where-To</label>
                <input type="text" id="WhereTo" placeholder="input your desired destination" name="destination">
                <small id='WhereToError'></small>
            </div>
            <div class="form-control">
                <label for="PickUpPoint">Pick-Up-Date</label>
                <input type="date" id="PickUpDate" name="pickUpDate">
            </div>
            <div class="form-control">
                <label for="phoneNumber">Phone Number</label>
                <input type="text" id="phoneNumber" name="phoneNumber">
                <small id='phoneNumber'></small>
            </div>
            <small id='success'></small>
            <button type="submit"  name ="submit" id='submit' placeholder=" Book a ride">Book a ride </button>

            <p style="font-size: 10px; margin-left: 25%;"> <span style="filter:brightness(200%)"> Check the currently Active rides rather </span><a href="ActiveRides.php"><em><b>Active Rides</b></em></p>
                <br>
        </form>

        <div style="margin-top: -20px; margin-left: 35%;">
        <a href="home.php"><button style="background-color: #474fa0;" type="button" class="btn btn-primary" data-toggle="button" aria-pressed="false" autocomplete="off">
          Main Page
        </button> </a>
      </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</body>
</html>