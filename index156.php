<?php
$connection = mysqli_connect('localhost','root','','dubai_db');
if(isset($_POST['send1'])){
   $User = $_POST['User'];
   $Hotels = $_POST['Hotels'];
   $arrivals = $_POST['arrivals'];
   $leaving = $_POST['leaving'];
   $Rooms = $_POST['Rooms'];
   $Adults = $_POST['Adults'];
   $Children = $_POST['Children'];
   $Email= $_POST['Email'];
   $Phone= $_POST['Phone'];
   

   $request = "insert into hotels_form(User, Hotels, arrivals, leaving, Rooms, Adults, Children , Email, Phone) values
   ('$User','$Hotels','$arrivals','$leaving','$Rooms','$Adults','$Children','$Email','$Phone')";
   mysqli_query($connection, $request);
   header('location:index45.php#Room' || 'location:index46.php#Room1' || 'location:index47.php#Room' || 'location:index48.php#Room' || 'location:index49.php#Room' || 'location:index50.php#Room' || 'location:index51.php#Room' || 'location:index81.php#Room' || 'location:index91.php#Room' || 'location:index100.php#Room' || 'location:index109.php#Room' || 'location:index119.php#Room' || 'location:index131.php#Room' || 'location:index141.php#Room' || 'location:index151.php#Room');
}else{
    echo 'something went wrong try again please';
}


?>