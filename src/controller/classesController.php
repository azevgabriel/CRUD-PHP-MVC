<?php
	require_once 'src/model/classes.php';
	class classesController {

		public function search($search) {	
			$classesModel = new classesModel();
			$resultClasses = $classesModel->getClasses($search);
			require_once 'src/view/classes/classes_view.php'; 
		}
		public function remove($id) {
			$classesModel = new classesModel();
			$classesModel->removeClass($id);
		}
		public function searchID($id) {	
			$classesModel = new classesModel();
			return $resultClass = $classesModel->getClass($id);
		}
		public function update($id,$year,$level,$series,$shift) {
			$classesModel = new classesModel();
			$classesModel->updateClass($id,$year,$level,$series,$shift);
		}
		public function create($year,$level,$series,$shift) {
			$classesModel = new classesModel();
			$classesModel->createClass($year,$level,$series,$shift);
		}
	}
?>