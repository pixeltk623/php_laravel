<?php 
	session_start();
	include_once 'model/CrudModel.php';
	include_once 'config/config.php';

	class CrudController extends CrudModel {

		public function __construct() {
			parent::__construct();
			if (isset($_SERVER['PATH_INFO'])) {

				switch($_SERVER['PATH_INFO']) {

					case '/addCategory':

						if (isset($_POST['submit'])) {
							$catName = $_POST['cat_name'];
							$slug = $_POST['slug'];

							if($catName=='') {
								$addClassCatName = "is-invalid";
							}

							if ($slug=='') {
								$addClassCatSlug = "is-invalid";
							}

							if (($catName && $slug)!='') {
								
								$data = array(
									'name' => $catName,
									'slug' => $slug
								);

								$result = $this->insertData($data, 'categories');

								if($result) {
									$dataResult = array('message' => 'New Category Added', 'className' => 'alert-success');
								} else {
									$dataResult = array('message' => 'Something Error', 'className' => 'alert-danger');
								}
							}
						}

						include_once "view/create.php";
						break;
					case '/show':

						if (isset($_GET['id'])) {
							
							$showId = $_GET['id'];

							$result = $this->getDataById($showId, 'categories');
						}

						include_once "view/show.php";
						break;
					case '/edit':

						if (isset($_POST['submit'])) {
							
							$catName = $_POST['cat_name'];
							$slug = $_POST['slug'];

							if($catName=='') {
								$addClassCatName = "is-invalid";
							}

							if ($slug=='') {
								$addClassCatSlug = "is-invalid";
							}

							if (($catName && $slug)!='') {
								$id = $_POST['uid'];
								$data = array(
									'name' => $catName,
									'slug' => $slug
								);

								$result = $this->updateData($data, $id, 'categories');

								if($result) {
									$dataResult = array('message' => 'Category Updated', 'className' => 'alert-success');
								} else {
									$dataResult = array('message' => 'Something Error', 'className' => 'alert-danger');
								}
							}

						}
						if (isset($_GET['id'])) {
							
							$showId = $_GET['id'];

							$result = $this->getDataById($showId, 'categories');
						}
						include_once "view/edit.php";
						break;
					case '/delete':
						if (isset($_GET['id'])) {
							$id = $_GET['id'];
							$result = $this->destroy($id,'categories');

							if($result) {
								$_SESSION['dataResult'] = array('message' => 'Deleted', 'className' => 'alert-success');
							} else {
								$_SESSION['dataResult'] = array('message' => 'Something Error', 'className' => 'alert-danger');
							}

							header("Location: ".BASE_URL);

						}
					default:
						include_once "view/not_found.php";
						break;
				}
			} else {

				$categories = $this->getAllCategories('categories');

				include_once "view/index.php";
			}

		}

	}


	$object = new CrudController();

?>