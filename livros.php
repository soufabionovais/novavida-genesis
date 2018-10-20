<?php include("includes/head.php"); ?>
  <body>

    <?php include("includes/header.php"); ?>

    <?php include("includes/sidebar.php"); ?>

    <main class="ls-main">
      <div class="container-fluid">
        <div class="page-header">
          <h1 class="ls-title-intro">Livros <sup>(213)</sup></h1>
        </div>

        <!-- <div class="ls-boxes">
            <div class="ls-box container-filtros">
                <div class="ls-form ls-form-horizontal row">
                    <div class="col-3">
                      <label class="ls-label field-has-icon ls-ico-search">
                        <input type="text" placeholder="Pesquisar por nome" class="ls-field" required>
                      </label>                            
                    </div>
                    <div class="col right-aligned">
                      <div class="ls-group-btn ls-group-active">
                        <button type="button" class="ls-btn ls-btn-primary ls-active">CPF</button>
                        <button type="button" class="ls-btn ls-btn-primary">CNPJ</button>
                      </div>                    
                      <button class="ls-btn ls-btn-secondary outlined">Adicionar</button>
                    </div>   
                </div>
            </div>
            <div class="ls-box">
                <table class="ls-table ls-no-margin-top">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Livro</th>
                    <th>Autor</th>
                    <th>Data</th>
                    <th>&nbsp;</th>
                  </tr>
                </thead>						
                <tbody>
                  <tr>
                    <td>
                       <a href="#" class="texto-destaque">#555</a>
                    </td>
                    <td>
                      Fonte da empresa Piraju atualizada...
                    </td>
                    <td>
                      <span class="texto-destaque">Alexandre Loes Paz</span>
                    </td>                                                        
                    <td>
                      <span class="texto-destaque nv-icon icon-calendar">25/06/2018 às 16:24</span>
                    </td>
                    <td class="right-aligned">
                      <button class="ls-btn ls-btn-primary">
                        Visualizar
                      </button>
                    </td> 
                  </tr>

                  <tr>
                    <td>
                       <a href="#" class="texto-destaque">#555</a>
                    </td>
                    <td>
                      Fonte da empresa Piraju atualizada...
                    </td>
                    <td>
                      <span class="texto-destaque">Alexandre Loes Paz</span>
                    </td>                                                        
                    <td>
                      <span class="texto-destaque nv-icon icon-calendar">25/06/2018 às 16:24</span>
                    </td>
                    <td class="right-aligned">
                      <button class="ls-btn ls-btn-primary">
                        Visualizar
                      </button>
                    </td> 
                  </tr>

                  <tr>
                    <td>
                       <a href="#" class="texto-destaque">#555</a>
                    </td>
                    <td>
                      Fonte da empresa Piraju atualizada...
                    </td>
                    <td>
                      <span class="texto-destaque">Alexandre Loes Paz</span>
                    </td>                                                        
                    <td>
                      <span class="texto-destaque nv-icon icon-calendar">25/06/2018 às 16:24</span>
                    </td>
                    <td class="right-aligned">
                      <button class="ls-btn ls-btn-primary">
                        Visualizar
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
        </div> -->

                <div class="ls-boxes">
                    <div class="ls-box container-filtros">
                        <div class="ls-form ls-form-horizontal row">
                            <label class="ls-label col-12 field-has-icon ls-ico-search">
                              <span class="label-texto">Título</span>
                              <input type="text" placeholder="Pesquisar por nome" class="ls-field" required>
                            </label>
                        </div>

                        <div class="ls-form ls-form-horizontal row">
                            <div class="col">
                              <label class="texto-destaque">
                                <b class="ls-label-text">Grupos de Acesso:</b>
                              </label>                      
                                <div class="pretty p-default p-round p-thick radio-style no-border">
                                    <input type="radio" name="permitirRelatorios" />
                                    <div class="state">
                                        <label>Acesso restrito</label>
                                    </div>
                                </div> 
                                <div class="pretty p-default p-round p-thick radio-style no-border">
                                    <input type="radio" name="permitirRelatorios" />
                                    <div class="state">
                                        <label>Acesso público</label>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                    <div class="ls-box bg-grey">
                        <div class="row ls-box-header">
                          <div class="col">
                            <h2 class="ls-title">Relatórios</h2> 
                          </div>
                          <div class="col right-aligned">
                              <button class="ls-btn ls-btn-primary small">Adicionar</button>
                              <button class="ls-btn ls-btn-secondary outlined small">Remover</button>
                          </div>
                        </div>                         
                    </div>
                    <div class="ls-box bg-grey">
                        <div class="container-filtros small-gutters">
                            <div class="ls-form ls-form-horizontal row">
                                <div class="col">
                                    <label class="ls-label field-has-icon ls-ico-search">
                                      <input type="text" placeholder="Filtrar por nome" class="ls-field" required="">
                                    </label>                        
                                </div>
                                <div class="col">
                                    <select class="select-field" style="width: 100%">
                                        <option value="0" selected> Livros </option>
                                        <option value="1"> Opção 1 </option>
                                        <option value="2"> Opção 2 </option>
                                        <option value="3"> Opção 3 </option>
                                        <option value="4"> Opção 4 </option>
                                    </select>                                                         
                                </div>
                                <div class="col">
                                    <select class="select-field" style="width: 100%">
                                        <option value="0" selected> Responsáveis </option>
                                        <option value="1"> Opção 1 </option>
                                        <option value="2"> Opção 2 </option>
                                        <option value="3"> Opção 3 </option>
                                        <option value="4"> Opção 4 </option>
                                    </select>                                                         
                                </div>
                                <div class="col">
                                    <select class="select-field" style="width: 100%">
                                        <option value="0" selected> Data </option>
                                        <option value="1"> Opção 1 </option>
                                        <option value="2"> Opção 2 </option>
                                        <option value="3"> Opção 3 </option>
                                        <option value="4"> Opção 4 </option>
                                    </select>                                                         
                                </div>
                                <div class="col">
                                    <select class="select-field" style="width: 100%">
                                        <option value="1" selected> Segmento </option>
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
                    </div>
                    <div class="ls-box bg-grey">
                        <div class="row">
                          <div class="col-1">
                            <input type="checkbox">
                          </div>
                          <div class="col-5">
                            <div class="user-data">
                              <div class="user-data-info">
                                <p class="user-data-header">Alexandre Loes Paz</p>
                                <p class="user-data-description">333.222.666/0001-00</p>
                              </div>
                            </div>    
                          </div>
                          <div class="col-4">
                            Paulo André
                          </div>
                          <div class="col-2">
                            22/11/2018
                          </div>                          
                        </div>
                    </div>                    

                    <div class="ls-box bg-grey">
                        <div class="ls-collapse-group">
                          <div data-ls-module="collapse" data-target="#accordeon0" class="ls-collapse">
                              <div class="pretty p-icon p-curve p-tada checkbox-container">
                                <input type="checkbox" name="radio66" data-ls-module="checkboxToggle" data-checkbox-target="grupo-1">
                                <div class="state p-primary-o">
                                    <i class="icon ls-ico-checkmark"></i>
                                    <label></label>
                                </div>
                              </div>   
                            <span class="ls-collapse-header">
                              <h3 class="ls-collapse-title">Relatório 1</h3>
                            </span>
                            <button class="ls-btn-primary ls-btn-icon-only no-padding no-bg btn-trash">
                              <i class="nv-icon-trash"></i>
                            </button>
                            <div class="ls-collapse-body bg-blue-gradient" id="accordeon0">
                              <div class="ls-collapse-body-container">
                                  <ul class="lista">
                                    <li>
                                        <h3 class="lista-titulo">Relatório 1.1</h3>
                                        <ul class="sub-lista">
                                          <li>Relatório 1.1.1</li>
                                          <li>Relatório 1.1.2</li>
                                          <li>Relatório 1.1.3</li>
                                        </ul>
                                    </li>
                                  </ul>
                              </div>
                            </div>
                          </div>
                          <div data-ls-module="collapse" data-target="#accordeon1" class="ls-collapse">

                              <div class="pretty p-icon p-curve p-tada checkbox-container">
                                <input type="checkbox" name="radio66" data-ls-module="checkboxToggle" data-checkbox-target="grupo-2">
                                <div class="state p-primary-o">
                                    <i class="icon ls-ico-checkmark"></i>
                                    <label></label>
                                </div>
                              </div>                            
                            <a href="#" class="ls-collapse-header">
                              <h3 class="ls-collapse-title">Relatório 2</h3>
                            </a>
                            <button class="ls-btn-primary ls-btn-icon-only no-padding no-bg btn-trash">
                              <i class="nv-icon-trash"></i>
                             </button>                               
                            <div class="ls-collapse-body bg-blue-gradient" id="accordeon1">
                               <div class="ls-collapse-body-container">
                                    <ul class="lista">
                                      <li>
                                          <h3 class="lista-titulo">Relatório 2.1</h3>
                                          <ul class="sub-lista">
                                            <li>Relatório 2.1.1</li>
                                            <li>Relatório 2.1.2</li>
                                            <li>Relatório 2.1.3</li>
                                          </ul>
                                      </li>
                                    </ul>
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