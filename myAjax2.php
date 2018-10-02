<?php
include "connexion.inc.php";
include "Traitement_SELECT_CHAMP.php";
$choix2 = $_POST['choix2'];


print_r($choix2);

if ($choix2[4]!='16') {
	 $pays3=$obj->query("SELECT * FROM aeroport A,pays P WHERE A.Id_p=P.Id_p and A.Id_p='16'")->fetchAll();
	 		echo "<option> </option>";
	foreach ($pays3 as $key3 ) {

	                           echo "<option value='".$key3[1]."'>".$key3[0]."</option>";
                   }
}else{

	 $pays4=$obj->query("SELECT * FROM aeroport A,pays P WHERE A.Id_p=P.Id_p and A.Id_p='".$choix2[0]."'")->fetchAll();
		echo "<option> </option>";
	foreach ($pays4 as $key4 ) {

	                           echo "<option value='".$key4[1]."'>".$key4[0]."</option>";

                   }

}




?>
