<?php include("includes/head.php"); ?>
  <body>

    <?php include("includes/header.php"); ?>

    <?php include("includes/sidebar.php"); ?>

    <main class="ls-main">
      <div class="container-fluid">
        <div class="page-header">
          <h1 class="ls-title-intro">Livros <sup>(213)</sup></h1>
        </div>

        <div class="ls-boxes">
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
        </div>

      </div>
    </main>
    
    <?php include("includes/scripts.php"); ?>
  </body>
</html>