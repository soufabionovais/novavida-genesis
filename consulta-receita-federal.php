<?php include("includes/head.php"); ?>
<body>

	<?php include("includes/header-monitoria.php"); ?>

	<?php include("includes/sidebar.php"); ?>

		<main class="ls-main doc">
			<div id="docWrapper" class="doc-wrapper">
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
								<a href="consulta-receita-federal-1.php">04. Grupo Fonte 01</a>
								<ol class="doc-submenu">
									<li class="doc-menu-item atual">
										<a href="consulta-receita-federal.php">04.1 Nome da Fonte 1</a>
									</li>
									<li class="doc-menu-item">
										<a href="consulta-receita-federal-template-2.php">04.2 Nome da Fonte 2</a>
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

							<div class="doc-bloco">
								<h3 class="doc-bloco-titulo">
									SUBTÍTULO
								</h3>

								<div class="doc-bloco-tabela">
									<table cellspacing="0">
										<tr>
											<th>Variável</th>
											<th>Variável</th>
											<th>Variável</th>
										</tr>
										<tr>
											<td>423</td>
											<td>Aenean euismod</td>
											<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed enim fringilla, tristique eros vitae, semper nulla. Aliquam eget justo nec libero faucibus vulputate. Fusce commo</td>
										</tr>
										<tr>
											<td>423</td>
											<td>Aenean euismod</td>
											<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed enim fringilla, tristique eros vitae, semper nulla. Aliquam eget justo nec libero faucibus vulputate. Fusce commo</td>
										</tr>
										<tr>
											<td>423</td>
											<td>Aenean euismod</td>
											<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed enim fringilla, tristique eros vitae, semper nulla. Aliquam eget justo nec libero faucibus vulputate. Fusce commo</td>
										</tr>
									</table>
								</div>
							</div>

							<div class="doc-bloco">

								<h3 class="doc-bloco-titulo">
									SUBTÍTULO
								</h3>

								<h2 class="doc-bloco-subtitulo">
									#123987345 (1234534)
								</h2>

								<div class="doc-bloco-detalhes">

									<div class="detalhes-row">
										<div class="detalhes-titulo">
											Variável
										</div>
										<div class="detalhes-descricao">
											Aenean euismod
										</div>
									</div>

									<div class="detalhes-row">
										<div class="detalhes-titulo">
											Variável
										</div>
										<div class="detalhes-descricao">
											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed enim fringilla,
											tristique eros vitae, semper nulla. Aliquam eget justo nec libero faucibus vulputate.
											Fusce commodo sapien sed viverra pharetra. Vivamus convallis lobortis nunc,
											vitae dictum ligula facilisis eget. Proin dolor metus, sodales id lob.
										</div>
									</div>

									<div class="detalhes-row duas-colunas">
										<div class="detalhes-col">
											<div class="detalhes-titulo">
												Variável
											</div>
											<div class="detalhes-descricao">
												Aenean
											</div>
										</div>

										<div class="detalhes-col">
											<div class="detalhes-titulo">
												Variável
											</div>
											<div class="detalhes-descricao">
												Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed enim fringilla,b
											</div>
										</div>
									</div>

								</div>

							</div>

							<div class="doc-bloco">
								<h3 class="doc-bloco-titulo">
									SUBTÍTULO
								</h3>

								<div class="doc-bloco-tabela">
									<table cellspacing="0">
										<tr>
											<th>Variável</th>
											<th>Variável</th>
											<th>Variável</th>
										</tr>
										<tr>
											<td>423</td>
											<td>Aenean euismod</td>
											<td class="bloco-relevante">
												Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed enim fringilla, tristique eros vitae, semper nulla. Aliquam eget justo nec libero faucibus vulputate. Fusce commo
												<button  class="btn-bloco-relevante">...</button>
												<div class="menu-bloco-relevante">
													<button  class="btn btn-fechar" data-conteudo="fechar">X</button>
													<div class="menu-bloco-relevante-opcoes">
														<button class="btn-opcoes">Muito</button>
														<button class="btn-opcoes">Médio</button>
														<button class="btn-opcoes">Pouco</button>
														<button class="btn-opcoes"><img src="assets/img/doc/icons/icon-markdown.png" alt="" /></button>
													</div>
													<button class="btn btn-monitoria" data-conteudo="monitoria"><img src="assets/img/doc/icons/icon-eye.png" alt="" /></button>
												</div>
											</td>
										</tr>
										<tr>
											<td>423</td>
											<td>Aenean euismod</td>
											<td class="bloco-relevante">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed enim fringilla, tristique eros vitae, semper nulla. Aliquam eget justo nec libero faucibus vulputate. Fusce commo
												<button  class="btn-bloco-relevante">...</button>
												<div class="menu-bloco-relevante">
													<button  class="btn btn-fechar" data-conteudo="fechar">X</button>
													<div class="menu-bloco-relevante-opcoes">
														<button class="btn-opcoes">Muito</button>
														<button class="btn-opcoes">Médio</button>
														<button class="btn-opcoes">Pouco</button>
														<button class="btn-opcoes"><img src="assets/img/doc/icons/icon-markdown.png" alt="" /></button>
													</div>
													<button class="btn btn-monitoria" data-conteudo="monitoria"><img src="assets/img/doc/icons/icon-eye.png" alt="" /></button>
												</div>
											</td>
										</tr>
										<!-- <tr>
											<td>423</td>
											<td>Aenean euismod</td>
											<td class="bloco-relevante">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed enim fringilla, tristique eros vitae, semper nulla. Aliquam eget justo nec libero faucibus vulputate. Fusce commo
												<button  class="btn-bloco-relevante">...</button>
												<div class="menu-bloco-relevante">
													<button  class="btn btn-fechar" data-conteudo="fechar">X</button>
													<div class="menu-bloco-relevante-opcoes">
														<button class="btn-opcoes">Muito</button>
														<button class="btn-opcoes">Médio</button>
														<button class="btn-opcoes">Pouco</button>
														<button class="btn-opcoes"><img src="assets/img/doc/icons/icon-markdown.png" alt="" /></button>
													</div>
													<button class="btn btn-monitoria" data-conteudo="monitoria"><img src="assets/img/doc/icons/icon-eye.png" alt="" /></button>
												</div>												
											</td>
										</tr> -->
									</table>
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
					<div id="comMonitoria" class="content-inner lista-monitoria">

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

					</div>

					<!-- NÃO POSSUI MONITORIA -->
					<div id="semMonitoria" class="content-inner lista-monitoria-vazia">
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