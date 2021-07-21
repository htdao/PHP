<!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
 	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
 </head>
 <body>
 	<div class="container">
 		<h1 class="text-center">Details</h1>
 		<a href="index.php?mod=user&act=list" class="btn btn-primary">Back to users</a>
 		<div class="container" style="width: 65%" >
 			<p><b>ID</b>: <?= $user['id'] ?></p>
 		 	<p><b>Name</b>: <?= $user['name'] ?></p>
 		 	<p><b>Email</b>: <?= $user['email'] ?></p>
            <p><b>Password</b>: <?= $user['password'] ?></p>
 		 	<p><b>CreatedAt</b>: <?php echo $user['created_at']; ?></p>
 		 	<div class="row">
 		 		<p class="col-2"><b>Avatar</b>:</p>
 		 		<img class="col-10" style="height: 300px; width: 200px" src="<?= $user['avatar'] ?>">
 		 	</div>
 		</div>
 	</div>
 </body>
 </html>