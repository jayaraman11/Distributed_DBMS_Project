<?php include("headerddb.php");?>

<body>
	
    <nav class="navbar navbar-toggleable-md navbar-inverse" style="background-color: #50394c;">
	<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
	<span class="navbar-toggler-icon"></span>
	</button>
	<a class="navbar-brand" href="logddb.php"><h4><b>Course Registration System</b></h4></a>

    </nav>   
    
    <div class="container" method="post" action="opbackend.php">
		<form method="post" action="opbackend.php" name="reg">
			<h2 style="text-align: center;padding-top: 15px;">Registration Operations</h2></br>
			
			<div class="form-group">
				<label for="example-date-input" class="control-label" style="margin-left: 65px;"><h4>Enter Operation to be performed</h4></label>
					<br><br>
			 	<button type="submit" class="btn control-label" name="update" id="bt" style="margin-left: 100px; margin-bottom: 10px; background-color:#ffc844;" onclick="validate();"><b>Update</b></button>
			 	<button type="submit" class="btn control-label" name="delete" id="bt1" style="margin-left: 100px; margin-bottom: 10px; background-color:#ffc844;" onclick="validate();"><b>Delete</b></button>
			</div></br>
		</form>
    </div>
   
<?php include("footerddb.php");?>