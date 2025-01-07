<?php
$conn=mysqli_connect("localhost","root","","subscriber");
if(!$conn){
	die("not connect".mysqli_connect_error());
}
if(isset($_POST["uname"])&&isset($_POST["phone"])&&($_POST["email"]))
{
	$name=$_POST['uname'];
	$phone=$_POST['phone'];
    $email=$_POST['email'];
	echo $name;
	
	$que="INSERT INTO subscribe VALUES ('$name','$phone','$email')";
	$res=mysqli_query($conn,$que);
	
	// if(mysqli_affected_rows($res)>0){
	// 	echo "inserted successfully";
		
	// } 
	// else{
	// 	echo "Creat Account failed";
	// }
}
?>