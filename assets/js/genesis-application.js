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