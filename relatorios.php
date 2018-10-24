<?php include("includes/head.php"); ?>
  <body>
    
    <?php include("includes/header.php"); ?>

    <?php include("includes/sidebar.php"); ?>


    <main class="ls-main">
      <div class="container-fluid">
        <div class="page-header">
          <h1 class="ls-title-intro">Relatórios</h1>
          <div class="page-header-buttons">
            <a href="relatorios-novo.php" class="ls-btn ls-btn-primary">Criar relatório</a>
          </div>                 
        </div>

        <div class="ls-boxes">
          <!-- Filtros -->
          <div class="ls-box container-filtros small-gutters">
              <div class="ls-form ls-form-horizontal row">
                  <div class="col">
                      <label class="ls-label field-has-icon ls-ico-search">
                        <input type="text" placeholder="Filtrar por nome" class="ls-field" required="">
                      </label>                        
                  </div>
                  <div class="col">
                      <select class="select-field">
                          <option placeholder> Livros </option>
                          <option value="1"> Opção 1 </option>
                          <option value="2"> Opção 2 </option>
                          <option value="3"> Opção 3 </option>
                          <option value="4"> Opção 4 </option>
                      </select>                                                         
                  </div>
                  <div class="col">
                      <select class="select-field">
                          <option placeholder> Responsáveis </option>
                          <option value="1"> Opção 1 </option>
                          <option value="2"> Opção 2 </option>
                          <option value="3"> Opção 3 </option>
                          <option value="4"> Opção 4 </option>
                      </select>                                                         
                  </div>
                  <div class="col">
                      <select class="select-field">
                          <option placeholder> Data </option>
                          <option value="1"> Opção 1 </option>
                          <option value="2"> Opção 2 </option>
                          <option value="3"> Opção 3 </option>
                          <option value="4"> Opção 4 </option>
                      </select>                                                         
                  </div>
                  <div class="col">
                      <select class="select-field">
                          <option placeholder> Segmento </option>
                          <option value="1"> Opção 1 </option>
                          <option value="2"> Opção 2 </option>
                          <option value="3"> Opção 3 </option>
                          <option value="4"> Opção 4 </option>
                      </select>                                                         
                  </div>
                  <div class="col">
                    <div class="ls-group-btn ls-group-active">
                      <button type="button" class="ls-btn ls-btn-primary ls-active">CPF</button>
                      <button type="button" class="ls-btn ls-btn-primary">CNPJ</button>
                    </div>                    
                  </div>                     
              </div>                        
          </div>
          <!-- Fim Filtros -->

          <div class="ls-box">
            <ul class="ls-tabs-nav box-tabs bg">
              <li class="ls-active"><a data-ls-module="tabs" href="#relatoriosEmProcessamento">Em processamento</a></li>
              <li><a data-ls-module="tabs" href="#relatoriosPendentes">Pendente de análise</a></li>
              <li><a data-ls-module="tabs" href="#relatoriosConcluidos">Concluídos</a></li>
            </ul>

            <div class="ls-tabs-container">
              
              <!-- Relatórios em processamento -->
              <div id="relatoriosEmProcessamento" class="ls-tab-content ls-active">
                <table class="ls-table">						
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Critério</th>
                      <th>Segmento</th>
                      <th>Responsável</th>
                      <th>Data</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>	
                    <tr>
                      <td>
                        <a href="#" class="texto-destaque">#999</a>
                      </td>
                      <td>
                        <div class="user-data">
                          <div class="user-data-info">
                            <p class="user-data-header">Alexandre Loes Paz</p>
                            <p class="user-data-description">333.222.666/0001-00</p>
                          </div>
                        </div>								
                      </td>
                      <td>Livro ABC-02</td>
                      <td>Felipe Coutinho Almeida</td>
                      <td>
                        <span class="texto-destaque icone-calendario nv-icomoon-calendar-full">01/01/2000 às 19:00</span>
                      </td>
                      <td class="center-aligned">
                          <div class="barra-progresso-container" data-toggle="popover" data-popover-target="modais/detalhes-relatorios-processamento.html">
                            <div data-ls-module="progressBar" role="progressbar" aria-valuenow="60"></div>
                          </div>
                      </td>
                      </tr>
                      <tr>
                      <td><a href="#" class="texto-destaque">#999</a></td>
                      <td>
                        <div class="user-data">
                          <div class="user-data-info">
                            <p class="user-data-header">Alexandre Loes Paz</p>
                            <p class="user-data-description">333.222.666/0001-00</p>
                          </div>
                        </div>								
                      </td>
                      <td>Livro ABC-02</td>
                      <td>Felipe Coutinho Almeida</td>
                      <td><span class="texto-destaque icone-calendario nv-icomoon-calendar-full">01/01/2000 às 19:00</span></td>
                      <td class="center-aligned">
                          <div class="barra-progresso-container" data-toggle="popover" data-popover-target="modais/detalhes-relatorios-processamento.html">
                            <div data-ls-module="progressBar" role="progressbar" aria-valuenow="60"></div>
                          </div>
                      </td>
                    </tr>
                    <tr>
                      <td><a href="#" class="texto-destaque">#999</a></td>
                      <td>
                        <div class="user-data">
                          <div class="user-data-info">
                            <p class="user-data-header">Alexandre Loes Paz</p>
                            <p class="user-data-description">333.222.666/0001-00</p>
                          </div>
                        </div>								
                      </td>
                      <td>Livro ABC-02</td>
                      <td>Felipe Coutinho Almeida</td>
                      <td><span class="texto-destaque icone-calendario nv-icomoon-calendar-full">01/01/2000 às 19:00</span></td>
                      <td class="center-aligned">
                          <div class="barra-progresso-container" data-toggle="popover" data-popover-target="modais/detalhes-relatorios-processamento.html">
                            <div data-ls-module="progressBar" role="progressbar" aria-valuenow="60"></div>
                          </div>
                      </td>
                    </tr>													
                  </tbody>
                </table>

                <div class="ls-pagination-filter">
                  <ul class="ls-pagination ls-float-left">
                    <li class="ls-disabled"><a href="#"><span class="icon">&laquo;</span></a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li class="ls-active"><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#"><span class="icon">&raquo;</span></a></li>
                  </ul>
                </div>                 
              </div>
              <!-- Fim Relatórios em processamento -->

              <!-- Relatórios pendentes de análise -->
              <div id="relatoriosPendentes" class="ls-tab-content">
                <table class="ls-table">						
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Critério</th>
                      <th>Livro</th>
                      <th>Responsável</th>
                      <th>Data</th>
                      <th>Status</th>
                      <th>Ações</th>
                    </tr>
                  </thead>
                  <tbody>	
                    <tr>
                      <td><a href="#" class="texto-destaque">#999</a></td>
                      <td>
                        <div class="user-data">
                          <div class="user-data-info">
                            <p class="user-data-header">Alexandre Loes Paz</p>
                            <p class="user-data-description">333.222.666/0001-00</p>
                          </div>
                        </div>								
                      </td>
                      <td>Industrial</td>
                      <td>Felipe Coutinho Almeida</td>
                      <td><span class="texto-destaque icone-calendario nv-icomoon-calendar-full">01/01/2000 às 19:00</span></td>
                      <td class="center-aligned">
                          <div class="barra-progresso-container" data-toggle="popover" data-popover-target="modais/detalhes-relatorios-pendentes-analise.html">
                          <div class="rating status">
                            <i class="dot filled"></i>
                            <i class="dot"></i>
                            <i class="dot"></i>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="icon-buttons-group">
                          <button class="ls-btn ls-btn-icon secondary no-bg"><i class="nv-icon-check"></i></button>
                          <button class="ls-btn ls-btn-icon secondary no-bg"><i class="nv-icon-remove"></i></button>
                          <button class="ls-btn ls-btn-icon secondary no-bg" data-adicionar-monitoria-relatorio><i class="nv-icon-visibility"></i></button>
                          <a href="mapa.php" class="ls-btn ls-btn-icon secondary no-bg"><i class="nv-icon-map"></i></a>
                          <button class="ls-btn ls-btn-icon secondary no-bg" data-toggle="popover" data-popover-link=".tpl-popover-links" data-pdf="arquivo.pdf" data-doc="arquivo.doc">
                            <i class="nv-icon-upload"></i>
                          </button>
                        </div>
										
                      </td>
                    </tr>
                    <tr>
                      <td><a href="#" class="texto-destaque">#999</a></td>
                      <td>
                        <div class="user-data">
                          <div class="user-data-info">
                            <p class="user-data-header">Alexandre Loes Paz</p>
                            <p class="user-data-description">333.222.666/0001-00</p>
                          </div>
                        </div>								
                      </td>
                      <td>Industrial</td>
                      <td>Felipe Coutinho Almeida</td>
                      <td><span class="texto-destaque icone-calendario nv-icomoon-calendar-full">01/01/2000 às 19:00</span></td>
                      <td class="center-aligned">
                          <div class="rating status">
                            <i class="dot filled"></i>
                            <i class="dot"></i>
                            <i class="dot"></i>
                          </div>
                      </td>
                      <td>
                        <div class="icon-buttons-group">
                          <button class="ls-btn ls-btn-icon secondary no-bg"><i class="nv-icon-check"></i></button>
                          <button class="ls-btn ls-btn-icon secondary no-bg"><i class="nv-icon-remove"></i></button>
                          <button class="ls-btn ls-btn-icon secondary no-bg" data-adicionar-monitoria-relatorio><i class="nv-icon-visibility"></i></button>
                          <a href="mapa.php" class="ls-btn ls-btn-icon secondary no-bg"><i class="nv-icon-map"></i></a>
                          <button class="ls-btn ls-btn-icon secondary no-bg" data-toggle="popover" data-popover-link=".tpl-popover-links" data-pdf="arquivo.pdf" data-doc="arquivo.doc">
                            <i class="nv-icon-upload"></i>
                          </button>
                        </div>
                      </td>									
                    </tr>
                    <tr>
                      <td><a href="#" class="texto-destaque">#999</a></td>
                      <td>
                        <div class="user-data">
                          <div class="user-data-info">
                            <p class="user-data-header">Alexandre Loes Paz</p>
                            <p class="user-data-description">333.222.666/0001-00</p>
                          </div>
                        </div>								
                      </td>
                      <td>Industrial</td>
                      <td>Felipe Coutinho Almeida</td>
                      <td><span class="texto-destaque icone-calendario nv-icomoon-calendar-full">01/01/2000 às 19:00</span></td>
                      <td class="center-aligned">
                          <div class="rating status">
                            <i class="dot filled"></i>
                            <i class="dot filled"></i>
                            <i class="dot filled"></i>
                          </div>
                      </td>
                      <td>
                        <div class="icon-buttons-group">
                          <button class="ls-btn ls-btn-icon secondary no-bg"><i class="nv-icon-check"></i></button>
                          <button class="ls-btn ls-btn-icon secondary no-bg"><i class="nv-icon-remove"></i></button>
                          <button class="ls-btn ls-btn-icon secondary no-bg" data-adicionar-monitoria-relatorio><i class="nv-icon-visibility"></i></button>
                          <a href="mapa.php" class="ls-btn ls-btn-icon secondary no-bg"><i class="nv-icon-map"></i></a>
                          <button class="ls-btn ls-btn-icon secondary no-bg" data-toggle="popover" data-popover-link=".tpl-popover-links" data-pdf="arquivo.pdf" data-doc="arquivo.doc">
                            <i class="nv-icon-upload"></i>
                          </button>
                        </div>
                      </td>									
                    </tr>													
                    </tbody>
					
                </table>
                <div class="ls-pagination-filter">
                  <ul class="ls-pagination ls-float-left">
                    <li class="ls-disabled"><a href="#"><span class="icon">&laquo;</span></a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li class="ls-active"><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#"><span class="icon">&raquo;</span></a></li>
                  </ul>
                </div>                 
              </div>
              <!-- Fim Relatórios pendentes de análise -->

              <!-- Relatórios concluídos --> 
              <div id="relatoriosConcluidos" class="ls-tab-content">
                <table class="ls-table">						
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Critério</th>
                      <th>Livro</th>
                      <th>Responsável</th>
                      <th>Data</th>
                      <th>Status</th>
                      <th>Ações</th>
                    </tr>
                  </thead>
                  <tbody>	
                    <tr>
                      <td><a href="#" class="texto-destaque">#999</a></td>
                      <td>
                        <div class="user-data">
                          <div class="user-data-info">
                            <p class="user-data-header">Alexandre Loes Paz</p>
                            <p class="user-data-description">333.222.666/0001-00</p>
                          </div>
                        </div>								
                      </td>
                      <td>Industrial</td>
                      <td>Felipe Coutinho Almeida</td>
                      <td><span class="texto-destaque icone-calendario nv-icomoon-calendar-full">01/01/2000 às 19:00</span></td>
                      <td class="center-aligned">
                          <div class="rating status">
                            <i class="dot filled"></i>
                            <i class="dot filled"></i>
                            <i class="dot filled"></i>
                          </div>
                      </td>
                      <td>		
                        <div class="icon-buttons-group">								
                          <button class="ls-btn ls-btn-icon secondary no-bg" data-adicionar-monitoria-relatorio><i class="nv-icon-visibility"></i></button>
                          <a href="mapa.php" class="ls-btn ls-btn-icon secondary no-bg"><i class="nv-icon-map"></i></a>
                          <button class="ls-btn ls-btn-icon secondary no-bg" data-toggle="popover" data-popover-link=".tpl-popover-links" data-pdf="arquivo.pdf" data-doc="arquivo.doc">
                            <i class="nv-icon-upload"></i>
                          </button>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td><a href="#" class="texto-destaque">#999</a></td>
                      <td>
                        <div class="user-data">
                          <div class="user-data-info">
                            <p class="user-data-header">Alexandre Loes Paz</p>
                            <p class="user-data-description">333.222.666/0001-00</p>
                          </div>
                        </div>								
                      </td>
                      <td>Industrial</td>
                      <td>Felipe Coutinho Almeida</td>
                      <td><span class="texto-destaque icone-calendario nv-icomoon-calendar-full">01/01/2000 às 19:00</span></td>
                      <td class="center-aligned">
                          <div class="rating status">
                            <i class="dot filled"></i>
                            <i class="dot filled"></i>
                            <i class="dot filled"></i>
                          </div>
                      </td>
                      <td>			
                        <div class="icon-buttons-group">                        							
                          <button class="ls-btn ls-btn-icon secondary no-bg" data-adicionar-monitoria-relatorio><i class="nv-icon-visibility"></i></button>
                          <a href="mapa.php" class="ls-btn ls-btn-icon secondary no-bg"><i class="nv-icon-map"></i></a>
                          <button class="ls-btn ls-btn-icon secondary no-bg" data-toggle="popover" data-popover-link=".tpl-popover-links" data-pdf="arquivo-1.pdf" data-doc="arquivo-1.doc">
                            <i class="nv-icon-upload"></i>
                          </button>
                        </div>
                      </td>									
                    </tr>
                    <tr>
                      <td><a href="#" class="texto-destaque">#999</a></td>
                      <td>
                        <div class="user-data">
                          <div class="user-data-info">
                            <p class="user-data-header">Alexandre Loes Paz</p>
                            <p class="user-data-description">333.222.666/0001-00</p>
                          </div>
                        </div>								
                      </td>
                      <td>Industrial</td>
                      <td>Felipe Coutinho Almeida</td>
                      <td><span class="texto-destaque icone-calendario nv-icomoon-calendar-full">01/01/2000 às 19:00</span></td>
                      <td class="center-aligned">
                          <div class="rating status">
                            <i class="dot filled"></i>
                            <i class="dot filled"></i>
                            <i class="dot filled"></i>
                          </div>
                      </td>
                      <td>
                        <div class="icon-buttons-group">                      										
                          <button class="ls-btn ls-btn-icon secondary no-bg" data-adicionar-monitoria-relatorio><i class="nv-icon-visibility"></i></button>
                          <a href="mapa.php" class="ls-btn ls-btn-icon secondary no-bg"><i class="nv-icon-map"></i></a>
                          <button class="ls-btn ls-btn-icon secondary no-bg" data-toggle="popover" data-popover-link=".tpl-popover-links" data-pdf="arquivo-2.pdf" data-doc="arquivo-2.doc">
                            <i class="nv-icon-upload"></i>
                          </button>
                        </div>
                      </td>									
                    </tr>													
                    </tbody>
					
                </table>
                <div class="ls-pagination-filter">
                  <ul class="ls-pagination ls-float-left">
                    <li class="ls-disabled"><a href="#"><span class="icon">&laquo;</span></a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li class="ls-active"><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#"><span class="icon">&raquo;</span></a></li>
                  </ul>

                  <div class="ls-filter-view">
                      <select name="" id="" class="select-field">
                        <option value="10">10/pg</option>
                        <option value="30">30/pg</option>
                        <option value="50">50/pg</option>
                      </select>
                  </div>

                </div>                 
              </div>
              <!-- Fim Relatórios concluídos --> 

            </div> 
          </div>  
        </div>
  

      </div>
    </main>




    <?php include("includes/scripts.php"); ?>

  </body>
</html>