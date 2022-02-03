<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<?php 

		if (isset($result) && !empty($result)) {
			?>

			<h2>Name - <?php echo $result->name; ?></h2>

			<h2>Slug - <?php echo $result->slug; ?></h2>

			<h3>Created At - <?php echo $result->created_at; ?></h3>
			<h3>Updated At - <?php echo $result->updated_at; ?></h3>

			<a href="<?php echo BASE_URL; ?>">Back</a>
			<?php
		} else {
			?>
			<h1>No Record Found!</h1>
			<?php
		}

	?>

	

</body>
</html>