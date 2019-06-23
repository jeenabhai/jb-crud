<?php
	require_once("config.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Crude Operation</title>
</head>
<body>
	<form method="post" action="adddata.php" enctype="multipart/form-data">
		<div class="input-group">
			<label>Fname</label>
			<input type="text" name="fname" required="fNmae" />
		</div>
		<div class="input-group">
			<label>Lname</label>
			<input type="text" name="lname" required="lNmae" />
		</div>
		<div class="input-group">
			<label>Address</label>
			<input type="text" name="address" required="address" />
		</div>
		<div class="input-group">
			<label>Number</label>
			<input type="text" name="number" placeholder="Number" />
		</div>
		<div class="input-group">
			<label>Age</label>
			<input type="text" name="age" placeholder="age" />
		</div>
		<div class="input-group">
			<label>File</label>
			<input type="file" name="fileUpload" placeholder="File" />
		</div>
		<div class="form-group">
        	<input type="submit" name="btnsubmit" value="Add" class="btn btn-primary" />
        </div>
        <?php 
										if(isset($_REQUEST['msg']))
											echo "<div class='alert alert-success'>{$_REQUEST['msg']}</div>";
									?>
	</form>
	<div class="row">
		<div class="col-lg-12">
			<table id="mytable">
				<thead>
					<tr style="border: 2px solid black;">
						<th>Sr.No</th>
						<th>Fnmae</th>
						<th>Lname</th>
						<th>Address</th>
						<th>Number</th>
						<th>Age</th>
						<th>File</th>
						<th colspan="2">Action</th>
					</tr>
				</thead>
				<tbody>
						<?php 
												$sql = "select * from items order by id desc";
												$result = mysqli_query($link,$sql) or die(mysqli_error($link));
												$count=1;
												while($row = mysqli_fetch_assoc($result))
												{
											?>
					<tr>
						<td> <?php echo $count++ ; ?></td>
						<td><?php echo $row['fname']; ?></td>
						<td><?php echo $row['lname']; ?></td>
						<td><?php echo $row['address']; ?></td>
						<td><?php echo $row['number']; ?></td>
						<td><?php echo $row['age']; ?></td>
						<td><?php echo $row['fileUpload']; ?></td>
						<td>
							<a href="updatedata.php?id=<?php echo $row['id']; ?>" class="edit_btn">Ediit
													
													</a>
						</td>
						<td><a href="delete.php?id=<?php echo $row['id']; ?>" class="del_btn">Delete</a></td>
					</tr>
				<?php  }  ?>
				</tbody>
				
			</table>
		</div>     
		
	</div>

</body>
</html>