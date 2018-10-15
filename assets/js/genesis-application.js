/** Modal Popup **/
function abrirModalPopup(data) {	
	$.featherlight(data.url, {
		otherClose: "[fecha-modal]",
		variant: data.cssClass || "",
		closeOnClick: false,
		afterOpen: function(){
			///habilitaCheckbox();
		}
	});
}

/** Relacionar Perfil **/ 
var btnRelacionarPerfil = $("[data-relacionar-perfil]");
btnRelacionarPerfil.on("click", function(){
	var relacionarPefil = {
		url: "modais/relacionar-perfil.html",
		cssClass: "modal-relacionar-perfil zoomIn",
	};
	abrirModalPopup(relacionarPefil);
});

/** Upload de Imagem **/
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

/* Selecionar Todos os Perfis */
var btnSelecionarTodosPerfis = $("#btnSelecionarTodoPerfis");
btnSelecionarTodosPerfis.on("click", function(e){
	e.preventDefault();
	var contexto = $("#containerTodosPerfis");
	selecionarTodosCheckRadio(contexto);
});

/* Comprar Fontes */
var btnComprarFonte = $("[data-comprar-fonte]");
btnComprarFonte.on("click", function(){
	var comprarFonte = {
		url: "modais/termo-de-uso-fonte.html",
		cssClass: "modal-termos-uso",
	};
	abrirModalPopup(comprarFonte);
});

/* Aceite de compra de fontes */
function termosDeUsoAceito(){
	fechaInstanciasModal();
	var confirmacaoCompra = {
		url: "modais/confirmacao-compra-fontes.html",
		cssClass: "modal-confirmacao-compra",
	};
	abrirModalPopup(confirmacaoCompra);
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



$('[data-tags]').tagify().on('add', function(e, tagName){
    console.log('added', tagName);
});


 $('.select-field').select2({
	
 });