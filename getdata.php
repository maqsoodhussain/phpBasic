<?php
            require("connection.php");

            $db_data = "Select * from logindetails";

            $result = mysqli_query($con, $db_data);
            echo mysqli_num_rows($result);
            
            if (mysqli_num_rows($result) > 0) {

              
              while($row = mysqli_fetch_assoc($result)) {
                echo 
                "<br>USERNAME: " . $row["username"]. 
                "<br>NAME: " . $row["name"]. 
                "<br>EMAIL: " . $row["email"].
                "<br>PASSWORD: " . $row["password"];
                 
              }
            } else {
              echo "0 results";
            }


            mysqli_close($con);

?>
