
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<style>
.link{
        float: right;
        padding: 40px;
        margin: 4px;
}
</style>

<br><br>
    <a class="btn btn-primary link" href="http://localhost/webPrograming">HOME</a>
    <a class="btn btn-primary link" href="http://localhost/webPrograming/signup.php">ADD Record</a>
</body>
</html>



<?php
           
            require("connection.php");

            $db_data = "Select * from logindetails";

            $result = mysqli_query($conn, $db_data);
            //echo mysqli_num_rows($result); return 1 if some data is present 
            
            if (mysqli_num_rows($result) > 0) {
                $inc = 1;
                echo "<br><br><table class='table'>
                            <tr>
                                <th scope='col'>NO.</th>
                                <th scope='col'>USERNAME</th>
                                <th scope='col'>NAME</th>
                                <th scope='col'>EMAIL</th>
                                <th scope='col'>PASSWORD</th>
                                <th scope='col'></th>
                            </tr><tr>";
              
              while($row = mysqli_fetch_assoc($result)) {
                echo 
                "<tr> 
                <td>".$inc."</td>
                <td>".$row['username']."</td>
                <td>".$row['name']."</td>
                <td>".$row['email']."</td>
                <td>".$row['password']."</td>
                <td>
                    <a class='btn btn-danger' href='curd.php?key=".$row['username']."'>Delete</a>
                    <a class='btn btn-primary' href='curd.php?key=".$row['username']."'>Edit</a>
                </td>
              </tr>";


                  




               $inc++;
                
              }   
              echo "</table>";
              
            } else {
              echo "0 results";
            }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
     <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Get-data</title>
</head>
<body>
   
    <?php
            
          
            
    ?>
    

    
</body>
</html>


<?php
 mysqli_close($conn);
?>