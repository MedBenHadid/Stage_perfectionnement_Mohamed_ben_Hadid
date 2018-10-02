<html>
<head>
  <meta charset="UTF-8">
    <title>

    </title>
    <?php


    include "connexion.inc.php";
    include "verif_login.php";
//recuperer les image de pays !

    $sql1 = "SELECT id_img, image FROM imagepays";
    	$q = $obj->prepare($sql1);
    	$q->execute();

    	$q->bindColumn(1, $id);
    	$q->bindColumn(2, $cover, PDO::PARAM_LOB);

//recuperer image pub !
      $sql2 = "SELECT id_img, img FROM imagep where id_promotion=(SELECT MAX(id_promotion) from imagep)";
      $q2 = $obj->prepare($sql2);
      $q2->execute();

      $q2->bindColumn(3, $id2);
      $q2->bindColumn(2, $cover2, PDO::PARAM_LOB);
//recuperer l'info de pub

      $sql3 = "SELECT * FROM dpromotion where id_promotion=(SELECT MAX(id_promotion) from dpromotion)";

      $q3 = $obj->query($sql3);
      $P=$q3->fetchAll();

  //SELECT tableau de promotion !

      $res_p=$obj->query("SELECT * from pays")->fetchAll();
     $Devise="";





    ?>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="js/jquery.js"></script>
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
  <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>

    <link href="css/style.css" rel="stylesheet">
        <link href="css/navbar.css" rel="stylesheet">
        <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css'>

        <style class="cp-pen-styles">
        body {

        background: url(./img/bga.jpg) no-repeat;
        }
        #logo{
          width:280px;
          height:60px;
          position: absolute;
          top:50px;
          left: -30px;
          color: #FFF;
          font-family: 'Arial';
          font-size:12px;
          text-align:center;
	}
  #elan{
width:280px;
height:60px;
position: absolute;
top:50px;
left:1130px;
color: #FFF;
font-family: 'Arial';
font-size:12px;
text-align:center;
}



        img { max-height: 100% }
  .swiper-container {
          width: 100%;
          height: 300px;
      }
      .swiper-slide {
          text-align: center;
          font-size: 18px;
          background: #fff;
          /* Center slide text vertically */
          display: -webkit-box;
          display: -ms-flexbox;
          display: -webkit-flex;
          display: flex;
          -webkit-box-pack: center;
          -ms-flex-pack: center;
          -webkit-justify-content: center;
          justify-content: center;
          -webkit-box-align: center;
          -ms-flex-align: center;
          -webkit-align-items: center;
          align-items: center;}
@import url(https://fonts.googleapis.com/css?family=Raleway:400,,800,900);
.container {
  position: absolute;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  left: 50%;
  top: 50%;
  padding-bottom: 280px;

}

.title {
  font-weight: 600;
  color: transparent;
  font-size: 100px;
  background: url("./img/titre.jpg") repeat;
  background-position: 20% 50%;
  -webkit-background-clip: text;
  position: relative;
  text-align: center;
  line-height: 90px;
  letter-spacing: -8px;
}
.hp__sectiontitle{margin-top: :2rem 0; margin-bottom: 2rem ;font-family:eim;font-size:4rem;font-weight:400;text-align:center;color:#5499C7;}


.pub {
  font-size: 1.5rem;
   display: block;
   width:1170px;
   height: 350px;
    border: 1px solid #ddd;
    border-radius: 4px;
    padding: 5px;
    margin-left: 30px;
}
 #global {}
#colonne_g_promo { float: left;  }
#colonne_d_promo {
margin-left:500px;

}
.LignePromo
{
/*background-color:#FF0000;*/
/*border: 2px solid #FF0000; border-color:#0066CC;*/

}
.ColonnePromo
{
  border-right: 1px solid #fff;
  border-left: 1px solid #e8e8e8;
  border-top: 1px solid #fff;
  border-bottom: 1px solid #e8e8e8;
  padding: 10px 15px;
  position: relative;

}
.ColonnePromoPrix
{
  border-right: 1px solid #e8e8e8;
  border-left: 1px solid #fff;
  border-top: 1px solid #fff;
  border-bottom: 1px solid #e8e8e8;
  padding: 10px 15px;
  position: relative;
  color:#FF0000;
  width:89px;

}

        </style>
      </head>


      <body>
        <div class="menu">
          <div class="container-fluid">
      		<div class="navbar-header">
      			<a href="#">Gestion des promotions</a>
      		</div>
          <?php echo "<div class='nom'><b>Bienvenu Mr ".$_SESSION['name']."</b></div>"; ?>
      		<div>
      			<ul class="nav navbar-nav navbar-right">
      				<li><a href="modification.php" ><span class="glyphicon glyphicon-edit"></span>Update/Delete</a></li>
      				<li><a href="acceuil.php" ><span class="glyphicon glyphicon-plus"></span>Insertion</a></li>
      				<li><a href="logout.php"><span class="	glyphicon glyphicon-off"></span> Logout</a></li>
      			</ul>
      		</div>
      	</div>
      </div>

        <div class="container">
            <div class="title">Nouvelles promotions</div>
        </div>
        <div id="logo"><a href="#"><img src="./img/tunisair.png" alt="Tunisair" border="0"></a></div>
        <div id="elan"><img src="./img/elanin.png" alt="Tunisair" border="0"></div>
<center>

</center>

<br><br><br><br><br><br><br><br><br><br><br><br>

<div class="hp__sectiontitle" style="color:#4074AE;font-family: Georgia;"><hgroup><span>__Meilleures Offres__</span></hgroup></div>
<!-- Swiper-->
<div class="swiper-container">
       <div class="swiper-wrapper">
<?php
         while($q->fetch())
         	{
            file_put_contents($id.".jpg",$cover);

            $res2=$obj->query("SELECT P.Nom_p From imagepays I,pays P where I.id_pays=P.id_p and I.id_img=".$id)->fetchColumn();
            $res3=$obj->query("SELECT MIN(prix_TN) from prix_promo P where pays='".$res2."' and id_promotion=(SELECT MAX(id_promotion) from prix_promo where pays='".$res2."')")->fetchColumn();
              echo "<div class=\"swiper-slide\"><div style=\"position:relative; height:300px;\">";
              echo " <div style=\"position:relative;z-index:1\">";
              echo "<a href=\"#".$res2."\"><img src=\"".$id.".jpg\"></a> ";
              echo "</div>";

              echo "<div style=\"position:absolute;top:200px;font-family: Georgia; margin-left: -150px; width:600px; height:100px;color:#E5F1FE; z-index:1;font-size:150%\">";
              echo " <b>".$res2." !</b><br>";
              echo " <b>à partie de <u>".$res3." TND!</u></b>";
              echo "</div></div></div>";

 } ?>



       </div>
       <div class="swiper-pagination"></div>
   </div>



<br><br><br><br>
<?php
while($q2->fetch())
    {
      file_put_contents($id2.".jpg",$cover2);
?>


     <div class="pub" style="BACKGROUND: url(<?php  echo $id2.".jpg" ?>) no-repeat;">
  <?php
   }

   foreach ($P as $key ) {
?>
<h2 style="color: white;padding-top: 15px ;"><?php echo $key['promo_titre'];?></h2>
<h3 style="color: white;">Conditions tarifaires : </h3>

<ul style="PADDING-LEFT: 20px;padding-top: 15px ;color: white;">
<li>Période de vente : <strong>du <?php echo $key['PventeDu'];?> au <?php echo $key['PventeAu'];?></strong>
</li><li>Période de voyage : <strong>du <?php echo $key['PvoyageDu'];?> au <?php echo $key['PvoyageAu'];?></strong>
</li><li>Séjour minimum : <strong><?php echo $key['SMin'];?> sur place ou une nuit de samedi à dimanche</strong>
</li><li>Séjour maximum : <strong><?php echo $key['SMax'];?></strong>
</li><li>Changement au Départ de la Tunisie (selon disponibilité) : <?php echo $key['ChangeDepartTN'];?>
</li><li>Changement au Départ de l'Etranger (selon disponibilité) : <?php echo $key['ChangeDepartE'];?>
</li><li>Remboursement : <?php echo $key['Remboursement'];?>
</li><li>Réduction bébés (moins de 2ans) :  <?php echo $key['Reduction_b'];?>% de réduction
</li><li>Offre soumise à conditions et dans la limite des sièges disponibles.
</li><li> <?php echo $key['text_Ajouter'];?></li></ul>

</div>
<?php }?>
<br><br><br>


<div style="padding-left: 100px; width: 1000px;">
<img src="./img/destination.jpg" width="1000">
<?php
$pays="";
 foreach ($res_p as $key) {
   echo "<!--------------------------".$key['Nom_p']."-------------------------->";
    $resX=$obj->query("SELECT NOM_A_D,NOM_A_A,prix_TN,prix_E from prix_promo where pays='".$key['Nom_p']."' AND NOM_A_D IN ('Tunis','Sfax','Monastir','Djerba')")->fetchAll();
          $Count1=$obj->query("SELECT COUNT(*) from prix_promo where pays='".$key['Nom_p']."' AND NOM_A_D IN ('Tunis','Sfax','Monastir','Djerba')")->fetchColumn();



?>
<div id="global">

<div id="colonne_g_promo">
<table style="TEXT-ALIGN: left; LINE-HEIGHT: 8px; BORDER-COLLAPSE: collapse; FONT-SIZE: 14px" cellspacing="2" cellpadding="0" width="500">
<tbody>
  <?php
foreach ($resX as $key2) {
 ?>
<tr class="LignePromo">
  <?php

if($pays!=$key['Nom_p']){
echo "<a name=\"".$key['Nom_p']."\"><td style=\"BACKGROUND-COLOR: #02557b; PADDING-LEFT: 10px; WIDTH: 110px;COLOR: #fff; FONT-SIZE: 14px\" rowspan='".$Count1."'>".$key['Nom_p']."</td> </a>";
$pays=$key['Nom_p'];
}
?>

<td class="ColonnePromo"><?php echo $key2['NOM_A_D'] ?><span style="COLOR: #02557b"> vers </span> <?php echo $key2['NOM_A_A']?></td>
<td class="ColonnePromoPrix"><?php echo $key2['prix_TN']." TND"?></td>
</tr>

<?php
}
?>
</tbody></table>
</div>




<div id="colonne_d_promo">
<table style="TEXT-ALIGN: left; LINE-HEIGHT: 8px; BORDER-COLLAPSE: collapse; FONT-SIZE: 14px" cellspacing="2" cellpadding="0" width="500">
<tbody>
  <?php
foreach ($resX as $key3) {
  if ($key['Nom_p']=="TCHEQUIE") {
    $Devise="CZK";
  }else if($key['Nom_p']=="ROYAUME UNI") {
    $Devise="£";
  }else if($key['Nom_p']=="SUISSE") {
    $Devise="CHF";
  }else if(($key['Nom_p']=="TURQUIE") || ($key['Nom_p']=="LIBAN")) {
    $Devise="$";
  }else if($key['Nom_p']=="EGYPTE") {
    $Devise="EGP";
  }else if($key['Nom_p']=="MAROC") {
    $Devise="MAD";
  }else {
     $Devise="€";
  }
 ?>
<tr class="LignePromo">
<td class="ColonnePromo"><?php echo $key3['NOM_A_A'] ?><span style="COLOR: #02557b"> vers </span> <?php echo $key3['NOM_A_D']?></td>
<td class="ColonnePromoPrix"><?php echo $key3['prix_E']."".$Devise ?></td>
</tr>

<?php
}
?>
</tbody></table>
</div>




</div>
<?php } ?>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<script src='//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.min.js'></script>
<script >var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        effect: 'coverflow',
        grabCursor: true,
        centeredSlides: true,
        spaceBetween: 0,
        //loop: true,
        autoplay: 2500,
        autoplayDisableOnInteraction: false,
        slidesPerView: 4,
        coverflow: {
            rotate: 30,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows : true
        }
    });



      $(document).ready(function(){
    var mouseX, mouseY;
    var ww = $( window ).width();
    var wh = $( window ).height();
    var traX, traY;
    $(document).mousemove(function(e){
      mouseX = e.pageX;
      mouseY = e.pageY;
      traX = ((4 * mouseX) / 570) + 40;
      traY = ((4 * mouseY) / 570) + 50;
      console.log(traX);
      $(".title").css({"background-position": traX + "%" + traY + "%"});
    });
  });

</script>
</body></html></body></html>
