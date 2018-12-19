// MENU SIDEBAR
function toggleSidebar() {

	$( '#docWrapper' ).toggleClass( 'open' );
	$("html").toggleClass("no-scroll");

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

		$( '#impressoraSidebar' ).fadeToggle();

	} else if( !$( '#docWrapper' ).hasClass( 'open' ) || tipoConteudo == 'fechar' ) {

		toggleSidebar();

	}

	$(".doc-sidebar").mCustomScrollbar();	

});

$("#btnRetornar").on("click", function(e){
	e.preventDefault();
	window.history.go(-1);
});

// BLOCO RELEVANTE
$( '.btn-bloco-relevante' ).off().on('click', function(event){

	hideBlocosRelevantes();
	toggleMenuBlocoRelevante();
});
$( '.menu-bloco-relevante .btn-fechar' ).off().on('click', toggleMenuBlocoRelevante);

function toggleMenuBlocoRelevante() {
	//console.log(event);
	$(event.target).parents(".bloco-relevante").find( '.menu-bloco-relevante' ).toggleClass( 'open' );
	if( $(event.target).parents(".bloco-relevante").find( '.menu-bloco-relevante' ).hasClass( 'open' ) ) {
		$(event.target).parents(".bloco-relevante").find( '.btn-bloco-relevante' ).fadeOut();
	} else {
		$(event.target).parents(".bloco-relevante").find( '.btn-bloco-relevante' ).fadeIn();
	}
}

function hideBlocosRelevantes() {
	$(".btn-bloco-relevante").show();
	$(".menu-bloco-relevante").removeClass("open");
}

$(".menu-bloco-relevante-opcoes").on("click", toggleNivelRelevancia);
function toggleNivelRelevancia(event){
	event.stopPropagation();
	$(".menu-bloco-relevante-opcoes .btn-opcoes").removeClass("selected");
	$(event.target).addClass("selected");
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
	$( '#btnCompararMonitoria' ).fadeIn().off('click').on('click', compararMonitoria);
}

function voltarListaMonitoria() {
	$( '#comMonitoria' ).show();
	$( '#monitoriaComparacao' ).hide();
	$( '#btnVoltarMonitoria' ).hide();
	$( '#btnCompararMonitoria' ).fadeIn().off('click').on('click', compararMonitoria);
}

function compararMonitoria() {

	var temItemSelecionado = false;

	$( '#comMonitoria' ).find('input[type=checkbox]').each(function(){
		if( $(this).prop('checked') ) {
			temItemSelecionado = true;
		}
	});

	if( temItemSelecionado ) {
		$( '#comMonitoria' ).hide();
		$( '#monitoriaComparacao' ).show();
		$( '#btnCompararMonitoria' ).hide();
		$( '#btnVoltarMonitoria' ).fadeIn().off('click').on('click', voltarListaMonitoria);
	}
}