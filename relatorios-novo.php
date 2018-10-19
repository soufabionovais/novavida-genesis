<?php include("includes/head.php"); ?>
  <body>
    
    <?php include("includes/header.php"); ?>

    <?php include("includes/sidebar.php"); ?>


    <main class="ls-main">
      <div class="container-fluid">
        <div class="page-header">
          <h1 class="ls-title-intro">Novo relatório</h1>
        </div>

        <div class="ls-boxes">
          <!-- <div class="ls-box">
              <h2 class="ls-title">Novo Relatório</h2>
          </div> -->

          <!-- Filtros -->
          <div class="ls-box container-filtros">
              <div class="ls-form ls-form-horizontal row">
                  <div class="col">
                      <label class="ls-label">
                        <select class="select-field option-button" style="width: 100%">
                            <option value="0" selected> Selecione o Perfil </option>
                            <option value="1"> Opção 1 </option>
                            <option value="2"> Opção 2 </option>
                            <option value="3"> Opção 3 </option>
                            <option value="4"> Opção 4 </option>
                        </select>   
                      </label> 
                  </div>

                  <div class="col">
                      <label class="ls-label">
                        <select class="select-field" style="width: 100%">
                            <option value="0" selected> Selecione o Livro </option>
                            <option value="1"> Opção 1 </option>
                            <option value="2"> Opção 2 </option>
                            <option value="3"> Opção 3 </option>
                            <option value="4"> Opção 4 </option>
                        </select>  
                      </label>  
                  </div>                  
              </div>                        
          </div>
          <!-- Fim Filtros -->

          <ul class="ls-tabs-nav box-tabs bg">
            <li class="ls-active"><a data-ls-module="tabs" href="#inserirCPFouCPNJ">Inserir manualmente CPF/CNPJ</a></li>
            <li><a data-ls-module="tabs" href="#uploadLista">Fazer upload de lista</a></li>
          </ul>

          <div class="ls-box bg-grey">
            <div class="ls-tabs-container">
              
              <!-- Inserir CPF ou CNOJ -->
              <div id="inserirCPFouCPNJ" class="ls-tab-content no-bg ls-active">
                <div class="row">
                  <div class="col-9">
                      <label class="ls-label field-has-icon ls-ico-search">
                        <input type="text" placeholder="CPF, nome ou apelido da pessoa" class="ls-field" required="">
                      </label>                        
                  </div>
                  <div class="col right-aligned">
                      <button class="ls-btn ls-btn-primary" data-ls-module="checkboxToggle" data-checkbox-target="check">
                        Selecionar todas
                      </button>                  
                  </div>                  
                </div>

                <table class="ls-table no-margin no-bg inverted-table">
                  <tr>
                      <td>
                        <div class="pretty p-icon p-curve p-tada no-bg">
                            <input type="checkbox" name="radio66" data-checkbox-toggle="check">
                            <div class="state p-primary-o">
                                <i class="icon ls-ico-checkmark"></i>
                                <label>João Augostino da Silva Souto</label>
                            </div>
                        </div>                         
                      </td>
                      <td>CPF: 009.955.444.33</td>
                      <td class="right-aligned">
                        <div class="pretty p-icon p-curve p-tada inverted">
                            <input type="checkbox" name="radio66" data-checkbox-toggle="check">
                            <div class="state p-primary-o">
                                <i class="icon ls-ico-checkmark"></i>
                                <label>Monitorar</label>
                            </div>
                        </div>   
                        <button class="ls-btn ls-btn-icon-only ls-btn-secondary no-bg no-padding"><i class="nv-icon-remove"></i></button>                       
                      </td>
                  </tr>     
                  <tr>
                      <td>
                        <div class="pretty p-icon p-curve p-tada no-bg">
                            <input type="checkbox" name="radio66" data-checkbox-toggle="check">
                            <div class="state p-primary-o">
                                <i class="icon ls-ico-checkmark"></i>
                                <label>João Augostino da Silva Souto</label>
                            </div>
                        </div>                         
                      </td>
                      <td>CPF: 009.955.444.33</td>
                      <td class="right-aligned">
                        <div class="pretty p-icon p-curve p-tada inverted">
                            <input type="checkbox" name="radio66" data-checkbox-toggle="check">
                            <div class="state p-primary-o">
                                <i class="icon ls-ico-checkmark"></i>
                                <label>Monitorar</label>
                            </div>
                        </div>   
                        <button class="ls-btn ls-btn-icon-only ls-btn-secondary no-bg no-padding"><i class="nv-icon-remove"></i></button>                       
                      </td>
                  </tr>     
                  <tr>
                      <td>
                        <div class="pretty p-icon p-curve p-tada no-bg">
                            <input type="checkbox" name="radio66" data-checkbox-toggle="check">
                            <div class="state p-primary-o">
                                <i class="icon ls-ico-checkmark"></i>
                                <label>João Augostino da Silva Souto</label>
                            </div>
                        </div>                         
                      </td>
                      <td>CPF: 009.955.444.33</td>
                      <td class="right-aligned">
                        <div class="pretty p-icon p-curve p-tada inverted">
                            <input type="checkbox" name="radio66" data-checkbox-toggle="check">
                            <div class="state p-primary-o">
                                <i class="icon ls-ico-checkmark"></i>
                                <label>Monitorar</label>
                            </div>
                        </div>   
                        <button class="ls-btn ls-btn-icon-only ls-btn-secondary no-bg no-padding"><i class="nv-icon-remove"></i></button>                       
                      </td>
                  </tr>                                                    
                </table>
               
              </div>
              <!-- Fim Inserir CPF ou CNOJ -->

              <!-- Upload de lista -->
              <div id="uploadLista" class="ls-tab-content no-bg">
                  <h1>Upload</h1>
              </div>
              <!-- Fim Upload de lista -->

            </div> 
          </div>  

          <div class="ls-box">
            <div class="row">
              <div class="col">
                  <div class="pretty p-icon p-curve p-tada checkbox-container no-bg no-pad-left">
                      <input type="checkbox" name="radio66">
                      <div class="state p-primary-o">
                          <i class="icon ls-ico-checkmark"></i>
                          <label>Monitorar relatório completo</label>
                      </div>
                  </div>                  
              </div> 
              <div class="col right-aligned">
                <button class="ls-btn-secondary outlined">Cancelar</button>
                <button class="ls-btn-primary">Processar</button>            
              </div>
            </div>
          </div>  
        </div>
      </div>
    </main>




    <?php include("includes/scripts.php"); ?>

  </body>
</html>