<?php

//echo "hello";


//database connection



 $form="formdata";
 $servername="localhost";
 $username="root";
 $password="";



 $conn=mysqli_connect($servername,$username,$password);
 if($conn){
 echo "database connected";
 }
 else{
 echo "database not connected".mysqli_error();
 }

//create database
/*
 $sql = "CREATE DATABASE signup";
 if (mysqli_query($conn, $sql)) {
 echo "Database created successfully";
 } else {
 echo "Error creating database: " . mysqli_error($conn);
 }
*/
$servername="localhost";
$username="root";
$password="";
$database="signup";

$conn=mysqli_connect($servername,$username,$password,$database);
if(isset($_POST['signup']))
{

if(!empty($_POST['fname'])&&($_POST['email'])&&($_POST['password']))
{

$fname=$_POST['fname'];
$email=$_POST['email'];
$password=$_POST['password'];*/
$query="INSERT INTO formdata ( fname,email,password ) VALUES('.$fname' , '.$email' , '.$password')";
$run= mysqli_query($conn,$query) or die(mysqli_error($conn));

if($run){
echo "signup successfull";
}

else{
echo"signup failed";
}

}
else{
echo"all fields required";
}
}
?>