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
$( '#abreMenuBlocoRelevante' ).off().on('click', toggleMenuBlocoRelevante);
$( '#fechaMenuBlocoRelevante' ).off().on('click', toggleMenuBlocoRelevante);

function toggleMenuBlocoRelevante() {

	$( '#menuBlocoRelevante' ).toggleClass( 'open' );

	if( $( '#menuBlocoRelevante' ).hasClass( 'open' ) ) {

		$( '#abreMenuBlocoRelevante' ).fadeOut();

	} else {
		$( '#abreMenuBlocoRelevante' ).fadeIn();
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