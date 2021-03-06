<?php include("includes/head.php"); ?>
<body>

<?php include ("includes/header.php"); ?>	

<div class="main-wrap">

	<?php include("includes/sidebar.php"); ?>

	<main class="main-content">
		<header class="page-header">
			<h1 class="page-header-title">Liberar Fontes</h1>
		</header>

		<div class="boxes-group">
			<div class="box-content box-content-filters">
				<div class="filters-wrapper" data-gutter="3">
					<div class="column-9">
						<label class="form-label has-icon nv-icon-zoom">
							<input type="text" class="input-text" placeholder="Pesquisar por termo">
						</label>
					</div>
					<div class="column-3">
						<label class="form-label">
							<input type="text"  class="select-field" data-url="data/segmentos.json" name="segmentos" data-placeholder="Segmentos" />	
						</label>			
					</div>
				</div>
			</div>
			<div class="box-content">
				<div class="data-container" data-gutter="1">
					<div class="data-header">
						<div class="column-4">Nome da Fonte</div>
						<div class="column-3">Nome do Analista</div>
						<div class="column-1">Custo</div>
						<div class="column-2">Popularidade</div>
						<div class="column-2">Ações</div>
					</div>
					<div class="data-item">
						<div class="column-4">
							<div class="user-data">
							  <img src="img/avatar-usuario.png" alt="Nome do usuário" class="avatar">
							  <div class="user-data-info">
							    <p class="user-data-header">Alexandre Loes Paz</p>
							    <p class="user-data-description has-icon nv-icon-talk">Fonte da empresa Piraju atualizada</p>
							  </div>
							</div>
						</div>
						<div class="column-3">
							<p>Maurício de Sousa prado</p>
						</div>
						<div class="column-1">
							<p>R$1.500,00</p>
						</div>
						<div class="column-2">
							<div class="status_container">
								<span class="status_dot filled"></span>
								<span class="status_dot filled"></span>
								<span class="status_dot filled"></span>
								<span class="status_dot"></span>
								<span class="status_dot"></span>
							</div>
						</div>
						<div class="column-2">
							<button class="btn primary fluid small" data-action="liberarFonte">Liberar</button>
						</div>				
					</div>
					<div class="data-item">
						<div class="column-4">
							<div class="user-data">
							  <img src="img/avatar-usuario.png" alt="Nome do usuário" class="avatar">
							  <div class="user-data-info">
							    <p class="user-data-header">Alexandre Loes Paz</p>
							    <p class="user-data-description has-icon nv-icon-talk">Fonte da empresa Piraju atualizada</p>
							  </div>
							</div>
						</div>
						<div class="column-3">
							<p>Maurício de Sousa prado</p>
						</div>
						<div class="column-1">
							<p>R$1.500,00</p>
						</div>
						<div class="column-2">
							<div class="status_container">
								<span class="status_dot filled"></span>
								<span class="status_dot filled"></span>
								<span class="status_dot filled"></span>
								<span class="status_dot"></span>
								<span class="status_dot"></span>
							</div>
						</div>
						<div class="column-2">
							<button class="btn primary fluid small" data-action="liberarFonte">Liberar</button>
						</div>				
					</div>				

				</div>

				<?php include("includes/pagination.php"); ?>

			</div>
		</div>
	</main>
</div>	

	

	
<?php include("includes/scripts.php"); ?>
</body>
</html>