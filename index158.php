<?php
$connection = mysqli_connect('localhost','root','','dubai_db');
if(isset($_POST['send2'])){
   $User = $_POST['User'];
   $Meeting = $_POST['Meeting'];
   $arrivals = $_POST['arrivals'];
   $leaving = $_POST['leaving'];
   $Chairs = $_POST['Chairs'];
   $Adults = $_POST['Adults'];
   $Drinks = $_POST['Drinks'];
   $Email= $_POST['Email'];
   $Phone= $_POST['Phone'];
   

   $request = "insert into meeting_form(User, Meeting, arrivals, leaving, Chairs, Adults, Drinks , Email, Phone) values
   ('$User','$Meeting','$arrivals','$leaving','$Chairs','$Adults','$Drinks','$Email','$Phone')";
   mysqli_query($connection, $request);
   header('location:index66.php#Room' || 'location:index67.php#Room' || 'location:index68.php#Room' || 'location:index69.php#Room' || 'location:index70.php#Room' || 'location:index71.php#Room' || 'location:index72.php#Room' || 'location:index82.php#Room' || 'location:index92.php#Room' || 'location:index101.php#Room' || 'location:index110.php#Room' || 'location:index120.php#Room' || 'location:index132.php#Room' || 'location:index142.php#Room' || 'location:index152.php#Room');
}else{
    echo 'something went wrong try again please';
}


?>