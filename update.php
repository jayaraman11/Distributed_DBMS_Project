<?php include("headerddb.php");?>

<body>
	
    
     <nav class="navbar navbar-toggleable-md navbar-inverse" style="background-color: #50394c">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="logddb.php"><h4><b>Course Registration System</b></h4></a>
      
      
    </nav>   
  </ul>
    </nav>
    <div class="container" method="post" action="updatebackend.php">
    	
		<form method="post" action="updatebackend.php" name="reg">
			<h2 style="text-align: center;padding-top: 15px;">Registration Update Information</h2></br>
			
			<div class="form-group ">
				<label for="example-date-input" class="control-label">Enter Name of Student whose course is to be changed</label>
				<input class="form-control" type="text" name="name" required>
			</div>
			<div class="form-group">
				<label for="example-date-input" class="control-label">Enter Respective course in which you where registered</label>
				<input class="form-control" type="text" name="course" required>
			</div>
			<div class="form-group">
				<label for="example-date-input" class="control-label">Enter new phone no. id to be changed</label>
				<input class="form-control" type="text" name="phoneno" required>
			</div></br>
			 <button type="submit" class="btn control-label" name="upd" id="bt" style="margin-left: 200px; margin-bottom: 30px; background-color:#ffc844;" onclick="validate();"><b>Update</b></button>
		</form>
    </div>
   
<?php include("footerddb.php");?>