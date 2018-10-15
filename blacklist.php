<?php include("includes/head.php"); ?>
  <body>

    <?php include("includes/header.php"); ?>

    <?php include("includes/sidebar.php"); ?>

    <main class="ls-main">
      <div class="container-fluid">
        <div class="page-header">
          <h1 class="ls-title-intro">Blacklist</h1>
          <div class="page-header-buttons">
            <button class="ls-btn ls-btn-primary" data-adicionar-blacklist>Adicionar à blacklist</button>
          </div>
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
                    </div>   
                </div>
            </div>
            <div class="ls-box">
                <table class="ls-table ls-no-margin-top">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>CPF/CNPJ</th>
                    <th>Regra de Bloqueio</th>
                    <th>Incluído por</th>
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
                      333.444.666-01
                    </td>
                    <td>
                      <span class="texto-destaque">Não pagamento do desbloqueio</span>
                    </td>     
                    <td>
                      Márcio dos Santos Santana
                    </td> 
                    <td>
                      <span class="texto-destaque nv-icon icon-calendar">25/06/2018 às 16:24</span>
                    </td>
                    <td class="right-aligned">
                      <button class="ls-btn ls-btn-primary small">
                        Retirar da Blacklist
                      </button>
                    </td> 
                  </tr>
                  <tr>
                    <td>
                       <a href="#" class="texto-destaque">#555</a>
                    </td>
                    <td>
                      333.444.666-01
                    </td>
                    <td>
                      <span class="texto-destaque">Não pagamento do desbloqueio</span>
                    </td>     
                    <td>
                      Márcio dos Santos Santana
                    </td> 
                    <td>
                      <span class="texto-destaque nv-icon icon-calendar">25/06/2018 às 16:24</span>
                    </td>
                    <td class="right-aligned">
                      <button class="ls-btn ls-btn-primary small">
                        Retirar da Blacklist
                      </button>
                    </td> 
                  </tr>
                  <tr>
                    <td>
                       <a href="#" class="texto-destaque">#555</a>
                    </td>
                    <td>
                      333.444.666-01
                    </td>
                    <td>
                      <span class="texto-destaque">Não pagamento do desbloqueio</span>
                    </td>     
                    <td>
                      Márcio dos Santos Santana
                    </td> 
                    <td>
                      <span class="texto-destaque nv-icon icon-calendar">25/06/2018 às 16:24</span>
                    </td>
                    <td class="right-aligned">
                      <button class="ls-btn ls-btn-primary small">
                        Retirar da Blacklist
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