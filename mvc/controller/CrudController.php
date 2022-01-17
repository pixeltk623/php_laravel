<?php 
	
	include_once 'model/CrudModel.php';

	class CrudController extends CrudModel {

		public function __construct() {
			parent::__construct();
			if (isset($_SERVER['PATH_INFO'])) {

				switch($_SERVER['PATH_INFO']) {

					case '/show':
						include_once "view/show.php";
						break;

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