<?php
$connection = mysqli_connect('localhost','root','','dubai_db');
if(isset($_POST['send'])){
   $name = $_POST['name'];
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   $address = $_POST['address'];
   $location = $_POST['location'];
   $guests = $_POST['guests'];
   $arrivals = $_POST['arrivals'];
   $leaving = $_POST['leaving'];

   $request = "insert into contact_form(name, email, phone, address, location, guests, arrivals, leaving) values
   ('$name','$email','$phone','$address','$location','$guests','$arrivals','$leaving')";
   mysqli_query($connection, $request);
   header('location:index3.php' || 'location:index8.php' || 'location:index12.php' || 'location:index16.php' || 'location:index20.php' || 'location:index24.php' || 'location:index28.php' || 'location:index76.php' || 'location:index90.php' || 'location:index96.php' || 'location:index105.php' || 'location:index114.php' || 'location:index126.php' || 'location:index136.php' || 'location:index146.php');
}else{
    echo 'something went wrong try again please';
}


?>