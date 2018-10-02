<?php
try{
$obj=new PDO("mysql:host=localhost;dbname=gp","root","");

$obj->setattribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOExeption $e){
	//echo "Erreur de connexion";
	$e->getmessage();

}
?>
