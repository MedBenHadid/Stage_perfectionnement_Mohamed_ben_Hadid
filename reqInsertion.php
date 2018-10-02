<?php
include "connexion.inc.php";
if (isset($_POST['B1'])){
extract($_POST);

// info promotion insert
$s=$obj->query("INSERT INTO dpromotion (`promo_titre`,`SMin`,`SMax`,`ChangeDepartTN`,`ChangeDepartE`,`PventeDu`,`PventeAu`,`PvoyageDu`,`PvoyageAu`,`Remboursement`,`Reduction_b`,`text_Ajouter`) values ('".$promo_titre."','".$SMin."','".$SMax."','".$ChangeDepartTN."','".$ChangeDepartE."','".$PventeDu."','".$PventeAu."','".$PvoyageDu."','".$PvoyageAu."','".$Remboursement."','".$Reduction_b."','".$text_Ajouter."')");
//recuperer le id_promotion
$id_p=$obj->query("SELECT MAX(id_promotion) from dpromotion; ")->fetchColumn();





//image insert
if(isset($_FILES['image'])){

if(!is_uploaded_file($_FILES['image']['tmp_name'])){
  $erreurimg='Un problème est survenu durant l opération. Veuillez réessayer !';
  } else {
    $extensions = array('.png', '.gif', '.jpg', '.jpeg');


    $extension = strrchr($_FILES['image']['type'], '.');


    if(!in_array($extension, $extensions))
    $erreurimg='Vous devez uploader un fichier de type png, gif, jpg, jpeg.';
    else {


      define('MAXSIZE', 100000);

      if($_FILES['image']['size'] > MAXSIZE)
      $erreurimg='Votre image est supérieure à la taille maximale de '.MAXSIZE.' octets';
      else {

        $image = file_get_contents($_FILES['image']['tmp_name']);

            $req = $bdd->prepare("INSERT INTO image (id_img,img, extension ,id_promotion) VALUES('',:image, :type, :id)");
        $req->execute(array(
            'id_img'=>'',
          'image' => $image,
          'type' => $_FILES['image']['type'],
          'id' => $id_p,
          ));

       }
      }
    }
}


//table des prix insert
$tab_php = [];
$tabch=$_POST['tab'];
//echo $tabch."----<br>";
$tab_php = explode(";", $tabch);
//print_r($tab_php);
$taille=sizeof($tab_php);
$tab_req = [];
for ($i=0; $i <$taille ; $i++) {
$tab_req=explode(",", $tab_php[$i]);

    $s1=$obj->query("INSERT INTO prix_promo (`pays`,`NOM_A_D`,`NOM_A_A`,`prix_TN`,`prix_E`,`id_promotion`) VALUES('".$tab_req[0]."','".$tab_req[1]."','".$tab_req[2]."',".$tab_req[3].",".$tab_req[4].",".$id_p.")");
}




}



?>
