<?php

    include 'connection.php';
    include 'session.php';
    if(!isset($login_session)){
      header('location: index.php');
    }
    //$email='adwoa@gmail.com';
    //$email = $_POST["Fs_email"];
    $sql="SELECT * FROM BerekusoDrivers";
    $result=mysqli_query($conn, $sql);

    
?>  
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css" />
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
    <title>Scheduled Ride page</title>
    <style>
        table {
          font-family: arial, sans-serif;
          border-collapse: collapse;
          width: 100%;
        }
  
        td, th {
          border: 1px solid #dddddd;
          text-align: left;
          padding: 8px;
          padding-left:150px;
        }
       
        tr:nth-child(even) {
          background-color: #dddddd;
        }
        
        </style>
</head>

<body>
    <header>
        <div class="bx bx-menu" id="menu-icon"></div>
        <ul class="navbar">
          <li><a href="home.php">Home</a></li>
          <li><a href="BookRide.php">Book-Ride</a></li>
          <li><a href="ActiveRides.php">Indicate-Active-Ride</a></li>
        </ul>
        <div class="header-btn">
          <a href="index.php" class="login">Sign Out</a>
        </div>
      </header>
    <h2>Scheduled Rides</h2>
<?php
if($result ->num_rows > 0){
echo " <table >";
echo "<tr class='tr'>";
  echo "<th> id</th>";
  echo "<th>Driver's Name</th>";
  echo "<th>Phone Number</th>";
  
echo "</tr>"  ;  
while($row=$result->fetch_assoc()){
 echo "<tr class='tr'>";
  echo "<td>".$row['id']. "</td>";
  echo "<td>".$row['name']. "</td>";
  echo "<td>".$row['phoneNumber']. "</td>";
echo "<tr>";
}
echo "</table> ";
  

}else{
echo  "No Result Found";
}
   
  ?>    
</body>
</html>