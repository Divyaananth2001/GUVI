<?php
sleep(3);

try{
	$con=new PDO("mysql:host=localhost;dbname=login_details","root","");
}catch(PDOExection $e){
	echo $e->getMessage();
}

$username=$_POST['username'];
$password=$_POST['password'];

 $sql="SELECT * FROM userdata WHERE username='$username' AND passwd='$password'";
 $stmt=$con->prepare($sql);
 $stmt->execute();
 $result = mysqli_query($con,$sql);
 if ($result->num_rows > 0){
     header("Location: ./profile.html");
     exit;
 }
?>