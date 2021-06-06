<?php
require_once 'src/model/classes.php';

class classesController {

	public function search($search) {	
		$classesModel = new classesModel();
		$resultClasses = $classesModel->getClasses($search);
		
		require_once 'src/view/classes_view.php'; 
  }
	public function remove($id) {
		$classesModel = new classesModel();
		$classesModel->removeClass($id);
  }
}
?>