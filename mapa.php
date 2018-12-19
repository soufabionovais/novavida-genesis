<?php include("includes/head.php"); ?>
  <body>

	<?php include("includes/header-mapa.php"); ?>

		<main class="main mapa">
			<div id="mapaWrapper" class="mapa-wrapper">

				<div class="item-mapa item-usuario">

					<div class="item-mapa-inner">
						<div class="fonte fonte-1">
							Fonte 1
						</div>

						<img src="img/avatar-usuario.png" alt="" class="avatar" />

						<button id="btnMenuAgrupamentos" class="btn btn-agrupamentos">
							<span class="icon nv-icon-zoom"></span>
						</button>

						<div class="dados">
							<div class="nome">André Cintra</div>
							<div class="documento">CPF: 999.999.999-99</div>
						</div>

						<section id="menuAgrupamentos" class="box menu-agrupamentos">
							<div id="agrupamentosEtapa1" class="etapa-1">
								<header>
									Agrupamentos
								</header>
								<button class="item-line">
									<span class="highlight-text">Agrupamento Fonte 1</span>
									<div class="has-icon nv-icomoon-calendar-full">5 dias</div>
								</button>
								<button class="item-line">
									<span class="highlight-text">Agrupamento Fonte 1</span>
									<div class="has-icon nv-icomoon-calendar-full">5 dias</div>
								</button>
								<button class="item-line">
									<span class="highlight-text">Agrupamento Fonte 1</span>
									<div class="has-icon nv-icomoon-calendar-full">5 dias</div>
								</button>
								<button class="item-line">
									<span class="highlight-text">Agrupamento Fonte 1</span>
									<div class="has-icon nv-icomoon-calendar-full">5 dias</div>
								</button>
							</div>

							<div id="agrupamentosEtapa2" class="etapa-2">
								<header>
									<span class="nv-icon-arrow-left-thin">Agrupamento fonte 1</span>
								</header>
								<button class="item-line">
									<span class="highlight-text">Fonte 1</span>
									<div class="has-icon nv-icomoon-calendar-full">5 dias</div>
								</button>
								<button class="item-line">
									<span class="highlight-text">Fonte 1</span>
									<div class="has-icon nv-icomoon-calendar-full">5 dias</div>
								</button>
								<button class="item-line">
									<span class="highlight-text">Fonte 1</span>
									<div class="has-icon nv-icomoon-calendar-full">5 dias</div>
								</button>
								<button class="item-line">
									<span class="highlight-text">Fonte 1</span>
									<div class="has-icon nv-icomoon-calendar-full">5 dias</div>
								</button>
							</div>
						</section>
					</div>
				</div>

				<div id="itemRelatorios" class="item-mapa item-relatorios">
					<div class="item-mapa-inner">
						<img src="img/avatar-usuario.png" alt="" class="avatar" />

						<button class="btn btn-agrupamentos">
							<span class="icon nv-icon-zoom"></span>
						</button>

						<div class="dados">
							<div class="nome">Zoly Alimentos</div>
							<div class="documento">CPF: 999.999.999-99</div>
						</div>
					</div>
				</div>

				<section id="menuEmpresa" class="menu-empresa">
					<header>
						<div class="icon-fonte">
							Fonte 1
							<button class="btn">
								<span class="icon nv-icon-zoom"></span>
							</button>
							<span class="linha-ligacao"></span>
						</div>
						<div class="dados">
							<span class="nome">Nome da empresa</span>
							<span class="doucmento">CNPJ: 18.283.987/0001-10</span>
						</div>
						<button id="btnEmpresaDetalhes" class="btn primary">
							Detalhes
						</button>
					</header>
					<div class="menu-body">

						<div class="data-container" data-gutter="2.5">
							<div class="data-header">
								<div class="column-6">Quadro societário</div>
								<div class="column-3">Participação</div>
								<div class="column-3">Ações</div>
							</div>
							<div class="data-item">
								<div class="column-6">
									<div class="user-data">
									  <img src="img/avatar-usuario.png" alt="Nome do usuário" class="avatar">
									  <div class="user-data-info">
									    <p class="user-data-header">Alexandre Loes Paz</p>
									    <p class="user-data-description">333.222.666/0001-00</p>
									  </div>
									</div>	
								</div>
								<div class="column-3">
									<p class="participacao">33,33%</p>
								</div>
								<div class="column-3 right-aligned">
									<button class="btn secondary outlined">
										Relatório
									</button>
								</div>				
							</div>	
							<div class="data-item">
								<div class="column-6">
									<div class="user-data">
									  <img src="img/avatar-usuario.png" alt="Nome do usuário" class="avatar">
									  <div class="user-data-info">
									    <p class="user-data-header">Alexandre Loes Paz</p>
									    <p class="user-data-description">333.222.666/0001-00</p>
									  </div>
									</div>	
								</div>
								<div class="column-3">
									<p class="participacao">33,33%</p>
								</div>
								<div class="column-3 right-aligned">
									<button class="btn secondary outlined">
										Relatório
									</button>
								</div>				
							</div>	
							<div class="data-item">
								<div class="column-6">
									<div class="user-data">
									  <img src="img/avatar-usuario.png" alt="Nome do usuário" class="avatar">
									  <div class="user-data-info">
									    <p class="user-data-header">Alexandre Loes Paz</p>
									    <p class="user-data-description">333.222.666/0001-00</p>
									  </div>
									</div>	
								</div>
								<div class="column-3">
									<p class="participacao">33,33%</p>
								</div>
								<div class="column-3 right-aligned">
									<button class="btn secondary outlined">
										Relatório
									</button>
								</div>				
							</div>															
						</div>

					</div>
				</section>

				<section id="menuEmpresaDetalhes" class="menu-empresa-detalhes">
					<header>
						<div class="nome">Novo Perfil</div>
						<div class="acoes">
							<button id="btnRelatorios" class="btn secondary outlined">
								Relatório
							</button>
							<a href="" class="fechar-menu">
								<i class="icon nv-icon-remove"></i>
							</a>
						</div>
					</header>
					<div class="menu-body">
						<div class="tabs-wrapper">
							<ul class="tabs-group" data-tabs-group="tabsGroup">
								<li class="tab active"><a href="#tab1"><span class="icon nv-icomoon-clipboard-text"></span></a></li>
								<li class="tab"><a href="#tab2"><span class="icon icon nv-icomoon-library1"></span></a></li>
								<li class="tab"><a href="#tab3"><span class="icon nv-icomoon-camera-2"></span></a></li>								
							</ul>

							<div class="tabs-content-wrapper" data-tabs-target-group="tabsGroup">
								<div class="tab-content active" id="tab1">
									<div class="lista-dados">
										<div class="lista-dados-item">
											<div class="titulo">CNPJ</div>
											<div class="valor">123.546.32T.234</div>
										</div>
										
										<div class="lista-dados-item">
											<div class="titulo">RAZÃO SOCIAL</div>
											<div class="valor">IND. E COMERCIO VAREJISTA LTDA.</div>
										</div>
										
										<div class="lista-dados-item">
											<div class="titulo">ABERTURA</div>
											<div class="valor">09/04/2012</div>
										</div>
										
										<div class="lista-dados-item">
											<div class="titulo">SITUAÇÃO</div>
											<div class="valor">ATIVA</div>
										</div>
										
										<div class="lista-dados-item">
											<div class="titulo">CNAE</div>
											<div class="valor">26.89-3-99 | NOME DA ATIVIDADE</div>
										</div>
									</div>

									<div class="lista-antigos-proprietarios">
										<header>
											Antigos proprietários
										</header>
										<div class="lista-body">
											<div class="lista-item">
												<span class="nome">
													<span class="highlight-text has-icon nv-icomoon-user">Alexandre Lopes Paz</span>
												</span>
												<span class="documento">
													CPF: 230.555.666.22
												</span>
											</div>
											
											<div class="lista-item">
												<span class="nome">
													<span class="highlight-text has-icon nv-icomoon-user">Alexandre Lopes Paz</span>
												</span>
												<span class="documento">
													CPF: 230.555.666.22
												</span>
											</div>
											
											<div class="lista-item">
												<span class="nome">
													<span class="highlight-text has-icon nv-icomoon-user">Alexandre Lopes Paz</span>
												</span>
												<span class="documento">
													CPF: 230.555.666.22
												</span>
											</div>
											
											<div class="lista-item">
												<span class="nome">
													<span class="highlight-text has-icon nv-icomoon-user">Alexandre Lopes Paz</span>
												</span>
												<span class="documento">
													CPF: 230.555.666.22
												</span>
											</div>
										</div>
									</div>
								</div>
								<div class="tab-content" id="tab2">
									<div class="boxes-group">
										<div class="box-content">
											<h2>Aba 2</h2>
											Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos, consequatur deserunt quas nam, cumque a velit quam sunt soluta porro tempore sint nobis sapiente omnis facilis nostrum possimus ipsum. Tempore!
										</div>
										<div class="box-content grey-bg">
											Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos, consequatur deserunt quas nam, cumque a velit quam sunt soluta porro tempore sint nobis sapiente omnis facilis nostrum possimus ipsum. Tempore!
										</div>										
									</div>
								</div>
								<div class="tab-content" id="tab3">
									<div class="boxes-group">
										<div class="box-content">
											<h2>Aba 3</h2>
											Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos, consequatur deserunt quas nam, cumque a velit quam sunt soluta porro tempore sint nobis sapiente omnis facilis nostrum possimus ipsum. Tempore!
										</div>
										<div class="box-content grey-bg">
											Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos, consequatur deserunt quas nam, cumque a velit quam sunt soluta porro tempore sint nobis sapiente omnis facilis nostrum possimus ipsum. Tempore!
										</div>										
									</div>
								</div>																
							</div>

						</div>

					</div>
				</section>

			</div>
		</main>

		<?php include("includes/scripts.php"); ?>
		<script src="js/mapa.js"></script>
	</body>
</html>