<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		#addRow {
  margin-bottom: 10px;
}
.menu  .navbar-nav >  li >  a
{
font-size: 13px;
color: white;
padding: 10px 35px;
margin-top: -31px;
}



</style>
<?php
include "verif_login.php";
 include "connexion.inc.php";
$sql1 = "SELECT * FROM dpromotion";
    	$q = $obj->prepare($sql1);
    	$q->execute();


?>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
	<script src="js/jquery.js"></script>
	<link href="css/bootstrap.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="jquery.tabledit.min.js"></script>

  <link rel="stylesheet" href="css/navbar.css" type="text/css">


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
				<li><a href="acceuil.php" ><span class="glyphicon glyphicon-plus"></span>Insertion</a></li>
					<li><a href="view.php" ><span class="glyphicon glyphicon-check"></span> View</a></li>
				<li><a href="logout.php"><span class="	glyphicon glyphicon-off"></span> Logout</a></li>
			</ul>
		</div>
	</div>
	</div>
<br><br><br><br>
<div class="row">
  <div class="col-md-12">
    <div class="table-responsive">
      <table class="table table-striped table-bordered" id="tab">
        <thead>
        <tr>
          <th>id</th>
          <th>titre</th>
          <th>Séjour Min</th>
          <th>Séjour Max</th>
          <th>changeDepartTN</th>
          <th>ChangeDepartE</th>
          <th>Période vente Du</th>
          <th>Période vente Au</th>
          <th>Période voyage Du</th>
          <th>Période voyage Au</th>
          <th>Remboursement</th>
          <th>Reduction bébé</th>
          <th>Text ajouter</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($q as $key) {
        echo "<tr>";
        echo "<td>".$key['id_promotion']."</td>";
		echo "<td>".$key['promo_titre']."</td>";
		echo "<td>".$key['SMin']."</td>";
		echo "<td>".$key['SMax']."</td>";
		echo "<td>".$key['ChangeDepartTN']."</td>";
		echo "<td>".$key['ChangeDepartE']."</td>";
		echo "<td>".$key['PventeDu']."</td>";
		echo "<td>".$key['PventeAu']."</td>";
		echo "<td>".$key['PvoyageDu']."</td>";
		echo "<td>".$key['PvoyageAu']."</td>";
		echo "<td>".$key['Remboursement']."</td>";
		echo "<td>".$key['Reduction_b']."</td>";
		echo "<td>".$key['text_Ajouter']."</td>";
        echo "</tr>";
        }
       ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<script type="text/javascript">
// Add row only as simulation
$(document).ready(function(){
$('#tab').Tabledit({
  url: 'Edit_table.php',
    autoFocus: false,
    restoreButton: false,
  columns: {
    identifier: [0, 'id'],
    editable: [
    [1, 'titre'],
    [2, 'SMin'],
    [3, 'SMax'],
    [4, 'ChangeDepartTN'],
    [5, 'ChangeDepartE'],
    [6, 'PventeDu'],
    [7, 'PventeAu'],
    [8, 'PvoyageDu'],
    [9, 'PvoyageAu'],
    [10, 'Remboursement'],
    [11, 'Reduction_b'],
    [12, 'text_Ajouter']
    ]
  }
});
});



</script>
</body>
</html>
