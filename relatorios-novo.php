<?php include("includes/head.php"); ?>
  <body>
    
    <?php include("includes/header.php"); ?>

    <?php include("includes/sidebar.php"); ?>


    <main class="ls-main">
      <div class="container-fluid">
        <div class="page-header">
          <h1 class="ls-title-intro">Novo relatório</h1>
          <!-- <div class="page-header-buttons">
            <button class="ls-btn ls-btn-primary" data-conteudo-alvo="editar-perfil-etapa-2">Customizar Perfil</button>
          </div> -->                           
        </div>

        <div class="ls-boxes" data-id="editar-perfil-etapa-1" data-etapa>

          <!-- Filtros -->
          <div class="ls-box">
              <div class="ls-form ls-form-horizontal row">
                  <div class="col-6">
                      <button class="btn-dropdown" data-dropdown="#listaSelecaoPerfil">Selecione um perfil</button>                   
                      <div class="dropdown-menu dropdown-anchor-top-left" id="listaSelecaoPerfil">
                        <ul class="lista">
                          <li>Pefil 001 <button class="ls-btn ls-btn-primary small" data-conteudo-alvo="editar-perfil-etapa-2">Customizar Perfil</button></li>
                          <li>Pefil 002 <button class="ls-btn ls-btn-primary small" data-conteudo-alvo="editar-perfil-etapa-2">Customizar Perfil</button></li>
                        </ul>
                      </div>                      
                  </div>

                  <div class="col-6">
                    <select class="select-field">
                        <option placeholder> Selecione o Livro </option>
                        <option value="1"> Opção 1 </option>
                        <option value="2"> Opção 2 </option>
                        <option value="3"> Opção 3 </option>
                        <option value="4"> Opção 4 </option>
                    </select>  
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
                  <div class="ls-box">
                  <h2 class="ls-title">Selecione a lista para upload <small>(Formatos aceitos: .txt ou .csv)</small></h2>
                  <div class="row">
                    <div class="col-10">
                        <label class="ls-label">
                            <div class="file-upload-wrapper">
                                <input type="file" class="input-file-text ls-field">
                                <input type="text" class="text-field" placeholder="Selecione uma lista para importar">                              
                            </div>
                        </label>                        
                    </div>   
                    <div class="col-2 right-aligned">
                        <button class="ls-btn ls-btn-primary">Enviar</button>
                    </div>
                      <!--                     <div class="col-2 right-aligned">
                        <button class="ls-btn ls-btn-primary ls-btn-icon-only"><i class="nv-icon-remove"></i></button>
                    </div>    -->                 
                    </div>
                  </div>               
              </div>
              <!-- Fim Upload de lista -->

            </div> 
          </div>  

          <div class="ls-box">
            <div class="row">
              <div class="col">
                  <div class="pretty p-icon p-curve p-tada checkbox-container no-bg no-pad-left">
                      <input type="checkbox" name="monitorarRelatorio" id="monitorarRelatorio">
                      <div class="state p-primary-o">
                          <i class="icon ls-ico-checkmark"></i>
                          <label>Monitorar relatório completo</label>
                      </div>
                  </div>                  
              </div> 
              <div class="col right-aligned">
                <button class="ls-btn-secondary outlined" data-conteudo-alvo="editar-perfil-etapa-1">Cancelar</button>
                <button class="ls-btn-primary" data-conteudo-alvo="editar-perfil-etapa-2">Processar</button>            
              </div>
            </div>
          </div>  
        </div>



        <div class="ls-boxes" data-id="editar-perfil-etapa-2" data-etapa hidden>
          <div class="ls-box">
              <h2 class="ls-title">Novo Relatório</h2>
          </div>          
          <div class="ls-box bg-grey">
           <div class="row">
              <div class="col">
                <h2 class="ls-title">Fontes selecionadas:</h2>
                <div class="relacionar-listas bg-medium-grey">
                  <label class="ls-label field-has-icon ls-ico-search">
                    <input type="text" placeholder="Filtrar por nome" class="ls-field" required="">
                  </label>  
                  <div class="switchable-area" id="switchableArea-1">

                    <div class="pretty p-icon p-curve p-tada checkbox-container with-avatar">
                      <input type="checkbox" name="radio66" data-checkbox-toggle="grupo-1">
                      <div class="state p-primary-o">
                          <i class="icon ls-ico-checkmark"></i>
                          <label>Alexandre Lopez Paes</label>
                      </div>
                      <img src="assets/img/avatar-usuario.png" alt="" class="user-avatar">       
                    </div> 

                    <div class="pretty p-icon p-curve p-tada checkbox-container with-avatar">
                      <input type="checkbox" name="radio66" data-checkbox-toggle="grupo-1">
                      <div class="state p-primary-o">
                          <i class="icon ls-ico-checkmark"></i>
                          <label>Alexandre Lopez Paes</label>
                      </div>
                      <img src="assets/img/avatar-usuario.png" alt="" class="user-avatar">       
                    </div> 

                    <div class="pretty p-icon p-curve p-tada checkbox-container with-avatar">
                      <input type="checkbox" name="radio66" data-checkbox-toggle="grupo-1">
                      <div class="state p-primary-o">
                          <i class="icon ls-ico-checkmark"></i>
                          <label>Alexandre Lopez Paes</label>
                      </div>
                      <img src="assets/img/avatar-usuario.png" alt="" class="user-avatar">       
                    </div> 

                    <div class="pretty p-icon p-curve p-tada checkbox-container with-avatar">
                      <input type="checkbox" name="radio66" data-checkbox-toggle="grupo-1">
                      <div class="state p-primary-o">
                          <i class="icon ls-ico-checkmark"></i>
                          <label>Alexandre Lopez Paes</label>
                      </div>
                      <img src="assets/img/avatar-usuario.png" alt="" class="user-avatar">       
                    </div> 

                    <div class="pretty p-icon p-curve p-tada checkbox-container with-avatar">
                      <input type="checkbox" name="radio66" data-checkbox-toggle="grupo-1">
                      <div class="state p-primary-o">
                          <i class="icon ls-ico-checkmark"></i>
                          <label>Alexandre Lopez Paes</label>
                      </div>
                      <img src="assets/img/avatar-usuario.png" alt="" class="user-avatar">       
                    </div> 

                    <div class="pretty p-icon p-curve p-tada checkbox-container with-avatar">
                      <input type="checkbox" name="radio66" data-checkbox-toggle="grupo-1">
                      <div class="state p-primary-o">
                          <i class="icon ls-ico-checkmark"></i>
                          <label>Alexandre Lopez Paes</label>
                      </div>
                      <img src="assets/img/avatar-usuario.png" alt="" class="user-avatar">       
                    </div>

                  </div> 

                </div>   
              </div>

              <div class="col">
                  <h2 class="ls-title">Fontes disponíveis:</h2>
                  <div class="relacionar-listas bg-blue-gradient">
                  <label class="ls-label field-has-icon ls-ico-search">
                    <input type="text" placeholder="Filtrar por nome" class="ls-field" required="">
                  </label>                      
                    <div class="switchable-area" id="switchableArea-2">


                        <div class="pretty p-icon p-curve p-tada checkbox-container with-avatar">
                          <input type="checkbox" name="radio66" data-checkbox-toggle="grupo-1">
                          <div class="state p-primary-o">
                              <i class="icon ls-ico-checkmark"></i>
                              <label>Alexandre Lopez Paes</label>
                          </div>
                          <img src="assets/img/avatar-usuario.png" alt="" class="user-avatar">       
                        </div> 

                        <div class="pretty p-icon p-curve p-tada checkbox-container with-avatar">
                          <input type="checkbox" name="radio66" data-checkbox-toggle="grupo-1">
                          <div class="state p-primary-o">
                              <i class="icon ls-ico-checkmark"></i>
                              <label>Alexandre Lopez Paes</label>
                          </div>
                          <img src="assets/img/avatar-usuario.png" alt="" class="user-avatar">       
                        </div> 

                        <div class="pretty p-icon p-curve p-tada checkbox-container with-avatar">
                          <input type="checkbox" name="radio66" data-checkbox-toggle="grupo-1">
                          <div class="state p-primary-o">
                              <i class="icon ls-ico-checkmark"></i>
                              <label>Alexandre Lopez Paes</label>
                          </div>
                          <img src="assets/img/avatar-usuario.png" alt="" class="user-avatar">       
                        </div> 

                        <div class="pretty p-icon p-curve p-tada checkbox-container with-avatar">
                          <input type="checkbox" name="radio66" data-checkbox-toggle="grupo-1">
                          <div class="state p-primary-o">
                              <i class="icon ls-ico-checkmark"></i>
                              <label>Alexandre Lopez Paes</label>
                          </div>
                          <img src="assets/img/avatar-usuario.png" alt="" class="user-avatar">       
                        </div> 

                        <div class="pretty p-icon p-curve p-tada checkbox-container with-avatar">
                          <input type="checkbox" name="radio66" data-checkbox-toggle="grupo-1">
                          <div class="state p-primary-o">
                              <i class="icon ls-ico-checkmark"></i>
                              <label>Alexandre Lopez Paes</label>
                          </div>
                          <img src="assets/img/avatar-usuario.png" alt="" class="user-avatar">       
                        </div> 

                        <div class="pretty p-icon p-curve p-tada checkbox-container with-avatar">
                          <input type="checkbox" name="radio66" data-checkbox-toggle="grupo-1">
                          <div class="state p-primary-o">
                              <i class="icon ls-ico-checkmark"></i>
                              <label>Alexandre Lopez Paes</label>
                          </div>
                          <img src="assets/img/avatar-usuario.png" alt="" class="user-avatar">       
                        </div>

                    </div>                            
                  </div>
              </div>                      
          </div>   

        </div>

          <div class="ls-box">
              <div class="row">
                <div class="col">
                    <button class="ls-button ls-btn-secondary outlined" data-conteudo-alvo="editar-perfil-etapa-1">Cancelar</button>
                </div>
                <div class="col right-aligned">
                  <a href="relatorios.php" class="ls-button ls-btn-primary">Gravar</a>
                </div>
          </div>          
        </div>

      </div>
    </main>




    <?php include("includes/scripts.php"); ?>

  </body>
</html>