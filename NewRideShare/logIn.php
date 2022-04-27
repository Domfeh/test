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
    <title>Log In Page</title>
</head>
<body>
    <div class="container" style="margin: 5%;">
        <form id="form" class="form" action="backendLogin.php" method="POST">
            <h3 class="my-1 fs-1">Log In</h3>
            <div class="form-control">
                <label for="email">Email</label>
                <input type="text" id="email" name="email" placeholder="Input your email">
                <small id='email'></small>
            </div>
            <div class="form-control">
                <label for="password">Password</label>
                <input type="password" id="password" name ="password" placeholder="please put your password (your contact)">
                <small id='passwordError'></small>
            </div>
            <small id='success'></small>
            <button type="submit" id='submit' name="submit">Login</button>

            <p style="font-size: 10px; margin-left: 25%;"> <span style="filter:brightness(200%)">Don't have an account? </span><a href="signUp.php"><em><b>Sign Up</b></em></p>
                <br>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</body>
</html>