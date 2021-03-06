<?php include("includes/head.php"); ?>
  <body>
    
  	<?php include("includes/header-monitoria.php"); ?>

		<main class="main doc">
			<div id="docWrapper" class="doc-wrapper no-sidebar">
				<div id="docPrincipal" class="doc-principal">

					<div class="doc-menu">
						<a href="capa.php" class="doc-menu-titulo atual nv-icomoon-book-2">
							<span class="show-sidebar ico-text2"></span>
							Capa
						</a>
						<ol>
							<li class="doc-menu-item">
								<span class="marcador"></span>
								<a href="folha-rosto.php">01. Folha de rosto</a>
							</li>
							<li class="doc-menu-item atual">
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

					<div class="doc-pagina sumario">
						<div class="conteudo-wrapper">
							<div class="custom-image">
								<img src="img/doc/brasao-republica-transparencia.png" alt="">
							</div>							
							<div class="titulo">
								Sumário
							</div>

							<div class="sumario-itens">
								<div class="item">
									<span class="nome">Prefácio</span>
									<span class="espacador"></span>
									<span class="pagina">03</span>
								</div>
								<div class="item">
									<span class="nome">2 Receita federal</span>
									<span class="espacador"></span>
									<span class="pagina">05</span>
								</div>
								<div class="item">
									<span class="nome">3 Ministério público</span>
									<span class="espacador"></span>
									<span class="pagina">10</span>
								</div>
								<div class="item">
									<span class="nome">3.1 Consulta de cadastro</span>
									<span class="espacador"></span>
									<span class="pagina">11</span>
								</div>
								<div class="item">
									<span class="nome">3.2 Consulta de processos</span>
									<span class="espacador"></span>
									<span class="pagina">12</span>
								</div>
								<div class="item">
									<span class="nome">3.2.1 declarações</span>
									<span class="espacador"></span>
									<span class="pagina">13</span>
								</div>
								<div class="item">
									<span class="nome">4 Polícia federal</span>
									<span class="espacador"></span>
									<span class="pagina">14</span>
								</div>
								<div class="item">
									<span class="nome">5 Conclusão</span>
									<span class="espacador"></span>
									<span class="pagina">15</span>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</main>

		<?php include("includes/scripts.php"); ?>
		<script src="js/doc.js"></script>
	</body>
</html>