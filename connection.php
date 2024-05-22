
<?php
$host="localhost";
$user="root";
$password="";
$db="phpbasic";

$con = mysqli_connect($host,$user,$password,$db);
if($con==false){
    
    echo '<script type="text/JavaScript"> alert("DataBase Not connected");</script>';
    die("connection error");
    
}
    // echo '<script type="text/JavaScript"> alert("DataBase connected");</script>';

?>