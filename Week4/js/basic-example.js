$(':header').addClass('headline');
$('li:lt(3)').hide();
$('li').on('click', function() {
  $(this).remove();
});
$('#header').on('click', function() {
	$('li:lt(3)').fadeIn(3000);
});