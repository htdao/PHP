<?php 
	require_once('models/Post.php');
	require_once('models/User.php');
	require_once('models/Category.php');
	require_once('HomeController.php');
	class PostController extends HomeController{
		public $model;
		function __construct(){
			$this->model = new Post();
			parent:: __construct();
		}

		function list(){
			$posts = $this->model->all();
			require('views/post/list.php');
		}

		public function detail(){
			$id = $_GET['id'];
			$post = $this->model->find($id);

			// print_r($category);
			require('views/post/detail.php');
		}


		public function create(){
			// $parents = $this->model->parents();
			// $category = $this->model->add();
			$cate_model = new Category();
			$categories = $cate_model->all();

			$user_model = new User();
			$users = $user_model->all();

			require('views/post/add.php');
		}

		public function store(){
			$data = $_POST;
			$target_dir = "public/images/postImg/";  // thư mục chứa file upload

		    $target_file = $target_dir . basename($_FILES["thumbnail"]["name"]); // link sẽ upload file lên
		        
		    if (move_uploaded_file($_FILES["thumbnail"]["tmp_name"], $target_file)) { // nếu upload file không có lỗi 
		        // echo "The file ". basename( $_FILES["thumbnail"]["name"]). " has been uploaded.";
		        $arr = array(
		        	'thumbnail'=> $_FILES["thumbnail"]["name"]
		        );
		        $data = array_merge($data,$arr);
		        // die();
		    } else { // Upload file có lỗi 
		        echo "Sorry, there was an error uploading your file.";
		    }
			// echo "test";
			// var_dump($data);
			$success = $this->model->create($data);
			if ($success) {
				setcookie('success_true',1,time()+3);
			}else{
				setcookie('success_false',1,time()+3);
			}
			header("Location: index.php?mod=post&act=list&admin=admin");
		}

		public function edit(){
			$id = $_GET['id'];
			$post = $this->model->find($id);
		
			require('views/post/edit.php');
		}

		public function update(){
			$data = $_POST;
			$target_dir = "public/images/postImg/";  // thư mục chứa file upload

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
			header("Location: index.php?mod=post&act=list&admin=admin");
		}

		public function destroy(){
			$id = $_GET['id'];
			$success = $this->model->delete($id);
			if ($success) {
				setcookie('destroy_true',1,time()+3);
			}else{
				setcookie('destroy_false',1,time()+3);
			}
			header("Location: index.php?mod=post&act=list&admin=admin");
		}
	}
 ?>