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

	if( !$( '#docWrapper' ).hasClass( 'open' ) || tipoConteudo == 'fechar' ) {

		toggleSidebar();
	}

});