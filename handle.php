

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
      <?php
      require("connection.php");

     $uname =$_POST["username"];
     $name =$_POST["name"];
     $email =$_POST["email"];
     $password = $_POST["password"];
     $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    
     $query = "Insert into logindetails(username, name, email, password) values('$uname', '$name','$email','$hashedPassword')";

    if(!$con){echo("No connection");}else{
        $res = mysqli_query($con,$query);

    }

    echo '<script type="text/JavaScript"> alert("your details are submited successfully ");</script>';

    echo "<script>window.location.href = 'login.php';</script>";

    //  echo "details are: \n";
    //  echo $uname,"<br>";
    //  echo $name,"<br>";
    //  echo $email,"<br>";
    //  echo $password,"<br>";
     
    //  echo $hashedPassword,"<br>";
     
    
     
    $con->close();
     ?>


     
</body>
</html>