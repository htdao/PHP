<?php 
	require_once('models/Post.php');
	require_once("models/Category.php");
	class UserController{
		var $model;
		function __construct(){
			$this->model = new Post();
			$this->modelCategory = new Category();
		}

		function home(){
			$newPosts = $this->model->newPost();
			$fPost = $this->model->fPost();
			$sPost = $this->model->sPost();
			$heros = $this->model->heros();
			$th = $this->model->find(2);
			$chap = $this->model->find(1);
			$categories = $this->modelCategory->all();
			$posts = $this->model->all();
			$filePost = $this->model->filePost();
			$fileCate = $this->modelCategory->fileCate();


			// var_dump($categories);
			// die();
			require_once("views/home/index.php");
		}

		function post(){

			$fPost = $this->model->fPost();
			$tPost = $this->model->tPost();
			$sPost = $this->model->sPost();
			$post = $this->model->all();
			$categories = $this->modelCategory->all();
			// var_dump($fPost);
			// die();
			require_once("views/home/index_2.php");
		}
		function category(){

			$categories = $this->modelCategory->all();
			require_once("views/home/index_3.php");
		}
		function contact(){

			
			require_once("views/home/contact.php");
		}

	}
 ?>