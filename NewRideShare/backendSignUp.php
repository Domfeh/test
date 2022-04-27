<?php
include 'connection.php';
if(isset($_POST["submit"])){
	$name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"]; 
    $password2 = $_POST["password2"];

    if($password==$password2){
        $newpassword=md5($password);
    }else{
        echo "password must be the same";
    }

    $sql="INSERT INTO `signUp`(`name`, `email`,`password`) VALUES ('$name', '$email',  '$newpassword')";
	if(mysqli_query($conn,$sql)){
        header('location: logIn.php');
    }else{
        echo '<script type ="text/javaScript">';
    echo  'alert("email or password not correct")';
echo '</script>';
header("refresh:0; url=signUp.php");
           }

}

?>
