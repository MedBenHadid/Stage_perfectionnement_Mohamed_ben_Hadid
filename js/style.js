function calc_total(){
    var sum = 0;
    $('.input-pays').each(function(){
        sum ++;
    });
    $(".preview-total").text(sum);
        $(".cal").text(sum);
}


$(document).on('click', '.input-remove-row', function(){

                var tr = $(this).closest('tr');
                tr.fadeOut(50, function(){
                 tr.remove();
                 calc_total();
             });
            });


$(function(){
  var j=0;
    $('.preview-add-button').click(function(){

        var form_data = {};
        var i=0;

              form_data["pays"] = $('.payment-form #pays option:selected').text();
              form_data["ADD"] = $('.payment-form #ADD option:selected').text();
              form_data["ADA"] = $('.payment-form #ADA option:selected').text();
              form_data["PTN"] = $('.payment-form input[name="PTN"]').val();
              form_data["PE"] = $('.payment-form input[name="PE"]').val();
              form_data["remove-row"] = '<span class="glyphicon-remove">';
                     var row = $('<tr id="L'+j+'"></tr>');
                     $.each(form_data, function( type, value ) {

                         $('<td class="input-'+type+'" value="'+value+'" name="C'+i+'"></td>').html(value).appendTo(row);
                         i=i+1;
                     });
 j=j+1;
                     $('.preview-table > tbody:last').append(row);

                     calc_total();



                 });

             });
