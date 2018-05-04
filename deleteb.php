<?php
	   session_start(); 
        if(isset($_POST['submit'])){
          if ($_POST['course']=="SE") {
          include ("connectionddbPG.php");   
          $sql = "DELETE FROM registration WHERE name='$_POST[name]'";
          $pgconn=pg_query($sql);
          header("Location:deletesuccespage.php");
          }
          elseif ($_POST['course']=="DDB") {
          include ("connectionddbMYSQL.php");   
          $sql = "DELETE from registration WHERE name='$_POST[name]'";
          $mysqlconn=mysqli_query($link,$sql);
          header("Location:deletesuccespage.php");
          }
}
?>