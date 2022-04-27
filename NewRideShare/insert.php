<?php
include 'session.php';

?>
<?php
include 'connection.php';
if(isset($_POST["submit"])){
	$pickUpPoint = $_POST["pickUpPoint"];
    $pickUpDate = $_POST["pickUpDate"];
    $phoneNumber = $_POST["phoneNumber"]; 
    $destination = $_POST["destination"];

    $sql="INSERT INTO `ScheduleTrip`(`pickUpPoint`, `Date`,`Destination`, `PhoneNumber`,`email`) VALUES ('$pickUpPoint', '$pickUpDate',  '$destination','$phoneNumber','$login_session')";
	if(mysqli_query($conn,$sql)){
        header('location: home.php');
    }else{
        echo "not successful";
    }

}

?>
