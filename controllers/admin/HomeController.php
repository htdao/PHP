<?php 
	require_once('models/Post.php');
	require_once('models/User.php');
	require_once('models/Category.php');
	require_once('BaseController.php');
	class HomeController extends BaseController{
		function __construct(){
			if (empty($_SESSION['auth'])) {
				return $this->redirect('index.php?admin=auth&mod=login&act=loginForm');
			}
		}

		function admin(){
			$post_model = new Post();
			$posts = $post_model->userAvatar();
			$post = $post_model->all();

			$user_model = new User();
			$users = $user_model->newUser();
			$user = $user_model->all();

			$cate_model = new Category();
			$categories = $cate_model->newCate();

			$sumUser=0;
			$sumPost=0;
			$sumView=0;

			$j=0;
			foreach ($user as $value) {
				$sumUser += 1;
				$j++;
			}

			$i=0;
			foreach ($post as $value) {
				$sumPost += 1;
				$sumView += $value['view_count'];
				$i++;
			} 

			require('views/admin/admin.php');
		}

		function login(){
			require('views/admin/login.php');
		}

	}
 ?>
