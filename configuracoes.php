<?php include("includes/head.php"); ?>
  <body>

    <?php include("includes/header.php"); ?>

    <?php include("includes/sidebar.php"); ?>

    <main class="ls-main">
      <div class="container-fluid">
        <div class="page-header">
          <!-- <h1 class="ls-title-intro">Página inicial</h1> -->
            <ul class="ls-tabs-nav page-title-tabs">
              <li class="ls-active"><a data-ls-module="tabs" href="#templates">Templates</a></li>
              <li><a data-ls-module="tabs" href="#perfilRelatorio">Perfil de Relatório</a></li>
              <li><a data-ls-module="tabs" href="#fontes">Fontes</a></li>
            </ul>   
        </div>

          <ol class="ls-breadcrumb">
            <li><a href="#">Configurações</a></li>
            <li>Templates</li>
          </ol>        

          <!-- Conteúdos Abas -->
          <div class="ls-tabs-container">
            <!-- Aba Templates -->
            <div id="templates" class="ls-tab-content ls-active">
                <div class="ls-boxes" data-id="templates-etapa-1" data-etapa>  
                    <div class="ls-box container-filtros">
                        <div class="ls-form ls-form-horizontal row">
                            <label class="ls-label col-9 field-has-icon ls-ico-search">
                              <input type="text" placeholder="Pesquisar por nome" class="ls-field" required>
                            </label>
                            <div class="col right-aligned">
                              <button class="ls-btn ls-btn-secondary outlined" data-conteudo-alvo="templates-etapa-2">Adicionar</button>
                            </div>        
                        </div>
                    </div>
                    <div class="ls-box">
                        <table class="ls-table ls-no-margin-top">
                        <colgroup>
                          <col>
                          <col width="24%">
                        </colgroup>
                        <thead>
                          <tr>
                            <th>Template</th>
                            <th>Ações</th>
                          </tr>
                        </thead>						
                        <tbody>
                          <tr>
                            <td>
                              Nome do template 1
                            </td>
                            <td class="right-aligned">
                              <button class="ls-btn ls-btn-primary small" data-relacionar-perfil>Relacionar perfil</button>
                            </td> 
                          </tr>
                          <tr>
                            <td>
                              Nome do template 2
                            </td>
                            <td class="right-aligned">
                              <button class="ls-btn ls-btn-primary small" data-relacionar-perfil>Relacionar perfil</button>
                            </td>				      				      				      				      
                          </tr>
                          <tr>
                            <td>
                              Nome do template 3
                            </td>
                            <td class="right-aligned">
                              <button class="ls-btn ls-btn-primary small" data-relacionar-perfil>Relacionar perfil</button>
                            </td>				      				      				      				      
                          </tr>
                          <tr>
                            <td>
                              Nome do template 4
                            </td>
                            <td class="right-aligned">
                              <button class="ls-btn ls-btn-primary small" data-relacionar-perfil>Relacionar perfil</button>
                            </td>				      				      				      				      
                          </tr>
                          <tr>
                            <td>
                              Nome do template 5
                            </td>
                            <td class="right-aligned">
                              <button class="ls-btn ls-btn-primary small" data-relacionar-perfil>Relacionar perfil</button>
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

                <div class="ls-boxes" data-id="templates-etapa-2" data-etapa hidden> 
                    <div class="ls-box container-filtros">
                        <div class="ls-form ls-form-horizontal row">
                            <label class="ls-label col-6 field-has-icon">
                              <input type="text" placeholder="Escolha o nome" class="ls-field" required>
                            </label>
                            <label class="ls-label col-6 field-has-icon">
                              <input type="text" placeholder="Texto da marca d'água" class="ls-field" required>
                            </label>
                            <label class="ls-label col-12 field-has-icon">
                              <input type="text" placeholder="Termos" class="ls-field" data-tags>
                            </label>
                        </div>                    
                    </div>
                    <div class="ls-box area-upload">
                        <div class="row">
                          <div class="col">
                            <div class="conteudo-upload">
                              <p>Upload de arquivo para Logotipo Oficial</p>
                              <button class="ls-btn ls-btn-secondary outlined large" id="btnUploadLoad">Selecionar arquivo</button>
                              <small>Tamanho máximo: 3MB | Extensões permitidas: .jpg, .png ou .gif</small>
                            </div>	
                          </div>
                          <div class="col">
                              <form action="upload/upload.html" class="dropzone zone-upload-image" id="uploadImage"></form>						
                          </div>
                        </div>
                    </div>
                    <div class="ls-box">
                        <div class="row">
                          <div class="col right-aligned">
                            <button class="ls-btn ls-btn-secondary outlined" data-conteudo-alvo="templates-etapa-1">Cancelar</button>
                            <button class="ls-btn ls-btn-primary">Salvar</button>
                          </div>
                        </div>
                    </div>
                
                </div>
            </div>
            <!-- Fim Aba Templates -->

            <!-- Aba Perfil Relatórios -->
            <div id="perfilRelatorio" class="ls-tab-content">
                <div class="ls-boxes" data-id="perfil-relatorios-etapa-1" data-etapa>  
                    <div class="ls-box container-filtros">
                        <div class="ls-form ls-form-horizontal row">
                            <label class="ls-label col-6 field-has-icon ls-ico-search">
                              <input type="text" placeholder="Pesquisar por nome" class="ls-field" required>
                            </label>
                            <label class="col-3">
                                <select class="select-field" style="width: 100%">
                                    <option value="1" selected> Opção 1 </option>
                                    <option value="1"> Opção 1 </option>
                                    <option value="2"> Opção 2 </option>
                                    <option value="3"> Opção 3 </option>
                                    <option value="4"> Opção 4 </option>
                                </select>
                            </label>
                            <div class="col right-aligned">
                              <button class="ls-btn ls-btn-secondary outlined" data-conteudo-alvo="perfil-relatorios-etapa-2">Adicionar</button>
                            </div>        
                        </div>
                    </div>
                    <div class="ls-box">
                        <table class="ls-table ls-no-margin-top">
                        <colgroup>
                            <col span="2">
                            <col width="28%">                        
                        </colgroup>
                        <thead>
                          <tr>
                            <th>Versão</th>
                            <th>Perfil</th>
                            <th class="actions">Ações</th>
                          </tr>
                        </thead>						
                        <tbody>
                          <tr>
                            <td><span class="texto-destaque">V1</span></td>
                            <td>
                              Nome do perfil 1
                            </td>
                            <td class="right-aligned">
                              <button class="ls-btn ls-btn-primary small" data-relacionar-perfil>Duplicar e customizar</button>
                            </td> 
                          </tr>
                          <tr>
                            <td><span class="texto-destaque">V1.1</span></td>                      
                            <td>
                              Nome do perfil 2
                            </td>
                            <td class="right-aligned">
                              <button class="ls-btn ls-btn-primary small" data-relacionar-perfil>Duplicar e customizar</button>
                            </td>				      				      				      				      
                          </tr>
                          <tr>
                            <td><span class="texto-destaque">V2.0</span></td>
                            <td>
                              Nome do perfil 3
                            </td>
                            <td class="right-aligned">
                              <button class="ls-btn ls-btn-primary small" data-relacionar-perfil>Duplicar e customizar</button>
                            </td>				      				      				      				      
                          </tr>
                          <tr>
                            <td><span class="texto-destaque">V2.1</span></td>
                            <td>
                              Nome do perfil 4
                            </td>
                            <td class="right-aligned">
                              <button class="ls-btn ls-btn-primary small" data-relacionar-perfil>Duplicar e customizar</button>
                            </td>				      				      				      				      
                          </tr>
                          <tr>
                            <td><span class="texto-destaque">V2.2</span></td>
                            <td>
                              Nome do perfil 5
                            </td>
                            <td class="right-aligned">
                              <button class="ls-btn ls-btn-primary small" data-relacionar-perfil>Duplicar e customizar</button>
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

                <div class="ls-boxes" data-id="perfil-relatorios-etapa-2" data-etapa hidden>
                    <div class="ls-box">
                        <div class="row">
                          <div class="col d-flex align-items-center">
                            <h2 class="ls-title">Novo Perfil</h2>
                          </div>
                          <div class="col right-aligned">
                              <ol class="ls-breadcrumb passos">
                                <li><a href="#">Configurações gerais</a></li>
                                <li><a href="#">Configurações de fontes</a></li>
                              </ol>                          
                          </div>
                        </div>
                    </div>
                    <div class="ls-box container-filtros">
                        <div class="ls-form ls-form-horizontal row">
                            <label class="ls-label col-6 field-has-icon ls-ico-search">
                              <input type="text" placeholder="Pesquisar por nome" class="ls-field" required>
                            </label>
                            <label class="col-3">
                                <select class="select-field" style="width: 100%">
                                    <option value="1"> Opção 1 </option>
                                    <option value="2"> Opção 2 </option>
                                    <option value="3"> Opção 3 </option>
                                    <option value="4"> Opção 4 </option>
                                </select>
                            </label>
                            <div class="col right-aligned">
                              <button class="ls-btn ls-btn-secondary outlined">Pré-visualizar</button>
                            </div>        
                        </div>
                    </div>
                    <div class="ls-box bg-grey" id="containerTodosPerfis">
                      <p>Permissão de acesso <a href="#" class="link" id="btnSelecionarTodoPerfis" ><span class="texto-destaque" data-ls-module="toggleText" data-toggle-text="Desmarcar todas">Marcar todas</span></a></p> 
                     
                        <div class="ls-collapse-group">
                          <div data-ls-module="collapse" data-target="#accordeon0" class="ls-collapse">
                              <div class="pretty p-icon p-curve p-tada checkbox-container">
                                <input type="checkbox" name="radio66" data-ls-module="checkboxToggle" data-checkbox-target="grupo-1">
                                <div class="state p-primary-o">
                                    <i class="icon ls-ico-checkmark"></i>
                                    <label></label>
                                </div>
                              </div>   
                            <a href="#" class="ls-collapse-header">
                              <h3 class="ls-collapse-title">Título 1</h3>
                            </a>
                            <div class="ls-collapse-body bg-blue-gradient" id="accordeon0">

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
                          <div data-ls-module="collapse" data-target="#accordeon1" class="ls-collapse">

                              <div class="pretty p-icon p-curve p-tada checkbox-container">
                                <input type="checkbox" name="radio66" data-ls-module="checkboxToggle" data-checkbox-target="grupo-2">
                                <div class="state p-primary-o">
                                    <i class="icon ls-ico-checkmark"></i>
                                    <label></label>
                                </div>
                              </div>                            
                            <a href="#" class="ls-collapse-header">
                              <h3 class="ls-collapse-title">Título 2</h3>
                            </a>
                            <div class="ls-collapse-body bg-blue-gradient" id="accordeon1">

                                <div class="pretty p-icon p-curve p-tada checkbox-container with-avatar">
                                  <input type="checkbox" name="radio66" data-checkbox-toggle="grupo-2">
                                  <div class="state p-primary-o">
                                      <i class="icon ls-ico-checkmark"></i>
                                      <label>Alexandre Lopez Paes</label>
                                  </div>
                                  <img src="assets/img/avatar-usuario.png" alt="" class="user-avatar">                               
                                </div> 

                                <div class="pretty p-icon p-curve p-tada checkbox-container with-avatar">
                                  <input type="checkbox" name="radio66" data-checkbox-toggle="grupo-2">
                                  <div class="state p-primary-o">
                                      <i class="icon ls-ico-checkmark"></i>
                                      <label>Alexandre Lopez Paes</label>
                                  </div>
                                  <img src="assets/img/avatar-usuario.png" alt="" class="user-avatar">                               
                                </div> 
                                
                                <div class="pretty p-icon p-curve p-tada checkbox-container with-avatar">
                                  <input type="checkbox" name="radio66" data-checkbox-toggle="grupo-2">
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
  
                    <div class="ls-box">
                        <div class="row">
                          <div class="col right-aligned">
                            <!-- <button class="ls-button ls-btn-secondary">Voltar</button> -->
                            <button class="ls-button ls-btn-secondary outlined" data-conteudo-alvo="perfil-relatorios-etapa-1">Cancelar</button>
                            <button class="ls-button ls-btn-primary" data-conteudo-alvo="perfil-relatorios-etapa-3">Avançar</button>
                          </div>
                      </div>
                    </div>                                        
                </div>

                <div class="ls-boxes" data-id="perfil-relatorios-etapa-3" data-etapa hidden>
                    <div class="ls-box">
                        <div class="row">
                          <div class="col d-flex align-items-center">
                            <h2 class="ls-title">Novo Perfil</h2>
                          </div>
                          <div class="col right-aligned">
                              <ol class="ls-breadcrumb passos">
                                <li><a href="#">Configurações gerais</a></li>
                                <li><a href="#">Configurações de fontes</a></li>
                              </ol>                          
                          </div>
                        </div>
                    </div>                
                    <div class="ls-box bg-grey">
                     <div class="row">
                        <div class="col">
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
                            <div class="relacionar-listas bg-blue-gradient">
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

                    <div class="ls-box">
                        <div class="row">
                          <div class="col">
                            <button class="ls-button ls-btn-secondary" data-conteudo-alvo="perfil-relatorios-etapa-2">Voltar</button>  
                          </div>
                          <div class="col right-aligned">
                            <button class="ls-button ls-btn-secondary outlined" data-conteudo-alvo="perfil-relatorios-etapa-1">Cancelar</button>
                            <button class="ls-button ls-btn-primary">Avançar</button>
                          </div>
                    </div>
                    </div>                                     
                </div>
            </div>
            </div>
            <!-- Fim Aba Perfil Rel atórios-->

            <!-- Aba Fontes -->         
            <div id="fontes" class="ls-tab-content">
                <div class="ls-boxes" data-id="fontes-etapa-1" data-etapa>
                    <div class="ls-box">
                        <table class="ls-table ls-no-margin-top">
                        <colgroup>
                          <col>
                          <col>
                          <col>
                          <col width="8%">
                        </colgroup>
                        <thead>
                          <tr>
                            <th>Nome da fonte</th>
                            <th>Relevância</th>
                            <th>Observação</th>
                            <th>Ações</th>
                          </tr>
                        </thead>						
                        <tbody>
                          <tr>
                            <td>
                              Nome do template 1
                            </td>
                            <td>
                              <div class="rating">  
                                <i class="dot filled"></i>
                                <i class="dot filled"></i>
                                <i class="dot filled"></i>
                                <i class="dot"></i>
                                <i class="dot"></i>
                              </div>
                            </td>
                            <td>
                              <span class="nv-icon icon-talk">Texto de observação</span>
                            </td>                                                        
                            <td class="center-aligned">
                              <button class="ls-btn ls-btn-icon secondary no-bg" data-conteudo-alvo="fontes-etapa-2">
                                <i class="nv-icon-reader-mode"></i>
                              </button>
                            </td> 
                          </tr>
                          <tr>
                            <td>
                              Nome do template 1
                            </td>
                            <td>
                              <div class="rating">  
                                <i class="dot filled"></i>
                                <i class="dot filled"></i>
                                <i class="dot filled"></i>
                                <i class="dot"></i>
                                <i class="dot"></i>
                              </div>
                            </td>
                            <td>
                              <span class="nv-icon icon-talk">Texto de observação</span>
                            </td>                                                        
                            <td class="center-aligned">
                              <button class="ls-btn ls-btn-icon secondary no-bg" data-conteudo-alvo="fontes-etapa-2">
                                <i class="nv-icon-reader-mode"></i>
                              </button>
                            </td> 
                          </tr>
                          <tr>
                            <td>
                              Nome do template 1
                            </td>
                            <td>
                              <div class="rating">  
                                <i class="dot filled"></i>
                                <i class="dot"></i>
                                <i class="dot"></i>
                                <i class="dot"></i>
                                <i class="dot"></i>
                              </div>
                            </td>
                            <td>
                              <span class="nv-icon icon-talk">Texto de observação</span>
                            </td>                                                        
                            <td class="center-aligned">
                              <button class="ls-btn ls-btn-icon secondary no-bg" data-conteudo-alvo="fontes-etapa-2">
                                <i class="nv-icon-reader-mode"></i>
                              </button>
                            </td> 
                          </tr>
                          <tr>
                            <td>
                              Nome do template 1
                            </td>
                            <td>
                              <div class="rating">  
                                <i class="dot filled"></i>
                                <i class="dot filled"></i>
                                <i class="dot filled"></i>
                                <i class="dot"></i>
                                <i class="dot"></i>
                              </div>
                            </td>
                            <td>
                              <span class="nv-icon icon-talk">Texto de observação</span>
                            </td>                                                        
                            <td class="center-aligned">
                              <button class="ls-btn ls-btn-icon secondary no-bg" data-conteudo-alvo="fontes-etapa-2">
                                <i class="nv-icon-reader-mode"></i>
                              </button>
                            </td> 
                          </tr>
                          <tr>
                            <td>
                              Nome do template 1
                            </td>
                            <td>
                              <div class="rating">  
                                <i class="dot filled"></i>
                                <i class="dot filled"></i>
                                <i class="dot"></i>
                                <i class="dot"></i>
                                <i class="dot"></i>
                              </div>
                            </td>
                            <td>
                              <span class="nv-icon icon-talk">Texto de observação</span>
                            </td>                                                        
                            <td class="center-aligned">
                              <button class="ls-btn ls-btn-icon secondary no-bg" data-conteudo-alvo="fontes-etapa-2">
                                <i class="nv-icon-reader-mode"></i>
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

                <div class="ls-boxes" data-id="fontes-etapa-2" data-etapa hidden>

                    <div class="ls-box container-filtros">
                        <div class="ls-form ls-form-horizontal row">
                            <div class="col">
                              <label class="ls-label field-has-icon">
                                <input type="text" placeholder="Nome" class="ls-field" required>
                              </label>                            
                              <label class="ls-label field-has-icon">
                                <input type="text" placeholder="Parâmetros de busca" class="ls-field">
                              </label>                                                          
                            </div>
                            <div class="col">
                              <label class="ls-label field-has-icon">
                                <textarea rows="4" placeholder="Descrição"></textarea>
                              </label>
                            </div>        
                        </div>
                    </div>

                    <div class="ls-box bg-grey">
                        <div class="row">
                          <div class="col">
                              <div class="pretty p-default p-round p-thick radio-style">
                                  <input type="checkbox" />
                                  <div class="state">
                                      <label>Thick</label>
                                  </div>
                              </div>   
                              <div class="pretty p-default p-round p-thick radio-style">
                                  <input type="checkbox" />
                                  <div class="state">
                                      <label>Termo 2</label>
                                  </div>
                              </div>    
                              <div class="pretty p-default p-round p-thick radio-style">
                                  <input type="checkbox" />
                                  <div class="state">
                                      <label>Termo 555</label>
                                  </div>
                              </div>                  
                              <div class="pretty p-default p-round p-thick radio-style">
                                  <input type="checkbox" />
                                  <div class="state">
                                      <label>Lorem Ipsum</label>
                                  </div>
                              </div>  
                            <div class="pretty p-default p-round p-thick radio-style">
                                  <input type="checkbox" />
                                  <div class="state">
                                      <label>Lorem Ipsum Calium Sared</label>
                                  </div>
                              </div> 
                              <div class="pretty p-default p-round p-thick radio-style">
                                  <input type="checkbox" />
                                  <div class="state">
                                      <label>Lorem Ipsum</label>
                                  </div>
                              </div>                                                                                                   <div class="pretty p-default p-round p-thick radio-style">
                                  <input type="checkbox" />
                                  <div class="state">
                                      <label>Thick</label>
                                  </div>
                              </div>   
                              <div class="pretty p-default p-round p-thick radio-style">
                                  <input type="checkbox" />
                                  <div class="state">
                                      <label>Termo 2</label>
                                  </div>
                              </div>    
                              <div class="pretty p-default p-round p-thick radio-style">
                                  <input type="checkbox" />
                                  <div class="state">
                                      <label>Termo 555</label>
                                  </div>
                              </div>                  
                              <div class="pretty p-default p-round p-thick radio-style">
                                  <input type="checkbox" />
                                  <div class="state">
                                      <label>Lorem Ipsum</label>
                                  </div>
                              </div>  
                              <div class="pretty p-default p-round p-thick radio-style">
                                  <input type="checkbox" />
                                  <div class="state">
                                      <label>Termo 134</label>
                                  </div>
                              </div>                                                                                 
                          </div>
                        </div>
                    </div>                    
                
                    <div class="ls-box">
                        <div class="row">
                          <div class="col right-aligned">
                            <button class="ls-button ls-btn-secondary outlined" data-conteudo-alvo="fontes-etapa-1">Cancelar</button>
                            <button class="ls-button ls-btn-primary">Avançar</button>
                          </div>
                      </div>
                    </div>                 

                </div>
                
            </div>   
            <!-- Fim Aba Fontes -->         
          </div>
          <!-- Conteúdos Abas -->        

      </div>
    </main>
    
    <?php include("includes/scripts.php"); ?>
  </body>
</html>