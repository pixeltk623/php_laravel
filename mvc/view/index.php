<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css"> 
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
	<title></title>
</head>
<body>
	
	<div class="container mt-3">
		<h1 class="text-center text-primary">Crud In MVC</h1>
		<table id="table_id" class="display">
		    <thead>
		        <tr>
		        	<th>Sr.No</th>
		            <th>Name</th>
		            <th>Created At</th>
		            <th>Update At</th>
		            <th>Action</th>
		        </tr>
		    </thead>
		    <tbody>
		        <?php
		        	foreach ($categories as $key => $value) {
		        		?>
		        		<tr>
		        			<td><?php echo ++$key; ?></td>
		        			<td><?php echo $value->name; ?></td>
		        			<td><?php echo $value->created_at; ?></td>
		        			<td><?php echo $value->updated_at; ?></td>
		        			<td>
		        				<button type="button" class="btn btn-primary">Show</button>
		        				<button type="button" class="btn btn-info">Edit</button>
		        				<button type="button" class="btn btn-danger">Delete</button>
		        			</td>
		        		</tr>
		        		<?php
		        	}
		        ?>
		    </tbody>
		</table>
	</div>
	<script type="text/javascript">
		$(document).ready( function () {
		    $('#table_id').DataTable();
		});
	</script>
</body>
</html>