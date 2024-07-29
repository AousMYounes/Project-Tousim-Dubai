<?php
$connection = mysqli_connect('localhost','root','','dubai_db');
if(isset($_POST['send3'])){
   $User = $_POST['User'];
   $Phone = $_POST['Phone'];
   $NameOrder = $_POST['NameOrder'];
   $Restaurant = $_POST['Restaurant'];
   $Many = $_POST['Many'];
   $Date = $_POST['Date'];
   $Address = $_POST['Address'];
   $Message= $_POST['Message'];
   
   

   $request = "insert into restaurants_form(User, Phone, NameOrder, Restaurant, Many, Date, Address , Message) values
   ('$User','$Phone','$NameOrder','$Restaurant','$Many','$Date','$Address','$Message')";
   mysqli_query($connection, $request);
   header('location:index45.php#Order' || 'location:index46.php#Order1' || 'location:index47.php#Order' || 'location:index48.php#Order' || 'location:index49.php#Order' || 'location:index50.php#Order' || 'location:index51.php#Order' || 'location:index81.php#Order' || 'location:index91.php#Order' || 'location:index100.php#Order' || 'location:index109.php#Order' || 'location:index119.php#Order' || 'location:index131.php#Order' || 'location:index141.php#Order' || 'location:index151.php#Order');
}else{
    echo 'something went wrong try again please';
}


?>