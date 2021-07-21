<?php 
require_once('controllers/auth/AuthBaseController.php');
	class LogoutController extends AuthBaseController{
		public function Logout(){
			unset($_SESSION['auth']);
			return $this->redirect('?mod=login&act=loginForm&admin=auth');
		}
	}
 ?>