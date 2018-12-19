<?php include("includes/head.php"); ?>
<body>
	
<?php include ("includes/header.php"); ?>	
<div class="main-wrap">

	<?php include("includes/sidebar.php"); ?>

	<main class="main-content">
		<header class="page-header">
			<h1 class="page-header-title">Monitoria</h1>
			<div class="page-header-buttons">
				<a href="relatorios-novo.php" class="btn primary">Criar relatório</a>
			</div>			
		</header>	

		<div class="boxes-group">
			<div class="box-content box-content-filters">
				<?php include("includes/filtros-completos.php"); ?>
			</div>
			<div class="box-content">
				<div class="row">
					<div class="col-md-9">


						<div class="data-container" data-gutter="2.5">
							<div class="data-header">
								<div class="column-1">ID</div>
								<div class="column-2">Relatório</div>
								<div class="column-3">Última verificação</div>
								<div class="column-3">Próxima verificação</div>
								<div class="column-3">Ações</div>
							</div>
							<div class="data-item">
								<div class="column-1">
									<a href="#" class="highlight-text">#55584</a>
								</div>
								<div class="column-2">
									<p>ABC Contabilidade</p>
								</div>
								<div class="column-3">
									<span class="highlight-text has-icon nv-icomoon-calendar-full">01/01/2000 às 19:00</span>
								</div>
								<div class="column-3">
									<span class="highlight-text has-icon nv-icomoon-calendar-full">01/01/2000 às 19:00</span>
								</div>								
								<div class="column-3">
									<div class="buttons-wrapper">
										<button class="btn primary" data-action="adicionarMonitoria">Adicionar</button>
										<button class="btn is-icon-btn secondary"><i class="nv-icomoon-cross"></i></button>
									</div>
								</div>				
							</div>
							<div class="data-item">
								<div class="column-1">
									<a href="#" class="highlight-text">#55584</a>
								</div>
								<div class="column-2">
									<p>ABC Contabilidade</p>
								</div>
								<div class="column-3">
									<span class="highlight-text has-icon nv-icomoon-calendar-full">01/01/2000 às 19:00</span>
								</div>
								<div class="column-3">
									<span class="highlight-text has-icon nv-icomoon-calendar-full">01/01/2000 às 19:00</span>
								</div>								
								<div class="column-3">
									<div class="buttons-wrapper">
										<button class="btn primary" data-action="adicionarMonitoria">Adicionar</button>
										<button class="btn is-icon-btn secondary"><i class="nv-icomoon-cross"></i></button>
									</div>
								</div>				
							</div>							
									
						</div>

						<?php include("includes/pagination.php"); ?>
					</div>
					<div class="col-md-3">
						<div class="box-content grey-bg small-spaced">
							<h3 class="sidebar-title">Acompanhamento: <span class="uppercase d-block">Alpha Jurídica</span></h3>
							<div class="data-container inverted">
								<div class="data-item d-block">
									<p><a href="consulta-receita-federal.php" class="highlight-text">Alteração da data do relatório</a></p>
									<p class="has-icon nv-icomoon-calendar-full">01/10/2018 às 19:00</p>
								</div>
								<div class="data-item d-block">
									<p><a href="consulta-receita-federal.php" class="highlight-text">Alteração da data do relatório</a></p>
									<p class="has-icon nv-icomoon-calendar-full">01/10/2018 às 19:00</p>
								</div>
								<div class="data-item d-block">
									<p><a href="consulta-receita-federal.php" class="highlight-text">Alteração da data do relatório</a></p>
									<p class="has-icon nv-icomoon-calendar-full">01/10/2018 às 19:00</p>
								</div>
								<div class="data-item d-block">
									<p><a href="consulta-receita-federal.php" class="highlight-text">Alteração da data do relatório</a></p>
									<p class="has-icon nv-icomoon-calendar-full">01/10/2018 às 19:00</p>
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