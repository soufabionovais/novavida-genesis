habilitarSelectField();
habilitarMascarasCampos();

function habilitarSelectField(){
	$('.select-field').each(function(){
		var hiddenSearchField = $(this).data("search-field-hidden") ? "hidden-search" : "";
		var fieldPlaceholder = $(this).data("placeholder") || "Buscar";
		var searchFieldPlaceholder = $(this).data("search-placeholder") || "Filtrar";


		$(this).fastselect({
			elementClass: 'fstElement '+hiddenSearchField+'',
			placeholder: fieldPlaceholder,
			searchPlaceholder: searchFieldPlaceholder,
			noResultsText: 'Sem resultados',
			userOptionPrefix: 'Adicionar ',
			onItemSelect: function(element, data){

			}
		});			
	});
}

var toggleUserData = $("#toggleUserInfo");
	toggleUserData.on("click", function(e){
		e.preventDefault();
		e.stopPropagation();
		$("#notificationsList").removeClass("open");
		$(this).parents(".user-info").toggleClass("open");
		return false;
	});

/* NOTIFICAÇÕES */
$("#notificationsList").on("click", ".js-btn-remove", function(){
	$(this).parents(".notification").remove();
	var totalNotifications = $("#notificationsList").find(".notification").length;
	if(totalNotifications == 0) {
		$("#notificationsList").removeClass("open");
		$("#notificationsList").append("<p class='empty'>Nenhuma notificação</p>")
	}	
});

$("#toggleNotification").on("click", function(){
	$(".user-info").removeClass("open");
	$("#notificationsList").toggleClass("open");
});


/* Dropdown Editar Perfil */
var btnToggleEditarPerfil = $("#toggleEditarPerfil");
btnToggleEditarPerfil.on("click", toggleDropdownEditarPerfil);

function toggleDropdownEditarPerfil(){
	$(event.target).parents(".dropdown").toggleClass("open");
	$("#listaEditarPerfil").toggleClass("open");
}


/* Selecionar Todos os Perfis Configurações */
var btnSelecionarTodosPerfis = $("#btnSelecionarTodoPerfis");
btnSelecionarTodosPerfis.on("click", function(e){
	e.preventDefault();	
	var initialText = $(this).data("initial-text");
	var toggleText = $(this).data("toggle-text");
	var contexto = $("#containerTodosPerfis");
	var isNotTodasSelecionadas = !$(this).hasClass("todas-selecionadas");
	if(isNotTodasSelecionadas) {
		$(this).addClass("todas-selecionadas").text(toggleText);
		selecionarTodosCheckbox(contexto);		
	} else {
		$(this).removeClass("todas-selecionadas").text(initialText);
		deselecionarTodosCheckbox(contexto);
	}
});

function selecionarTodosCheckbox(p_contexto) {
	$(p_contexto).find(":checkbox").prop("checked", true);
}

function deselecionarTodosCheckbox(p_contexto) {
	$(p_contexto).find(":checkbox").prop("checked", false);
}

/* Botões agrupados */
$("[data-grouped-buttons]").on("click", ".btn", function(e){
	e.preventDefault();
	e.stopPropagation();
	$(this).parents("[data-grouped-buttons]").find(".btn").removeClass("active");
	$(this).addClass("active");
});

/* Selecinar todos os checkboxes por  grupo */
$(":checkbox[data-toggle-check-group]").on("change", function(){
	var toggleGroup = $(this).data("toggle-check-group");
	var toggleChecked = $(this).is(":checked");
	if(toggleChecked) {
		$(":checkbox[data-toggle-check-target="+toggleGroup+"]").prop("checked", true);		
	} else {
		$(":checkbox[data-toggle-check-target="+toggleGroup+"]").prop("checked", false);		
	};	
});

$(":checkbox[data-toggle-check-target]").on("change", function(){
	var toggleGroup = $(this).data("toggle-check-target");
	var toggleGroupSelected = $(":checkbox[data-toggle-check-target]").is(":checked");
	if(!toggleGroupSelected) {
		$(":checkbox[data-toggle-check-group="+toggleGroup+"]").prop("checked", false);		
	}
});

/* Acordeon */
if($(".accordion-wrapper").length) {
	$(".accordion-wrapper").faccordion({
		// afterOpen: callbackOpen,
		// afterClose: callbackClose,
		openSpeed: 500,
		closeSpeed: 700,
	});
}

/* Adicionar livro */
var btnAreaAdicionarLivro = $("#btAreaAdicionarLivro");
var areaAdicionarLivro = $("#areaAdicionarLivro");
var	areaListaLivros = $("#areaListaLivros");
	btnAreaAdicionarLivro.on("click", function(){
		areaListaLivros.attr("hidden", "hidden");
		areaAdicionarLivro.removeAttr("hidden");
	});


var btnAdicionarNovoLivro = $("#btnAdicionarNovoLivro");	
	btnAdicionarNovoLivro.on("click", function(){
		areaAdicionarLivro.attr("hidden", "hidden");
		areaListaLivros.removeAttr("hidden");
		alert("Chamada de função para adicionar novo livro");
	});


/* Selecionar tipo de acesso*/
var areaLivrosAcessoRestrito = $("#areaAcessoRestrito");
var tipoAcesso = $("[name='tipo-acesso']");	
	tipoAcesso.on("change", function(){
		var valorSelecionado = $(this).val();
		if (valorSelecionado == "acessoRestrito") {
			areaLivrosAcessoRestrito.removeAttr("hidden");
		} else {
			areaLivrosAcessoRestrito.attr("hidden", "hidden");
		}		
	});	

/* Resultado da busca */
var resultadoBuscador = $("#resultadoBuscador");
var btnPesquisa = $("#btnPesquisarPF, #btnPesquisarPJ");
$(btnPesquisa).off("click").on("click", function(e){
	e.preventDefault();
	resultadoBuscador.removeAttr("hidden");
	TweenMax.to(window, 1, {scrollTo: {y: resultadoBuscador[0], delay: 1.5, offsetY:70}});
});	


/* Adicionar à Black list */
var btnAdicionarBlackList = $('[data-action="adicionarBlackList"]');
btnAdicionarBlackList.on("click", function(){
	abrirModalPopup({
		url: "modais/adicionar-blacklist.html"
	});
});


/* MODAIS */
/* Modal Mapa e Informações*/
var btnMapaInformacoes = $("#mapaInformacoes");
	btnMapaInformacoes.on("click", function(e){
		e.preventDefault();
		abrirModalPopup({
			url: "modais/mapa.html",
		});
	});
/* Comprar Fontes */
$("body").on("click", '[data-action="comprarFonte"]', function(){
	abrirModalPopup({
		url: "modais/termo-de-uso-fonte.html",
		cssClass: "modal-termos-uso",		
	});
});	

var btnLiberarFonte = $('[data-action="liberarFonte"]');
btnLiberarFonte.on("click", function(){
	abrirModalPopup({
		url: "modais/confirmacao-liberacao-fontes.html",
		cssClass: "modal-confirmacao"
	});
});

var btnDetalhesFonte = $("[data-action='detalhesFontes']");
btnDetalhesFonte.on("click", function(){
	abrirModalPopup({
		url: "modais/detalhes-fontes.html",
	});
});

var btnAdicionarMonitoriaRelatorio = $("[data-action='adicionarMonitoriaRelatorio']");
btnAdicionarMonitoriaRelatorio.on("click", function () {
	abrirModalPopup({
		url: "modais/adicionar-monitoria-relatorio.html",
		cssClass: "modal-monitoria",		
	});
});

var btnRelacionarPerfil = $("[data-action='relacionarPerfil']");
btnRelacionarPerfil.on("click", function () {
	abrirModalPopup({
		url: "modais/relacionar-perfil.html",
		cssClass: "modal-relacionar-perfil",		
	});
});

var btnAdicionarMonitoriaRelatorio = $("[data-action='adicionarMonitoria']");
btnAdicionarMonitoriaRelatorio.on("click", function () {
	abrirModalPopup({
		url: "modais/adicionar-monitoria.html",
		cssClass: "modal-monitoria",		
	});
});

var checkMonitorarRelatorio = $("#monitorarRelatorio");
checkMonitorarRelatorio.on("click", function(){
	var isChecked = $(this).is(":checked");
	if(isChecked) {
		abrirModalPopup({
			url: "modais/adicionar-monitoria.html"
		});
	}
});

/* Aceite de compra de fontes */
function termosDeUsoAceito(){
	abrirModalPopup({
		url: "modais/confirmacao-compra-fontes.html",
		cssClass: "modal-confirmacao-compra"		
	});
	return false;	
}

function adicionaListaEmBlackList(){
	alert("Método para adicionar item à Black List");
}


function liberarAcessoFonte(){
	alert("Método Liberar Acesso Fonte");
}


/* ABRIR MODAL POPUP */
function abrirModalPopup(data) {	
	fechaInstanciasModal();	
	$.featherlight(data.url, {
		otherClose: "[data-fecha-modal]",
		variant: data.cssClass || "",
		closeOnClick: false,
		afterOpen: function(){

			if($(".select-field").length) {	
				habilitarSelectField();				
			}

			if($('input[type="number"]').length) {
				habilitaInputNumber();
			}

			if($(".tabs-group").length) {
				habilitarTabs();
			}

			habilitaSliders();

			habilitarMascarasCampos();

		}
	});
}

/* Encerra todos os modais abertos */
function fechaInstanciasModal(){
	$.featherlight.close();
}

habilitarTabs();


var loading = 'Carregando...';
var state = {
  isFetching: false,
  canFetch: true
}

tippy('.popup-detalhes-processamento', {
  content: loading,
  delay: [0, 0],
  arrow: true,
  duration: 100,
  animation: 'scale',
  interactive: true,
  placement: "right",
  theme: "poppover-relatorios",
  onShow: function (tip) {
  	if (state.isFetching || !state.canFetch) {
  		return
  	}
    state.isFetching = true;
    state.canFetch = false; 	
  	$.ajax({
  		url: "modais/relatorios-processamento.html",
  		dataType: "html",
  		success: function(data){
  			tip.setContent(data);
  			habilitarTabs();
			$(".accordion-wrapper").faccordion({
				openSpeed: 500,
				closeSpeed: 700
			});  
			state.isFetching = false;
			//enableContentAreaScroll();
  		}
  	});
  },
	onHidden: function(tip) {
		state.canFetch = true
		tip.setContent(loading)
	},  
  //showOnInit: true
});

tippy('.popup-detalhes-relatorios-pendentes', {
  content: loading,
  delay: [0, 0],
  arrow: true,
  duration: 100,
  animation: 'scale',
  interactive: true,
  placement: "right",
theme: "poppover-relatorios",  
  onShow: function(tip) {
  	if (state.isFetching || !state.canFetch) {
  		return
  	}
    state.isFetching = true;
    state.canFetch = false; 		
  	$.ajax({
  		url: "modais/relatorios-pendentes-analise.html",
  		dataType: "html",
  		success: function(data){
  			tip.setContent(data);
  			habilitarTabs();
			$(".accordion-wrapper").faccordion({
				openSpeed: 500,
				closeSpeed: 700,
			});  
			state.isFetching = false;	
			//enableContentAreaScroll();	
  		}
  	});
  },
	onHidden: function(tip) {
		state.canFetch = true
		tip.setContent(loading)
	},    
  //showOnInit: true
});


// var inlineTooltip = document.querySelectorAll("[data-tippy]");
// 	console.log(inlineTooltip);
// 	inlineTooltip.each(function(element, index){
		
// 		var message = element.dataset.tippy;
// 		var position = element.dataset.position || "top";

// 		tippy(inlineTooltip[index], {
// 			content: message,
// 			theme: "inline-tooltip",
// 			placement: position,
// 			arrow: true,
// 			multiple: true
// 		});
// 	});	





var template = $('.tpl-popover-links').html();
var buttonsDownload = document.querySelectorAll(".btn-exportar");
tippy(buttonsDownload, {
  content: template,
  interactive: true,
  theme: "export-reports",
  placement: "left",
  onShow: function() {

  },
  onHide: function() {

  },
  //showOnInit: true
})

/* Barras Customizadas */
var contentScrollArea = $(".content-area");
if(contentScrollArea.length) {
	$(contentScrollArea).mCustomScrollbar({
		scrollbarPosition: "outside",
		autoDraggerLength: false
	});
}

var notificationsList = $(".notifications-list");
if(notificationsList.length) {
	notificationsList.mCustomScrollbar({
		advanced:{ updateOnSelectorChange: ".notifications-list" }
	});
}

var mainMenu = $(".main-menu");
if(mainMenu.length) {
	mainMenu.mCustomScrollbar({
		scrollbarPosition: "outside",
		autoDraggerLength: false
	});
}


function enableContentAreaScroll(){
	if($(".content-area-scroll").length) {
		$(".content-area-scroll").mCustomScrollbar();
	}
}


/* UPLOADS */
$(".file-upload-wrapper").each(function(){
	var fileField = $(this).find(".input-file-text");
	var placeholderField = $(this).find(".text-field");
	fileField.on("change", function(){
		var selectedFile = $(this)[0].files[0].name; 
		placeholderField.val(selectedFile);
	})
});


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
	dictDefaultMessage: "Selecione sua imagem de perfil",
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


/* CAMPOS CUSTOMIZADOS FORMULÁRIOS */
habilitaInputNumber();
function habilitaInputNumber(){
	$('input[type="number"]').niceNumber();
}   

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

/* ABAS */
$("[data-conteudo-alvo]").on("click", function(){
	var conteudoAlvo = $(this).data("conteudo-alvo");
	$(this).parents("[data-etapa]").attr("hidden", "hidden");
	$("[data-id=" + conteudoAlvo +"]").removeAttr("hidden");
});

/* TAGS */
$('#tagsField').tagsInput({
        'width': 'auto',
        'height':'40px',
        'defaultText':'Adicionar termo',
        'placeholderColor': "#a6a6c4",
        onChange: function(elem, elem_tags)
        {
          var languages = ['php','ruby','javascript'];
          $('.tag', elem_tags).each(function()
          {
            if($(this).text().search(new RegExp('\\b(' + languages.join('|') + ')\\b')) >= 0)
              $(this).css('background-color', 'yellow');
          });
        }
      });


/* SIDEBAR */
var toggleMenuButton = $("#toggleSidebar");
var mainMenuSidebar = $("#sidebar");
$("html").addClass("is-sidebar-menu-open");
toggleMenuButton.on("click", function(){
	$("html").toggleClass("is-sidebar-menu-open");
	var isMenuOpen = $("html").hasClass("is-sidebar-menu-open");
	toggleLogo(isMenuOpen);
});

var logoNovaVida = $("#logo");
var smallLogo = logoNovaVida.data("small-logo");
var largeLogo = logoNovaVida.data("large-logo");
function toggleLogo(menuIsOpen) {
	logoNovaVida.hide();
	if(menuIsOpen) {
		logoNovaVida.attr("src", largeLogo);
	} else {
		logoNovaVida.attr("src", smallLogo);
	}
	logoNovaVida.delay(200).fadeIn();
}


function setMenuTooltip(){
  $(".main-menu a").each(function(){
  	var tooltip = $(this).data("tooltip");
  	$(this).attr("data-tippy", tooltip);
  });	
}

function removeMenuTooltip(){
  $(".main-menu a").each(function(){
  	$(this).removeAttr("data-tippy");
  });		
}



/* SELECIONAR TAB POR HASH */
$(window).on('load', function() {
	if(window.location.hash) {
		var hash = window.location.hash;
		setTabOnHashChange(hash);
	}
});

function setTabOnHashChange(tab) {
	if($(".tab").length) {
		$(".tab a[href='"+tab+"']").click()
	}
}


/* Slider */
habilitaSliders();
function habilitaSliders(){
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


/* Listas cambiáveis */
$("#switchableArea-1, #switchableArea-2").sortable({
	connectWith: ".switchable-area"
}).disableSelection();

$("#switchableArea-2").on("click", ".btn-remover", function(e){
	e.preventDefault();
	$(this).parents(".user-data").remove();
});


/* MÁSCARAS */

function habilitarMascarasCampos(){

	$('[data-mask="data"]').mask('00/00/0000');
	$('[data-mask="cpf"]').mask('000.000.000-00');
	$('[data-mask="cnpj"]').mask('00.000.000/0000-00');

	var numeroTelefoneFlexivel = function (val) {
	  return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
	},
	spOptions = {
	  onKeyPress: function(val, e, field, options) {
	      field.mask(numeroTelefoneFlexivel.apply({}, arguments), options);
	    }
	};

	$('[data-mask="fone-com-ddd"]').mask(numeroTelefoneFlexivel, spOptions);    
}


// $(".main-menu a").hover(function(){
// 	var offsetTop = $(this).offset().top;
// 	var menuItemText = $(this).attr("title");
// 	if(!$(".tooltip-menu-item").length) {
// 		$("<span class='tooltip-menu-item'>"+menuItemText+"</span>").appendTo("body").hide();
// 	} else {
// 		$(".tooltip-menu-item").html(menuItemText);
// 	}
// 	$(".tooltip-menu-item").css({
// 		top: offsetTop - ($(".tooltip-menu-item").height() / 2),
// 		position: "absolute"
// 	}).fadeIn();
// }, function(){
// 	$(".tooltip-menu-item").fadeOut();
// });



