<?php
if(isset($_POST['delete'])){
	header("Location:delfront.php");
}
elseif(isset($_POST['update'])){
	header("Location:update.php");
}
?>

