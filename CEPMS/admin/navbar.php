<div class="col-sm-3 sidenav hidden-xs">
      <h2>Logo</h2>
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="#section1">Dashboard </a></li>
        <li> <?php 
				echo "Welcome to ". $data->name;
			?></li>
        <li><a href="add_category.php">Add Category</a></li>
        <li><a href="manage_cat.php">Manage Category</a></li>

         <li><a href="add_pass.php">Add Pass</a></li>
        <li><a href="manage_pass.php">Manage Pass</a></li>
      </ul><br>

      <h1>
        <div>
          <a href="logout.php">Logout</a>
        </div>
      </h1>
    </div>