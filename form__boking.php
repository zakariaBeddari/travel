<?php
  $connection = mysqli_connect("localhost","root","","travel_db");
  if (isset($_POST['submit'])) {
    $name     = $_POST['name'];
    $email    = $_POST['email'];
    $phone    = $_POST['phone'];
    $adrress  = $_POST['address'];
    $location = $_POST['location'];
    $guests = $_POST['guests'];
    $arrivals = $_POST['arrivals'];
    $leavings = $_POST['leavings'];

    $reuquet="INSERT INTO book_form(name,email,phone,adrress,location,guests,arrivals,leaving)
    VALUES ('$name','$email','$phone','$adrress','$location','$guests','$arrivals','$leavings')";

    mysqli_query($connection,$reuquet);
    header('location:book.php');
  }
  else{
    echo 'something wrong try again';
  };
?>