<?php include("includes/head.php"); ?>
<body>
	
<?php include ("includes/header.php"); ?>
	
<div class="main-wrap">

	<?php include("includes/sidebar.php"); ?>

	<main class="main-content">
		<header class="page-header">
			<ul class="tabs-group" data-tabs-group="tabsGroup">
				<li class="tab active"><a href="#templates">Templates</a></li>
				<li class="tab"><a href="#perfilRelatorios">Perfil de Relatório</a></li>
				<li class="tab"><a href="#fontes">Fontes</a></li>
			</ul>
		</header>	

		<div class="breadcrumb-container">
			<ol>
				<li><a href="#">Configurações</a></li>
				<li class="active"><a href="#">Templates</a></li>
			</ol>
		</div>

		<div class="tabs-content-wrapper" data-tabs-target-group="tabsGroup">
			<div class="tab-content active" id="templates">
				<div class="boxes-group" data-id="templates-etapa-1" data-etapa>
					<div class="box-content box-content-filters">
						<div class="filters-wrapper">
							<div class="row d-flex fluid justify-content-between no-gutters">
								<div class="col-md-7">
									<label class="form-label has-icon nv-icon-zoom">
										<input type="text" class="input-text" placeholder="Pesquisar por termo">
									</label>									
								</div>
								<div class="col-md-3">
									<button class="btn secondary outlined fluid" data-conteudo-alvo="templates-etapa-2">Adicionar</button>			
								</div>
							</div>
						</div>
					</div>
					<div class="box-content">
						<div class="data-container" data-gutter="2.5">
							<div class="data-header">
								<div class="column-9">Template</div>
								<div class="column-3">Ações</div>
							</div>
							<div class="data-item">
								<div class="column-9">
									<p>Nome do template 1</p>
								</div>
								<div class="column-3 right-aligned">
									<button class="btn primary small fluid" data-action="relacionarPerfil">Relacionar perfil</button>
								</div>				
							</div>
							<div class="data-item">
								<div class="column-9">
									<p>Nome do template 1</p>
								</div>
								<div class="column-3 right-aligned">
									<button class="btn primary small fluid" data-action="relacionarPerfil">Relacionar perfil</button>
								</div>				
							</div>						
						</div>
						<?php include("includes/pagination.php"); ?>
					</div>					
				</div>

				<div class="boxes-group" data-id="templates-etapa-2" data-etapa hidden>
					<div class="box-content">
						<div class="row">
							<div class="col-md-6">
								<label class="form-label">
									<input type="text" class="input-text" placeholder="Escolha o nome">
								</label>
							</div>
							<div class="col-md-6">
								<label class="form-label">
									<input type="text" class="input-text" placeholder="Texto marca d'água">
								</label>	
							</div>
							<div class="col-md-12">
								<label class="form-label">
									<input type="text" class="input-text inverted" placeholder="Termos" id="tagsField">
								</label>
							</div>														
						</div>
					</div>
					<div class="box-content grey-bg area-upload">
						<div class="row">
                          <div class="col">
                            <div class="conteudo-upload">
                              <p>Upload de arquivo para Logotipo Oficial</p>
                              <button class="btn secondary outlined large dz-clickable" id="btnUploadLoad">Selecionar arquivo</button>
                              <small>Tamanho máximo: 3MB | Extensões permitidas: .jpg, .png ou .gif</small>
                            </div>	
                          </div>
                          <div class="col">
                              <form action="upload/upload.html" class="dropzone zone-upload-image dz-clickable" id="uploadImage"><div class="dz-default dz-message"><span>Arraste o arquivo para cá <br>(use imagem em alta resolução)</span></div></form>	
                          </div>
                        </div>
					</div>
					<div class="box-content right-aligned">
						<div class="inline-buttons-wrapper">
							<button class="btn secondary outlined" data-conteudo-alvo="templates-etapa-1">Cancelar</button>
							<button class="btn primary" data-conteudo-alvo="templates-etapa-1">Salvar</button>
						</div>
					</div>
				</div>
			</div>
			<div class="tab-content" id="perfilRelatorios">
				<div class="boxes-group" data-id="perfil-relatorios-1" data-etapa>
					<div class="box-content box-content-filters">
						<div class="filters-wrapper">
							<div class="row d-flex fluid justify-content-between no-gutters">
								<div class="col-md-5">
									<label class="form-label has-icon nv-icon-zoom">
										<input type="text" class="input-text" placeholder="Pesquisar por termo">
									</label>									
								</div>
								<div class="col-md-3">
									<label class="form-label">
										<input type="text" class="select-field" data-url="data/fontes.json" name="fontes" data-placeholder="Fontes utilizadas" data-search-placeholder="Buscar livro" />	
									</label>									
								</div>								
								<div class="col-md-3">
									<button class="btn secondary outlined fluid" data-conteudo-alvo="perfil-relatorios-2">Adicionar</button>			
								</div>
							</div>
						</div>
					</div>	
					<div class="box-content">
						<div class="data-container" data-gutter="2.5">
							<div class="data-header">
								<div class="column-2">Versão</div>
								<div class="column-7">Perfil</div>
								<div class="column-3">Ações</div>
							</div>
							<div class="data-item">
								<div class="column-2">
									<p class="highlight-text">V1</p>
								</div>
								<div class="column-7">
									Nome do Perfil
								</div>
								<div class="column-3">
									<button class="btn primary small fluid" data-action="relacionarPerfil">Duplicar e Customizar</button>
								</div>												
							</div>
							<div class="data-item">
								<div class="column-2">
									<p class="highlight-text">V1</p>
								</div>
								<div class="column-7">
									Nome do Perfil
								</div>
								<div class="column-3">
									<button class="btn primary small fluid" data-action="relacionarPerfil">Duplicar e Customizar</button>
								</div>												
							</div>							
					
						</div>
						<?php include("includes/pagination.php"); ?>
					</div>
				</div>
				<div class="boxes-group" data-id="perfil-relatorios-2" data-etapa hidden>
					<div class="box-content">
						<div class="row">
							<div class="col-md-6">
								<h3 class="box-content-title">
									Novo Perfil
								</h3>								
							</div>
							<div class="col-md-6">
								<div class="breadcrumb-steps">
									<button class="breadcrumb-item active" data-conteudo-alvo="perfil-relatorios-2">Configurações gerais</button>
									<button class="breadcrumb-item" data-conteudo-alvo="perfil-relatorios-3">Configurações de fontes</button>
								</div>
							</div>
						</div>
					</div>					
					<div class="box-content">
						<div class="filters-wrapper">
							<div class="row d-flex fluid justify-content-between no-gutters">
								<div class="col-md-5">
									<label class="form-label has-icon nv-icon-zoom">
										<input type="text" class="input-text" placeholder="Pesquisar por nome">
									</label>									
								</div>
								<div class="col-md-3">
									<label class="form-label">
										<input type="text" class="select-field" data-url="data/livros.json" name="livros" data-placeholder="Livros" data-search-placeholder="Buscar livro" />	
									</label>									
								</div>								
								<div class="col-md-3">
									<button class="btn secondary outlined fluid">Pré-visualizar</button>			
								</div>
							</div>
						</div>						
					</div>	
					<div class="box-content grey-bg">
						<p class="permissao-acesso">Permissão de acesso: <a href="#" class="highlight-text" id="btnSelecionarTodoPerfis" data-initial-text="Marcar todas" data-toggle-text="Desmarcar todas">Marcar todas</a></p>
						<div class="accordion-wrapper" id="containerTodosPerfis">
							<div class="accordion-item">
								<div class="accordion-title">
									<div class="accordion-title-content">
										<div class="icon">
											<span class="radio-check-field">
												<input type="checkbox" data-toggle-check-group="grupo-1">
												<label></label>
											</span>
										</div>
										<h3 class="accordion-title-text">Grupo 1</h3>
										<div class="action">
										</div>
									</div>
								</div>
								<div class="accordion-content blue-gradient-bg">
									<div class="inverted" data-gutter="0.2">
										<div class="data-item">
											<span class="radio-check-field">
												<input type="checkbox" data-toggle-check-target="grupo-1">
												<label></label>
											</span>		
											<div class="user-data">
											  <img src="img/avatar-usuario.png" alt="Nome do usuário" class="avatar small">
											  <div class="user-data-info">
											    <p class="user-data-header">Alexandre Loes Paz</p>
											  </div>
											</div>	
										</div>
										<div class="data-item">
											<span class="radio-check-field">
												<input type="checkbox" data-toggle-check-target="grupo-1">
												<label></label>
											</span>		
											<div class="user-data">
											  <img src="img/avatar-usuario.png" alt="Nome do usuário" class="avatar small">
											  <div class="user-data-info">
											    <p class="user-data-header">Alexandre Loes Paz</p>
											  </div>
											</div>	
										</div>									
									</div>
								</div>
							</div>

							<div class="accordion-item">
								<div class="accordion-title">
									<div class="accordion-title-content">
										<div class="icon">
											<span class="radio-check-field">
												<input type="checkbox" data-toggle-check-group="grupo-2">
												<label></label>
											</span>
										</div>
										<h3 class="accordion-title-text">Grupo 2</h3>
										<div class="action">
										</div>
									</div>
								</div>
								<div class="accordion-content blue-gradient-bg">
									<div class="inverted" data-gutter="0.2">
										<div class="data-item">
											<span class="radio-check-field">
												<input type="checkbox" data-toggle-check-target="grupo-2">
												<label></label>
											</span>		
											<div class="user-data">
											  <img src="img/avatar-usuario.png" alt="Nome do usuário" class="avatar small">
											  <div class="user-data-info">
											    <p class="user-data-header">Alexandre Loes Paz</p>
											  </div>
											</div>	
										</div>
										<div class="data-item">
											<span class="radio-check-field">
												<input type="checkbox" data-toggle-check-target="grupo-2">
												<label></label>
											</span>		
											<div class="user-data">
											  <img src="img/avatar-usuario.png" alt="Nome do usuário" class="avatar small">
											  <div class="user-data-info">
											    <p class="user-data-header">Alexandre Loes Paz</p>
											  </div>
											</div>	
										</div>									
									</div>
								</div>
							</div>
						</div>						
					</div>	
					<div class="box-content right-aligned">
						<div class="inline-buttons-wrapper">
							<button class="btn secondary outlined" data-conteudo-alvo="perfil-relatorios-1">Cancelar</button>
							<button class="btn primary" data-conteudo-alvo="perfil-relatorios-3">Avançar</button>
						</div>
					</div>			
				</div>
				<div class="boxes-group" data-id="perfil-relatorios-3" data-etapa hidden>
					<div class="box-content">
						<div class="row">
							<div class="col-md-6">
								<h3 class="box-content-title">
									Novo Perfil
								</h3>								
							</div>
							<div class="col-md-6">
								<div class="breadcrumb-steps">
									<button class="breadcrumb-item" data-conteudo-alvo="perfil-relatorios-2">Configurações gerais</button>
									<button class="breadcrumb-item active" data-conteudo-alvo="perfil-relatorios-3">Configurações de fontes</button>
								</div>
							</div>
						</div>
					</div>					
					<div class="box-content grey-bg">
						<div class="row">
							<div class="col">
								<div class="relacionar-listas medium-grey-bg">
									<label class="form-label has-icon nv-icon-zoom">
										<input type="text" class="input-text" placeholder="Pesquisar por nome">
									</label>
									<div class="switchable-area switchable-area-1" id="switchableArea-1">
										<div class="user-data">
		                                	<img src="img/avatar-usuario.png" class="avatar" alt="Nome do cliente">
		                                	<div class="user-data-info">
		                                  		<p class="user-data-header">Alexandre Loes Paz</p>
		                                  		<button class="btn is-icon-btn nv-icon-trash btn-remover"><span class="text">Remover</span></button>
		                                  	</div>
		                                </div>
										<div class="user-data">
		                                	<img src="img/avatar-usuario.png" class="avatar" alt="Nome do cliente">
		                                	<div class="user-data-info">
		                                  		<p class="user-data-header">Alexandre Loes Paz</p>
		                                  		<button class="btn is-icon-btn nv-icon-trash btn-remover"><span class="text">Remover</span></button>
		                                  	</div>
		                                </div>
										<div class="user-data">
		                                	<img src="img/avatar-usuario.png" class="avatar" alt="Nome do cliente">
		                                	<div class="user-data-info">
		                                  		<p class="user-data-header">Alexandre Loes Paz</p>
		                                  		<button class="btn is-icon-btn nv-icon-trash btn-remover"><span class="text">Remover</span></button>
		                                  	</div>
		                                </div>
										<div class="user-data">
		                                	<img src="img/avatar-usuario.png" class="avatar" alt="Nome do cliente">
		                                	<div class="user-data-info">
		                                  		<p class="user-data-header">Alexandre Loes Paz</p>
		                                  		<button class="btn is-icon-btn nv-icon-trash btn-remover"><span class="text">Remover</span></button>
		                                  	</div>
		                                </div>                         		                                
									</div>	
								</div>
							</div>
							<div class="col">
								<div class="relacionar-listas blue-gradient-bg">
									<div class="switchable-area switchable-area-2" id="switchableArea-2" data-placeholder="Arraste as fontes para cá!"></div>					
								</div>
							</div>
						</div>
					</div>	
					<div class="box-content">
						<div class="row">
							<div class="col">
								<button class="btn secondary" data-conteudo-alvo="perfil-relatorios-2">Voltar</button>
							</div>
							<div class="col right-aligned">
								<div class="inline-buttons-wrapper">
									<button class="btn secondary outlined" data-conteudo-alvo="perfil-relatorios-1">Cancelar</button>
									<button class="btn primary">Avançar</button>
								</div>								
							</div>							
						</div>
					</div>			
				</div>
			</div>
			<div class="tab-content" id="fontes">
				<div class="boxes-group" data-id="fontes-1" data-etapa>
					<div class="box-content">
						<div class="data-container" data-gutter="2.5">
							<div class="data-header">
								<div class="column-4">Nome da Fonte</div>
								<div class="column-3">Relevância</div>
								<div class="column-4">Oservações</div>
								<div class="column-1">Ações</div>
							</div>
							<div class="data-item">
								<div class="column-4">
									<p>Nome do template 1</p>
								</div>
								<div class="column-3">
									<div class="status_container">
										<span class="status_dot filled"></span>
										<span class="status_dot filled"></span>
										<span class="status_dot filled"></span>
										<span class="status_dot"></span>
										<span class="status_dot"></span>
									</div>
								</div>
								<div class="column-4">
									<p>Texto de observação</p>
								</div>								
								<div class="column-1">
									<div class="icon-buttons-group">
										<button class="btn is-icon-btn secondary" data-conteudo-alvo="fontes-2"><i class="nv-icon-reader-mode"></i></button>
									</div>
								</div>				
							</div>
							<div class="data-item">
								<div class="column-4">
									<p>Nome do template 1</p>
								</div>
								<div class="column-3">
									<div class="status_container">
										<span class="status_dot filled"></span>
										<span class="status_dot filled"></span>
										<span class="status_dot filled"></span>
										<span class="status_dot"></span>
										<span class="status_dot"></span>
									</div>
								</div>
								<div class="column-4">
									<p>Texto de observação</p>
								</div>								
								<div class="column-1">
									<div class="icon-buttons-group">
										<button class="btn is-icon-btn secondary" data-conteudo-alvo="fontes-2"><i class="nv-icon-reader-mode"></i></button>
									</div>
								</div>				
							</div>
							<div class="data-item">
								<div class="column-4">
									<p>Nome do template 1</p>
								</div>
								<div class="column-3">
									<div class="status_container">
										<span class="status_dot filled"></span>
										<span class="status_dot filled"></span>
										<span class="status_dot filled"></span>
										<span class="status_dot"></span>
										<span class="status_dot"></span>
									</div>
								</div>
								<div class="column-4">
									<p>Texto de observação</p>
								</div>								
								<div class="column-1">
									<div class="icon-buttons-group">
										<button class="btn is-icon-btn secondary" data-conteudo-alvo="fontes-2"><i class="nv-icon-reader-mode"></i></button>
									</div>
								</div>				
							</div>														
						</div>						
					</div>
				</div>
				<div class="boxes-group" data-id="fontes-2" data-etapa hidden>
					<div class="box-content">
						<div class="row">
							<div class="col-md-6">
								<label class="form-label">
									<input type="text" class="input-text" placeholder="Nome">
								</label>
								<label class="form-label">
									<input type="text" class="input-text" placeholder="Parâmetros de busca">
								</label>																	
							</div>
							<div class="col-md-6">
								<label class="form-label">
									<textarea class="input-text textarea inverted" placeholder="Descrição"></textarea>
								</label>								
							</div>							
						</div>
					</div>

					<div class="box-content grey-bg">
						<div class="checkbox-radio-group inline">
							<span class="radio-check-field radio inverted">
								<input type="checkbox">
								<label>Nome do botão</label>
							</span>
							<span class="radio-check-field radio inverted">
								<input type="checkbox">
								<label>Nome do botão</label>
							</span>	
							<span class="radio-check-field radio inverted">
								<input type="checkbox">
								<label>Nome do botão Nome</label>
							</span>				
							<span class="radio-check-field radio inverted">
								<input type="checkbox">
								<label>Nome do botão nome do botão</label>
							</span>	
							<span class="radio-check-field radio inverted">
								<input type="checkbox">
								<label>Nome do botão</label>
							</span>
							<span class="radio-check-field radio inverted">
								<input type="checkbox">
								<label>Nome do botão</label>
							</span>	
							<span class="radio-check-field radio inverted">
								<input type="checkbox">
								<label>Nome do botão Nome</label>
							</span>				
							<span class="radio-check-field radio inverted">
								<input type="checkbox">
								<label>Nome do botão nome do botão</label>
							</span>										
						</div>
					</div>

					<div class="box-content">
						<div class="row">
							<div class="col right-aligned">
								<div class="inline-buttons-wrapper">
									<button class="btn secondary outlined" data-conteudo-alvo="fontes-1">Cancelar</button>
									<button class="btn primary" data-conteudo-alvo="fontes-1">Avançar</button>
								</div>								
							</div>							
						</div>
					</div>

				</div>
			</div>								
		</div>

	</main>
</div>	

	

	
<?php include("includes/scripts.php"); ?>
</body>
</html>