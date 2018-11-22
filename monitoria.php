<?php include("includes/head.php"); ?>
  <body>

    <?php include("includes/header.php"); ?>

    <?php include("includes/sidebar.php"); ?>

    <main class="ls-main">
      <div class="container-fluid">
        <div class="page-header">
          <h1 class="ls-title-intro">Monitoria</h1>
        </div>

        <div class="ls-boxes">
          <!-- Filtros -->
          <div class="ls-box container-filtros small-gutters">
              <div class="ls-form ls-form-horizontal row">
                  <div class="col">
                      <label class="ls-label field-has-icon ls-ico-search">
                        <input type="text" placeholder="Pesquisar por termo" class="ls-field" required="">
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
                <div class="row">
                  <div class="col-9">
                    <table class="ls-table ls-no-margin-top">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Relatório</th>
                        <th>Última verificação</th>
                        <th>Próxima verificação</th>
                        <th>Acões</th>
                      </tr>
                    </thead>            
                    <tbody>
                      <tr>
                        <td><a href="#" class="texto-destaque">9999</a></td>
                        <td>
                          ABC Contabilidade
                        </td>
                        <td>01/10/2018 às 18:30</td>
                        <td>
                            01/10/2018 às 18:30
                        </td>                                                        
                        <td class="right-aligned">
                          <button class="ls-btn ls-btn-primary" data-adicionar-monitoria>
                            Adicionar
                          </button>
                          <button class="ls-btn ls-btn-primary no-bg no-padding btn-remove" >
                            <i class="nv-icomoon-cross2"></i>
                          </button>                      
                        </td> 
                      </tr>
                      <tr>
                        <td><a href="#" class="texto-destaque">9999</a></td>
                        <td>
                          ABC Contabilidade
                        </td>
                        <td>01/10/2018 às 18:30</td>
                        <td>
                            01/10/2018 às 18:30
                        </td>                                                        
                        <td class="right-aligned">
                          <button class="ls-btn ls-btn-primary" data-adicionar-monitoria>
                            Adicionar
                          </button>
                          <button class="ls-btn ls-btn-primary no-bg no-padding btn-remove" >
                            <i class="nv-icomoon-cross2"></i>
                          </button>                      
                        </td> 
                      </tr>
                      <tr>
                        <td><a href="#" class="texto-destaque">9999</a></td>
                        <td>
                          ABC Contabilidade
                        </td>
                        <td>01/10/2018 às 18:30</td>
                        <td>
                            01/10/2018 às 18:30
                        </td>                                                        
                        <td class="right-aligned">
                          <button class="ls-btn ls-btn-primary" data-adicionar-monitoria>
                            Adicionar
                          </button>
                          <button class="ls-btn ls-btn-primary no-bg no-padding btn-remove" >
                            <i class="nv-icomoon-cross2"></i>
                          </button>                      
                        </td> 
                      </tr>
                      <tr>
                        <td><a href="#" class="texto-destaque">9999</a></td>
                        <td>
                          ABC Contabilidade
                        </td>
                        <td>01/10/2018 às 18:30</td>
                        <td>
                            01/10/2018 às 18:30
                        </td>                                                        
                        <td class="right-aligned">
                          <button class="ls-btn ls-btn-primary" data-adicionar-monitoria>
                            Adicionar
                          </button>
                          <button class="ls-btn ls-btn-primary no-bg no-padding btn-remove" >
                            <i class="nv-icomoon-cross2"></i>
                          </button>                      
                        </td> 
                      </tr>
                      <tr>
                        <td><a href="#" class="texto-destaque">9999</a></td>
                        <td>
                          ABC Contabilidade
                        </td>
                        <td>01/10/2018 às 18:30</td>
                        <td>
                            01/10/2018 às 18:30
                        </td>                                                        
                        <td class="right-aligned">
                          <button class="ls-btn ls-btn-primary" data-adicionar-monitoria>
                            Adicionar
                          </button>
                          <button class="ls-btn ls-btn-primary no-bg no-padding btn-remove" >
                            <i class="nv-icomoon-cross2"></i>
                          </button>                      
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
                  <div class="col-3">
                    <div class="ls-box bg-medium-grey small-space">
                      <h2 class="sidebar-title">Acompanhamento: Alpha Jurídica</h2>
                      <div class="data-table__container">
                        <div class="data-table__item">
                          <p class="texto-destaque"><a href="capa.php" class="texto-destaque">Alteração da data do relatório</a></p>  
                          <p class="right-aligned">01/10/2018 às 19:00</p>                       
                        </div>
                        <div class="data-table__item">
                          <p class="texto-destaque"><a href="capa.php" class="texto-destaque">Alteração da data do relatório</a></p>  
                          <p class="right-aligned">01/10/2018 às 19:00</p>                       
                        </div>
                        <div class="data-table__item">
                          <p class="texto-destaque"><a href="capa.php" class="texto-destaque">Alteração da data do relatório</a></p>  
                          <p class="right-aligned">01/10/2018 às 19:00</p>                       
                        </div>
                        <div class="data-table__item">
                          <p class="texto-destaque"><a href="capa.php" class="texto-destaque">Alteração da data do relatório</a></p>  
                          <p class="right-aligned">01/10/2018 às 19:00</p>                       
                        </div>
                        <div class="data-table__item">
                          <p class="texto-destaque"><a href="capa.php" class="texto-destaque">Alteração da data do relatório</a></p>  
                          <p class="right-aligned">01/10/2018 às 19:00</p>                       
                        </div>                                                                                                
                      </div>
                    </div>
                    
                  </div>                  

                </div>


                      
            </div>            
        </div>

      </div>
    </main>
    
    <?php include("includes/scripts.php"); ?>
  </body>
</html>