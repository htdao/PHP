<?php 
	require_once('models/User.php');
	require_once('controllers/auth/AuthBaseController.php');

	class LoginController extends AuthBaseController{

		public function loginForm(){
			if (!empty($_SESSION['auth'])) {
				return $this-> redirect('?admin=admin&mod=home&act=admin');
			}
			return $this->view('views/admin/login');
		}

		public function login(){
			$data = $_POST;
			// var_dump($data);
			// die();
			$modelUsser = new User();
			$users = $modelUsser->all();

			foreach ($users as $user) {
				if ($user['email'] == $data['email'] && $user['password'] == md5($data['password'])) {
					$_SESSION['auth'] = $user;

					// return $this->redirect('?mod=home&act=admin&admin=admin');
				}
			
			}

			if ($_SESSION['auth']['auth']==1) {
				return $this->redirect('?mod=home&act=admin&admin=admin');
			}else{
				return $this->redirect('?mod=home&act=admin&admin=client');
			}
			// echo "<pre>";
			// 	print_r($_SESSION);
			// echo "</pre>";


			$_SESSION['error'] = 'Lỗi đăng nhập';
			return $this->back();
		}
	}
?>