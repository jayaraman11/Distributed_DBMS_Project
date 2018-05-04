<?php
include("headerddb.php");
	   session_start(); 
        if(isset($_POST['submit'])){

          if($_POST['courser']=="DDB")
          {
          include ("connectionddbMYSQL.php");
          $sql = "SELECT * FROM registration WHERE course='DDB';";
          $mysqlconn=mysqli_query($link, $sql);
          echo "<table>";
          echo "<tr><th>Name</th>
          <th>PRN</th>
          <th>Email-Id</th>
          <th>Contact No.</th><th>Date Of Birth</th><th>Course</th></tr>";
                while ($row = mysqli_fetch_array($mysqlconn,MYSQLI_ASSOC)) {
                  # code...
                  echo "<tr><td>";
                  echo $row['name'];
                  echo "<td>";
                  echo $row['prn'];
                  echo "<td>";
                  echo $row['emailid'];
                  echo "<td>";
                  echo $row['phoneno'];
                  echo "<td>";
                  echo $row['dob'];
                  echo "<td>";
                  echo $row['course'];
                  echo "</tr></td>";

                }
              echo "</table>";
          }
          else if($_POST['courser']=="SE")
          {
              include ("connectionddbPG.php");
              
              $query = "SELECT * FROM registration";
              $result = pg_query($query);
              echo "<table>";
          echo "<tr>
          <th>Name</th>
          <th>PRN</th>
          <th>Email-Id</th>
          <th>Contact No.</th>
          <th>Date Of Birth</th>
          <th>Course</th>
          </tr>";
                while ($row = pg_fetch_array($result,NULL,PGSQL_ASSOC)) {
                  # code...
                   echo "<tr><td>";
                  echo $row['name'];
                  echo "<td>";
                  echo $row['prn'];
                  echo "<td>";
                  echo $row['emailid'];
                  echo "<td>";
                  echo $row['phoneno'];
                  echo "<td>";
                  echo $row['dob'];
                  echo "<td>";
                  echo $row['course'];
                  echo "</tr>";

                }
              echo "</table>";
          }
          //header("Location:loginpage.php");


        }
?>