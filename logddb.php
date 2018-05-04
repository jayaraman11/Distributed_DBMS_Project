<?php include("headerddb.php");?>

<body>
	
    
     <nav class="navbar navbar-toggleable-md" style="background-color: #50394c;">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="logddb.php"><h4><b>Course Registration System</b></h4></a>
      <a class="navbar-brand" id="opr" href="operationsddb.php"><h5><b>Perform Operations</b></h5></a>
      <a class="navbar-brand" id="rght" href="rinfoddb.php"><h5><b>View Course Entries</b></h5></a>
    </nav>   
  </ul>
    </nav>
    <div class="container" method="post" action="rddb.php" class="form-rounded">
    	
		<form method="post" action="rddb.php" name="reg">
			<h2 style="text-align: center;padding-top: 15px;">Registration Form</h2></br>
			<div class="form-group col-sm-4 col-md-6 col-lg-12">
				<label for="name" class="control-label">Student Full Name: </label>
				<input type="text" class="form-control" name="studentname" required>
			</div>

			<div class="form-group col-sm-4 col-md-6 col-lg-12">
				<label for="rollno" class="control-label">Enter PRN:</label>
				<input type="text" class="form-control" name="rollno" required>
			</div>

			<div class="form-group col-sm-4 col-md-6 col-lg-12">
				<label for="via" class="control-label">Enter Email ID:</label>
				<input type="email" class="form-control" name="email" required>
			</div>

			<div class="form-group col-sm-4 col-md-6 col-lg-12">
				<label for="phoneno." class="control-label">Enter Phone No.:</label>
				<input type="tel" class="form-control" name="phoneno" id="phoneno" required>
			</div>
		
			<div class="form-group col-sm-4 col-md-6 col-lg-12">
				<label for="example-date-input" class="control-label">Enter Date of Birth</label>
				<input class="form-control" type="date" value="2011-08-19" name="dob" required>
			</div>
      		
			<div class="form-group col-sm-4 col-md-6 col-lg-12">
				<label for="example-date-input" class="control-label">Enter Course</label>
				<input class="form-control" type="text" placeholder="DDB/SE" name="course" required>
			</div></br>

			 <button type="submit" class="btn control-label col-sm-4 col-md-6 col-lg-4" name="submit" id="bt" style="margin-left: 165px; margin-bottom: 22px; background-color:#f7b733;" onclick="validate();"><b>Submit</b></button>
		</form>
    </div>
   
<?php include("footerddb.php");?>