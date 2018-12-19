<?php include("includes/head.php"); ?>
<body>
	
<?php include ("includes/header.php"); ?>	

<div class="main-wrap">

	<?php include("includes/sidebar.php"); ?>

	<main class="main-content">
		<header class="page-header">
			<h1 class="page-header-title">Livros</h1>
		</header>	

		<div class="boxes-group">
			<div class="box-content box-content-filters">
				<div class="filters-wrapper" data-gutter="1">
					<div class="column-3">
						<label class="form-label has-icon nv-icon-zoom">
							<input type="text" class="input-text" placeholder="Pesquisar por termo">
						</label>
					</div>
					<div class="column-5">&nbsp;</div>
					<div class="column-2">
						<div class="grouped-buttons" data-grouped-buttons>
							<button class="btn active">CPF</button>
							<button class="btn">CNPJ</button>
						</div>				
					</div>
					<div class="column-2">
						<a class="btn secondary outlined fluid" href="livros-adicionar.php">Adicionar</a>
					</div>
				</div>
			</div>
			<div class="box-content">
				<div class="data-container" data-gutter="2.5">
					<div class="data-header">
						<div class="column-1">ID</div>
						<div class="column-3">Livro</div>
						<div class="column-3">Autor</div>
						<div class="column-3">Data</div>
						<div class="column-2">Ações</div>
					</div>
					<div class="data-item">
						<div class="column-1">
							<a href="livros-adicionar.php" class="highlight-text">#5558468</a>
						</div>
						<div class="column-3">
							<p>Fonte da empresa Piraju atualizada</p>
						</div>
						<div class="column-3">
							<p class="highlight-text">Alexandre Loes Paz</p>
						</div>
						<div class="column-3">
							<p class="highlight-text highlight-text has-icon nv-icomoon-calendar-full">25/06/2018 às 16:24</p>
						</div>
						<div class="column-2">
							<a href="livros-adicionar.php" class="btn primary fluid">Visualizar</a>
						</div>				
					</div>
					<div class="data-item">
						<div class="column-1">
							<a href="livros-adicionar.php" class="highlight-text">#5558468</a>
						</div>
						<div class="column-3">
							<p>Fonte da empresa Piraju atualizada</p>
						</div>
						<div class="column-3">
							<p class="highlight-text">Alexandre Loes Paz</p>
						</div>
						<div class="column-3">
							<p class="highlight-text highlight-text has-icon nv-icomoon-calendar-full">25/06/2018 às 16:24</p>
						</div>
						<div class="column-2">
							<a href="livros-adicionar.php" class="btn primary fluid">Visualizar</a>
						</div>				
					</div>
					<div class="data-item">
						<div class="column-1">
							<a href="livros-adicionar.php" class="highlight-text">#5558468</a>
						</div>
						<div class="column-3">
							<p>Fonte da empresa Piraju atualizada</p>
						</div>
						<div class="column-3">
							<p class="highlight-text">Alexandre Loes Paz</p>
						</div>
						<div class="column-3">
							<p class="highlight-text highlight-text has-icon nv-icomoon-calendar-full">25/06/2018 às 16:24</p>
						</div>
						<div class="column-2">
							<a href="livros-adicionar.php" class="btn primary fluid">Visualizar</a>
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