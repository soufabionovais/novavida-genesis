<?php include("includes/head.php"); ?>
<body>

	<?php include("includes/header-monitoria.php"); ?>

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

					<div class="doc-pagina consulta-receita-federal dashboard">
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

							</div>

							<div class="doc-bloco duas-colunas">

								<div class="doc-bloco-col">
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

								<div class="doc-bloco-col">

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

								</div>

							</div>

							<div class="doc-bloco duas-colunas">
								
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

								<div class="doc-bloco-col">

									<div class="box-ranking-relatorios bg-blue-gradient">
										<div class="row d-flex align-items-center">
											<div class="col-7">
												Ranking de Relatórios
											</div>
											<div class="col">
												<select class="select-field" style="width: 100%">
													<option value="0" selected> Mês </option>
													<option value="1"> Semana </option>
													<option value="2"> Ano </option>
												</select>
											</div>
										</div>

										<div class="ls-box box-grafico">
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

							<div class="doc-bloco">
								<div class="box-regua-risco">
									<div class="titulo">
										Régua de risco
									</div>
									<div class="regua-wrapper">
										<input type="hidden" class="slider-input disabled" value="4" />
									</div>
								</div>
							</div>

							<div class="doc-bloco">
								<div class="box-conclusao">
									<div class="titulo">
										Conclusão
									</div>
									<div class="texto">
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eget bibendum augue. Nullam vitae semper augue, nec imperdiet ligula. Integer congue pellentesque elit, porttitor iaculis lorem dignissim sed. Suspendisse dignissim leo neque, id fringilla eros mollis in. Aliquam condimentum quis dui nec suscipit. Donec at gravida dolor. Duis dignissim est quis ante molestie fringilla. Quisque mauris felis, scelerisque nec ornare egestas, laoreet id leo. Duis turpis justo, gravida id diam ut, aliquet tempor turpis. Integer cursus maximus augue, id malesuada nisl ultricies ut. Nunc dolor nunc, interdum sit amet elementum in, varius vel nibh. 
									</div>
								</div>
							</div>

						</div>
					</div>

					<div id="sidebarMenu" class="sidebar-menu">
						<button class="btn btn-fechar" data-conteudo="fechar">X</button>
						<button class="btn btn-info" data-conteudo="info"><img src="assets/img/doc/icons/icon-info.png" alt="" /></button>
						<button class="btn btn-comentarios" data-conteudo="comentarios"><img src="assets/img/doc/icons/icon-chat.png" alt="" /></button>
						<button class="btn btn-filtro" data-conteudo="filtro"><img src="assets/img/doc/icons/icon-filter.png" alt="" /></button>
						<button class="btn btn-trechos" data-conteudo="trechos"><img src="assets/img/doc/icons/icon-markdown.png" alt="" /></button>
						<button class="btn btn-monitoria" data-conteudo="monitoria"><img src="assets/img/doc/icons/icon-eye.png" alt="" /></button>

						<div class="menu-impressao-wrapper">
							<button class="btn btn-impressora" data-conteudo="impressora"><img src="assets/img/doc/icons/icon-print.png" alt="" /></button>

							<div id="impressoraSidebar" class="impressora-menu">
								<div class="pretty p-icon p-curve p-tada checkbox-container">
									<input type="checkbox" name="comentarios">
									<div class="state p-primary-o">
										<i class="icon ls-ico-checkmark"></i>
										<label>Com comentários</label>
									</div>
								</div>

								<div class="pretty p-icon p-curve p-tada checkbox-container">
									<input type="checkbox" name="evidencias">
									<div class="state p-primary-o">
										<i class="icon ls-ico-checkmark"></i>
										<label>Com evidências</label>
									</div>
								</div>

								<button>
									<img src="assets/img/doc/icons/icon-print.png" alt="" />
								</button>
							</div>
						</div>

					</div>

				</div>

				<div id="docSidebar" class="doc-sidebar info-sidebar">
					<div class="doc-sidebar-header">
						<h2>Informações</h2>
					</div>

					<div class="content-inner">
						<div class="dados-row">
							<span class="titulo">
								Data de consulta:
							</span>
							<span class="valor">
								15 de janeiro de 1098 às 15:23
							</span>
						</div>

						<div class="dados-row">
							<span class="titulo">
								Link:
							</span>
							<span class="valor">
								<a href="http://www.receita.fazenda.org.br" target="_blank">http://www.receita.fazenda.org.br </a>
							</span>
						</div>

						<div class="dados-row">
							<span class="titulo">
								Operador:
							</span>
							<span class="valor">
								Cristóvão Almeida
							</span>
						</div>

						<div class="dados-row">
							<span class="titulo">
								Token:
							</span>
							<span class="valor">
								2i3u4hoc2148934y598 30598uv20358u60958bu604m69b8u4m07n8mu
							</span>
						</div>

						<h3 class="subtitulo">Evidência de fonte de consulta</h3>

						<div class="preview">
							<img src="assets/img/doc/info-thumb.png" alt="" />
						</div>
					</div>
				</div>

				<div id="comentariosSidebar" class="doc-sidebar comentarios-sidebar">
					<div class="doc-sidebar-header">
						<h2>Comentários</h2>
					</div>

					<!-- <div class="content-inner">

						<div class="item">
							<div class="timeline">
								<div class="texto-destaque nv-icon-calendar">01/01/2000</div>
								<div class="linha">
									<span class="marcador"></span>
								</div>
							</div>

							<div class="comentario">
								<h3 class="titulo">Alteração na fonte 001 linha 02 </h3>
								<p>
									Cras fringilla ornare tortor eget maximus. Etiam sit amet augue non felis facilisis viverra. Morbi facilisis sem sit amet iaculis condimentum. Nullam vel eros magna. Ut tempus scelerisque libero sed aliquam. Suspendisse imperdiet tincidunt diam quis posuere. Proin scelerisque erat diam.
								</p>
							</div>
						</div>

						<div class="item">
							<div class="timeline">
								<div class="texto-destaque nv-icon-calendar">01/01/2000</div>
								<div class="linha">
									<span class="marcador"></span>
								</div>
							</div>

							<div class="comentario">
								<h3 class="titulo">Alteração na fonte 001 linha 02 </h3>
								<p>
									Cras fringilla ornare tortor eget maximus. Etiam sit amet augue non felis facilisis viverra. Morbi facilisis sem sit amet iaculis condimentum. Nullam vel eros magna. Ut tempus scelerisque libero sed aliquam. Suspendisse imperdiet tincidunt diam quis posuere. Proin scelerisque erat diam.
								</p>
							</div>
						</div>

						<div class="item">
							<div class="timeline">
								<div class="texto-destaque nv-icon-calendar">01/01/2000</div>
								<div class="linha">
									<span class="marcador"></span>
								</div>
							</div>

							<div class="comentario">
								<h3 class="titulo">Alteração na fonte 001 linha 02 </h3>
								<p>
									Cras fringilla ornare tortor eget maximus. Etiam sit amet augue non felis facilisis viverra. Morbi facilisis sem sit amet iaculis condimentum. Nullam vel eros magna. Ut tempus scelerisque libero sed aliquam. Suspendisse imperdiet tincidunt diam quis posuere. Proin scelerisque erat diam.
								</p>
							</div>
						</div>

					</div> -->

					<div class="content-inner chat">
						<div class="msg-wrapper">

							<div class="msg-inner">
								<div class="msg recebida">
									<img src="assets/img/avatar-usuario.png" alt="" class="avatar" />
									<div class="msg-body">
										<span class="nome">John</span>
										<span class="texto">
											Bom trabalho!
										</span>
									</div>
								</div>

								<div class="msg enviada">
									<span class="texto">
										Obrigado!
									</span>
								</div>

								<div class="msg recebida">
									<img src="assets/img/avatar-usuario.png" alt="" class="avatar" />
									<div class="msg-body">
										<span class="nome">Jackeline</span>
										<span class="texto">
											Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique deserunt modi veritatis rem molestiae eligendi ea, cupiditate temporibus qui nostrum deleniti vitae officiis blanditiis tempora consectetur velit sunt facilis sequi!
										</span>
									</div>
								</div>

							</div>

						</div>

						<div class="caixa-texto">
							<div class="ls-form ls-form-horizontal row">
								<div class="col-sm-9">
									<label class="ls-label field-has-icon">
										<textarea rows="4" placeholder="mensagem"></textarea>
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

				<div id="filtroSidebar" class="doc-sidebar filtro-sidebar">
					<div class="doc-sidebar-header">
						<h2>Filtrar</h2>
					</div>

					<div class="content-inner">
						<div class="ls-form ls-form">
							<div class="col">
								<label class="ls-label">
									<input type="text" name="nome_filtro" placeholder="Nome filtro" class="ls-field">
								</label>
							</div>

							<div class="col">
								<label class="ls-label">
									<input type="text" name="nome_filtro" placeholder="Nome filtro" class="ls-field">
								</label>
							</div>

							<div class="col">
								<h3 class="form-subtitulo">Checkbox</h3>
								<div class="pretty p-icon p-curve p-tada checkbox-container">
									<input type="checkbox" name="checkbox-1">
									<div class="state p-primary-o">
										<i class="icon ls-ico-checkmark"></i>
										<label>Checkbox</label>
									</div>
								</div>

								<div class="pretty p-icon p-curve p-tada checkbox-container">
									<input type="checkbox" name="checkbox-2">
									<div class="state p-primary-o">
										<i class="icon ls-ico-checkmark"></i>
										<label>Checkbox</label>
									</div>
								</div>

								<div class="pretty p-icon p-curve p-tada checkbox-container">
									<input type="checkbox" name="checkbox-3">
									<div class="state p-primary-o">
										<i class="icon ls-ico-checkmark"></i>
										<label>Checkbox</label>
									</div>
								</div>
							</div>

							<div class="col">
								<h3 class="form-subtitulo">Radio Button</h3>

								<div class="pretty p-default p-round p-thick radio-style">
									<input type="radio" name="radio-1" />
									<div class="state">
										<label>Radio Button</label>
									</div>
								</div>

								<div class="pretty p-default p-round p-thick radio-style">
									<input type="radio" name="radio-2" />
									<div class="state">
										<label>Radio Button</label>
									</div>
								</div>

								<div class="pretty p-default p-round p-thick radio-style">
									<input type="radio" name="radio-3" />
									<div class="state">
										<label>Radio Button</label>
									</div>
								</div>

							</div>

						</div>

						<div class="col right-aligned">
							<button class="ls-btn ls-btn-primary large">Filtrar</button>
						</div>

					</div>
				</div>

				<div id="trechosSidebar" class="doc-sidebar trechos-sidebar">
					<div class="doc-sidebar-header">
						<h2>Trechos irrelevantes <span class="contador">(12)</span></h2>
					</div>

					<div class="content-inner">

						<div class="item">
							<div class="dados">
								<div class="trecho">
									<h3 class="subtitulo">Subtítulo</h3>
									<span class="codigo">#123987345 (1234534)</span>
								</div>
								<div class="autor">
									<div class="usuario">ALEXANDRE NOVAIS MOREIRA</div>
									<div class="data">
										<span class="texto-destaque nv-icon-calendar">01/01/2000 às 19:00</span>
									</div>
								</div>
							</div>
							<div class="acoes">
								<button class="ls-btn ls-btn-primary">Desmarcar</button>
								<button class="ls-btn ls-btn-secondary outlined">Ler mais</button>
							</div>
						</div>

						<div class="item">
							<div class="dados">
								<div class="trecho">
									<h3 class="subtitulo">Subtítulo</h3>
									<span class="codigo">#123987345 (1234534)</span>
								</div>
								<div class="autor">
									<div class="usuario">ALEXANDRE NOVAIS MOREIRA</div>
									<div class="data">
										<span class="texto-destaque nv-icon-calendar">01/01/2000 às 19:00</span>
									</div>
								</div>
							</div>
							<div class="acoes">
								<button class="ls-btn ls-btn-primary">Desmarcar</button>
								<button class="ls-btn ls-btn-secondary outlined">Ler mais</button>
							</div>
						</div>

						<div class="item">
							<div class="dados">
								<div class="trecho">
									<h3 class="subtitulo">Subtítulo</h3>
									<span class="codigo">#123987345 (1234534)</span>
								</div>
								<div class="autor">
									<div class="usuario">ALEXANDRE NOVAIS MOREIRA</div>
									<div class="data">
										<span class="texto-destaque nv-icon-calendar">01/01/2000 às 19:00</span>
									</div>
								</div>
							</div>
							<div class="acoes">
								<button class="ls-btn ls-btn-primary">Desmarcar</button>
								<button class="ls-btn ls-btn-secondary outlined">Ler mais</button>
							</div>
						</div>

						<div class="item">
							<div class="dados">
								<div class="trecho">
									<h3 class="subtitulo">Subtítulo</h3>
									<span class="codigo">#123987345 (1234534)</span>
								</div>
								<div class="autor">
									<div class="usuario">ALEXANDRE NOVAIS MOREIRA</div>
									<div class="data">
										<span class="texto-destaque nv-icon-calendar">01/01/2000 às 19:00</span>
									</div>
								</div>
							</div>
							<div class="acoes">
								<button class="ls-btn ls-btn-primary">Desmarcar</button>
								<button class="ls-btn ls-btn-secondary outlined">Ler mais</button>
							</div>
						</div>

					</div>
				</div>

				<div id="monitoriaSidebar" class="doc-sidebar monitoria-sidebar">
					<div class="doc-sidebar-header">
						<h2>Monitoria</h2>
						<button class="ls-btn ls-btn-primary">
							COMPARAR
						</button>
					</div>

					<!-- POSSUI MONITORIA -->
					<!-- <div class="content-inner">

						<div class="item">
							<span class="pretty p-icon p-curve p-tada checkbox-container">
								<input type="checkbox" name="comentarios">
								<div class="state p-primary-o">
									<i class="icon ls-ico-checkmark"></i>
									<label>Alteração na fonte 001 linha 02</label>
								</div>
							</span>
							<span class="texto-destaque nv-icon-calendar">01/01/2000 às 19:00</span>
						</div>

						<div class="item">
							<span class="pretty p-icon p-curve p-tada checkbox-container">
								<input type="checkbox" name="comentarios">
								<div class="state p-primary-o">
									<i class="icon ls-ico-checkmark"></i>
									<label>Alteração na fonte 001 linha 02</label>
								</div>
							</span>
							<span class="texto-destaque nv-icon-calendar">01/01/2000 às 19:00</span>
						</div>

						<div class="item">
							<span class="pretty p-icon p-curve p-tada checkbox-container">
								<input type="checkbox" name="comentarios">
								<div class="state p-primary-o">
									<i class="icon ls-ico-checkmark"></i>
									<label>Alteração na fonte 001 linha 02</label>
								</div>
							</span>
							<span class="texto-destaque nv-icon-calendar">01/01/2000 às 19:00</span>
						</div>

						<div class="item">
							<span class="pretty p-icon p-curve p-tada checkbox-container">
								<input type="checkbox" name="comentarios">
								<div class="state p-primary-o">
									<i class="icon ls-ico-checkmark"></i>
									<label>Alteração na fonte 001 linha 02</label>
								</div>
							</span>
							<span class="texto-destaque nv-icon-calendar">01/01/2000 às 19:00</span>
						</div>

						<div class="item">
							<span class="pretty p-icon p-curve p-tada checkbox-container">
								<input type="checkbox" name="comentarios">
								<div class="state p-primary-o">
									<i class="icon ls-ico-checkmark"></i>
									<label>Alteração na fonte 001 linha 02</label>
								</div>
							</span>
							<span class="texto-destaque nv-icon-calendar">01/01/2000 às 19:00</span>
						</div>

					</div> -->

					<!-- NÃO POSSUI MONITORIA -->
					<div class="content-inner lista-monitoria-vazia">
						<span>
							Você ainda não tem nada sendo monitorado.
						</span>
						<button class="ls-btn ls-btn-primary" data-adicionar-monitoria>Adicionar monitoria</button>
					</div>
				</div>
			</div>
		</main>

		<?php include("includes/scripts.php"); ?>
		<script src="assets/js/doc.js"></script>
	</body>
</html>