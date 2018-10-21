<?php include("includes/head.php"); ?>
  <body>

	<?php include("includes/header-mapa.php"); ?>

		<main class="ls-main mapa">
			<div id="mapaWrapper" class="mapa-wrapper">

				<div class="item-mapa item-usuario">

					<div class="item-mapa-inner">
						<div class="fonte fonte-1">
							Fonte 1
						</div>

						<img src="assets/img/avatar-usuario.png" alt="" class="avatar" />

						<button id="btnMenuAgrupamentos" class="btn btn-agrupamentos">
							<span class="icon nv-icon-zoom"></span>
						</button>

						<div class="dados">
							<div class="nome">André Cintra</div>
							<div class="documento">CPF: 999.999.999-99</div>
						</div>

						<section id="menuAgrupamentos" class="ls-box menu-agrupamentos">
							<div id="agrupamentosEtapa1" class="etapa-1">
								<header>
									Agrupamentos
								</header>
								<button class="item-line">
									<span class="texto-destaque">Agrupamento Fonte 1</span>
									<div class="nv-icon-calendar">5 dias</div>
								</button>
								<button class="item-line">
									<span class="texto-destaque">Agrupamento Fonte 1</span>
									<div class="nv-icon-calendar">5 dias</div>
								</button>
								<button class="item-line">
									<span class="texto-destaque">Agrupamento Fonte 1</span>
									<div class="nv-icon-calendar">5 dias</div>
								</button>
								<button class="item-line">
									<span class="texto-destaque">Agrupamento Fonte 1</span>
									<div class="nv-icon-calendar">5 dias</div>
								</button>
							</div>

							<div id="agrupamentosEtapa2" class="etapa-2">
								<header>
									<span class="nv-icon-arrow-left-thin">Agrupamento fonte 1</span>
								</header>
								<button class="item-line">
									<span class="texto-destaque">Fonte 1</span>
									<div class="nv-icon-calendar">5 dias</div>
								</button>
								<button class="item-line">
									<span class="texto-destaque">Fonte 1</span>
									<div class="nv-icon-calendar">5 dias</div>
								</button>
								<button class="item-line">
									<span class="texto-destaque">Fonte 1</span>
									<div class="nv-icon-calendar">5 dias</div>
								</button>
								<button class="item-line">
									<span class="texto-destaque">Fonte 1</span>
									<div class="nv-icon-calendar">5 dias</div>
								</button>
							</div>
						</section>
					</div>
				</div>

				<div id="itemRelatorios" class="item-mapa item-relatorios">
					<div class="item-mapa-inner">
						<img src="assets/img/avatar-usuario.png" alt="" class="avatar" />

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
						<button id="btnEmpresaDetalhes" class="ls-btn ls-btn-primary">
							Detalhes
						</button>
					</header>
					<div class="menu-body">
						<table class="ls-table ls-no-margin-top">
							<thead>
								<tr>
									<th>Quadro Societário </th>
									<th>Participação</th>
									<th>&nbsp;</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>
										<div class="user-data">
											<img src="assets/img/avatar-usuario.png" class="avatar" alt="Nome do cliente">
											<div class="user-data-info">
												<p class="user-data-header">André Cintra Gomes da Silva</p>
												<p class="user-data-description">CPF:368.222.666.77</p>
											</div>
										</div>
									</td>
									<td class="participacao">
										33,33%
									</td>
									<td class="right-aligned">
										<button class="ls-btn ls-btn-secondary outlined">
											Relatório
										</button>
									</td>
								</tr>
								<tr>
									<td>
										<div class="user-data">
											<img src="assets/img/avatar-usuario.png" class="avatar" alt="Nome do cliente">
											<div class="user-data-info">
												<p class="user-data-header">André Cintra Gomes da Silva</p>
												<p class="user-data-description">CPF:368.222.666.77</p>
											</div>
										</div>
									</td>
									<td class="participacao">
										33,33%
									</td>
									<td class="right-aligned">
										<button class="ls-btn ls-btn-secondary outlined">
											Relatório
										</button>
									</td>
								</tr>
								<tr>
									<td>
										<div class="user-data">
											<img src="assets/img/avatar-usuario.png" class="avatar" alt="Nome do cliente">
											<div class="user-data-info">
												<p class="user-data-header">André Cintra Gomes da Silva</p>
												<p class="user-data-description">CPF:368.222.666.77</p>
											</div>
										</div>
									</td>
									<td class="participacao">
										33,33%
									</td>
									<td class="right-aligned">
										<button class="ls-btn ls-btn-secondary outlined">
											Relatório
										</button>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</section>

				<section id="menuEmpresaDetalhes" class="menu-empresa-detalhes">
					<header>
						<div class="nome">Novo Perfil</div>
						<div class="acoes">
							<button id="btnRelatorios" class="ls-btn ls-btn-secondary outlined">
								Relatório
							</button>
							<a href="" class="fechar-menu">
								<span class="icon nv-icon-remove"></span>
							</a>
						</div>
					</header>
					<div class="menu-body">
						<ul class="ls-tabs-nav box-tabs">
							<li class="ls-active">
								<a data-ls-module="tabs" href="#tab1">
									<span class="icon nv-icon-note-board"></span>
								</a>
							</li>
							<li>
								<a data-ls-module="tabs" href="#tab2">
									<span class="icon nv-icon-balance"></span>
								</a>
							</li>
							<li>
								<a data-ls-module="tabs" href="#tab3">
									<span class="icon nv-icon-camera"></span>
								</a>
							</li>
						</ul>
						<div class="ls-tabs-container">

							<div id="tab1" class="ls-tab-content ls-active">
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
												<span class="texto-destaque icon nv-icon-customer">Alexandre Lopes Paz</span>
											</span>
											<span class="documento">
												CPF: 230.555.666.22
											</span>
										</div>
										
										<div class="lista-item">
											<span class="nome">
												<span class="texto-destaque icon nv-icon-customer">Alexandre Lopes Paz</span>
											</span>
											<span class="documento">
												CPF: 230.555.666.22
											</span>
										</div>
										
										<div class="lista-item">
											<span class="nome">
												<span class="texto-destaque icon nv-icon-customer">Alexandre Lopes Paz</span>
											</span>
											<span class="documento">
												CPF: 230.555.666.22
											</span>
										</div>
										
										<div class="lista-item">
											<span class="nome">
												<span class="texto-destaque icon nv-icon-customer">Alexandre Lopes Paz</span>
											</span>
											<span class="documento">
												CPF: 230.555.666.22
											</span>
										</div>
									</div>
								</div>
							</div>

							<div id="tab2" class="ls-tab-content">
							</div>

							<div id="tab3" class="ls-tab-content">
							</div>
						</div>
					</div>
				</section>

			</div>
		</main>

		<?php include("includes/scripts.php"); ?>
		<script src="assets/js/mapa.js"></script>
	</body>
</html>