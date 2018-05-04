<?php include("headerddb.php");?>
<body>
	
    
     <nav class="navbar navbar-toggleable-md navbar-inverse" style="background-color: #50394c;">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="logddb.php"><h4><b>Course Registration System</b></h4></a>
      
      
    </nav>   
  </ul>
    </nav>
    <div class="container" method="post" action="deleteb.php">
    	
		<form method="post" action="deleteb.php" name="reg">
			<h2 style="text-align: center;padding-top: 15px;">Registration Information</h2></br>
			
			<div class="form-group ">
				<label for="example-date-input" class="control-label">Enter Name of Student whose record is to be deleted</label>
				<input class="form-control" type="text" name="name" required>
			</div>
			<div class="form-group ">
				<label for="example-date-input" class="control-label">Enter Respective course</label>
				<input class="form-control" type="text" name="course" required>
			</div></br>
			</div>
			 <button type="submit" class="btn control-label" name="submit" id="bt" style="margin-left: 620px; margin-bottom: 10px; background-color:#ffc844;" onclick="validate();"><b>Submit</b></button>
		</form>
    </div>
   
<?php include("footerddb.php");?>
