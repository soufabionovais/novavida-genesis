<?php include("includes/head.php"); ?>
<body>

	<?php include("includes/header-monitoria.php"); ?>

	<?php include("includes/sidebar.php"); ?>

		<main class="ls-main doc">
			<div id="docWrapper" class="doc-wrapper no-sidebar">
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
							<li class="doc-menu-item atual">
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

					<div class="doc-pagina consulta-receita-federal dashboard">
						<div class="conteudo-wrapper">

							<div class="doc-header">

								<div class="doc-row">
									<h2 class="doc-titulo">Prefácio</h2>
									<div class="doc-status">
										<button class="ls-btn ls-btn-secondary outlined large">Reprovar</button>
										<button class="ls-btn ls-btn-primary large">Aprovar</button>
									</div>
								</div>

							</div>

							<div class="doc-bloco">
								<div class="ls-boxes box-resumo">
									<div class="ls-box">
										<header class="header small-header bg-blue-gradient">
											<div class="row d-flex align-items-center">
												<div class="col">
													Resumo
													<i class="icone nv-icon-note-board"></i>
												</div>
											</div>
										</header>
									</div>
									<div class="ls-box bg-grey content-area">

										<div class="row">
											<div class="col">
												<div class="box-notificacoes orange">
													<a href="#">
														<span>
															<span class="icone nv-icon-talking"></span>
															Alerta de Monitoria
														</span>
														<span class="ls-tag contador">999</span>
													</a>
												</div>

												<div class="box-notificacoes blue">
													<a href="#">
														<span>
															<span class="icone nv-icon-talking"></span>
															Mensagens
														</span>
														<span class="ls-tag contador">999</span>
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
														<span class="ls-tag contador">999</span>
													</a>
												</div>

												<div class="box-notificacoes purple">
													<a href="#">
														<span>
															<span class="icone nv-icon-talking"></span>
															Chamados
														</span>
														<span class="ls-tag contador">999</span>
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

									<div class="ls-boxes box-resumo">
										<div class="ls-box">
											<header class="header small-header bg-blue-gradient">
												<div class="row d-flex align-items-center">
													<div class="col-7">
														Probabilidade de Processos
													</div>
													<div class="col">
														<select class="select-field" style="width: 100%">
															<option value="0" selected> Mês </option>
															<option value="1"> Semana </option>
															<option value="2"> Ano </option>
														</select>
													</div>
												</div>
											</header>
										</div>
										<div class="ls-box bg-grey content-area">

											<div class="row">
												<div class="col">
													<div class="item-line item-line-block d-block item-pf">
														<span class="texto-destaque">Pessoa física</span>
														<div class="sub-content">31550</div>
													</div>
													<div class="item-line item-line-block d-block item-pj">
														<span class="texto-destaque">Pessoa jurídica</span>
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

									<div class="ls-boxes box-resumo">
										<div class="ls-box">
											<header class="header small-header bg-blue-gradient">
												<div class="row d-flex align-items-center">
													<div class="col-7">
														Informações Gerais
													</div>
													<div class="col">
														<select class="select-field" style="width: 100%">
															<option value="0" selected> Mês </option>
															<option value="1"> Semana </option>
															<option value="2"> Ano </option>
														</select>
													</div>
												</div>
											</header>
										</div>
										<div class="ls-box bg-grey content-area">

											<div class="row">
												<div class="col">
													<div class="item-line item-line-block d-block item-pf">
														<span class="texto-destaque">Pessoa física</span>
														<div class="sub-content">31550</div>
													</div>
													<div class="item-line item-line-block d-block item-pj">
														<span class="texto-destaque">Pessoa jurídica</span>
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
										<div class="linha"></div>
										<div class="marcador">
											<i class="icone nv-icon-check-circle-thin-thin"></i>
										</div>
									</div>

									<div class="lista-itens">
										<div class="item">
											<div class="header">
												<div>
													<i class="icone nv-icon-customer"></i>
													<span class="nome texto-destaque">
														Alexandre Lopes Paz
													</span>
													<span class="departamento">
														Departamento 0001
													</span>
												</div>
												<div class="data">
													<div class="texto-destaque nv-icon-calendar">Ontem 08:46</div>
												</div>
											</div>

											<div class="body">
												<div class="comentario">
													<i class="icone nv-icon-talk"></i>
													Integer sollicitudin, tortor at tempor placerat quam urna
												</div>
												<button class="ls-btn ls-btn-primary small">
													<i class="icone nv-icon-check"></i>
													Aprovado
												</button>
											</div>
										</div>
										
										<div class="item">
											<div class="header">
												<div>
													<i class="icone nv-icon-customer"></i>
													<span class="nome texto-destaque">
														Alexandre Lopes Paz
													</span>
													<span class="departamento">
														Departamento 0001
													</span>
												</div>
												<div class="data">
													<div class="texto-destaque nv-icon-calendar">Ontem 08:46</div>
												</div>
											</div>

											<div class="body">
												<div class="comentario">
													<i class="icone nv-icon-talk"></i>
													Integer sollicitudin, tortor at tempor placerat quam urna
												</div>
												<button class="ls-btn ls-btn-primary small">
													<i class="icone nv-icon-check"></i>
													Aprovado
												</button>
											</div>
										</div>
										
										<div class="item">
											<div class="header">
												<div>
													<i class="icone nv-icon-customer"></i>
													<span class="nome texto-destaque">
														Alexandre Lopes Paz
													</span>
													<span class="departamento">
														Departamento 0001
													</span>
												</div>
												<div class="data">
													<div class="texto-destaque nv-icon-calendar">Ontem 08:46</div>
												</div>
											</div>

											<div class="body">
												<div class="comentario">
													<i class="icone nv-icon-talk"></i>
													Integer sollicitudin, tortor at tempor placerat quam urna
												</div>
												<button class="ls-btn ls-btn-primary small">
													<i class="icone nv-icon-check"></i>
													Aprovado
												</button>
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
								<div class="ls-form ls-form-horizontal row">
									<div class="col-sm-9">
										<label class="ls-label field-has-icon">
											<textarea rows="4" placeholder="Digite o resultado da análise"></textarea>
										</label>
									</div>        
									<div class="col-sm-3 btn-wrapper">
										<button class="ls-btn ls-btn-primary">
											Enviar
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
		<script src="assets/js/doc.js"></script>
	</body>
</html>