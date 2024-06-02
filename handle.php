

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


    
    

    if(!$conn){
        echo("No connection");
    }
    else{
        $query = "Insert into logindetails(username, name, email, password) values('$uname', '$name','$email','$password')";
        $res = mysqli_query($conn,$query);

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