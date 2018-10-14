<?php include("includes/head.php"); ?>
  <body>
    
    <?php include("includes/header.php"); ?>

		<main class="ls-main doc">
			<div id="docWrapper" class="doc-wrapper no-sidebar">
				<div id="docPrincipal" class="doc-principal">

					<div class="doc-menu">
					<a href="capa.php" class="doc-menu-titulo atual">
							<span class="ls-show-sidebar ls-ico-text2"></span>
							Capa
						</a>
						<ol>
							<li class="doc-menu-item">
								<span class="marcador"></span>
								<a href="folha-rosto.php">01. Folha de rosto</a>
							</li>
							<li class="doc-menu-item">
								<span class="marcador"></span>
								<a href="sumario.php">02. Sumário</a>
							</li>
							<li class="doc-menu-item">
								<span class="marcador"></span>
								<a href="prefacio.php">03. Prefácio</a>
							</li>
							<li class="doc-menu-item">
								<span class="marcador"></span>
								<a href="">04. Grupo Fonte 01</a>
								<ol class="doc-submenu">
									<li class="doc-menu-item">
										<a href="">04.1 Nome da Fonte 1</a>
									</li>
									<li class="doc-menu-item">
										<a href="">04.2 Nome da Fonte 2</a>
									</li>
								</ol>
							</li>
						</ol>
					</div>

					<div class="doc-pagina capa">
						<div class="conteudo-wrapper">
							<div class="item">
								<span class="item-nome">Critério Consultado:</span>
								<span class="item-valor">111.111.111-11</span>
							</div>
							
							<div class="item">
								<span class="item-nome">Nome:</span>
								<span class="item-valor">Joaquim Antônio da Silva</span>
							</div>
							
							<div class="item">
								<span class="item-nome">Homônimo:</span>
								<span class="item-valor">Joaquim Antônio da Silva</span>
							</div>

							<div class="item duas-colunas">
								<div class="item-col">
									<span class="item-nome">Criado em:</span>
									<span class="item-valor">15 de janeiro de 2018</span>
								</div>
								<div class="item-col">
									<span class="item-nome">Última atualização</span>
									<span class="item-valor">18 de junho de 2018</span>
								</div>
							</div>
							
							<div class="item centralizado">
								<span class="item-nome">Pessoas envolvidas na análise:</span>
								<span class="item-valor">
								Wanderley Marmello - Dpto. Jurídico | Shirley Sanches - Dpto. de cobrança Cássio Ferreira Martins - Análise de Crédito
								</span>
							</div>
						</div>
					</div>

				</div>
			</div>
		</main>

		<?php include("includes/scripts.php"); ?>
		<script src="assets/js/doc.js"></script>
	</body>
</html>