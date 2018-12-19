<?php include("includes/head.php"); ?>
<body>
	
<?php include ("includes/header.php"); ?>	

<div class="main-wrap">

	<?php include("includes/sidebar.php"); ?>

	<main class="main-content">
		<header class="page-header">
			<h1 class="page-header-title">Localizador de CPF/CNPJ</h1>
		</header>	

		<div class="boxes-group">
			<div class="box-content">
				<div class="tabs-wrapper">
					<ul class="tabs-group" data-tabs-group="tabsGroupLocalizador">
						<li class="tab active"><a href="#localizarPessoaFisica">Localizador Pessoa Física</a></li>
						<li class="tab"><a href="#localizarPessoaJuridica">Localizador Pessoa Jurídica</a></li>
					</ul>

					<div class="tabs-content-wrapper" data-tabs-target-group="tabsGroupLocalizador">
						<div class="tab-content active" id="localizarPessoaFisica">
							<div class="row">
								<div class="col-md-6">
									<label class="form-label">
										<input type="text" class="input-text inverted" placeholder="Nome">
									</label>	
									<label class="form-label">
										<input type="text" class="input-text inverted" placeholder="Data de nascimento" data-mask="data">
									</label>	
									<label class="form-label">
										<input type="text" class="input-text inverted" placeholder="Nome da mãe">
									</label>	
									<label class="form-label">
										<input type="text" class="input-text inverted" placeholder="Telefone" data-mask="fone-com-ddd">
									</label>	
									<label class="form-label">
										<input type="text" class="input-text inverted" placeholder="E-mail">
									</label>					
								</div>
								<div class="col-md-6">
									<label class="form-label">
										<input type="text" class="input-text inverted" placeholder="Nome do irmão">
									</label>	
									<label class="form-label">
										<input type="text" class="input-text inverted" placeholder="Empresa em que já trabalhou">
									</label>	
									<label class="form-label">
										<input type="text" class="input-text inverted" placeholder="Estado">
									</label>	
									<label class="form-label">
										<input type="text" class="input-text inverted" placeholder="Cidade">
									</label>	
									<label class="form-label">
										<input type="text" class="input-text inverted" placeholder="Endereço">
									</label>	
								</div>
							</div>
							<button class="btn primary fluid" id="btnPesquisarPF">Pesquisar</button>
						</div>

						<div class="tab-content" id="localizarPessoaJuridica">
							<div class="row">
								<div class="col-md-6">
									<label class="form-label">
										<input type="text" class="input-text inverted" placeholder="Razão social">
									</label>	
									<label class="form-label">
										<input type="text" class="input-text inverted" placeholder="Ex-sócios">
									</label>	
									<label class="form-label">
										<input type="text" class="input-text inverted" placeholder="Nome dos sócios">
									</label>	
									<label class="form-label">
										<input type="text" class="input-text inverted" placeholder="Nome fantasia">
									</label>	
								</div>
								<div class="col-md-6">
									<label class="form-label">
										<input type="text" class="input-text inverted" placeholder="Site">
									</label>	
									<label class="form-label">
										<input type="text" class="input-text inverted" placeholder="Estado">
									</label>	
									<label class="form-label">
										<input type="text" class="input-text inverted" placeholder="Cidade">
									</label>	
									<label class="form-label">
										<input type="text" class="input-text inverted" placeholder="Endereço">
									</label>	
								</div>
							</div>
							<button class="btn primary fluid" id="btnPesquisarPJ">Pesquisar</button>						
						</div>

					</div>
				</div>
			</div>
		</div>

		<div id="resultadoBuscador" class="resultados-buscador" hidden>
			<div class="box-content">
				<div class="data-container" data-gutter="1.5">
					<div class="data-header">
						<div class="column-2">Nome</div>
						<div class="column-2">Nome da mãe</div>
						<div class="column-1 center-aligned">Idade</div>
						<div class="column-2">CPF</div>
						<div class="column-5 right-aligned"><b class="highlight-text">92</b> resultados encontrados</div>
					</div>
					<div class="data-item">
						<div class="column-2">
							<p>Lena Maria Ferreira</p>
						</div>
						<div class="column-2">
							Maria Fernanda Moraes
						</div>
						<div class="column-1 center-aligned">
							45
						</div>	
						<div class="column-2">
							333.980.999-01
						</div>			
						<div class="column-5 right-aligned">
							<div class="inline-buttons-wrapper">
								<button class="btn primary small">Mais Relatórios</button>
								<button class="btn secondary small" data-action="adicionarBlackList">Adicionar à Blacklist</button>
							</div>
						</div>			
					</div>
					<div class="data-item">
						<div class="column-2">
							<p>Lena Maria Ferreira</p>
						</div>
						<div class="column-2">
							Maria Fernanda Moraes
						</div>
						<div class="column-1 center-aligned">
							45
						</div>	
						<div class="column-2">
							333.980.999-01
						</div>			
						<div class="column-5 right-aligned">
							<div class="inline-buttons-wrapper">
								<button class="btn primary small">Mais Relatórios</button>
								<button class="btn secondary small" data-action="adicionarBlackList">Adicionar à Blacklist</button>
							</div>
						</div>			
					</div>
				</div>
				<?php include("includes/pagination.php"); ?>
			</div>
		</div>

	</main>
</div>	

	

	
<?php include("includes/scripts.php"); ?>
</body>
</html>