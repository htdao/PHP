<!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
 	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
 </head>
 <body>
 	<?php 
 		if($category['parent_id']==''){
 			$category['parent_id'] = 'Danh mục cha';
 		}
 	 ?>
 	<div class="container">
 		<h1 class="text-center">Details</h1>
 		<a href="index.php?mod=category&act=list" class="btn btn-primary">Back to categories</a>
 		<div class="container" style="width: 65%" >
 			<p>ID = <?= $category['id'] ?></p>
 		 	<p>Name = <?= $category['name'] ?></p>
 		 	<p>ParentID = <?= $category['parent_id'] ?></p>
 		 	<p>Description = <?= $category['description'] ?></p>
 		 	<p>CreatedAt = <?php echo $category['created_at']; ?></p>
 		 	<div class="row">
 		 		<p class="col-2">Thumbnail =</p>
 		 		<img class="col-10" style="height: 300px; width: 200px" src="<?= $category['thumbnail'] ?>">
 		 	</div>
 		</div>
 	</div>
 </body>
 </html>