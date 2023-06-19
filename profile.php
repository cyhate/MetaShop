<?php
    

    $con = mysqli_connect("localhost","testuser1","testuserpass1","metashop");


        if (mysqli_connect_errno())
            {
            echo "Failed";
            }
            else {
            echo "";
            }      

    $sql = "SELECT user_login.userid, user_login.username FROM user_login";

    $result = $con->query($sql);

    if ($result->num_rows > 0) {

        $userid = array();
        $username = array();
        $i = 0;

        // output data of each row
        while($row = $result->fetch_assoc()) {
                $userid[$i] = $row["userid"];
                $username[$i] = $row["username"];
                $i++;
        }
      } else {
        echo "0 results";
      }
      $con->close();

    ?>