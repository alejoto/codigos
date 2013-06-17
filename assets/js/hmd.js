/*carousel activator*/
!function ($) {
	$(function(){
          // carousel
          $('#myCarousel').carousel();
      });
}(window.jQuery);

/*ajax functions
-----------------------------------------------------------
*/

/*
*name: search_dx
*action: sends 'diagnostico' data with 'post' method
*
*/
function search_dx() {
	var diagnostico=$('#diagnostico').val();
  if (diagnostico!="") {
  $.post('modules/includes/ajax/cie10.php', 
    {diagnostico:diagnostico},
    function(data){ 
      $('#cie10_result').html(data);
    });}
  else {$('#cie10_result').html('');}
}

/*Actions: activate search_dx with button click or pressing enter key*/
$('#search_cie10').click(function(){search_dx(); });//clicking button
$('#diagnostico').bind('keypress', function(e) {
	if(e.keyCode==13){search_dx();}//pressing 'enter' key
});



/*
*name: search_cups
*action: sends 'cups' data with 'post' method
*
*/
function search_cups() {
  var cups=$('#cups').val();
  if (cups!="") {
  $.post('modules/includes/ajax/cups.php', 
    {cups:cups},
    function(data){ 
      $('#cups_result').html(data);
    });}
  else {$('#cups_result').html('');}
}

/*Actions: activate search_dx with button click or pressing enter key*/
$('#search_cups').click(function(){search_cups(); });//clicking button

$('#cups').bind('keypress', function(e) {
  if(e.keyCode==13){search_cups();}//pressing 'enter' key
});


