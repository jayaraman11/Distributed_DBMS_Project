<?php include("headerddb.php");?>

<body>
	
    <nav class="navbar navbar-toggleable-md navbar-inverse" style="background-color: #50394c;">
	<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
	<span class="navbar-toggler-icon"></span>
	</button>
	<a class="navbar-brand" href="logddb.php"><h4><b>Course Registration System</b></h4></a>

    </nav>   
    
    <div class="container" method="post" action="rinfoback.php">
		<form method="post" action="rinfoback.php" name="reg">
			<h2 style="text-align: center;padding-top: 15px;">Registration Information</h2></br>
			
			<div class="form-group ">
				<label for="example-date-input" class="control-label">Enter Course Name</label>
				<input class="form-control" type="text" placeholder="DDB/SE" name="courser" required>
			</div></br>

			 <button type="submit" class="btn control-label" name="submit" id="bt" style="margin-left: 190px; margin-bottom: 30px; background-color:#ffc844;" onclick="validate();"><b>Submit</b></button>
		</form>
    </div>
   
<?php include("footerddb.php");?>