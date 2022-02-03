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
		<a href="<?php echo BASE_URL; ?>" class="btn btn-info mb-3">Back</a>
		<?php 
			if (isset($dataResult)) {	
				?>
				<div class="alert <?php echo $dataResult['className']; ?>">
					<?php echo $dataResult['message']; ?>
				</div>
				<?php
			}
		?>
		<form method="POST">
			<div class="form-group">
				<label>Name</label>
				<input type="text" name="cat_name" class="form-control <?php echo (isset($addClassCatName)) ? $addClassCatName : '' ?>">
			</div>

			<div class="form-group">
				<label>Slug</label>
				<input type="text" name="slug" class="form-control <?php echo (isset($addClassCatSlug)) ? $addClassCatSlug : '' ?>">
			</div>

			<div class="form-group">
				<input type="submit" name="submit" class="btn btn-primary">
			</div>
		</form>
		
	</div>
</body>
</html>