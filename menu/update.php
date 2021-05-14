<?php include 'php/update.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="container">
		<form action="php/update.php" 
		      method="post">
            
		   <h4 class="display-4 text-center">Update</h4><hr><br>
		   <?php if (isset($_GET['error'])) { ?>
		   <div class="alert alert-danger" role="alert">
			  <?php echo $_GET['error']; ?>
		    </div>
		   <?php } ?>
		   <div class="form-group">
		     <label for="nom">nom</label>
		     <input type="nom" 
		           class="form-control" 
		           id="nom" 
		           name="nom" 
		           value="<?=$row['nom'] ?>" >
		   </div>
		   <div class="form-group">
		     <label for="prix">prix</label>
		     <input type="prix" 
		           class="form-control" 
		           id="prix" 
		           name="prix" 
		           value="<?=$row['prix'] ?>" >
		   </div>

		   <div class="form-group">
		     <label for="ingredient">ingredient</label>
		     <input type="ingredient" 
		           class="form-control" 
		           id="ingredient" 
		           name="ingredient" 
		           value="<?=$row['ingredient'] ?>" >
		   </div>

		     <input type="text" 
		          name="id"
		          value="<?=$row['id']?>"
		          hidden >

		   <button type="submit" 
		           class="btn btn-primary"
		           name="update">Update</button>
		    <a href="read.php" class="link-primary">View</a>
	    </form>
	</div>
</body>
</html>