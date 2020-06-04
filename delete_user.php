<?php
include_once 'dbconnect.php';
$username = isset( $_GET['username'] ) ? $_GET['username'] : '';
$password = isset( $_GET['password'] ) ? $_GET['password'] : '';
$fullname = isset( $_GET['fullname'] ) ? $_GET['fullname'] : '';
$address = isset( $_GET['address'] ) ? $_GET['address'] : '';
$email = isset( $_GET['email'] ) ? $_GET['email'] : '';
$phone = isset( $_GET['phone'] ) ? $_GET['phone'] : '';
$username = mysqli_real_escape_string( $conn, $username );
$password = mysqli_real_escape_string( $conn, $password );
$fullname = mysqli_real_escape_string( $conn, $fullname );
$address = mysqli_real_escape_string( $conn, $address );
$email = mysqli_real_escape_string( $conn, $email );
$phone = mysqli_real_escape_string( $conn, $phone );
$query = "DELETE FROM customer WHERE username='".$username."'";
if($ret = mysqli_query( $conn, $query )){
  
  if(isset( $_SESSION['username'] )){
    unset($_SESSION['username']);
  }
  echo "Da xoa tai khoan thanh cong";

};
mysqli_close( $conn );
header('Location: localhost:81/mobile/index.php');
?>