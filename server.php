<?php

//Initialising variables

session_start();

$name="";
$company name="";
$email address="";
$errors=array();

//Connection to db

$db= mysqli_connect('localhost','root','','BCM') or die ("Cound not connect to database");

//Profile registration

$name = mysqli_real_escape_string($db,$POST['name']);
$company name = mysqli_real_escape_string($db,$POST['company name']);
$email address= mysqli_real_escape_string($db,$POST['email address']);
$telephone= mysqli_real_escape_string($db,$POST['telephone']);
$password= mysqli_real_escape_string($db,$POST['password']);

//form validation

if (empty($name)) {array_push($errors, "name is required")};
if (empty($company name)) {array_push($errors, "company name is required")};
if (empty($email address)) {array_push($errors, "email address is required")};
if (empty($telephone)) {array_push($errors, "telephone is required")};
if (empty($password)) {array_push($errors, "password is required")};

//check db for existing users with same company name 

$company_check_query= "select * from company name where company name='company name'or email address='email address' LIMIT 1";
$results= mysqli_query($db, $company_check_query);
$company= mysqli_ferch_assoc($result);

if($Profile){
	if($Profile['company name']===$company name){array_push($errors,"company name already exists");}
	if($Profile['email address']===$email address){array_push($errors,"This email address already has an associated company name");}
}

//Register the profile if no error

if (count($errors) == 0 ){
	$password=md5(password); // This will encrypt the password
	$query = "INSERT INTO profile(name, company name, email address, telephone number, password") VALUES ($name,$company name,$email address,$telephone number, password);

mysqli_query($db,$query)
$_SESSION['name']=$name;
$_SESSION['success']="Your profile has been successfully created";

header('location:index.php')

}

?>