<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<a class="navbar-brand" href="#">TODO</a>
		</div>
	</nav>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary">TODO LIST</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<form method="POST">
			<div class="form-inline">
				<label>List</label>
				<input type="text" id="list1" class="form-control"/>
				
			</div>
			<br />
			<div class="form-inline">
				<label>Description</label>
				<!-- <input type="text" id="description" class="form-control"/> -->
				<textarea class="form-control" id="description" rows="3"></textarea>
			</div>
			<br />
			<center><button type="button" id="save" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> Save</button><button type="button" id="update" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Update</button></center>
		</form>
		<br />
		<table class="table table-bordered">
			<thead>
				<tr>

					<th>List</th>
					<th>Description</th>
					<th>Action</th>
					<!-- <td><a href="#">EDIt</a>
				<a href="javascript:void(0)" class="del" del="<?php echo $arr['id']?>">Delete</a>

				</td> -->
				</tr>
			</thead>
			<tbody id="data"></tbody>
		</table>
	</div>
</body>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/script.js"></script>
</html>