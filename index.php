<?php
session_start();
include "connexion.inc.php";

extract($_POST);
$message="";

if (isset($_POST['B1'])) {
	if ((($ID!="")) && (($pass!=""))){
$req1=$obj->query("select Count(*) from login where id='".$ID."' and pass='".$pass."'")->fetchColumn();

if ($req1>0){
$nom=$obj->query("select name from login where id='".$ID."' and pass='".$pass."'")->fetchColumn();
$_SESSION['ID']=$ID;
$_SESSION['name']=$nom;

header("location: acceuil.php");

}
if ($req1==0){
	$message="Verifier le nom d'utilisateur ou le mot de passe ! ";
}

}else{
	$message="Le saisie de l'ID et le mot de passe est obligatoire !";
}

}

?>
<html>
<head>
<title>Login</title>
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
    <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
				  <link href="css/style_login.css" rel="stylesheet">

</head>
<body>
	<img src="img/tunisair.png"style="margin-top: -50px;margin-bottom: -10px; width: 25%;">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js"></script>

<center>
	<h1 class="app-title" color="">Gestion de promotion</h1>
<br><br>
  <div class="container login-form">

	<div class="panel panel-default">
		<h3 class="login-title">- Please Login -</h3>
		<div class="panel-body">
			<form name="F" method="POST" action="">


				<div class="input-group login-userinput">
					<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
					<input id="txtUser" type="text" class="form-control" name="ID" placeholder="ID">
				</div>
				<div class="input-group">
					<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
					<input  id="txtPassword" type="password" class="form-control" name="pass" placeholder="Password">

				</div>
				<button class="btn btn-primary btn-block login-button" type="submit" name="B1"><i class="fa fa-sign-in"></i> Login</button>
			</form>
			<div class="message"><?php if($message!="") { echo "<div class='alert alert-danger' role='alert'>".$message."</div>"; } ?>
				</div>
		</div>
	</div>
</div>
</center>
</body></html>
