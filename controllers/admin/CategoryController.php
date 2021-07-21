<?php 
	require_once('HomeController.php');
	require_once('models/Category.php');
	class CategoryController extends Homecontroller{
		public $model;
		function __construct(){
			$this->model = new Category();
			parent:: __construct();
		}

		function list(){
			$categories = $this->model->all();
			$parents = $this->model->parents();
			// var_dump($parents);
			
			// print_r($categories);
			require('views/category/list.php');
		}

		public function detail(){
			$id = $_GET['id'];
			$category = $this->model->find($id);

			// print_r($category);
			require('views/category/detail.php');
		}

		public function create(){
			// $parents = $this->model->parents();
			// var_dump($parents);
			// die();
			// $category = $this->model->add();
			require('views/category/list.php');
		}

		public function store(){
			$data = $_POST;
		    $target_dir = "public/images/categoriesImg/";  // thư mục chứa file upload

		    $target_file = $target_dir . basename($_FILES["thumbnail"]["name"]); // link sẽ upload file lên
		        
		    if (move_uploaded_file($_FILES["thumbnail"]["tmp_name"], $target_file)) { // nếu upload file không có lỗi 
		        // echo "The file ". basename( $_FILES["thumbnail"]["name"]). " has been uploaded.";
		        $arr = array(
		        	'thumbnail'=> $_FILES["thumbnail"]["name"]
		        );
		        $data = array_merge($data,$arr);
		    } else { // Upload file có lỗi 
		        echo "Sorry, there was an error uploading your file.";
		    }
			
			// echo $data;
			// var_dump($data);
			// echo "<pre>";
			// 	print_r($data);
			// echo "</pre>";
			// echo "<pre>";
			// 	print_r($arr);
			// echo "</pre>";
			// die();
			$success = $this->model->create($data);
			if ($success) {
				setcookie('success_true',1,time()+3);
			}else{
				setcookie('success_false',1,time()+3);
			}
			header("Location: index.php?mod=category&act=list&admin=admin");
		}

		public function edit(){
			$id = $_GET['id'];
			$parents = $this->model->parents();
			$category = $this->model->find($id);
			require('views/category/edit.php');
		}

		public function update(){
			$data = $_POST;
		    $target_dir = "public/images/categoriesImg/";  // thư mục chứa file upload

		    $target_file = $target_dir . basename($_FILES["thumbnail"]["name"]); // link sẽ upload file lên
		        
		    if (move_uploaded_file($_FILES["thumbnail"]["tmp_name"], $target_file)) { // nếu upload file không có lỗi 
		        // echo "The file ". basename( $_FILES["thumbnail"]["name"]). " has been uploaded.";
		        $arr = array(
		        	'thumbnail'=> $_FILES["thumbnail"]["name"]
		        );
		        $data = array_merge($data,$arr);

		    } else { // Upload file có lỗi 
		        echo "Sorry, there was an error uploading your file.";
		    }

			$success = $this->model->update($data);
			if ($success) {
				setcookie('update_true',1,time()+3);
			}else{
				setcookie('update_false',1,time()+3);
			}
			// echo $data;
			header("Location: index.php?mod=category&act=list&admin=admin");
		}

		public function destroy(){
			$id = $_GET['id'];
			$this->model = new Category();
			$success = $this->model->delete($id);
			if ($success) {
				setcookie('destroy_true',1,time()+3);
			}else{
				setcookie('destroy_false',1,time()+3);
			}
			header("Location: index.php?mod=category&act=list&admin=admin");
		}

	}
 ?>