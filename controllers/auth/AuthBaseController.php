<?php 
	class AuthBaseController{
		public function __construct(){
			
		}
		
		public function view($name, $data = []){
			extract($data);
			require_once $name.'.php';
		}

		public function redirect($path){
			header("Location: $path");
		}

		public function back(){
			return $this->redirect($_SERVER['HTTP_REFERER']);
		}
	}

 ?>