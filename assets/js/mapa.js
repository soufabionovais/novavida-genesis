var menu = $( '#menuAgrupamentos' );


$( '.btn-agrupamentos' ).off().on('click', function(){

	menu.fadeToggle();
	menu.find( '#etapa2' ).hide();
	menu.find( '#etapa1' ).show();
});

$( '#etapa1' ).find( '.item-line' ).off().on('click', function(){

	menu.find( '#etapa1' ).hide();
	menu.find( '#etapa2' ).show();
});

$( '#etapa2' ).find( 'header' ).off().on('click', function(){

	menu.find( '#etapa2' ).hide();
	menu.find( '#etapa1' ).show();
});