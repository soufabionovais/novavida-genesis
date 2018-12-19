<?php include("includes/head.php"); ?>
<body>
	
<?php include ("includes/header.php"); ?>	

<div class="main-wrap">

	<?php include("includes/sidebar.php"); ?>

	<main class="main-content">
		<header class="page-header">
			<h1 class="page-header-title">Blacklist</h1>
			<div class="page-header-buttons">
				<button class="btn primary" data-action="adicionarBlackList">Adicionar à Blacklist</button>
			</div>
		</header>

		<div class="boxes-group">
			<div class="box-content box-content-filters">
				<div class="filters-wrapper" data-gutter="1">
					<div class="column-3">
						<label class="form-label has-icon nv-icon-zoom">
							<input type="text" class="input-text" placeholder="Pesquisar por nome">
						</label>
					</div>
					<div class="column-7">&nbsp;</div>
					<div class="column-2">
						<div class="grouped-buttons" data-grouped-buttons>
							<button class="btn active">CPF</button>
							<button class="btn">CNPJ</button>
						</div>				
					</div>
				</div>
			</div>
			<div class="box-content">
				<div class="data-container" data-gutter="1">
					<div class="data-header">
						<div class="column-1">ID</div>
						<div class="column-2">CPF/CNPJ</div>
						<div class="column-2">Regra de Bloqueio</div>
						<div class="column-2">Incluído por</div>
						<div class="column-2">Data</div>
						<div class="column-3">Ações</div>
					</div>
					<div class="data-item">
						<div class="column-1">
							<a href="#" class="highlight-text">#5558468</a>
						</div>
						<div class="column-2">
							<p>333.439.009.01</p>
						</div>
						<div class="column-2">
							<p class="highlight-text">Não pagamento do desbloqueio</p>
						</div>
						<div class="column-2">
							<p>Márcio Santana dos Santos</p>
						</div>						
						<div class="column-2">
							<p class="highlight-text has-icon nv-icomoon-calendar-full">25/06/2018 às 16:24</p>
						</div>
						<div class="column-3">
							<button class="btn primary fluid small">Retirar da Blacklist</button>
						</div>				
					</div>
					<div class="data-item">
						<div class="column-1">
							<a href="#" class="highlight-text">#5558468</a>
						</div>
						<div class="column-2">
							<p>333.439.009.01</p>
						</div>
						<div class="column-2">
							<p class="highlight-text">Não pagamento do desbloqueio</p>
						</div>
						<div class="column-2">
							<p>Márcio Santana dos Santos</p>
						</div>						
						<div class="column-2">
							<p class="highlight-text has-icon nv-icomoon-calendar-full">25/06/2018 às 16:24</p>
						</div>
						<div class="column-3">
							<button class="btn primary fluid small">Retirar da Blacklist</button>
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