<?php include("includes/head.php"); ?>
  <body>
    
    <?php include("includes/header.php"); ?>

    <?php include("includes/sidebar.php"); ?>


    <main class="ls-main">
      <div class="container-fluid">
        <div class="page-header">
          <h1 class="ls-title-intro">Localizador de CPF/CNPJ</h1>
        </div>

        <div class="ls-boxes">
          <div class="ls-box">
            <ul class="ls-tabs-nav box-tabs">
              <li class="ls-active"><a data-ls-module="tabs" href="#localizadorPessosFisica">Localizar Pessoa Física</a></li>
              <li><a data-ls-module="tabs" href="#localizadorPessosJuridica">Localizar Pessoa Jurídica</a></li>
            </ul>
            <div class="ls-tabs-container">
              <!-- Localizador Pessoa Física -->
              <div id="localizadorPessosFisica" class="ls-tab-content ls-active">
                  <div class="ls-form ls-form-horizontal row">
                      <div class="col">
                        <label class="ls-label">
                          <input type="text" name="nome" placeholder="Nome" class="ls-field" required>
                        </label>                      
                        <label class="ls-label">
                          <input type="text" name="Data de nascimento" placeholder="Data de nascimento" class="ls-field" required>
                        </label>                      
                        <label class="ls-label">
                          <input type="text" name="nome" placeholder="Nome da mãe" class="ls-field" required>
                        </label>                      
                        <label class="ls-label">
                          <input type="text" name="nome" placeholder="Telefone" class="ls-field" required>
                        </label>                      
                        <label class="ls-label">
                          <input type="text" name="nome" placeholder="E-mail" class="ls-field" required>
                        </label>                      
                      </div>

                      <div class="col">
                        <label class="ls-label">
                          <input type="text" name="nome" placeholder="Nome do irmão" class="ls-field" required>
                        </label>                      
                        <label class="ls-label">
                          <input type="text" name="Data de nascimento" placeholder="Empresa que já trabalhou" class="ls-field" required>
                        </label>                      
                        <label class="ls-label">
                          <input type="text" name="nome" placeholder="Estado" class="ls-field" required>
                        </label>                      
                        <label class="ls-label">
                          <input type="text" name="nome" placeholder="Cidade" class="ls-field" required>
                        </label>                      
                        <label class="ls-label">
                          <input type="text" name="nome" placeholder="Endereço" class="ls-field" required>
                        </label>                        
                      </div>
                  </div>
                  <button class="ls-btn ls-btn-primary large fluid" data-pesquisar-pf>Pesquisar</button>                  
              </div>
              <!-- Fim Localizador Pessoa Física -->

              <!-- Localizador Pessoa Jurídica -->
              <div id="localizadorPessosJuridica" class="ls-tab-content">
                  <div class="ls-form ls-form-horizontal row">
                      <div class="col">
                        <label class="ls-label">
                          <input type="text" name="nome" placeholder="Razão social" class="ls-field" required>
                        </label>                      
                        <label class="ls-label">
                          <input type="text" name="Data de nascimento" placeholder="Ex-sócios" class="ls-field" required>
                        </label>                      
                        <label class="ls-label">
                          <input type="text" name="nome" placeholder="Nome dos sócios" class="ls-field" required>
                        </label>                      
                        <label class="ls-label">
                          <input type="text" name="nome" placeholder="Nome fantasia" class="ls-field" required>
                        </label>                      
                      </div>

                      <div class="col">
                        <label class="ls-label">
                          <input type="text" name="nome" placeholder="Site" class="ls-field" required>
                        </label>                      
                        <label class="ls-label">
                          <input type="text" name="Data de nascimento" placeholder="Estado" class="ls-field" required>
                        </label>                      
                        <label class="ls-label">
                          <input type="text" name="nome" placeholder="Cidade" class="ls-field" required>
                        </label>                      
                        <label class="ls-label">
                          <input type="text" name="nome" placeholder="Endereço" class="ls-field" required>
                        </label>                      
                      </div>
                  </div>              
                  <button class="ls-btn ls-btn-primary large fluid" data-pesquisar-pj>Pesquisar</button>                  
              </div>
              <!-- Fim Localizador Pessoa Jurídica -->
            </div> 
          </div>  
        </div>

        <div class="ls-boxes" id="resultadoBuscador" hidden>
          <div class="ls-box">
          <table class="ls-table">
            <caption class="right-aligned"><strong class="texto-destaque">92</strong> resultados encontrados</caption>
            <thead>
              <tr>
                <th>Nome</th>
                <th>Nome da mãe</th>
                <th class="center-aligned">Idade</th>
                <th>CPF</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
            </tr>
          </thead>
            <tbody>
              <tr>
                <td>
                      Lena Maria Ferreira
                </td>
                <td>
                    Maria Fernanda Moraes
                </td>
                <td class="center-aligned">
                  19
                </td>
                <td>
                  <strong>323.344.444.01</strong>
                </td>
                <td class="center-aligned">
                  <button class="ls-btn ls-btn-primary small">Mais relatório</button>
                </td>
                <td class="center-aligned">
                  <button class="ls-btn ls-btn-secondary small" data-adicionar-blacklist>Adicionar à blacklist</button>
                </td>				      				      				      				      
              </tr>
              <tr>
                <td>
                      Lena Maria Ferreira
                </td>
                <td>
                    Maria Fernanda Moraes
                </td>
                <td class="center-aligned">
                  19
                </td>
                <td>
                  <strong>323.344.444.01</strong>
                </td>
                <td class="center-aligned">
                  <button class="ls-btn ls-btn-primary small">Mais relatório</button>
                </td>
                <td class="center-aligned">
                  <button class="ls-btn ls-btn-secondary small" data-adicionar-blacklist>Adicionar à blacklist</button>
                </td>				      				      				      				      
              </tr>
              <tr>
                <td>
                      Lena Maria Ferreira
                </td>
                <td>
                    Maria Fernanda Moraes
                </td>
                <td class="center-aligned">
                  19
                </td>
                <td>
                  <strong>323.344.444.01</strong>
                </td>
                <td class="center-aligned">
                  <button class="ls-btn ls-btn-primary small">Mais relatório</button>
                </td>
                <td class="center-aligned">
                  <button class="ls-btn ls-btn-secondary small" data-adicionar-blacklist>Adicionar à blacklist</button>
                </td>				      				      				      				      
              </tr>
              <tr>
                <td>
                      Lena Maria Ferreira
                </td>
                <td>
                    Maria Fernanda Moraes
                </td>
                <td class="center-aligned">
                  19
                </td>
                <td>
                  <strong>323.344.444.01</strong>
                </td>
                <td class="center-aligned">
                  <button class="ls-btn ls-btn-primary small">Mais relatório</button>
                </td>
                <td class="center-aligned">
                  <button class="ls-btn ls-btn-secondary small" data-adicionar-blacklist>Adicionar à blacklist</button>
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