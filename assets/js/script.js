$(function()
{
	var form = $('#auth').find('form'),
		inputs = form.find(':input').not(':input[type=submit]');
		
	inputs.each(function()
	{
		var elem = $(this),
			text = elem.val();
			
		var css_blured = { 'color': '#afafaf', 'font-style': 'italic' },
			css_focused = { 'color': '#333', 'font-style': 'normal' };
		
		elem.data('edited', false);
		elem.change(function() { elem.data('edited', true); });
		
		elem.val( text )
			.css( css_blured )
			.focus( function() { if ( !elem.data('edited') ) { elem.val('').css( css_focused ); } })
			.blur ( function() { if ( !elem.val() ) { elem.val( text ).css( css_blured ); elem.data('edited', false); } });
	});
});