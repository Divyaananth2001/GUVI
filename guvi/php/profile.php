<?php

$conn=new mysqli("mysql:host=localhost","root","",dbname="login_details");
if($conn->connect_error){
    die("connection failed:".$conn->connect_error);
}
$sql = "SELECT id, username";
$result = $conn->query($sql);
if($result->num_rows > 0){
    while($row = $result->fetch_ascoc()){
        echo "id:". $row["id"."".$row["lastname"]."<br>";

    }
    echo "0 results";
}
$conn->close;
?>