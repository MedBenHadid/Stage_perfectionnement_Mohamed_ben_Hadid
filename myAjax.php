<?php
include "connexion.inc.php";
include "Traitement_SELECT_CHAMP.php";
$choix = $_POST['choix'];





//$pays2= $obj->query("SELECT `NOM_A`,`Id_p` FROM aeroport A,pays P WHERE A.Id_p=P.Id_p and P.Nom_p='".$choix."'")->fetchAll();


 $pays2= $obj->query("SELECT * FROM aeroport A,pays P WHERE A.Id_p=P.Id_p and A.Id_p='".$choix[0]."'")->fetchAll();

		echo "<option> </option>";

	foreach ($pays2 as $key2 ) {

	                           echo "<option value=".$key2[1].">".$key2[0]."</option>";
                           }



$pays3=$obj->query("SELECT * FROM aeroport A,pays P WHERE A.Id_p=P.Id_p and A.Id_p='16'")->fetchAll();
foreach ($pays3 as $key3 ) {

                         echo "<option value='16'>".$key3[0]."</option>";
                       }






?>
