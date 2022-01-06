<?php
session_start();
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$sub=$_POST['sub'];
  	$mess=$POST['mess']
	$message="Name:".$name."\n"."Email:".$email."\n"."Sub:".$sub."\n"."Message:".$mess."\n";


	mail("kshitijpathak57@gmail.com","Enquiry","$message");
		
	echo "<script>alert('We Received Your Request Our Team Will Contact You ASAP! ThankYou For Contacting Us')</script>";
	echo "<script>window.location='https://kshitiz007.github.io/kshitiz.github.io';</script>";
}
else
{
	header("Location:https://kshitiz007.github.io/kshitiz.github.io");
}

?>
