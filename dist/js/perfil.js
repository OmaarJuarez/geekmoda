jQuery(function($) {
  $("#telefono").mask("(99) 9999 -- 99 99");
});


$('#edit-idata').click(function()
{
   $('#datos-emp textarea').prop('disabled', false);
   $('#datos-emp input[type="text"]').prop('disabled', false);
   $('#datos-emp input[type="date"]').prop('disabled', false);
   $('#iPFS').prop('disabled', false);

});