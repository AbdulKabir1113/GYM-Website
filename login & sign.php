<?php
$conn=mysqli_connect("localhost","root","","login");

if(!$conn){
	die("not connect".mysqli_connect_error());
}
if(isset($_POST["uname"])&&isset($_POST["pass"]))
{
	$name=$_POST['uname'];
	$passs=$_POST['pass'];
	
	$que="select *from signin where username='$name' and password='$passs'";
	$res=mysqli_query($conn,$que);
	
	if(mysqli_num_rows($res)>0){
		echo "Welcome".$name."</br>";
		echo "You have signed in successfully";
		
	}
	else{
		echo "sign in failed";
	}
	header("Location: kabir.html");
}
?>