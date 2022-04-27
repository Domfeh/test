
<?php
include 'backendSignUp.php';

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
        <form id="form" class="form" action="backendSignUp.php" method="POST">
            <h3 class="my-1 fs-1">Sign Up</h3>
            <div class="form-control">
                <label for="Uname">Name</label>
                <input type="text" id="Uname" name ="name" placeholder="name">
                <small id='nameError'></small>
            </div>
            <div class="form-control">
                <label for="email">Email</label>
                <input type="text" id="email" name ="email" placeholder="school email">
                <small id='emailError'></small>
            </div>
            <div class="form-control">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="please put your contact">
                <small id='passwordError'></small>
            </div>
            <div class="form-control">
                <label for="password2">Confirm Password</label>
                <input type="password" id="password2" name ="password2"placeholder="please confirm your contact">
                <small id='password2Error'></small>
            </div>
            <small id='success'></small>
            <button type="submit" id='submit' name ="submit">Sign Up</button>

            <p style="font-size: 10px; margin-left: 25%;"> <span style="filter:brightness(200%)">Already have an account? </span><a href="logIn.php"><em><b>Login here</b></em></p>
                <br>
        </form>
    </div>+
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</body>
</html>