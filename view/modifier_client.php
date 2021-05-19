<HTML xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Modifier Votre compte</title>
    <link href="assets_c/css/bootstrap.css" rel="stylesheet" />
    <link href="assets_c/css/font-awesome.css" rel="stylesheet" />
    <link href="assets_c/css/style.css" rel="stylesheet" />

</head>
<body>
<?PHP
 include "../core/clientOps.php";
$client = new clientOps();
    $result=$client->recupererclient($_GET['id']);
	foreach($result as $row){
 		$nom=$row['fname'];
        $adresse=$row['adresse'];
        $prenom=$row['lname'];
		$mail=$row['email'];
    }
     
?>
 <div class="col-md-6">
    <div class="panel panel-default">
    <div class="panel-heading">
       Modifier Votre compte
    </div>
    <div class="panel-body">
        <form role="form" action="validmodif_client.php" method="POST">
                   
                    <div class="form-group has-warning">
                        <label class="control-label" for="warning">saisir le nom</label>
                        <input type="text" class="form-control" id="warning" name="nom" value="<?PHP echo $nom ?>"/>
                    </div>
                    <div class="form-group has-error">
                        <label class="control-label" for="error">saisir le Prènom</label>
                        <input type="text" class="form-control" id="error" name="prenom" value="<?PHP echo $prenom ?>"/>
					</div>
					
                    <div class="form-group has-success">
                        <label class="control-label" for="success">Saisir E-mail</label>
                        <input type="text" class="form-control" id="success" name="mail" value="<?PHP echo $mail ?>"/>
                    </div>
					<div class="form-group has-success">
                        <label class="control-label" for="success">Adresse</label>
                        <input type="text" class="form-control" id="success" name="adresse" value="<?PHP echo $adresse?>"/>
                    </div>
                    <div class="form-group has-success">
                        <label class="control-label" for="success">Password</label>
                        <input type="password" class="form-control" id="success" name="password" />
                    </div>
                    <button   class="ajouter"id="button-ajouter">modifier</button>

                </form>


 

  
</body>
</HTMl>