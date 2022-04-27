<?php
include 'connection.php';
if(isset($_POST["submit"])){
	$Dname = $_POST["Dname"];
    $DNumber = $_POST["Dnumber"];
    $Nplate = $_POST["Nplate"]; 


    $sql="INSERT INTO `DriversInformation`(`Drivername`, `PhoneNumber`,`NumberPlate`) VALUES ('$Dname', '$DNumber',  '$Nplate')";
	if(mysqli_query($conn,$sql)){
        header('location: home.php');
    }else{
        header('location: ActiveRides.php');

    }

}

?>
