<?php
	require_once("config.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Crude Operation</title>
</head>
<body>
	<?php 
		extract($_REQUEST);
		#$sql = "select fname,lname,address,number,age,fileUpload from items where id='$id'";
		$sql="select * from items where id='$id'";
		$result = mysqli_query($link,$sql) or die(mysqli_error($link));
		$row = mysqli_fetch_assoc($result);
	?>
	<form method="post" action="action/updatedata.php" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?php echo $id; ?>" />
		<input type="hidden" name="oldfileUpload" value="<?php echo $row['fileUpload']; ?>" />
<div class="input-group">
			<label>Fname</label>
			<input type="text" name="fname" required="fNmae"  value="<?php echo $row['fname']; ?>" />
		</div>
		<div class="input-group">
			<label>Lname</label>
			<input type="text" name="lname" required="lNmae"value="<?php echo $row['lname']; ?>" />
		</div>
		<div class="input-group">
			<label>Address</label>
			<input type="text" name="address" required="address" value="<?php echo $row['address']; ?>"/>
		</div>
		<div class="input-group">
			<label>Number</label>
			<input type="text" name="number" placeholder="Number" value="<?php echo $row['number']; ?>"/>
		</div>
		<div class="input-group">
			<label>Age</label>
			<input type="text" name="age" placeholder="age"value="<?php echo $row['age']; ?>" />
		</div>
		<div class="input-group">
			<label>File</label>
			<input type="file" name="fileUpload" placeholder="File"value="<?php echo $row['fileUpload']; ?>" />
		</div>

		<div class="form-group">
			<input type="submit" name="btnsubmit" value="Save Changes" class="btn btn-primary" />
        	
        </div>
        
        <?php 
					if(isset($_REQUEST['msg']))
						echo "<div class='alert alert-success'>{$_REQUEST['msg']}</div>";
		?>
	</form>
	
</body>
</html>