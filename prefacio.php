<?php include("includes/head.php"); ?>
<body>

	<?php include("includes/header-monitoria.php"); ?>

		<main class="main doc">
			<div id="docWrapper" class="doc-wrapper no-sidebar">
				<div id="docPrincipal" class="doc-principal">

					<?php include("includes/doc-menu.php"); ?>

					<div class="doc-pagina consulta-receita-federal dashboard">
						<div class="conteudo-wrapper">

							<div class="doc-header">
								<div class="doc-row">
									<h2 class="doc-titulo">Prefácio</h2>
									<div class="inline-buttons-group">
										<button class="btn secondary outlined large">Reprovar</button>
										<button class="btn primary large">Aprovar</button>
									</div>
								</div>

							</div>

							<div class="doc-bloco">
								<div class="boxes-group box-resumo">
									<div class="box-content">
										<header class="header small-header blue-gradient-bg">
											<div class="row d-flex align-items-center">
												<div class="col">
													Resumo
													<i class="icone nv-icomoon-book-2"></i>
												</div>
											</div>
										</header>
									</div>
									<div class="box-content grey-bg content-area">

										<div class="row">
											<div class="col">
												<div class="box-notificacoes orange">
													<a href="#">
														<span>
															<span class="icone nv-icon-talking"></span>
														Alerta de Monitoria
														</span>
														<span class="tag contador">999</span>
													</a>
												</div>

												<div class="box-notificacoes blue">
													<a href="#">
														<span>
															<span class="icone nv-icon-talking"></span>
															Mensagens
														</span>
														<span class="tag contador">999</span>
													</a>
												</div>
											</div>

											<div class="col">
												<div class="box-notificacoes green">
													<a href="liberar-fontes.php">
														<span>
															<span class="icone nv-icon-talking"></span>
															Aprovar Solicitações
														</span>
														<span class="tag contador">999</span>
													</a>
												</div>

												<div class="box-notificacoes purple">
													<a href="#">
														<span>
															<span class="icone nv-icon-talking"></span>
															Chamados
														</span>
														<span class="tag contador">999</span>
													</a>
												</div>
											</div>
										</div>

									</div>
								</div>
							</div>

							<div class="doc-bloco">
								<div class="box-regua-risco">
									<div class="titulo">
										Régua de risco
									</div>
									<div class="regua-wrapper">
										<input type="hidden" class="slider-input" value="0" />
									</div>
								</div>
							</div>

							<div class="doc-bloco duas-colunas">

								<div class="doc-bloco-col">

									<div class="boxes-group box-resumo">
										<div class="box-content">
											<header class="header small-header blue-gradient-bg">
												<div class="row d-flex align-items-center">
													<div class="col-7">
														Probabilidade de Processos
													</div>
													<div class="col">
														<input type="text" class="select-field" data-url="data/periodos.json" data-search-field-hidden="true" name="periodo" data-placeholder="Período" />
													</div>
												</div>
											</header>
										</div>
										<div class="box-content grey-bg content-area">

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

								<div class="doc-bloco-col">

									<div class="boxes-group box-resumo">
										<div class="box-content">
											<header class="header small-header blue-gradient-bg">
												<div class="row d-flex align-items-center">
													<div class="col-7">
														Informações Gerais
													</div>
													<div class="col">
														<input type="text" class="select-field" data-url="data/periodos.json" data-search-field-hidden="true" name="periodo" data-placeholder="Período" />
													</div>
												</div>
											</header>
										</div>
										<div class="box bg-grey content-area">

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
							</div>

							<div class="doc-bloco workflow">
								<div class="titulo">WorkFlow</div>

								<div class="conteudo">
									<div class="marcacao">
										<div class="marcador">
											<i class="icone nv-icon-check-circle-thin-thin-thin"></i>
										</div>
									</div>

									<div class="lista-itens">
										<div class="item aprovado">
											<div class="header">
												<div>
													<i class="has-icon nv-icomoon-user"></i>
													<span class="nome highlight-text">
														Alexandre Lopes Paz
													</span>
													<span class="departamento">
														Departamento 0001
													</span>
												</div>
												<div class="data">
													<div class="highlight-text has-icon nv-icomoon-calendar-full">Ontem 08:46</div>
												</div>
											</div>

											<div class="body">
												<div class="comentario">
													<i class="icone nv-icon-talk"></i>
													Integer sollicitudin, tortor at tempor placerat quam urna
												</div>
												<div class="label-tag positive has-icon nv-icomoon-checkmark">
													Aprovado
												</div>
											</div>
										</div>
										
										<div class="item reprovado">
											<div class="header">
												<div>
													<i class="has-icon nv-icomoon-user"></i>
													<span class="nome highlight-text">
														Alexandre Lopes Paz
													</span>
													<span class="departamento">
														Departamento 0001
													</span>
												</div>
												<div class="data">
													<div class="highlight-text has-icon nv-icomoon-calendar-full">Ontem 08:46</div>
												</div>
											</div>

											<div class="body">
												<div class="comentario">
													<i class="icone nv-icon-talk"></i>
													Integer sollicitudin, tortor at tempor placerat quam urna
												</div>
												<div class="label-tag negative has-icon nv-icomoon-cross1">
													Reprovado
												</div>
											</div>
										</div>
										
										<div class="item">
											<div class="header">
												<div>
													<i class="has-icon nv-icomoon-user"></i>
													<span class="nome highlight-text">
														Alexandre Lopes Paz
													</span>
													<span class="departamento">
														Departamento 0001
													</span>
												</div>
												<div class="data">
													<div class="highlight-text has-icon nv-icomoon-calendar-full">Ontem 08:46</div>
												</div>
											</div>

											<div class="body">
												<div class="comentario">
													<i class="icone nv-icon-talk"></i>
													Integer sollicitudin, tortor at tempor placerat quam urna
												</div>
												<div class="label-tag">
													Pendente
												</div>
											</div>
										</div>
										
									</div>
								</div>
							</div>

						</div>

						<div class="box-inserir-conclusao">
							<div class="titulo">
								Conclusão
							</div>
							<div class="caixa-texto">
								<div class="form form-horizontal align-items-center row">
									<div class="col-sm-9">
										<label class="form-label">
											<textarea class="input-text textarea" placeholder="Digite o resultado da análise"></textarea>
										</label>
									</div>        
									<div class="col-sm-3 center-aligned wrapper">
										<button class="btn primary">
											Gravar
										</button>
									</div>
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