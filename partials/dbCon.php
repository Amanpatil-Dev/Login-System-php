<?php
$server="localhost";
$username = "root";
$password = "";
$dbname ="user";

$conn=mysqli_connect($server,$username,$password,$dbname);
if(!$conn){
//     echo "success";
// }
// else{
    die("error".mysqli_connect_error());
}

?>