

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
     
    echo '<script type="text/JavaScript"> alert("your details are submited successfully ");</script>';

    // echo "<script>window.location.href = 'login.php';</script>";

     echo "details are: \n";
     echo $uname,"<br>";
     echo $name,"<br>";
     echo $email,"<br>";
     echo $password,"<br>";
     $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
     echo $hashedPassword,"<br>";
     
    
     
    
     ?>


     
</body>
</html>