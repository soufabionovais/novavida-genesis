<?php include("includes/head.php"); ?>
  <body>
    
    <?php include("includes/header.php"); ?>

    <?php include("includes/sidebar.php"); ?>

		<main class="ls-main doc">
			<div id="docWrapper" class="doc-wrapper">
				<div id="docPrincipal" class="doc-principal">

					<div class="doc-menu">
						<a href="capa.php" class="doc-menu-titulo">
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
									<li class="doc-menu-item atual">
										<a href="">04.1 Nome da Fonte 1</a>
									</li>
									<li class="doc-menu-item">
										<a href="">04.2 Nome da Fonte 2</a>
									</li>
								</ol>
							</li>
						</ol>
					</div>

					<div class="doc-pagina consulta-receita-federal">
						<div class="conteudo-wrapper">

							<div class="doc-header">

								<div class="doc-row">
									<h2 class="doc-titulo">Nome da Fonte</h2>
									<div class="doc-status">
										<span class="icon ls-ico-checkmark-circle"></span>
										<span class="descricao">
											aprovado por Leilane Alves em 10/02/2018 às 16:30
										</span>
									</div>
								</div>

								<div class="aviso-grau-risco">
									<b>! Grau de risco desta fonte:</b> Nunc interdum, nisi in molestie ornare, lorem lacus port
								</div>

							</div>

						</div>
					</div>

					<div id="sidebarMenu" class="sidebar-menu">
						<button class="btn btn-info" data-conteudo="info">Info</button>
					</div>

				</div>
				<div id="docSidebar" class="doc-sidebar"></div>
			</div>
		</main>

		<?php include("includes/scripts.php"); ?>
		<script src="assets/js/doc.js"></script>
	</body>
</html>