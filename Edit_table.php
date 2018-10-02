<?php

header('Content-Type: application/json');

include 'connexion.inc.php';

  $variable = filter_input_array(INPUT_POST);




if ($variable['action'] === 'edit') {

 $obj->query("UPDATE dpromotion SET promo_titre='". $variable['titre'] . "', SMin='" . $variable['SMin'] . "', SMax='" . $variable['SMax'] . "', ChangeDepartTN='" . $variable['ChangeDepartTN'] . "', ChangeDepartE='" . $variable['ChangeDepartE'] . "', PventeDu='" . $variable['PventeDu'] . "', PventeAu='" . $variable['PventeAu'] . "', PvoyageDu='" . $variable['PvoyageDu'] . "', PvoyageAu='" . $variable['PvoyageAu'] . "', Remboursement='" . $variable['Remboursement'] . "', Reduction_b='" . $variable['Reduction_b'] . "', text_Ajouter='" . $variable['text_Ajouter'] . "' WHERE id_promotion='" . $variable['id'] . "'");
 echo "--------------------------------------";
} else if ($variable['action'] === 'delete') {
$obj->query("DELETE FROM dpromotion WHERE id_promotion = '".$variable["id"]."'");
} else if ($variable['action'] === 'restore') {

$obj->query("INSERT INTO dpromotion values ('".$variable['id']."','".$variable['titre']."','". $variable['SMin'] . "','" . $variable['SMax'] . "','" . $variable['ChangeDepartTN'] . "','" . $variable['ChangeDepartE'] . "','" . $variable['PventeDu'] . "','" . $variable['PventeAu'] . "','" . $variable['PvoyageDu'] . "','" . $variable['PvoyageAu'] . "','" . $variable['Remboursement'] . "','" . $variable['Reduction_b'] . "','" . $variable['text_Ajouter'] . "')");
}

echo json_encode($variable);

?>
