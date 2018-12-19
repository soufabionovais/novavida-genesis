<?php include("includes/head.php"); ?>
<body>

	<?php include ("includes/header.php"); ?>
	
	<div class="main-wrap">

		<?php include("includes/sidebar.php"); ?>

		<main class="main-content">
			<header class="page-header">
				<h1 class="page-header-title">Dashboard</h1>
			</header>

			<div class="dashboard">
				<div class="row">
					<div class="col">
						<div class="box-content">
							<div class="row">
								<div class="col">
									<div class="box-notificacoes orange">
										<a href="#">
											<span class="icone nv-icon-talking"></span>
											Alerta de Monitoria <span class="label-tag contador">999</span>
										</a>
									</div>
								</div>
								<div class="col">
									<div class="box-notificacoes purple">
										<a href="#">
											<span class="icone nv-icon-talking"></span>
											Chamados <span class="label-tag contador">999</span>
										</a>
									</div>
								</div>
								<div class="col">
									<div class="box-notificacoes blue">
										<a href="#">
											<span class="icone nv-icon-talking"></span>
											Mensagens <span class="label-tag contador">999</span>
										</a>
									</div>
								</div>
								<div class="col">
									<div class="box-notificacoes green">
										<a href="liberar-fontes.php">
											<span class="icone nv-icon-talking"></span>
											Aprovar Solicitações <span class="label-tag contador">999</span>
										</a>
									</div>
								</div>
							</div>
						</div>          
					</div>
				</div>
				<div class="row">
					<div class="col-8">
						<div class="box-content">
							<div class="data-container" data-gutter="2.5">
								<div class="data-header">
									<div class="column-7">Relatório em andamento</div>
									<div class="column-3">Andamento</div>
									<div class="column-2 d-flex justify-content-end">Ações</div>
								</div>
								<div class="data-item">
									<div class="column-7">
										<div class="user-data">
											<img src="img/avatar-usuario.png" alt="Nome do usuário" class="avatar">
											<div class="user-data-info">
												<p class="user-data-header">Alexandre Loes Paz <a href="#" class="texto-destaque">| #5558468</a></p>
												<p class="user-data-description has-icon nv-icon-talk">333.222.666/0001-00</p>
											</div>
										</div>	
									</div>
									<div class="column-3">
										<div class="progressbar_container">
											<span class="progress" style="width: 50%"></span>
										</div>
									</div>
									<div class="column-2">
										<div class="icon-buttons-group justify-content-end">
											<button class="btn is-icon-btn primary"><i class="nv-icon-check-circle-thin"></i></button>
											<button class="btn is-icon-btn"><i class="nv-icon-remove-circle"></i></button>
										</div>
									</div>				
								</div>
								<div class="data-item">
									<div class="column-7">
										<div class="user-data">
											<img src="img/avatar-usuario.png" alt="Nome do usuário" class="avatar">
											<div class="user-data-info">
												<p class="user-data-header">Alexandre Loes Paz <a href="#" class="texto-destaque">| #5558468</a></p>
												<p class="user-data-description has-icon nv-icon-talk">333.222.666/0001-00</p>
											</div>
										</div>	
									</div>
									<div class="column-3">
										<div class="progressbar_container failed has-icon nv-icon-info-circle">
											<span class="progress" style="width: 15%"></span>
										</div>
									</div>
									<div class="column-2">
										<div class="icon-buttons-group justify-content-end">
											<button class="btn is-icon-btn primary"><i class="nv-icon-check-circle-thin"></i></button>
											<button class="btn is-icon-btn"><i class="nv-icon-remove-circle"></i></button>
										</div>
									</div>				
								</div>	
							</div>
						</div>   
						<div class="row">
							<div class="col">
								<div class="boxes-group box-livros-recentes">
									<div class="box-content">
										<header class="header blue-gradient-bg">
											<div class="row d-flex align-items-center">
												<div class="col">
													Livros Recentes
												</div>
												<div class="col">
													<input type="text" class="select-field" data-url="data/periodos.json" data-search-field-hidden="true" name="periodo" data-placeholder="Período" />
												</div>
											</div>
											<div class="row">
												<div class="col">
													<div class="total-livros-recentes nv-icomoon-book-2">2453</div>
												</div>
											</div>
										</header>
									</div>
									<div class="box-content content-area grey-bg">
										<div class="item-line">
											<span class="highlight-text has-icon nv-icomoon-book-2"><a href="#" title="Nome do livro">Alpha Contabilidade</a></span>
											<span class="icone-calendario has-icon nv-icomoon-calendar-full">25/06/94</span>
										</div>
										<div class="item-line">
											<span class="highlight-text has-icon nv-icomoon-book-2"><a href="#" title="Nome do livro">Alpha Contabilidade</a></span>
											<span class="icone-calendario has-icon nv-icomoon-calendar-full">25/06/94</span>
										</div>
										<div class="item-line">
											<span class="highlight-text has-icon nv-icomoon-book-2"><a href="#" title="Nome do livro">Alpha Contabilidade</a></span>
											<span class="icone-calendario has-icon nv-icomoon-calendar-full">25/06/94</span>
										</div>
										<div class="item-line">
											<span class="highlight-text has-icon nv-icomoon-book-2"><a href="#" title="Nome do livro">Alpha Contabilidade</a></span>
											<span class="icone-calendario has-icon nv-icomoon-calendar-full">25/06/94</span>
										</div>
										<div class="item-line">
											<span class="highlight-text has-icon nv-icomoon-book-2"><a href="#" title="Nome do livro">Alpha Contabilidade</a></span>
											<span class="icone-calendario has-icon nv-icomoon-calendar-full">25/06/94</span>
										</div> 
									</div>   
									<div class="box-content center-aligned button-wrapper">
										<a href="livros.php" class="highlight-text center-aligned">Ver mais livros</a>
									</div>                                     
								</div>
							</div>
							<div class="col">
								<div class="boxes-group box-feed-noticias">
									<div class="box-content">
										<header class="header small-header blue-gradient-bg">
											<div class="row d-flex align-items-center">
												<div class="col">
													Feed de notícias
													<i class="icone nv-icomoon-bell"></i>
												</div>
											</div>
										</header>
									</div>
									<div class="box-content content-area grey-bg">
										<div class="item-line item-line-block d-block">
											<span class="highlight-text icone-calendario has-icon nv-icomoon-calendar-full"><a href="#" title="Nome da notícia">Hoje 16:24</a></span>
											<div class="sub-content">Fonte da empresa Piraju atualizada</div>
										</div>
										<div class="item-line item-line-block d-block">
											<span class="highlight-text icone-calendario has-icon nv-icomoon-calendar-full"><a href="#" title="Nome da notícia">Ontem 16:24</a></span>
											<div class="sub-content">Fonte da empresa Piraju atualizada</div>
										</div>
										<div class="item-line item-line-block d-block">
											<span class="highlight-text icone-calendario has-icon nv-icomoon-calendar-full"><a href="#" title="Nome da notícia">25/06/94</a></span>
											<div class="sub-content">Fonte da empresa Piraju atualizada</div>
										</div>
										<div class="item-line item-line-block d-block">
											<span class="highlight-text icone-calendario has-icon nv-icomoon-calendar-full"><a href="#" title="Nome da notícia">25/06/94</a></span>
											<div class="sub-content">Fonte da empresa Piraju atualizada</div>
										</div>
										<div class="item-line item-line-block d-block">
											<span class="highlight-text icone-calendario has-icon nv-icomoon-calendar-full"><a href="#" title="Nome da notícia">25/06/94</a></span>
											<div class="sub-content">Fonte da empresa Piraju atualizada</div>
										</div> 
									</div>  
									<div class="box-content center-aligned button-wrapper">
										<a href="#" class="highlight-text center-aligned">Ver mais notícias</a>
									</div>                                     
								</div>                
							</div>
						</div>
					</div>
					<div class="col-4">
						<div class="boxes-group box-loja-fontes-container">
							<div class="box-content">
								<div class="box-content-inner blue-gradient-bg">
									<h2 class="box-content-title center-aligned  has-icon nv-icomoon-store">Loja de Fontes</h2>
									<div class="content-area">
										<div class="box-content box-loja-fontes">
											<h3 class="box-content-title">Justiça Federal DF</h3>
											<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.</p>  
											<a href="#" class="btn primary">Solicitar</a>
										</div>
										<div class="box-content box-loja-fontes">
											<h3 class="box-content-title">Justiça Federal DF</h3>
											<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.</p>  
											<a href="#" class="btn primary">Solicitar</a>
										</div>
										<div class="box-content box-loja-fontes">
											<h3 class="box-content-title">Justiça Federal DF</h3>
											<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.</p>  
											<a href="#" class="btn primary">Solicitar</a>
										</div>
										<div class="box-content box-loja-fontes">
											<h3 class="box-content-title">Justiça Federal DF</h3>
											<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.</p>  
											<a href="#" class="btn primary">Solicitar</a>
										</div>    
									</div>                                                        
								</div>
							</div>  

							<div class="box-content center-aligned button-wrapper">
								<a href="#" class="highlight-text">Ver mais fontes</a>              
							</div>
						</div>
					</div>                  

				</div>

				<div class="row">
					<div class="col-12">
						<div class="box-content ranking-relatorios">
							<div class="row">
								<div class="col-5">
									<div class="box-ranking-relatorios blue-gradient-bg">
										<div class="row d-flex align-items-center">
											<div class="col-7">
												Ranking de Relatórios
											</div>
											<div class="col">
												<input type="text" class="select-field" data-url="data/periodos.json" data-search-field-hidden="true" name="periodo" data-placeholder="Período" />
											</div>
										</div>

										<div class="box-content box-grafico">
											<div class="row">
												<div class="col">
													<div class="item-line item-line-block d-block item-pf">
														<span class="highlight-text">Pessoa física</span>
														<div class="sub-content">31550</div>
													</div>  
													<div class="item-line item-line-block d-block item-pj">
														<span class="highlight-text">Pessoa jurídica</span>
														<div class="sub-content">31550</div>
													</div>                                
												</div>
												<div class="col">
													<div class="chart-wrapper doughnut">
														<canvas class="doughnut-chart" width="1" height="1"></canvas>
														<div class="chart-background"></div>
														<span class="chart-unique-value">
															<span class="label">Total</span>
															<span class="js-count">
																64
															</span>
														</span>
													</div>                              
												</div>
											</div>

										</div>

									</div>
								</div>
								<div class="col">
									<section class="box-content box-aprovacao">
										<header>
											<h3 class="box-titulo has-icon nv-icomoon-user highlight-text">Alexandre Lopes Paz</h3>
										</header>
										<div class="item-line inverted">
											<span>Aprovou</span>
											<span class="highlight-text">1988</span>
										</div>
										<div class="item-line inverted">
											<span>Pendente</span>
											<span class="highlight-text">199</span>
										</div>      
										<div class="item-line inverted">
											<span>Reprovou</span>
											<span class="highlight-text">31</span>
										</div>   
										<footer class="footer center-aligned"><strong class="bold">TOTAL</strong>: 230</footer>                        
									</section>                 
								</div>
								<div class="col">
									<section class="box-content box-aprovacao">
										<header>
											<h3 class="box-titulo has-icon nv-icomoon-user highlight-text">Alexandre Lopes Paz</h3>
										</header>
										<div class="item-line inverted">
											<span>Aprovou</span>
											<span class="highlight-text">1988</span>
										</div>
										<div class="item-line inverted">
											<span>Pendente</span>
											<span class="highlight-text">199</span>
										</div>      
										<div class="item-line inverted">
											<span>Reprovou</span>
											<span class="highlight-text">31</span>
										</div>   
										<footer class="footer center-aligned"><strong class="bold">TOTAL</strong>: 230</footer>                        
									</section>                 
								</div>
								<div class="col">
									<section class="box-content box-aprovacao">
										<header>
											<h3 class="box-titulo has-icon nv-icomoon-user highlight-text">Alexandre Lopes Paz</h3>
										</header>
										<div class="item-line inverted">
											<span>Aprovou</span>
											<span class="highlight-text">1988</span>
										</div>
										<div class="item-line inverted">
											<span>Pendente</span>
											<span class="highlight-text">199</span>
										</div>      
										<div class="item-line inverted">
											<span>Reprovou</span>
											<span class="highlight-text">31</span>
										</div>   
										<footer class="footer center-aligned"><strong class="bold">TOTAL</strong>: 230</footer>                        
									</section>                 
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