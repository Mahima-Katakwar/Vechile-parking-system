<?php
    $host="localhost";
    $username="root";
    $pass="";

    //mysqli_connect($host,$username,$pass);
   

    $con=mysqli_connect($host,$username,$pass,'vps_db');
        if($con)
        {
        
         //   mysqli_select_db('vps_db');
        }
        else
        {
            echo "Connection lost";
        }
        ?>