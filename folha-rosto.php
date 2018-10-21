<?php include("includes/head.php"); ?>
  <body>
    
  	<?php include("includes/header-monitoria.php"); ?>

		<main class="ls-main doc">
			<div id="docWrapper" class="doc-wrapper no-sidebar">
				<div id="docPrincipal" class="doc-principal">

					<div class="doc-menu">
						<a href="capa.php" class="doc-menu-titulo">
							<span class="ls-show-sidebar ls-ico-text2"></span>
							Capa
						</a>
						<ol>
							<li class="doc-menu-item atual">
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
								<a href="consulta-receita-federal-1.php">04. Grupo Fonte 01</a>
								<ol class="doc-submenu">
									<li class="doc-menu-item">
										<a href="consulta-receita-federal.php">04.1 Nome da Fonte 1</a>
									</li>
									<li class="doc-menu-item">
										<a href="consulta-receita-federal-template-2.php">04.2 Nome da Fonte 2</a>
									</li>
								</ol>
							</li>
						</ol>
					</div>

					<div class="doc-pagina folha-rosto">
						<div class="conteudo-wrapper">
							<div class="titulo">
								Jinglebell Representações Comercias
							</div>

							<div class="data">
								14/06/2014 às 14:00
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