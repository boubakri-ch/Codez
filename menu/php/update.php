<?php 

if (isset($_GET['id'])) {
	include "db_conn.php";

	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$id = validate($_GET['id']);

	$sql = "SELECT * FROM menu WHERE id=$id";
    $result = mysqli_query($dbconnect, $sql);

    if (mysqli_num_rows($result) > 0) {
    	$row = mysqli_fetch_assoc($result);
    }else {
    	header("Location: read.php");
    }


}else if(isset($_POST['update'])){
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
	$id = validate($_POST['id']);

	if (empty($nom)) {
		header("Location: ../update.php?id=$id&error=nom is required");
	}else if (empty($prix)) {
    header("Location: ../update.php?id=$id&error=prix is required");
  }else if (empty($ingredient)) {
    header("Location: ../update.php?id=$id&error=ingredient is required");
  }else {

       $sql = "UPDATE menu
               SET nom='$nom', prix='$prix', ingredient='$ingredient'
               WHERE id=$id ";
       $result = mysqli_query($dbconnect, $sql);
       if ($result) {
       	  header("Location: ../read.php?success=successfully updated");
       }else {
          header("Location: ../update.php?id=$id&error=unknown error occurred&$user_data");
       }
	}
}else {
	header("Location: read.php");
}