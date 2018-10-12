<?php include("includes/head.php"); ?>
  <body>
    
    <?php include("includes/header.php"); ?>

    <?php include("includes/sidebar.php"); ?>

		<main class="ls-main doc">
			<div id="docWrapper" class="doc-wrapper">
				<div id="docPrincipal" class="doc-principal">

					<div class="doc-menu">
						<ol>
							<li>
								<a href="">Folha de rosto</a>
							</li>
							<li>
								<a href="">Sumário</a>
							</li>
							<li>
								<a href="">Prefácio</a>
							</li>
							<li>
								<a href="">Grupo Fonte 01</a>
								<ol>
									<li>
										<a href="">Nome da Fonte 1</a>
									</li>
									<li>
										<a href="">Nome da Fonte 2</a>
									</li>
								</ol>
							</li>
						</ol>
					</div>

					<div class="doc-pagina">
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, sint reprehenderit aperiam voluptatem natus voluptas iure dolore ea adipisci, molestiae amet quidem voluptates placeat beatae asperiores qui! Doloribus, quam magni?</p>
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