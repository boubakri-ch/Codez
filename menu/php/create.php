<?php 

if (isset($_POST['create'])) {
	include "../db_conn.php";
	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$nom = validate($_POST['nom']);
	$prix = validate($_POST['prix']);
	$ingredient = validate($_POST['ingredient']);
	$user_data = 'nom='.$nom. 'prix='.$prix. 'ingredient='.$ingredient;

	if (empty($nom)) {
		header("Location: ../index.php?error=nom is required&$user_data");
	}else if (empty($prix)) {
		header("Location: ../index.php?error=prix is required&$user_data");
	}else if (empty($ingredient)) {
		header("Location: ../index.php?error=ingredient is required&$user_data");
	}else {

       $sql = "INSERT INTO menu(nom, prix, ingredient) 
               VALUES('$nom', '$prix', '$ingredient')";
       $result = mysqli_query($dbconnect, $sql);
       if ($result) {
       	  header("Location: ../read.php?success=successfully created");
       }else {
          header("Location: ../index.php?error=unknown error occurred&$user_data");
       }
	}

}