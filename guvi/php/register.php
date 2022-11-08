<?php
sleep(3);

try{
	$con=new PDO("mysql:host=localhost;dbname=login_details","root","");
}catch(PDOExection $e){
	echo $e->getMessage();
}

$username=$_POST['username'];
$password=$_POST['password'];


$sql="insert into userdata(username,passwd) values('$username','$password')";
$stmt=$con->prepare($sql);
$stmt->execute();


// $name=$_POST['name'];
// $gender=$_POST['gender'];
// $age=$_POST['age'];
// $mobile=$_POST['mobile'];
// $DOB=$_POST['DOB'];

// $mg=new Mongoclient();
// $db=$mg->database;
// $collection=$db->mycollection;

// $doc=array{
// 	'name'=>$name,
// 	'gender'=>$gender,
// 	'username'=>$username,
// 	'age'=>$age,
// 	'mobile'=>$mobile,
// 	'dob'=>$DOB,
	
// }
// $collection->insert($doc);

?>