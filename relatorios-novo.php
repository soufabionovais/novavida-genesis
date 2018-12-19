<?php include("includes/head.php"); ?>
<body>
	
<?php include ("includes/header.php"); ?>	

<div class="main-wrap">

	<?php include("includes/sidebar.php"); ?>

	<main class="main-content">
		<header class="page-header">
			<h1 class="page-header-title">Novo Relatório</h1>
		</header>	

		<div data-etapa data-id="editar-perfil-etapa-1">
			<div class="boxes-group">			
				<div class="box-content">
					<div class="row filters-wrapper">
						<div class="col">
							<label class="form-label  has-icon dropdown">
								<button class="input-text" id="toggleEditarPerfil">Selecionar um perfil</button>
								<div class="edit-profile-wrapper" id="listaEditarPerfil">
									<div class="data-container inverted fluid">
										<div class="data-item">
											<div class="column-7">												
												<p>Perfil 001</p>
											</div>
											<div class="column-5 right-aligned">
												<button class="btn primary small" data-conteudo-alvo="editar-perfil-etapa-2">Editar Perfil</button>
											</div>
										</div>
										<div class="data-item">
											<div class="column-7">												
												<p>Perfil 0002</p>
											</div>
											<div class="column-5 right-aligned">
												<button class="btn primary small" data-conteudo-alvo="editar-perfil-etapa-2">Editar Perfil</button>
											</div>
										</div>
										<div class="data-item">
											<div class="column-7">												
												<p>Perfil 00003</p>
											</div>
											<div class="column-5 right-aligned">
												<button class="btn primary small" data-conteudo-alvo="editar-perfil-etapa-2">Editar Perfil</button>
											</div>
										</div>																				
									</div>
								</div>
							</label>						
						</div>
						<div class="col">
							<label class="form-label">
								<input type="text" class="select-field" data-url="data/livros.json" name="livros" data-placeholder="Livros" data-search-placeholder="Filtrar livros" />
							</label>						
						</div>
					</div>
				</div>
				<div class="box-content no-padding-bottom">
					<div class="row fluid">
						<ul class="tabs-group" data-tabs-group="tabsGroup">
							<li class="tab active"><a href="#inserirCPF">Inserir manualmente CPF/CNPJ</a></li>
							<li class="tab"><a href="#uploadLista">Fazer Upload de Lista</a></li>
						</ul>
					</div>
				</div>

				<div class="box-content grey-bg">

				<div class="tabs-content-wrapper" data-tabs-target-group="tabsGroup">
					<div class="tab-content active" id="inserirCPF">
						<div class="row">
							<div class="col-9">							
								<label class="form-label has-icon nv-icon-zoom">
									<input type="text" class="input-text grey" placeholder="Pesquisar por CPF, nome ou apelido">
								</label>						
							</div>
							<div class="col-3 right-aligned">
								<div class="btn primary">
									<label for="selecionarPerfil" class="label">
										<input type="checkbox" data-toggle-check-group="selecionarPerfil" id="selecionarPerfil">
										<span class="text">Selecionar todas</span>
									</label>
								</div>
								<!-- <button class="btn primary">Selecionar todas</button> -->
							</div>					
						</div>
						<div class="row">
							<div class="col-12">
								<div class="data-container inverted" data-gutter="1">
									<div class="data-item">
										<div class="column-5">
											<span class="radio-check-field">
												<input type="checkbox" data-toggle-check-target="selecionarPerfil">
												<label>Alexandre Loes Paz</label>
											</span>
										</div>
										<div class="column-4">
											<p>CPF: 344.232.332-0</p>
										</div>
										<div class="column-2 right-aligned">
											<span class="radio-check-field">
												<input type="checkbox" data-toggle-check-target="selecionarPerfil">
												<label class="highlight-text">Monitorar</label>
											</span>	
										</div>	
										<div class="column-1 center-aligned">
											<button class="btn secondary is-icon-btn has-icon">
												<i class="nv-icomoon-cross1"></i>
											</button>									
										</div>			
									</div>
									<div class="data-item">
										<div class="column-5">
											<span class="radio-check-field">
												<input type="checkbox" data-toggle-check-target="selecionarPerfil">
												<label>Alexandre Loes Paz</label>
											</span>
										</div>
										<div class="column-4">
											<p>CPF: 344.232.332-0</p>
										</div>
										<div class="column-2 right-aligned">
											<span class="radio-check-field">
												<input type="checkbox" data-toggle-check-target="selecionarPerfil">
												<label class="highlight-text">Monitorar</label>
											</span>	
										</div>	
										<div class="column-1 center-aligned">
											<button class="btn secondary is-icon-btn has-icon">
												<i class="nv-icomoon-cross1"></i>
											</button>									
										</div>			
									</div>
									<div class="data-item">
										<div class="column-5">
											<span class="radio-check-field">
												<input type="checkbox" data-toggle-check-target="selecionarPerfil">
												<label>Alexandre Loes Paz</label>
											</span>
										</div>
										<div class="column-4">
											<p>CPF: 344.232.332-0</p>
										</div>
										<div class="column-2 right-aligned">
											<span class="radio-check-field">
												<input type="checkbox" data-toggle-check-target="selecionarPerfil">
												<label class="highlight-text">Monitorar</label>
											</span>	
										</div>	
										<div class="column-1 center-aligned">
											<button class="btn secondary is-icon-btn has-icon">
												<i class="nv-icomoon-cross1"></i>
											</button>									
										</div>			
									</div>														
								</div>						
							</div>
						</div>
					</div>
					<div class="tab-content" id="uploadLista">
						<div class="box-content">
							<div class="row filters-wrapper">
								<div class="col">
									<p class="box-content-title">Selecione a lista para upload <small>(Formatos aceitos: .txt ou .csv)</small></p>
									<label class="form-label file-upload-wrapper">
		                                <input type="file" class="input-file-text">
		                                <input type="text" class="input-text grey text-field" placeholder="Selecione uma lista para importar">  
									</label>									
								</div>
							</div>
						</div>
					</div>
				</div>

				</div>
				<div class="box-content">
					<div class="row d-flex align-items-center">
						<div class="col">
							<div class="checkbox-radio-group inline">
								<span class="radio-check-field">
									<input type="checkbox" name="monitorarRelatorio" id="monitorarRelatorio">
									<label class="highlight-text">Monitorar relatório completo</label>
								</span>	
							</div>					
						</div>
						<div class="col right-aligned">
							<button class="btn secondary outlined">Cancelar</button>
							<button class="btn primary outlined" data-conteudo-alvo="editar-perfil-etapa-2">Processar</button>
						</div>
					</div>
				</div>	
			</div>	
			<!-- <div data-etapa data-id="editar-perfil-etapa-2" hidden>	

				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae esse, aspernatur, eos quibusdam ea laboriosam ipsam. Ratione similique unde debitis labore distinctio magnam asperiores, quia quo, sed, aliquid perferendis iusto.
			</div> -->
		</div>

		<div data-etapa data-id="editar-perfil-etapa-2" hidden>
			<div class="boxes-group">
				<div class="box-content">
					<h2 class="box-content-title">Novo relatório</h2>
				</div>
				<div class="box-content">
					<div class="row">

						<div class="col">
							<h2 class="box-content-title">Fontes selecionadas:</h2>
							<div class="relacionar-listas grey-bg">
								<div class="row">
									<div class="col">
										<label class="form-label has-icon nv-icon-zoom column-12">
											<input type="text" class="input-text" placeholder="Filtrar por nome">
										</label>
									</div>	
								</div>
								<div class="row">
									<div class="col">
										<div class="data-container inverted">
											<div class="data-item has-input">
												<div class="user-data">
													<span class="radio-check-field">
														<input type="checkbox">
														<label class="highlight-text"><img src="img/avatar-usuario.png" alt="Nome do usuário" class="small avatar">sdadasfdadsafdasdf</label>
													</span>												
												</div>	
											</div>	
											<div class="data-item has-input">
												<div class="user-data">
													<span class="radio-check-field">
														<input type="checkbox">
														<label class="highlight-text"><img src="img/avatar-usuario.png" alt="Nome do usuário" class="small avatar">sdadasfdadsafdasdf</label>
													</span>												
												</div>	
											</div>	
											<div class="data-item has-input">
												<div class="user-data">
													<span class="radio-check-field">
														<input type="checkbox">
														<label class="highlight-text"><img src="img/avatar-usuario.png" alt="Nome do usuário" class="small avatar">sdadasfdadsafdasdf</label>
													</span>												
												</div>	
											</div>																			
										</div>											
									</div>
								</div>
													
							</div>
						</div>
						<div class="col">
							<h2 class="box-content-title">Fontes disponíveis:</h2>
							<div class="relacionar-listas blue-gradient-bg">
								<div class="row">
									<div class="col">
										<label class="form-label has-icon nv-icon-zoom column-12">
											<input type="text" class="input-text" placeholder="Filtrar por nome">
										</label>											
									</div>
								</div>

								<div class="row">
									<div class="col">
										
								<div class="data-item has-input">
									<div class="user-data">
										<span class="radio-check-field">
											<input type="checkbox">
											<label class="highlight-text"><img src="img/avatar-usuario.png" alt="Nome do usuário" class="small avatar">sdadasfdadsafdasdf</label>
										</span>												
									</div>	
								</div>	
								<div class="data-item has-input">
									<div class="user-data">
										<span class="radio-check-field">
											<input type="checkbox">
											<label class="highlight-text"><img src="img/avatar-usuario.png" alt="Nome do usuário" class="small avatar">sdadasfdadsafdasdf</label>
										</span>												
									</div>	
								</div>	
								<div class="data-item has-input">
									<div class="user-data">
										<span class="radio-check-field">
											<input type="checkbox">
											<label class="highlight-text"><img src="img/avatar-usuario.png" alt="Nome do usuário" class="small avatar">sdadasfdadsafdasdf</label>
										</span>												
									</div>	
								</div>											

									</div>
								</div>
								
																								
							</div>
						</div>	
					</div>
				</div>	
				<div class="box-content grey-bg">
					<div class="row d-flex align-items-center">
						<div class="col">
							<button class="btn secondary outlined" data-conteudo-alvo="editar-perfil-etapa-1">Cancelar</button>				
						</div>
						<div class="col right-aligned">
							<a class="btn primary outlined" href="relatorios.php" data-conteudo-alvo="editar-perfil-etapa-2">Gravar</a>
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