
<?php
$host="localhost";
$user="root";
$password="";
$db="phpbasic";

$conn = mysqli_connect($host,$user,$password,$db);
if($conn==false){
    
    echo '<script type="text/JavaScript"> alert("DataBase Not connected");</script>';
    die("connection error");
    
}
    // echo '<script type="text/JavaScript"> alert("DataBase connected");</script>';

?>