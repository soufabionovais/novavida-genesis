var menu = $( '#menuAgrupamentos' );
var menuEmpresas = $( '#menuEmpresa' );
var menuEmpresaDetalhes = $( '#menuEmpresaDetalhes' );


$( '#btnMenuAgrupamentos' ).off().on('click', function(){

	$( '#itemRelatorios' ).hide();
	$( '.item-usuario' ).find( '.fonte-1' ).hide();
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

	$( '.item-usuario' ).find( '.fonte-1' ).css( 'display', 'flex' );
	menuEmpresas.show();
	menu.hide();
});

menuEmpresas.find( '#btnEmpresaDetalhes' ).off().on('click', function(){

	menuEmpresaDetalhes.fadeToggle();
});

menuEmpresaDetalhes.find( '#btnRelatorios' ).off().on('click', function(){

	menuEmpresas.hide();
	menuEmpresaDetalhes.hide();
	$( '#itemRelatorios' ).show();
});

menuEmpresaDetalhes.find( '.fechar-menu' ).off().on('click', function(){

	menuEmpresas.hide();
	menuEmpresaDetalhes.hide();
	$( '.item-usuario' ).find( '.fonte-1' ).hide();
});


// ABRE MODAL INICIAL
// $.featherlight('modais/mapa.html', {
// 	otherClose: "[fecha-modal]",
// 	variant: data.cssClass || "",
// 	closeOnClick: false
// });