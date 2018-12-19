<?php include("includes/head.php"); ?>
<body>

<?php include ("includes/header.php"); ?>
	
<div class="main-wrap">

	<?php include("includes/sidebar.php"); ?>

	<main class="main-content">
		<header class="page-header">
			<h1 class="page-header-title">Relatórios</h1>
			<div class="page-header-buttons">
				<a href="relatorios-novo.php" class="btn primary">Criar relatório</a>
			</div>			
		</header>	

		<div class="boxes-group">
			<div class="box-content box-content-filters">
				<?php include("includes/filtros-completos.php") ?>
			</div>
			<div class="box-content">
				<div class="tabs-wrapper">
					<ul class="tabs-group" data-tabs-group="tabsGroup">
						<li class="tab active"><a href="#relatoriosProcessamento">Em Processamento</a></li>
						<li class="tab"><a href="#relatoriosPendentes">Pendente de Análise</a></li>
						<li class="tab"><a href="#relatoriosConcluidos">Concluídos</a></li>					
					</ul>

					<div class="tabs-content-wrapper" data-tabs-target-group="tabsGroup">
						<div class="tab-content active" id="relatoriosProcessamento">
							<div class="data-container" data-gutter="2.5">
								<div class="data-header">
									<div class="column-1">ID</div>
									<div class="column-3">Critério</div>
									<div class="column-2">Segmento</div>
									<div class="column-2">Responsável</div>
									<div class="column-3">Data</div>
									<div class="column-2">Status</div>
								</div>
								<div class="data-item">
									<div class="column-1">
										<a href="#" class="highlight-text">#5558468</a>
									</div>
									<div class="column-3">
										<div class="user-data">
										  <div class="user-data-info">
										    <p class="user-data-header">Alexandre Loes Paz</p>
										    <p class="user-data-description">333.222.666/0001-00</p>
										  </div>
										</div>
									</div>
									<div class="column-2">
										<p>Livro ABC-02</p>
									</div>
									<div class="column-2">
										<p>Alexandre Loes Paz</p>
									</div>
									<div class="column-3">
										<p class="highlight-text highlight-text has-icon nv-icomoon-calendar-full">25/06/2018 às 16:24</p>
									</div>
									<div class="column-2">
										<div class="popup-detalhes-processamento">
											<div class="progressbar_container">
												<span class="progress" style="width: 50%"></span>
											</div>
										</div>
									</div>				
								</div>
								<div class="data-item">
									<div class="column-1">
										<a href="#" class="highlight-text">#5558468</a>
									</div>
									<div class="column-3">
										<div class="user-data">
										  <div class="user-data-info">
										    <p class="user-data-header">Alexandre Loes Paz</p>
										    <p class="user-data-description">333.222.666/0001-00</p>
										  </div>
										</div>
									</div>
									<div class="column-2">
										<p>Livro ABC-02</p>
									</div>
									<div class="column-2">
										<p>Alexandre Loes Paz</p>
									</div>
									<div class="column-3">
										<p class="highlight-text highlight-text has-icon nv-icomoon-calendar-full">25/06/2018 às 16:24</p>
									</div>
									<div class="column-2">
										<div class="popup-detalhes-processamento">
											<div class="progressbar_container failed has-icon nv-icon-info-circle">
												<span class="progress" style="width: 50%"></span>
											</div>
										</div>
									</div>				
								</div>								
							</div>
							<?php include("includes/pagination.php"); ?>
						</div>

						<div class="tab-content" id="relatoriosPendentes">
							<div class="data-container" data-gutter="2.5">
								<div class="data-header">
									<div class="column-1">ID</div>
									<div class="column-2">Critério</div>
									<div class="column-2">Livro</div>
									<div class="column-2">Responsável</div>
									<div class="column-2">Data</div>
									<div class="column-2">Status</div>
									<div class="column-2">Ações</div>
								</div>
								<div class="data-item">
									<div class="column-1">
										<a href="capa.php" class="highlight-text">#5558468</a>
									</div>
									<div class="column-2">
										<div class="user-data">
										  <div class="user-data-info">
										    <p class="user-data-header"><a href="capa.php">Alexandre Loes Paz</a></p>
										    <p class="user-data-description">333.222.666/0001-00</p>
										  </div>
										</div>
									</div>
									<div class="column-2">
										<p>Livro ABC-02</p>
									</div>
									<div class="column-2">
										<p>Airton José da Silva</p>
									</div>
									<div class="column-2">
										<p class="highlight-text highlight-text has-icon nv-icomoon-calendar-full">25/06/2018 às 16:24</p>
									</div>
									<div class="column-2">
										<div class="popup-detalhes-relatorios-pendentes">
											<div class="status_container status">
												<span class="status_dot filled"></span>
												<span class="status_dot"></span>
												<span class="status_dot"></span>
											</div>
										</div>
									</div>
									<div class="column-2">
										<div class="icon-buttons-group">
											<button class="btn is-icon-btn secondary"><i class="nv-icomoon-checkmark"></i></button>
											<button class="btn is-icon-btn secondary"><i class="nv-icomoon-cross1"></i></button>
											<button class="btn is-icon-btn secondary" data-action='adicionarMonitoriaRelatorio'><i class="nv-icomoon-eye1"></i></button>
											<a href="mapa.php" class="btn is-icon-btn secondary"><i class="nv-icomoon-map1"></i></a>
											<button class="btn is-icon-btn secondary btn-exportar"><i class="nv-icomoon-box-remove"></i></button>
										</div>
									</div>				
								</div>
								<div class="data-item">
									<div class="column-1">
										<a href="capa.php" class="highlight-text">#5558468</a>
									</div>
									<div class="column-2">
										<div class="user-data">
										  <div class="user-data-info">
										    <p class="user-data-header"><a href="capa.php">Alexandre Loes Paz</a></p>
										    <p class="user-data-description">333.222.666/0001-00</p>
										  </div>
										</div>
									</div>
									<div class="column-2">
										<p>Livro ABC-02</p>
									</div>
									<div class="column-2">
										<p>Airton José da Silva</p>
									</div>
									<div class="column-2">
										<p class="highlight-text highlight-text has-icon nv-icomoon-calendar-full">25/06/2018 às 16:24</p>
									</div>
									<div class="column-2">
										<div class="popup-detalhes-relatorios-pendentes">
											<div class="status_container status">
												<span class="status_dot filled"></span>
												<span class="status_dot"></span>
												<span class="status_dot"></span>
											</div>
										</div>
									</div>
									<div class="column-2">
										<div class="icon-buttons-group">
											<button class="btn is-icon-btn secondary"><i class="nv-icomoon-checkmark"></i></button>
											<button class="btn is-icon-btn secondary"><i class="nv-icomoon-cross1"></i></button>
											<button class="btn is-icon-btn secondary" data-action='adicionarMonitoriaRelatorio'><i class="nv-icomoon-eye1"></i></button>
											<a href="mapa.php" class="btn is-icon-btn secondary"><i class="nv-icomoon-map1"></i></a>
											<button class="btn is-icon-btn secondary btn-exportar"><i class="nv-icomoon-box-remove"></i></button>
										</div>
									</div>				
								</div>								
							
							</div>
							<?php include("includes/pagination.php"); ?>
						</div>

						<div class="tab-content" id="relatoriosConcluidos">
							<div class="data-container" data-gutter="2.5">
								<div class="data-header">
									<div class="column-1">ID</div>
									<div class="column-2">Critério</div>
									<div class="column-2">Livro</div>
									<div class="column-2">Responsável</div>
									<div class="column-2">Data</div>
									<div class="column-2">Status</div>
									<div class="column-2">Ações</div>
								</div>
								<div class="data-item">
									<div class="column-1">
										<a href="#" class="highlight-text">#5558468</a>
									</div>
									<div class="column-2">
										<div class="user-data">
										  <div class="user-data-info">
										    <p class="user-data-header">Alexandre Loes Paz</p>
										    <p class="user-data-description">333.222.666/0001-00</p>
										  </div>
										</div>
									</div>
									<div class="column-2">
										<p>Livro ABC-02</p>
									</div>
									<div class="column-2">
										<p>Airton José da Silva</p>
									</div>
									<div class="column-2">
										<p class="highlight-text highlight-text has-icon nv-icomoon-calendar-full">25/06/2018 às 16:24</p>
									</div>
									<div class="column-2">
										<div class="status_container status">
											<span class="status_dot filled"></span>
											<span class="status_dot"></span>
											<span class="status_dot"></span>
										</div>
									</div>
									<div class="column-2">
										<div class="icon-buttons-group">
											<button class="btn is-icon-btn secondary" data-action='adicionarMonitoriaRelatorio'><i class="nv-icomoon-eye1"></i></button>
											<a href="mapa.php" class="btn is-icon-btn secondary"><i class="nv-icomoon-map1"></i></a>
											<button class="btn is-icon-btn secondary btn-exportar"><i class="nv-icomoon-box-remove"></i></button>
										</div>
									</div>				
								</div>
								<div class="data-item">
									<div class="column-1">
										<a href="#" class="highlight-text">#5558468</a>
									</div>
									<div class="column-2">
										<div class="user-data">
										  <div class="user-data-info">
										    <p class="user-data-header">Alexandre Loes Paz</p>
										    <p class="user-data-description">333.222.666/0001-00</p>
										  </div>
										</div>
									</div>
									<div class="column-2">
										<p>Livro ABC-02</p>
									</div>
									<div class="column-2">
										<p>Airton José da Silva</p>
									</div>
									<div class="column-2">
										<p class="highlight-text highlight-text has-icon nv-icomoon-calendar-full">25/06/2018 às 16:24</p>
									</div>
									<div class="column-2">
										<div class="status_container status">
											<span class="status_dot filled"></span>
											<span class="status_dot"></span>
											<span class="status_dot"></span>
										</div>
									</div>
									<div class="column-2">
										<div class="icon-buttons-group">
											<button class="btn is-icon-btn secondary" data-action='adicionarMonitoriaRelatorio'><i class="nv-icomoon-eye1" data-action="adicionarMonitoriaRelatorio"></i></button>
											<a href="mapa.php" class="btn is-icon-btn secondary"><i class="nv-icomoon-map1"></i></a>
											<button class="btn is-icon-btn secondary btn-exportar"><i class="nv-icomoon-box-remove"></i></button>
										</div>
									</div>				
								</div>								
							
							</div>
							<?php include("includes/pagination.php"); ?>
						</div>						

					</div>
				</div>
			</div>
		</div>

		<div id="resultadoBuscador" class="resultados-buscador" hidden>
			<div class="box-content">
				<div class="data-container" data-gutter="1.5">
					<div class="data-header">
						<div class="column-2">Nome</div>
						<div class="column-2">Nome da mãe</div>
						<div class="column-1 center-aligned">Idade</div>
						<div class="column-2">CPF</div>
						<div class="column-5 right-aligned"><b class="highlight-text">92</b> resultados encontrados</div>
					</div>
					<div class="data-item">
						<div class="column-2">
							<p>Lena Maria Ferreira</p>
						</div>
						<div class="column-2">
							Maria Fernanda Moraes
						</div>
						<div class="column-1 center-aligned">
							45
						</div>	
						<div class="column-2">
							333.980.999-01
						</div>			
						<div class="column-5 right-aligned">
							<div class="inline-buttons-wrapper">
								<button class="btn primary small">Mais Relatórios</button>
								<button class="btn secondary small" data-action="adicionarBlackList">Adicionar à Blacklist</button>
							</div>
						</div>			
					</div>
					<div class="data-item">
						<div class="column-2">
							<p>Lena Maria Ferreira</p>
						</div>
						<div class="column-2">
							Maria Fernanda Moraes
						</div>
						<div class="column-1 center-aligned">
							45
						</div>	
						<div class="column-2">
							333.980.999-01
						</div>			
						<div class="column-5 right-aligned">
							<div class="inline-buttons-wrapper">
								<button class="btn primary small">Mais Relatórios</button>
								<button class="btn secondary small" data-action="adicionarBlackList">Adicionar à Blacklist</button>
							</div>
						</div>			
					</div>
				</div>
				<?php include("includes/pagination.php"); ?>
			</div>
		</div>

	</main>
</div>	


<div class="tpl-popover-links">
	<div class="popover-exportar-relatorios">
		<a href="#" class="link-pdf nv-icomoon-file-pdf" title="Exportar em PDF" target="_blank">Exporta em PDF</a>
		<a href="#" class="link-doc nv-icomoon-file-word" title="Exportar em DOC" target="_blank">Exporta em DOC</a>
	</div>
</div>


<?php include("includes/scripts.php"); ?>
</body>
</html>