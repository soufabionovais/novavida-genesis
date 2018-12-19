<div class="topbar monitoria">
	<div class="row d-flex align-items-center no-gutters fluid">
		<div class="col-md-6">
			<div class="breadcrumb-container">
				<ol>
					<li><a href="#">Nome do Livro</a></li>
					<li>
						<input type="text" class="select-field" data-url="data/relatorios.json" name="relatorios" data-placeholder="Relatórios" data-search-placeholder="Filtrar relatório" />						
					</li>
				</ol>
			</div>	
		</div>		

		<div class="col-md-6">
			<div class="acoes">
				<div class="acao-item acao-btn">
					<a class="btn primary large" href="configuracoes.php#perfilRelatorios">
						Editar relatório
					</a>
				</div>
				<a class="acao-item" href="visualizar-estrutura.php">
					<i class="icon nv-icon-network"></i>
				</a>

				<div id="menuBusca" class="acao-item">
					<div class="click-wrapper">
						<i class="icon nv-icon-zoom"></i>
					</div>

					<div class="menu-busca">
						<div class="form">
							<div class="row">
								<div class="col">
									<label class="form-label has-icon nv-icon-zoom">
										<input type="text" class="input-text" placeholder="Pesquisar por termo">
									</label>	
								</div>
							</div>
							<div class="row">
								<div class="col">
									<input type="text" class="select-field" data-url="data/dados-genericos.json" name="relatorios" data-placeholder="Dados" data-search-placeholder="Filtrar dados" />

									<input type="text" class="select-field" data-url="data/dados-genericos.json" name="relatorios" data-placeholder="Dados" data-search-placeholder="Filtrar dados" />

									<input type="text" class="select-field" data-url="data/dados-genericos.json" name="relatorios" data-placeholder="Dados" data-search-placeholder="Filtrar dados" />
								</div>
							</div>

							<div class="row">
								<div class="col right-aligned">
									<button class="btn primary">
										Pesquisar
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="acao-item paginacao">
					<span class="pag-atual">01</span>
					<span>de 103</span>
				</div>

				<a class="acao-item" href="#" id="btnRetornar">
					<i class="icon nv-icon-remove"></i>
				</a>
			</div>
		</div>
	</div>
</div>