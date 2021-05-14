<!DOCTYPE html>
<html>
<head>
	<title>Create</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="container">
		<form action="php/create.php" 
		      method="post">
            
		   <h4 class="display-4 text-center">Create</h4><hr><br>
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
		           value="<?php if(isset($_GET['nom']))
		                           echo($_GET['nom']); ?>" 
		           placeholder="Enter nom">
		   </div>


		   <div class="form-group">
		     <label for="prix">prix</label>
		     <input type="prix" 
		           class="form-control" 
		           id="prix" 
		           name="prix" 
		           value="<?php if(isset($_GET['prix']))
		                           echo($_GET['prix']); ?>" 
		           placeholder="Enter prix">
		   </div>

		   <div class="form-group">
		     <label for="ingredient">ingredient</label>
		     <input type="ingredient" 
		           class="form-control" 
		           id="ingredient" 
		           name="ingredient" 
		           value="<?php if(isset($_GET['ingredient']))
		                           echo($_GET['ingredient']); ?>" 
		           placeholder="Enter ingredient">
		   </div>

		   <button type="submit" 
		          class="btn btn-primary"
		          name="create">Create</button>
		    <a href="read.php" class="link-primary">View</a>
	    </form>
	</div>
</body>
</html>