<?php include("includes/head.php"); ?>
<body>

<?php include ("includes/header.php"); ?>
	
<div class="main-wrap">

	<?php include("includes/sidebar.php"); ?>

	<main class="main-content">
		<header class="page-header">
			<h1 class="page-header-title">Adicionar novo livro</h1>
			<div class="page-header-buttons">
				<div class="buttons-wrap">
					<a class="btn secondary outlined small" href="livros.php">Voltar</a>
					<button class="btn primary small" onClick="window.location.href='livros.php'">Salvar alterações</button>
				</div>	
			</div>			
		</header>	

		<div class="boxes-group">
			<div class="box-content box-content-filters">
				<div class="filters-wrapper block" data-gutter="1">
					<div class="row">
						<div class="col-12">
							<label class="form-label has-icon nv-icon-zoom column-12">
								<input type="text" class="input-text" placeholder="Pesquisar por Título">
							</label>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<div class="checkbox-radio-group inline">
								<span class="label"><b class="highlight-text">Grupos de Acesso:</b></span>
								<span class="radio-check-field radio">
									<input type="radio" name="tipo-acesso" value="acessoPublico" checked>
									<label>Acesso Público</label>
								</span>
								<span class="radio-check-field radio">
									<input type="radio" name="tipo-acesso" value="acessoRestrito">
									<label>Acesso Restrito</label>
								</span>
							</div>
						</div>						
					</div>
				</div>
			</div>
			<div id="areaAcessoRestrito" hidden>
				<div class="box-content grey-bg">
					<div class="accordion-wrapper">
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
										  <img src="img/avatar-usuario.png" alt="Nome do usuário" class="avatar">
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
										  <img src="img/avatar-usuario.png" alt="Nome do usuário" class="avatar">
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
										  <img src="img/avatar-usuario.png" alt="Nome do usuário" class="avatar">
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
										  <img src="img/avatar-usuario.png" alt="Nome do usuário" class="avatar">
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
			</div>
			<div class="box-content grey-bg">
				<div class="row vertical-centered">
					<div class="col-6">
						<h2 class="box-content-title">Relatórios</h2>
					</div>
					<div class="col-6 right-aligned">
						<button class="btn primary small" id="btAreaAdicionarLivro">Adicionar</button>
						<button class="btn secondary outlined small">Remover</button>
					</div>
				</div>
			</div>
			<div id="areaAdicionarLivro" hidden>
				<div class="boxes-group">
					<div class="box-content grey-bg">
						<?php include("includes/filtros-completos.php"); ?>
						
					</div>
					<div class="box-content grey-bg">
						<div class="data-container inverted" data-gutter="0.2">
							<div class="data-header">
								<div class="column-1 center-aligned"></div>
								<div class="column-4">Critério</div>
								<div class="column-4">Responsável</div>
								<div class="column-2">Data</div>
							</div>
							<div class="data-item">
								<div class="column-1 center-aligned">
									<span class="radio-check-field">
										<input type="checkbox" >
										<label></label>
									</span>							
								</div>
								<div class="column-4">
									<div class="user-data">
									  <div class="user-data-info">
									    <p class="user-data-header">Alexandre Loes Paz</p>
									    <p class="user-data-description">333.222.666/0001-00</p>
									  </div>
									</div>	
								</div>
								<div class="column-4">
									<p>Alexandre Loes Paz</p>
								</div>
								<div class="column-3">
									<p class="highlight-text has-icon nv-icomoon-calendar-full">25/06/2018 às 16:24</p>
								</div>
					
							</div>
							<div class="data-item">
								<div class="column-1 center-aligned">
									<span class="radio-check-field">
										<input type="checkbox" >
										<label></label>
									</span>							
								</div>
								<div class="column-4">
									<div class="user-data">
									  <div class="user-data-info">
									    <p class="user-data-header">Alexandre Loes Paz</p>
									    <p class="user-data-description">333.222.666/0001-00</p>
									  </div>
									</div>	
								</div>
								<div class="column-4">
									<p>Alexandre Loes Paz</p>
								</div>
								<div class="column-3">
									<p class="highlight-text has-icon nv-icomoon-calendar-full">25/06/2018 às 16:24</p>
								</div>
					
							</div>
							<div class="data-item">
								<div class="column-1 center-aligned">
									
									<span class="radio-check-field">
										<input type="checkbox" >
										<label></label>
									</span>							
								</div>
								<div class="column-4">
									<div class="user-data">
									  <div class="user-data-info">
									    <p class="user-data-header">Alexandre Loes Paz</p>
									    <p class="user-data-description">333.222.666/0001-00</p>
									  </div>
									</div>	
								</div>
								<div class="column-4">
									<p>Alexandre Loes Paz</p>
								</div>
								<div class="column-3">
									<p class="highlight-text has-icon nv-icomoon-calendar-full">25/06/2018 às 16:24</p>
								</div>
					
							</div>
						</div>
					</div>
					<div class="box-content">
						<button class="btn primary" id="btnAdicionarNovoLivro">Adicionar</button>
					</div>	
				</div>				
			</div>
			<div id="areaListaLivros">
				<div class="box-content grey-bg">
					<div class="accordion-wrapper">
						<div class="accordion-item">
							<div class="accordion-title">
								<div class="accordion-title-content">
									<div class="icon">
										<span class="radio-check-field">
											<input type="checkbox" >
											<label></label>
										</span>
									</div>
									<h3 class="accordion-title-text">Relatório 1</h3>
									<div class="action">
										<button class="btn is-icon-btn"><i class="icon nv-icon-trash"></i></button>
									</div>
								</div>
							</div>
							<div class="accordion-content blue-gradient-bg">
								<div class="box-content">
									<ul class="list">
										<li>
										    <h3 class="list-title">Relatório 1.1</h3>
										    <ul class="sub-list">
										      <li>Relatório 1.1.1</li>
										      <li>Relatório 1.1.2</li>
										      <li>Relatório 1.1.3</li>
										    </ul>
										</li>
									</ul>
								</div>
							</div>
						</div>

						<div class="accordion-item">
							<div class="accordion-title">
								<div class="accordion-title-content">
									<div class="icon">
										<span class="radio-check-field">
											<input type="checkbox" >
											<label></label>
										</span>
									</div>
									<h3 class="accordion-title-text">Relatório 2</h3>
									<div class="action">
										<button class="btn is-icon-btn"><i class="icon nv-icon-trash"></i></button>
									</div>
								</div>
							</div>
							<div class="accordion-content blue-gradient-bg">
								<div class="box-content">
									<ul class="list">
										<li>
										    <h3 class="list-title">Relatório 1.1</h3>
										    <ul class="sub-list">
										      <li>Relatório 1.1.1</li>
										      <li>Relatório 1.1.2</li>
										      <li>Relatório 1.1.3</li>
										    </ul>
										</li>
									</ul>
								</div>
							</div>
						</div>

						<div class="accordion-item">
							<div class="accordion-title">
								<div class="accordion-title-content">
									<div class="icon">
										<span class="radio-check-field">
											<input type="checkbox" >
											<label></label>
										</span>
									</div>
									<h3 class="accordion-title-text">Relatório 3</h3>
									<div class="action">
										<button class="btn is-icon-btn"><i class="icon nv-icon-trash"></i></button>
									</div>
								</div>
							</div>
							<div class="accordion-content blue-gradient-bg">
								<div class="box-content">
									<ul class="list">
										<li>
										    <h3 class="list-title">Relatório 1.1</h3>
										    <ul class="sub-list">
										      <li>Relatório 1.1.1</li>
										      <li>Relatório 1.1.2</li>
										      <li>Relatório 1.1.3</li>
										    </ul>
										</li>
									</ul>
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