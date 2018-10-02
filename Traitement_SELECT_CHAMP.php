<!DOCTYPE html>
<html>
<head>
	<title></title>

<?php
include "connexion.inc.php";
$pays=$obj->query("SELECT * FROM pays where Id_p != '16'")->fetchAll();


 ?>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
 <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

<script type="text/javascript">
function selectChoice() {
    var container = $('#ADD');
    var selector = $('#pays');
    var url =  'myAjax.php';

    selector.change(function(){
        var value = $(this).val();
        arraySelect = new Array;
        $("select option:selected").each(function() {
          arraySelect.push(this.value);
        });

       var req = $.ajax({
            url : url,
            type : 'POST',
            data : { 'choix[]' : arraySelect},
            success : function(data){
                container.html(data);
            }
        });
    });
}
$(document).ready(function(){
    selectChoice();
});


function selectChoice2() {
    var container = $('#ADA');
    var selector = $('#ADD');
    var url =  'myAjax2.php';

    selector.change(function(){
        var value = $(this).val();
        arraySelect = new Array;
        $("select option:selected").each(function() {
          arraySelect.push(this.value);
        });

       var req = $.ajax({
            url : url,
            type : 'POST',
            data : { 'choix2[]' : arraySelect},
            success : function(data){
                container.html(data);
            }
        });
    });
}
$(document).ready(function(){
    selectChoice2();
});
</script>
</head>
<body>
	<form name="F2">
		  <div class="form-group"> <label for="concept" class="col-sm-3 control-label"><i>Pays:</i></label>
                  <div class="col-sm-9">

  <select class="form-control" id="pays" name="pays" onChange="selectChoice();" >

                        <?php
														echo "<option selected='selected'> </option>";
                          foreach ($pays as $key ) {

	                           echo "<option value=".$key[0].">".$key[1]."</option>";


                           }

                           ?>
                    </select>
  </div>
                </div>




<div class="form-group"> <label for="description" class="col-sm-3 control-label text-capitalize mx-0 px-3"><i>Aéroport de départ:</i></label>
                  <div class="col-sm-9">

<select class='form-control' id='ADD' name='ADD' onChange="selectChoice2();" >

  <div id="container"></div>

</select>

    </div>
    </div>


                <div class="form-group"> <label for="amount" class="col-sm-3 control-label"><i>Aéroport D'arriver:</i></label>
                  <div class="col-sm-9">

<select class='form-control' id='ADA' name='ADA' >

  <div id="container1"></div>

</select>
  </div>
                </div>
<script>
$(".preview-add-button").on("click", function () {
$('#pays option').prop('selected', function() {
return this.defaultSelected;
});
$('#ADD option').prop('selected', function() {
return this.defaultSelected;
});
$('#ADA option').prop('selected', function() {
return this.defaultSelected;
});
$('#PTN').val('');
$('#PE').val('');

});


</script>
</form>
</body>
</html>
