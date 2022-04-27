<?php

session_start();
include 'connection.php';
if(isset($_POST["submit"])){
	$email = $_POST["email"];
    $password =md5($_POST["password"]);
    

    $sql="SELECT * FROM signUp WHERE `email`='$email' AND `password`='$password' ";
    $result=mysqli_query($conn, $sql);

    if($result ->num_rows > 0){
        header('location: home.php');
        $_SESSION['login_user']=$email;

    }else{

        echo '<script type ="text/javaScript">';
    echo  'alert("email or password not correct")';
echo '</script>';
header("refresh:0; url=logIn.php");

       

    }

}
?>
