<?php
      $error=FALSE;
	   session_start();
     function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
} 
        if(isset($_POST['submit'])){
                  $name = test_input($_POST['studentname']);
                  // check if name only contains letters and whitespace
                  if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
                  $nameErr = "Only letters and white space allowed";
                  echo("<script type='text/javascript'> var answer = alert('".$nameErr."'); </script>");
                  $error=TRUE;
                }
         if($error==FALSE)
              {         
                if($_POST['course']=="DDB")
                {

                include ("connectionddbMYSQL.php");
                $sql = "INSERT INTO `registration` (`id`, `name`, `prn`, `emailid`, `phoneno`, `dob`, `course`)
                VALUES (NULL, 
                '".mysqli_real_escape_string($link, $_POST['studentname'])."',
                '".mysqli_real_escape_string($link, $_POST['rollno'])."',
                '".mysqli_real_escape_string($link, $_POST['email'])."',
                '".mysqli_real_escape_string($link, $_POST['phoneno'])."', 
                '".mysqli_real_escape_string($link, $_POST['dob'])."',
                '".mysqli_real_escape_string($link, $_POST['course'])."');";
                $res=mysqli_query($link, $sql);
                      if (!$res) {
                      echo "Error";
                      }
                      else{
                      header("Location:sucesspage.php");
                      }
                }
                else if($_POST['course']=="SE")
                {
                    include ("connectionddbPG.php");
                    $name=$_POST["studentname"];
                    $rno=$_POST["rollno"];
                    $mail=$_POST["email"];
                    $phone=$_POST["phoneno"];
                    $dobrth=$_POST["dob"];
                    $crs=$_POST["course"];
                    $query = "INSERT INTO registration(name,prn,emailid,phoneno,dob,course) VALUES ('".$name."','".$rno."','".$mail."','".$phone."','".$dobrth."','".$crs."')";
                    $result = pg_query($query);
                    if (!$result) {
                    echo "Error";
                    }
                    else{
                      header("Location:sucesspage.php");
                    }
                }
              }
     }
?>