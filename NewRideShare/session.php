<?php 
session_start();
include 'connection.php';
if(isset($_SESSION['login_user'])){
    $user_check=$_SESSION['login_user'];
    $query= "select email FROM signUp WHERE email ='$user_check'";
    $sql = mysqli_query($conn, $query);
    $row=mysqli_fetch_assoc($sql);

    $login_session = $row['email'];
}

?>