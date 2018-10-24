/** Modal Popup **/
function abrirModalPopup(data) {	
	fechaInstanciasModal();	
	$.featherlight(data.url, {
		otherClose: "[fecha-modal]",
		variant: data.cssClass || "",
		closeOnClick: false,
		afterOpen: function(){
			///habilitaCheckbox();
			//locastyle.init();

			if($(".featherlight").find(".ls-tabs-nav").length) {
				locastyle.tabs.init()
			}

			if($(".featherlight").find(".slider-wrapper").length) {
				setSliders();
			}

			if( $('input[type="number"]').length ) {
				$('input[type="number"]').niceNumber({
					buttonDecrement: '-',
					buttonIncrement: "+",
					buttonPosition: 'right'
				});
			}

			if( $('.select-field').length ) {
				setSelectCustomizado();
			}
		}
	});
}

var checkMonitorarRelatorio = $("#monitorarRelatorio");
	checkMonitorarRelatorio.on("click", function(){
		var isChecked = $(this).is(":checked");
		if(isChecked) {
			abrirModalPopup({
				url: "modais/adicionar-monitoria.html"
			});
		}
	});

/** Relacionar Perfil **/ 
var btnRelacionarPerfil = $("[data-relacionar-perfil]");
btnRelacionarPerfil.on("click", function(){
	var relacionarPefil = {
		url: "modais/relacionar-perfil.html",
		cssClass: "modal-relacionar-perfil",
	};
	abrirModalPopup(relacionarPefil);
});

var btnAdicionarMonitoria = $("[data-adicionar-monitoria]");
btnAdicionarMonitoria.on("click", function () {
	var adicionarMonitoria = {
		url: "modais/adicionar-monitoria.html",
		cssClass: "modal-monitoria",
	};
	abrirModalPopup(adicionarMonitoria);
});

var btnAdicionarMonitoriaRelatorio = $("[data-adicionar-monitoria-relatorio]");
btnAdicionarMonitoriaRelatorio.on("click", function () {
	abrirModalPopup({
		url: "modais/adicionar-monitoria-relatorio.html",
		cssClass: "modal-monitoria",		
	});
});


var btnAdicionarMonitoriaRelatorio = $("[data-adicionar-monitoria-relatorio]");
btnAdicionarMonitoriaRelatorio.on("click", function () {
	var adicionarMonitoriaRelatorio = {
		url: "modais/adicionar-monitoria-relatorio.html",
		cssClass: "modal-monitoria-relatorio",
	};
	abrirModalPopup(adicionarMonitoriaRelatorio);
});


var btnDetalhesFonte = $("[data-detalhes-fontes]");
btnDetalhesFonte.on("click", function(){
	abrirModalPopup({
		url: "modais/detalhes-fontes.html",
	});
})


/** Upload de Logo **/
Dropzone.options.uploadImage = {
	acceptedFiles: "image/*",
	url: "upload/upload.html",
	dictDefaultMessage: "Arraste o arquivo para cá <br>(use imagem em alta resolução)",
	dictRemoveFile: "Remover arquivo",
	maxFiles: 1,
	parallelUploads: 1,
	maxFilesize: 1,
	clickable: "#btnUploadLoad, .zone-upload-image",
	addRemoveLinks: true,
	thumbnailWidth: "350",
	thumbnailHeight: "350",	
	init: function () {
		this.on("addedfile", function () {
			if (this.files[1] != null) {
				this.removeFile(this.files[0]);
			}
		});
	}		
};

/** Upload de Imagem de Perfil **/
Dropzone.options.uploadProfileImage = {
	acceptedFiles: "image/*",
	url: "upload/upload.html",
	dictDefaultMessage: "Seleciona sua imagem de perfil",
	dictRemoveFile: "Remover imagem",
	maxFiles: 1,
	parallelUploads: 1,
	maxFilesize: 1,
	clickable: ".zone-upload-profile-image",
	addRemoveLinks: true,
	thumbnailWidth: "130",
	thumbnailHeight: "130",	
	init: function () {
		this.on("addedfile", function () {
			if (this.files[1] != null) {
				this.removeFile(this.files[0]);
			}
		});
	}		
};


Dropzone.options.uploadLista = {
	acceptedFiles: ".txt,.csv",
	url: "upload/upload.html",
	dictDefaultMessage: "Selecione uma lista",
	dictRemoveFile: "Remover lista",
	maxFiles: 1,
	parallelUploads: 1,
	maxFilesize: 1,
	clickable: "#uploadLista",
	addRemoveLinks: true,
	init: function () {
		this.on("addedfile", function () {
			if (this.files[1] != null) {
				this.removeFile(this.files[0]);
			}
		});
	}		
};

$(".file-upload-wrapper").each(function(){
	var fileField = $(this).find(".input-file-text");
	var placeholderField = $(this).find(".text-field");
	fileField.on("change", function(){
		var selectedFile = $(this)[0].files[0].name; 
		placeholderField.val(selectedFile);
	})
});


/* Selecionar Todos os Perfis */
var btnSelecionarTodosPerfis = $("#btnSelecionarTodoPerfis");
btnSelecionarTodosPerfis.on("click", function(e){
	e.preventDefault();
	var contexto = $("#containerTodosPerfis");
	selecionarTodosCheckRadio(contexto);
});

/* Comprar Fontes */
//var btnComprarFonte = $("[data-comprar-fonte]");
$(document).on("click", "[data-comprar-fonte]", function(){
	abrirModalPopup({
		url: "modais/termo-de-uso-fonte.html",
		cssClass: "modal-termos-uso",		
	});
});

$(document).on("click", "[data-liberar-fonte]", function(){
	abrirModalPopup({
		url: "modais/confirmacao-liberacao-fontes.html",
		cssClass: "modal-confirmacao"
	});
});

/* Modal Mapa e Informações*/
var btnMapaInformacoes = $("#mapaInformacoes");
	btnMapaInformacoes.on("click", function(){
		abrirModalPopup({
			url: "modais/mapa.html",
		});
	});

/* Aceite de compra de fontes */
function termosDeUsoAceito(){
	abrirModalPopup({
		url: "modais/confirmacao-compra-fontes.html",
		cssClass: "modal-confirmacao-compra"		
	});
	return false;	
}

/* Encerra todos os modais abertos */
function fechaInstanciasModal(){
	$.featherlight.close();
}

function selecionarTodosCheckRadio(p_contexto) {
	$(p_contexto).find(':checkbox').prop("checked", true);
}

function deselecionarTodosCheckRadio(p_contexto) {
	$(p_contexto).find(':checkbox').prop("checked", false);
}

/* Listas cambiáveis */
$("#switchableArea-1, #switchableArea-2").sortable({
	connectWith: ".switchable-area"
}).disableSelection();

/* Conteúdos de abas */
$("[data-conteudo-alvo]").on("click", function(){
	var conteudoAlvo = $(this).data("conteudo-alvo");
	$(this).parents("[data-etapa]").attr("hidden", "hidden");
	$("[data-id=" + conteudoAlvo +"]").removeAttr("hidden");
});

/* Adicionar à Black list */
var btnAdicionarBlackList = $("[data-adicionar-blacklist]");
btnAdicionarBlackList.on("click", function(){
	var adicionarBlackList = {
		url: "modais/adicionar-blacklist.html"
	};
	abrirModalPopup(adicionarBlackList);
});

function adicionaListaEmBlackList(){
	alert("Método para adicionar item à Black List");
}

/* Resultado da busca */
var resultadoBuscador = $("#resultadoBuscador");
var btnPesquisa = $("[data-pesquisar-pf], [data-pesquisar-pj]");
$(btnPesquisa).on("click", function(e){
	e.preventDefault();
	resultadoBuscador.removeAttr("hidden");
	TweenMax.to(window, 1, {scrollTo: {y: resultadoBuscador[0], delay: 1.5, offsetY:70}});
});

/* Tags */
$('[data-tags]').tagify().on('add', function(e, tagName){
    console.log('added', tagName);
});

/* Selects Customizados */
 //$('.select-field').select2();



setSelectCustomizado();
function setSelectCustomizado(){
	$(".select-field").each(function(){
		var position = $(this).data("position") ||  "left";
		var choices = new Choices($(this)[0], {
			searchEnabled: false,
			loadingText: 'Carregando...',
			noResultsText: 'Nenhum resultado encontrado',
			noChoicesText: 'Nenhuma opção disponível',
			itemSelectText: 'Clique para selecionar',
			searchPlaceholderValue: "Pesquisar na lista",
		    classNames: {
		      containerOuter: 'choices' + " " + position,
		    }
		});
	});	
}


$(".btn-dropdown.dropdown-open").on("click", function(){
	alert("TEste");
	var targetItem = $(this).data("dropdown");
	$(targetItem).removeClass("dropdown-opened");
});

 
habilitarClickToggleTabelas();
function habilitarClickToggleTabelas(){
	$(".ls-table").off("click").on("click", ".toggle", function(e){
		$(this).next("tr").toggle();
		$(this).toggleClass("open");
	});
}

habilitarClickToggleLinhaConteudos();
function habilitarClickToggleLinhaConteudos() {
	$(".box-linha__cabecalho.toggle").off("click").on("click", function (e) {
		$(this).next(".box-linha__conteudo").toggle();
		$(this).toggleClass("open");
	});
}

$('[data-toggle="popover"]').on("mouseenter", function () {
	esconderPopovers();
	$(this).trigger("click");
});


$('[data-popover-link]').each(function () {
	var linkPDF = $(this).data("pdf");
	var linkDOC = $(this).data("doc");	
	$(this).popover({
		trigger: 'focus',
		html: true,
		placement: 'left',
		content: function (element) {
			var conteudo = null;
			var pop = $(this).data("popover-target");
			$.ajax({
				url: "modais/template-links-download-relatorios.html",
				dataType: "html",
				async: false,
				success: function (data) {
					conteudo = data;
				}
			});
			return conteudo;
		}
	});
});


$('[data-toggle="popover"]').each(function () {
	$(this).popover({
		trigger: 'click',
		html: true,
		placement: 'left',
		content: function (element) {
			var conteudo = null;
			var pop = $(this).data("popover-target");
			$.ajax({
				url: pop,
				dataType: "html",
				async: false,
				success: function (data) {
					conteudo = data;
				}
			});
			return conteudo;
		}
	});
});

function esconderPopovers(){
	$('[data-toggle="popover"]').popover('hide');	
}

$('[data-toggle="popover"]').on('shown.bs.popover', function () {
	habilitarClickToggleTabelas();
	habilitarClickToggleLinhaConteudos();
	//locastyle.init();
	locastyle.tabs.init();
});

/* Tabs */
$('[data-ls-module="tabs"]').on('tab:activated', function (e) {
	esconderPopovers();
	//if (!data) return e.preventDefault();	
});

// PLUGIN INPUT NUMERICO
$('input[type="number"]').niceNumber();

// SLIDER / RANGE
$('.slider-input').jRange({
    from: 0,
    to: 10,
    step: 1,
    scale: [0,1,2,3,4,5,6,7,8,9,10],
	width: 500,
    showLabels: false,
});

$('.slider-input').each(function(){
	if( $(this).hasClass('disabled') ) {
		$(this).jRange('disable');
	}
});

/* Slider */
function setSliders(){
	if($(".content-slider").length) {
		$(".content-slider").each(function(){
			$(this).slick({
				asNavFor: '.content-slider-nav',
				infinite: false
			});
		});	
	}

	$('.content-slider-nav').slick({
	  slidesToShow: 1,
	  slidesToScroll: 1,
	  asNavFor: '.content-slider',
	  dots: false,
	  centerMode: false,
	  focusOnSelect: true,
	  arrows: false,
	  infinite: false
	});	
}

/* Adicionar livro */
var btnAreaAdicionarLivro = $("#btAreaAdicionarLivro");
var areaAdicionarLivro = $("#areaAdicionarLivro");
var	areaListaLivros = $("#areaListaLivros");
	btnAreaAdicionarLivro.on("click", function(){
		areaListaLivros.hide();
		areaAdicionarLivro.show();
	});

var btnAdicionarNovoLivro = $("#btnAdicionarNovoLivro");	
	btnAdicionarNovoLivro.on("click", function(){
		areaAdicionarLivro.hide();
		areaListaLivros.show();		
		alert("Chamada de função para adicionar novo livro");
	});

var areaLivrosAcessoRestrito = $("#areaAcessoRestrito");
var tipoAcesso = $("[name='tipo-acesso']");	
	tipoAcesso.on("change", function(){
		var valorSelecionado = $(this).val();
		if (valorSelecionado == "acessoRestrito") {
			areaLivrosAcessoRestrito.removeClass("hidden-area");
		} else {
			areaLivrosAcessoRestrito.addClass("hidden-area");
		}		
	});


/* Custom Scrollbar */	
var contentScrollArea = $(".content-area");
if(contentScrollArea.length) {
	$(contentScrollArea).mCustomScrollbar({
		scrollbarPosition: "outside",
		autoDraggerLength: false
	});
}

