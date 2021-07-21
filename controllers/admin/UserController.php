<?php 
	require_once('models/User.php');
	require_once("HomeController.php");
	class UserController extends HomeController{
		public $model;
		function __construct(){
			$this->model = new User();
			parent:: __construct();
		}

		function list(){
			$users = $this->model->all();

			// print_r($categories);
			require('views/user/list.php');
		}

		public function detail(){
			$id = $_GET['id'];
			$user = $this->model->find($id);

			// print_r($category);
			require('views/user/detail.php');
		}


		public function create(){
			// $parents = $this->model->parents();
			// $category = $this->model->add();
			require('views/user/add.php');
		}

		public function store(){
			$data = $_POST;
			$data['password'] = md5($data['password']);
			// var_dump($_FILE);
		    $target_dir = "public/images/userImg/";  // thư mục chứa file upload

		    $target_file = $target_dir . basename($_FILES["avatar"]["name"]); // link sẽ upload file lên
		        
		    if (move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file)) { // nếu upload file không có lỗi 
		        // echo "The file ". basename( $_FILES["thumbnail"]["name"]). " has been uploaded.";
		        $arr = array(
		        	'avatar'=> $_FILES["avatar"]["name"]
		        );
		        $data = array_merge($data,$arr);
		    } else { // Upload file có lỗi 
		        echo "Sorry, there was an error uploading your file.";
		    }
			// echo "test";
			// var_dump($data);
			// die();
			$success = $this->model->create($data);
			if ($success) {
				setcookie('success_true',1,time()+3);
			}else{
				setcookie('success_false',1,time()+3);
			}
			header("Location: index.php?mod=user&act=list&admin=admin");
		}

		public function edit(){
			$id = $_GET['id'];
			$user = $this->model->find($id);
			require('views/user/edit.php');
		}

		public function update(){
			$data = $_POST;
			$data['password'] = md5($data['password']);
		    $target_dir = "public/images/userImg/";  // thư mục chứa file upload

		    $target_file = $target_dir . basename($_FILES["avatar"]["name"]); // link sẽ upload file lên
		        
		    if (move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file)) { // nếu upload file không có lỗi 
		        // echo "The file ". basename( $_FILES["thumbnail"]["name"]). " has been uploaded.";
		        $arr = array(
		        	'avatar'=> $_FILES["avatar"]["name"]
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
			header("Location: index.php?mod=user&act=list&admin=admin");
		}

		public function destroy(){
			$id = $_GET['id'];
			$success = $this->model->delete($id);
			if ($success) {
				setcookie('destroy_true',1,time()+3);
			}else{
				setcookie('destroy_false',1,time()+3);
			}
			header("Location: index.php?mod=user&act=list&admin=admin");
		}
	}
 ?>