<?php include("includes/head.php"); ?>
  <body>

    <?php include("includes/header-monitoria.php"); ?>

		<main class="ls-main mapa">
			<div id="mapaWrapper" class="mapa-wrapper">

				<div class="item-mapa item-usuario">

					<div class="fonte fonte-1">
						Fonte 1
					</div>

					<img src="assets/img/avatar-usuario.png" alt="" class="avatar" />

					<button class="btn btn-agrupamentos">
						<span class="icon nv-icon-zoom"></span>
					</button>

					<div class="dados">
						<div class="nome">André Cintra</div>
						<div class="documento">CPF: 999.999.999-99</div>
					</div>

					<section id="menuAgrupamentos" class="ls-box menu-agrupamentos">
						<div id="etapa1" class="etapa-1">
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

						<div id="etapa2" class="etapa-2">
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

				

				<div class="item-mapa item-relatorios">
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
		</main>

		<?php include("includes/scripts.php"); ?>
		<script src="assets/js/mapa.js"></script>
	</body>
</html>