<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="=IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>AshesiConnect</title>
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
    <link rel="stylesheet" href="index.css" />
    <style>
      /* Google fonts */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    scroll-padding-top: 2rem;
    scroll-behavior: smooth;
    list-style: none;
    text-decoration: none;
    font-family: "Poppins", sans-serif;
}
:root{
    --main-color: #fe5b3d;
    --second-color: #ffac38;
    --text-color: #444;
    --gradient: linear-gradient(#fe5b3d, #ffac38);
}
html::-webkit-scrollbar {
    width: 0.5rem;
}
html::-webkit-scrollbar-track {
    background: transparent;
}
html::-webkit-scrollbar-thumb {
    background: var(--main-color);
    border-radius: 5rem;
}
section{
    padding: 50px 100px;
    align-items: center;
}
header{
    position: fixed;
    width: 100%;
    top: 0;
    right: 0;
    z-index: 1000;
    display: flex;
    align-items: center;
    justify-content: space-between;
    background: #eeeff1;
    padding:0px;
}
.logo img{
    width: 200px;
}
.navbar a{
    font-size: 1rem;
    padding: 10px 20px;
    color: var(--text-color);
    font-weight: 500;
}
.navbar a::after{
    content: "";
    width: 0;
    height: 3px;
    background: var(--gradient);
    position: absolute;
    bottom: -4px;
    left: 0;
    transition: 0.5s;
}
.navbar a:hover::after{
    width: 100%;
}
#menu-icon{
    font-size: 24px;
    cursor: pointer;
    z-index: 10001;
    display: none;
}
.header-btn a{
    padding: 10px 20px;
    color: var(--text-color);
    font-weight: 500;
}
.header-btn .login{
    background: #474fa0;
    color: #fff;
    border-radius: 0.5rem;
}
.home{
    width: 100%;
    height: auto;
    min-height: 100vh;
    position: relative;
    background: url(images/car.jpg);
    background-repeat: no-repeat;
    background-position: center right;
    background-size: cover;
    display: grid;
    align-items: center;
    grid-template-columns: repeat(2, 1fr);   
}
h1{
  color: purple;
}
h5{
  color: black;
}
  </style>
  </head>
  <body>
    <header>
      <a href="#" class="logo"><img src="images/carnew.jpeg" alt="" /></a>
      <div class="bx bx-menu" id="menu-icon"></div>
      <div class="header-btn">
        <a href="logIn.php" class="login">Log In</a>
        <a href="signUp.php" class="sign-up">Sign Up</a>
        <a href="#contact" class="sign-up">Contact Us</a>
      </div>
      <ul class="navbar">
        <li><a href=""></a></li>
        <li><a href=""></a></li>
        <li><a href=""></a></li>
      </ul>
    </header>
    <section class="home" id="home">
      <div class="text">
        <h1><b> WELCOME TO ASHESICONNECT </b></h1>
        <h4><span><b> DO YOU WANT</span> TO SCHEDULE OR SHARE A RIDE?</h4></b>
      </div>
      
    </section>


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
            <p id="subheading"> Greater Accra,<br />Ghana.</p>
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

      <div style="margin-top: 10px; margin-left: 47.5%;">
        <a href="#home"><button style="background-color: #474fa0;" type="button" class="btn btn-primary" data-toggle="button" aria-pressed="false" autocomplete="off">
          Top
        </button> </a>
      </div>
    </div>

    <script src="main.js"></script>
  </body>


</html>

