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
    <title>Active Ride Page</title>
</head>


<body>
    <div class="container" style="margin: 5%;">
        <form id="form" class="form" method="POST" action="backendActiveRider.php">
            <h3 class="my-1 fs-1">Indicate an Active Ride</h3>
            <div class="form-control">
                <label for="Dname">Driver's Name</label>
                <input type="text" id="Dname" name = "Dname" placeholder="driver's name">
                <small id='usernameError'></small>
            </div>
            <div class="form-control">
                <label for="Dnumber">Driver's Number</label>
                <input type="text" id="Dnumber" name="Dnumber" placeholder="driver's number">
                <small id='emailError'></small>
            </div>
            <div class="form-control">
                <label for="Dnumber">Number Plate</label>
                <input type="text" id="Nplate" name ="Nplate"placeholder="number Plate">
                <small id='Nplate'></small>
            </div>
            <small id='success'></small>
            <button type="submit" id='submit' name="submit">Indicate-Active-Ride</button>

            <p style="font-size: 10px; margin-left: 25%;"> <span style="filter:brightness(200%)">No active ride, go back to the main site? </span><a href="home.php"><em><b>Main Page</b></em></p>
                <br>
        </form>

                <div style="margin-top: -20px; margin-left: 35%;">
        <a href="home.php"><button style="background-color: #474fa0;" type="button" class="btn btn-primary" data-toggle="button" aria-pressed="false" autocomplete="off">
          Main Page
        </button> </a>
      </div>

    </div>+
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</body>
</html>