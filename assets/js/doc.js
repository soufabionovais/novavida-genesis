// MENU SIDEBAR
function toggleSidebar() {

	$( '#docWrapper' ).toggleClass( 'open' );

	if( $( '#docWrapper' ).hasClass( 'open' ) ) {

		$( '#sidebarMenu' ).find( '.btn-fechar' ).fadeIn();

	} else {
		$( '#sidebarMenu' ).find( '.btn-fechar' ).fadeOut();
	}
}

$( '#sidebarMenu' ).find( '.btn' ).off().on('click', function(){

	var tipoConteudo = $( this ).data( 'conteudo' );

	$( '.doc-sidebar' ).hide();
	$( '.' + tipoConteudo + '-sidebar' ).show();
	
	$( '#sidebarMenu' ).find( '.btn' ).removeClass( 'atual' );
	$( '#sidebarMenu' ).find( '.btn-' + tipoConteudo ).addClass( 'atual' );

	if( tipoConteudo == 'impressora' ) {

		$( '#impressoraSidebar' ).toggle();

	} else if( !$( '#docWrapper' ).hasClass( 'open' ) || tipoConteudo == 'fechar' ) {

		toggleSidebar();
	}

});

// BLOCO RELEVANTE
$( '.btn-bloco-relevante' ).off().on('click', toggleMenuBlocoRelevante);
$( '.menu-bloco-relevante .btn-fechar' ).off().on('click', toggleMenuBlocoRelevante);

function toggleMenuBlocoRelevante() {
	//$(".menu-bloco-relevante").removeClass("open");
	$(this).parents(".bloco-relevante").find( '.menu-bloco-relevante' ).toggleClass( 'open' );

	if( $(this).parents(".bloco-relevante").find( '.menu-bloco-relevante' ).hasClass( 'open' ) ) {

		$(this).parents(".bloco-relevante").find( '.btn-bloco-relevante' ).fadeOut();

	} else {
		$(this).parents(".bloco-relevante").find( '.btn-bloco-relevante' ).fadeIn();
	}
}

// ADICIONAR MONITORIA
var btnAdicionarMonitoria = $("[data-adicionar-monitoria]");
btnAdicionarMonitoria.on("click", function(){
	var adicionarMonitoria = {
		url: "modais/adicionar-monitoria.html"
	};
	abrirModalPopup(adicionarMonitoria);
});

// HEADER MONITORIA - MENU BUSCA
$( '#menuBusca' ).find( '.click-wrapper' ).off().on('click', function(){

	$( '#menuBusca' ).find( '.menu-busca' ).fadeToggle();
});

function adicionarMonitoria() {
	$( '#semMonitoria' ).hide();
	$( '#comMonitoria' ).show();
}