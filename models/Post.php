<?php 
	require_once('model.php');
	class Post extends Model{
		var $table = 'posts';


		function userAvatar(){
			$query = "SELECT posts.*,users.avatar FROM users JOIN posts WHERE users.id = posts.user_id ORDER BY posts.id DESC LIMIT 4";

		    $posts = array();

		    // die($query);
		    $result = $this->connection->query($query);

		    while($row = $result->fetch_assoc()) { 
		    	$posts[] = $row;
		    }
		    return $posts;

		}


		function newPost(){
			$query = "SELECT * FROM newpost ORDER BY id DESC LIMIT 10";

		    $newPost = array();

		    // Thuc thi cau lenh truy van co so du lieu
		    $result = $this->connection->query($query);

		    while($row = $result->fetch_assoc()) { 
		    	$newPost[] = $row;
		    }

		    return $newPost;
		}

		function fPost(){
			$query = "SELECT * FROM posts ORDER BY id DESC LIMIT 1";
		    $fPost = array();
		    $result = $this->connection->query($query);

		    while($row = $result->fetch_assoc()) { 
		    	$fPost[] = $row;
		    }

		    return $fPost;
		}
		function tPost(){
			$query = "SELECT * FROM posts ORDER BY id DESC LIMIT 1,1";
		    $tPost = array();
		    $result = $this->connection->query($query);

		    while($row = $result->fetch_assoc()) { 
		    	$tPost[] = $row;
		    }

		    return $tPost;
		}

		function sPost(){
			$query = "SELECT * FROM posts ORDER BY id DESC LIMIT 1,2";
		    $sPost = array();
		    $result = $this->connection->query($query);

		    while($row = $result->fetch_assoc()) { 
		    	$sPost[] = $row;
		    }

		    return $sPost;
		}

		function heros(){
			$query = "SELECT * FROM heros";
		    $heros = array();
		    $result = $this->connection->query($query);

		    while($row = $result->fetch_assoc()) { 
		    	$heros[] = $row;
		    }
			 return $heros;
		}

		function filePost(){
			$query = "SELECT * FROM posts ORDER BY id DESC LIMIT 5";
		    $filePost = array();
		    $result = $this->connection->query($query);

		    while($row = $result->fetch_assoc()) { 
		    	$filePost[] = $row;
		    }
			 return $filePost;
		}

		
		function sixPost(){
			$query = "SELECT * FROM posts";
		    $sixPost = array();
		    $result = $this->connection->query($query);

		    while($row = $result->fetch_assoc()) { 
		    	$sixPost[] = $row;
		    }
			 return $sixPost;
		}

	}

 ?>