<?php include("includes/head.php"); ?>
<body>
	
<div class="main-wrap">

	<?php include("includes/sidebar.php"); ?>

	<main class="main-content">
		<header class="page-header">
			<h1 class="page-header-title">Localizador</h1>
		</header>	

		<div class="boxes-group">
			<div class="box-content">

				<div class="tabs-wrapper">
					<ul class="tabs-group" data-tabs-group="tabsGroup">
						<li class="tab active"><a href="#workflow">Workflow</a></li>
						<li class="tab"><a href="#historico">Histórico</a></li>
					</ul>

					<div class="tabs-content-wrapper" data-tabs-target-group="tabsGroup">
						<div class="tab-content active" id="workflow">
							Tab 1
						</div>
						<div class="tab-content" id="historico">
							Tab 2
						</div>
						<div class="tab-content" id="tab3">
							Tab 3
						</div>								
					</div>
				</div>

			</div>
		</div>

		<div class="box-group">
			<div class="box-content">
				<div class="accordion-wrapper status-relatorios">
					<header class="accordion-header">
						<div class="row no-gutters">
							<div class="col-md-8">Fonte</div>
							<div class="col-md-4">Status</div>
						</div>
					</header>
					<div class="accordion-item">
						<div class="accordion-title">
							<div class="accordion-title-content">
								<div class="row accordion-title-text">
									<div class="col-md-8">
										<b class="highlight-text title">Fonte 001</b>
									</div>
									<div class="col-md-4">
										<b class="warning-text has-icon nv-icon-info-circle">Falha ao Processar</b>
									</div>									
								</div>
							</div>
						</div>
						<div class="accordion-content">
							<div class="row align-items-center">
								<div class="col">55 registros retornados</div>
								<div class="col"><span class="has-icon nv-icomoon-clock-3">Processado em 12 minutos</span></div>
								<div class="col">
									<div class="details">
										<div class="info">
											<p class="title warning-text uppercase">Falha ao processar</p>
											<p>2 Tentativas</p>
										</div>
										<div class="details-action">
											<button class="btn is-icon-btn secondary">
												<i class="icon nv-icomoon-refresh"></i>
											</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="accordion-item">
						<div class="accordion-title">
							<div class="accordion-title-content">
								<div class="row accordion-title-text">
									<div class="col-md-8">
										<b class="highlight-text title">Fonte 002</b>
									</div>
									<div class="col-md-4">
										<b class="positive-text has-icon nv-icon-check-circle">Concluído</b>
									</div>									
								</div>
							</div>
						</div>
						<div class="accordion-content">
							<div class="row align-items-center">
								<div class="col">55 registros retornados</div>
								<div class="col"><span class="has-icon nv-icomoon-clock-3">Processado em 12 minutos</span></div>
								<div class="col">
									<div class="details">
										<p class="positive-text">Concluído</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="accordion-item">
						<div class="accordion-title">
							<div class="accordion-title-content">
								<div class="row accordion-title-text">
									<div class="col-md-8">
										<b class="highlight-text title">Fonte 003</b>
									</div>
									<div class="col-md-4">
										<b class="highlight-text">100% concluído</b>
									</div>									
								</div>
							</div>
						</div>
						<div class="accordion-content">
							<div class="row align-items-center">
								<div class="col">55 registros retornados</div>
								<div class="col"><span class="has-icon nv-icomoon-clock-3">Processado em 12 minutos</span></div>
								<div class="col">
									<div class="details">
										<p class="highlight-text">Concluído</p>
									</div>
								</div>
							</div>
						</div>
					</div>	
					<div class="accordion-item">
						<div class="accordion-title">
							<div class="accordion-title-content">
								<div class="row accordion-title-text">
									<div class="col-md-8">
										<b class="highlight-text title">Fonte 004</b>
									</div>
									<div class="col-md-4">
										<b class="warning-text">Aguardando...</b>
									</div>									
								</div>
							</div>
						</div>
						<div class="accordion-content">
							<div class="row align-items-center">
								<div class="col">55 registros retornados</div>
								<div class="col"><span class="has-icon nv-icomoon-clock-3">Processado em 12 minutos</span></div>
								<div class="col">
									<div class="details">
										<p class="warning-text">Aguardando</p>
									</div>
								</div>
							</div>
						</div>
					</div>	
				</div>				
			</div>
		</div>

		<div class="box-group">
			<div class="box-content">
				<div class="accordion-wrapper workflow-relatorios">
					<div class="accordion-item aprovado">
						<div class="accordion-title">
							<div class="accordion-title-content">
								<div class="row accordion-title-text">
									<div class="col-md-8">
										<p>Departamento Jurídico</p>
									</div>
									<div class="col-md-4">
										<p>Aprovado</p>
									</div>									
								</div>
							</div>
						</div>
						<div class="accordion-content">
							<div class="row align-items-center">
								<div class="col-8">
									<div class="user-data-info">
										<p class="user-data-header highlight-text">Alexandre Loes Paz</p>
										<p class="user-data-description has-small-icon nv-icon-talk">333.222.666/0001-00</p>
									</div>									
								</div>
								<div class="col-4">
									<div class="label-tag positive has-icon nv-icomoon-checkmark">
										Aprovado
									</div>
									<div class="label-tag has-icon nv-icomoon-clock-3">
										15/02/2018 15:30
									</div>									
								</div>								
							</div>
						</div>
					</div>
					<div class="accordion-item reprovado">
						<div class="accordion-title">
							<div class="accordion-title-content">
								<div class="row accordion-title-text">
									<div class="col-md-8">
										<p>Departamento Jurídico</p>
									</div>
									<div class="col-md-4">
										<p>Aprovado</p>
									</div>									
								</div>
							</div>
						</div>
						<div class="accordion-content">
							<div class="row align-items-center">
								<div class="col-8">
									<div class="user-data-info">
										<p class="user-data-header highlight-text">Alexandre Loes Paz</p>
										<p class="user-data-description has-small-icon nv-icon-talk">333.222.666/0001-00</p>
									</div>									
								</div>
								<div class="col-4">
									<div class="label-tag positive has-icon nv-icomoon-checkmark">
										Aprovado
									</div>
									<div class="label-tag has-icon nv-icomoon-clock-3">
										15/02/2018 15:30
									</div>									
								</div>								
							</div>
						</div>
					</div>
					<div class="accordion-item">
						<div class="accordion-title">
							<div class="accordion-title-content">
								<div class="row accordion-title-text">
									<div class="col-md-8">
										<p>Departamento Jurídico</p>
									</div>
									<div class="col-md-4">
										<p>Reprovado</p>
									</div>									
								</div>
							</div>
						</div>
						<div class="accordion-content">
							<div class="row align-items-center">
								<div class="col-8">
									<div class="user-data-info">
										<p class="user-data-header highlight-text">Alexandre Loes Paz</p>
										<p class="user-data-description has-small-icon nv-icon-talk">333.222.666/0001-00</p>
									</div>									
								</div>
								<div class="col-4">
									<div class="label-tag negative has-icon nv-icomoon-cross1">
										15/02/2018 15:30
									</div>
									<div class="label-tag has-icon nv-icomoon-clock-3">
										15/02/2018 15:30
									</div>									
								</div>								
							</div>
						</div>
					</div>
					<div class="accordion-item">
						<div class="accordion-title">
							<div class="accordion-title-content">
								<div class="row accordion-title-text">
									<div class="col-md-8">
										<p>Departamento Jurídico</p>
									</div>
									<div class="col-md-4">
										<p>Aguardando</p>
									</div>									
								</div>
							</div>
						</div>
						<div class="accordion-content">
							<div class="row align-items-center">
								<div class="col-8">
									<div class="user-data-info">
										<p class="user-data-header highlight-text">Alexandre Loes Paz</p>
										<p class="user-data-description has-small-icon nv-icon-talk">333.222.666/0001-00</p>
									</div>									
								</div>
								<div class="col-4">
									<div class="label-tag">
										Aguardando
									</div>									
								</div>								
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