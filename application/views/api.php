<?php 
$host="Localhost";
$user="root";
$pass="";
$db="test";
$conn=mysqli_connect($host,$user,$pass,$db);
if($conn->error){
    echo "Connection Failed";
    die();
}
$qry="SELECT * FROM users";

$result=mysqli_query($conn,$qry);
$arr=[];
while($row= mysqli_fetch_array($result, MYSQLI_NUM)){
    // print_r($row);
    array_push($arr,$row);
}
print_r('<pre>');
print(json_encode($arr, JSON_PRETTY_PRINT));
// echo "Connection Success";
?>