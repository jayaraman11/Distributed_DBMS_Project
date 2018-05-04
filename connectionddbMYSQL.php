<?php 
    $link = mysqli_connect("localhost", "root", "", "student");
        
        if (mysqli_connect_error()) {
            
            die ("Database Connection Error");
            
        }

?>