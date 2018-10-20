var menu = $( '#menuAgrupamentos' );
var menuEmpresas = $( '#menuEmpresa' );
var menuEmpresaDetalhes = $( '#menuEmpresaDetalhes' );


$( '#btnMenuAgrupamentos' ).off().on('click', function(){

	menu.fadeToggle();
	menu.find( '#agrupamentosEtapa2' ).hide();
	menu.find( '#agrupamentosEtapa1' ).show();
});

$( '#agrupamentosEtapa1' ).find( '.item-line' ).off().on('click', function(){

	menu.find( '#agrupamentosEtapa1' ).hide();
	menu.find( '#agrupamentosEtapa2' ).show();
});

$( '#agrupamentosEtapa2' ).find( 'header' ).off().on('click', function(){

	menu.find( '#agrupamentosEtapa2' ).hide();
	menu.find( '#agrupamentosEtapa1' ).show();
});

$( '#agrupamentosEtapa2' ).find( '.item-line' ).off().on('click', function(){

	menuEmpresas.fadeToggle();
});

menuEmpresas.find( '#btnEmpresaDetalhes' ).off().on('click', function(){

	menuEmpresaDetalhes.fadeToggle();
});

menuEmpresaDetalhes.find( '#btnRelatorios' ).off().on('click', function(){

	$( '#itemRelatorios' ).fadeToggle();
});