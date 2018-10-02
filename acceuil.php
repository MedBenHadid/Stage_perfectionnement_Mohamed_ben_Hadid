<!DOCTYPE html>
  <html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="css/style2.css" type="text/css"> </head>

 <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<style>
body {

background: url(./img/bga.jpg) no-repeat;
}
#logo{
width:100px;
height:60px;
padding-left:10px;

position:relative;
padding-top:10px;
float: left;
}
#elan{
width:280px;
height:60px;
position: absolute;
top:60px;
left:1130px;
color: #FFF;
font-family: 'Arial';
font-size:12px;
text-align:center;
}

.preview-add-button:before{
  content: "\271A";
}
.input-remove-row:before{
  content: "\2718";
}
.nom{
  display: inline-block;
  padding-top: 0.3125rem;
  padding-bottom: 0.3125rem;
  margin-right: 1rem;
  margin-left: 8rem;
  font-size: 1.25rem;
  line-height: inherit;
  white-space: nowrap;
  color: white;
}

:invalid {
    box-shadow: none;
    outline: 0;

}

.message {
color: #FF0000;
font-weight: bold;
text-align: center;
width: 100%;
}
.row {


padding-left: -90px;
padding-right: -90px;
  padding-top: 20px;
 }

 .container2 {
   width: 100%;
   margin-right: 90px;
   margin-left: 30px;
 }

 .form-control {
   display: block;
   width: 120%;
   padding: 0.5rem 0.75rem;
   font-size: 1rem;
   line-height: 1.25;
   color: #495057;
   background-color: #fff;
   background-image: none;
   background-clip: padding-box;
   border: 1px solid rgba(0, 0, 0, 0.15);
   border-radius: 0.25rem;
   transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s; }
</style>
<?php
include "connexion.inc.php";
$erreurimg="";
include "verif_login.php";
include "reqInsertion.php";

 ?>


<body>
  <nav class="navbar navbar-expand-md bg-primary navbar-dark">
      <a class="navbar-brand" href="acceuil.php"><b>  Gestion De Promotion Tunisair</b></a>
      <div class="container">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent" aria-controls="navbar2SupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
      <?php echo "<div class='nom'><b>Bienvenu Mr ".$_SESSION['name']."</b></div>"; ?>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">
          <a href="modification.php" class="btn navbar-btn ml-2 text-white btn-secondary" >Update/Delete</a>
        </div>
         <div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">
          <a href="view.php" class="btn navbar-btn ml-2 text-white btn-secondary" >view</a>
        </div>

        </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">
          <a href="logout.php" class="btn navbar-btn ml-2 text-white btn-secondary" ><i class="fa d-inline fa-lg fa-user-circle-o"></i> Logout</a>

    </nav>

  <div id="logo"><a href="#" target="_blank"><img src="./img/tunisair.png" alt="Tunisair" border="0"></a></div>
  <div id="elan"><img src="./img/elanin.png" alt="Tunisair" border="0"></div>
  <form name="F" method="post" action="">


  <div class="form">
    <div class="container"> </div>
  </div>
  <div class="py-5">
    <div class="container" style="padding-left: 180px;">
      <div class="row" >
        <div class="col-md-12">
          <div class="card" >
            <div class="card-header text-muted"><b><i class="text-primary"> Insertion de promotion</i></b></div>
            <div class="card-body">
              <div class="row">
                <div class="col-sm-10 col-sm-offset-1 col-md-4">
                  <div class="well">

                    <div class="row">
                        <div class="col-sm-4 col-md-12" style="transition: all 0.25s;">
                          <div class="form-group"> <label for="fname"><b><i>Promo Titre:</i></b></label>
                            <input type="text" name="promo_titre" class="form-control w-100" required /> </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-4 col-md-12" style="transition: all 0.25s;">
                          <div class="form-group"> <label for="fname"><b><i>Séjour minimum:</i></b></label>
                            <input type="text" name="SMin" class="form-control w-100"required /> </div>
                        </div>
                        <div class="col-sm-4 col-md-12" style="transition: all 0.25s;">
                          <div class="form-group"> <label for="fname"><b><i>Séjour maximum:</i></b></label>
                            <input type="text" name="SMax" class="form-control w-100"required /> </div>
                        </div>
                        <div class="col-sm-4 col-md-12" style="transition: all 0.25s;">
                          <div class="form-group"> <label for="fname"><b><i>Changement Départ de la Tunisie :</i></b></label>
                            <input type="text" name="ChangeDepartTN" class="form-control w-100"required /> </div>
                        </div>
                        <div class="col-sm-4 col-md-12" style="transition: all 0.25s;">
                          <div class="form-group"> <label for="fname"><b><i>Changement Départ de l'Etranger:</i></b></label>
                            <input type="text" name="ChangeDepartE" class="form-control w-100"required /> </div>
                        </div>
                      </div>

                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group col-md-8 w-75"> <label for="date" class="w-100"><b><i><u>  Période de vente</u></i></b></label> Du :
                    <input type="date" class="form-control" id="date_V_au" name="PventeDu"required /> Au :
                    <input type="date" class="form-control" id="date2" name="PventeAu" placeholder=""required />
                    <br>
                    <br>




                    <div class="form-group"> <label for="fname"><b><i>Remboursement:</i></b></label>
                      <input type="text" name="Remboursement" class="form-control w-100"required /> </div>
                    <br>
                    <br>
                    <div class="form-group"> <label for="fname"><b><i>Réduction bébés:</i></b></label>
                    <input type="text" name="Reduction_b" class="form-control w-50"required /><br>
                    <label for="fname"><b><i>Image publicitaire:</i></b></label>  <input type="file" name="image" id="fileToUpload" required /><?php if (isset($_POST['B1'])){ if ($erreurimg!=""){  echo "<div class='alert alert-danger' role='alert'>".$erreurimg."/div>";}} ?>
                   </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group col-md-8 w-75"> <label for="date" class="w-100"><b><i><u>  Période de voyage</u></i></b></label> Du :
                    <input type="date" class="form-control" id="date3" name="PvoyageDu" required /> Au :
                    <input type="date" class="form-control" id="date4" name="PvoyageAu" placeholder=""required /> </div>
                  <div class="col-sm-8">
                    <div class="form-group"> <label for="message"><b><i>TEXT :</i></b></label> <textarea class="form-control" name="text_Ajouter" rows="0" style="margin-top: 0px; margin-bottom: 0px; height: 218px; width:300"required /></textarea> </div>
                    <div class="text-right">

                     </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br>
      <br>
      <br>


      <div class="container2">
        <div class="row">
          <div class="col-sm-12">
          <form name="F2" >


            <h4><legend>Insertion des prix:</legend></h4>
          </div>

          <div class="col-sm-5">

            <div class="panel panel-default">
              <div class="panel-body form-horizontal payment-form">
<!--les champ de saisie de pays !!-->

<?php include "Traitement_SELECT_CHAMP.php"; ?>


<!--les champ de saisie de pays !!-->

                <div class="form-group"> <label for="status" class="col-sm-3 control-label"><i>Prix de la Tunisie&nbsp;</i></label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="PTN" name="PTN" placeholder="En DNT" >
                  </div>
                </div>
                <div class="form-group"> <label for="date" class="col-sm-3 control-label"><i>Prix de l'etranger:&nbsp;</i></label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="PE" name="PE" placeholder="En EUR">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-12 text-right">
                    <button type="button" class="btn btn-default preview-add-button" id="testB" >  Add </button>
                  </div>
                </div>
              </div>
            </div>
          </div>

  </form>
          <!-- / panel preview -->
          <div class="col-sm-7">

            <div class="row">
              <div class="col-xs-12">
                <div class="table-responsive">
                  <table class="table preview-table">
                    <thead>
                      <tr>
                        <th>Pays</th>
                        <th>Aéroport de départ</th>
                        <th>Aéroport D'arriver</th>
                        <th>Prix de la Tunisie</th>
                        <th>Prix de l'etranger</th>
                      </tr>
                    </thead>
                    <tbody></tbody>
                    <!-- preview content goes here-->
                  </table>
                </div>
              </div>
            </div>
            <div class="row text-right">
              <div class="col-xs-12">
                <h4>Total: <strong><span id="cal" class="preview-total"></span></strong></h4>
                  <input id="un_id" type="hidden" name="tab" />
              </div>
            </div>
            <div class="row">
              <div class="col-xs-12">
                <hr style="border:1px dashed #dddddd;">

                <button  type="submit"  class="btn btn-primary btn-block" name="B1" onclick="return testF();">Submit all and finish</button>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


</form>


<script src="js/style.js"></script>
<script type="text/javascript" >


function testF(){

 var S=document.getElementById('cal').innerHTML;
// alert("*******");
 var x = [], i;
for(var i=0; i<S; i++){
   x[i] = new Array();
   }



for (var i=0;i<S;i++){
var table = document.getElementById("L"+i).getElementsByTagName("td");

 for(var j=0; j < table.length-1; j++){
      x[i][j]=table[j].innerHTML.slice();
}

}
/*
for(var i=0; i<S; i++){
  alert("--------------");
for(var j=0; j < 5; j++){
       alert(x[i][j]);
       }
   }
*/

//new Ajax.Request('reqInsertion.php',{method:'post',postBody:'data='+$H(x).toJSON(),asynchronous: false});
/*
var url = 'reqInsertion.php?'; // Début de l'URL

for(var i=0; i<S; i++){
  alert("--------------");
for(var j=0; j < 5; j++){
         url += 'arr' + i + '=' + x[i][j] + '&'; // On ajoute les valeurs du tableau

       }
   }
url = url.substring(0, url.length - 2); // On retire le "&" de trop
document.location.href = url; // Et on envoie à PHP
*/

new_tab_js = x.join(";");
document.getElementById('un_id').value=new_tab_js;


}



  document.querySelectorAll('input[type="text"]:invalid');
  document.querySelectorAll('input[type="select"]:invalid');
  document.querySelectorAll('input[type="date"]:invalid');
  document.querySelectorAll('input[type="textarea"]:invalid');



var date = document.getElementById("date_V_au");

date_V_au.addEventListener("input", function() {
    var value = new Date(date_V_au.value);
    if (value < new Date()) {
        date_V_au.setCustomValidity("Date de début de vente doit être postérieure à maintenant!");
    } else {
        date_V_au.setCustomValidity("");
    }
});

var date = document.getElementById("date2");

date2.addEventListener("input", function() {
    var value = new Date(date2.value);
    if (value < new Date()) {
        date2.setCustomValidity("Date de vente finale doit être postérieure à maintenant!");
    } else {
        date2.setCustomValidity("");
    }
});


var date = document.getElementById("date3");

date3.addEventListener("input", function() {
    var value = new Date(date3.value);
    if (value < new Date()) {
        date3.setCustomValidity("Date de voyage doit être postérieure à maintenant!");
    } else {
        date3.setCustomValidity("");
    }
});

var date = document.getElementById("date4");

date4.addEventListener("input", function() {
    var value = new Date(date4.value);
    if (value < new Date()) {
        date4.setCustomValidity("Date de voyage doit être postérieure à maintenant!");
    } else {
        date4.setCustomValidity("");
    }
});




</script>


</body>
</html>
