function toggleSidebar() {

	$( '#docWrapper' ).toggleClass( 'open' );
}

$( '#sidebarMenu' ).find( '.btn' ).off().on('click', function(){

	var tipoConteudo = $( this ).data( 'conteudo' );

	toggleSidebar();
});