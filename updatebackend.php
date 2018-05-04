<?php
	  session_start(); 
       if(isset($_POST['upd'])){
         
          if ($_POST['course']=="SE") {
          include ("connectionddbPG.php");  
          $name=$_POST['name'];
          $phone=$_POST['phoneno'];
          $sql = "UPDATE `phoneno` FROM registration SET phoneno='$phone' WHERE name='$name'";
          $pgconn=pg_query($sql);
               if (!$pgconn) {
                    echo "Error";
               }
               else{
               header("Location:updatesucessfulpage.php");
               }
          }
          elseif ($_POST['course']=="DDB") {
          include ("connectionddbMYSQL.php");  
          $sql = "UPDATE registration SET phoneno='".$_POST['phoneno']."' WHERE name='".$_POST['name']."'";
          $mysqlconn=mysqli_query($link, $sql);
          header("Location:updatesucessfulpage.php");
          }
     }
?>