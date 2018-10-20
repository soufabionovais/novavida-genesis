<?php include("includes/head.php"); ?>
  <body>

    <?php include("includes/header.php"); ?>

    <?php include("includes/sidebar.php"); ?>

    <main class="ls-main">
      <div class="container-fluid">
        <div class="page-header">
          <h1 class="ls-title-intro">Loja de Fontes</h1>
        </div>

        <div class="ls-boxes">
            <div class="ls-box container-filtros">
                <div class="ls-form ls-form-horizontal row">
                    <div class="col-9">
                      <label class="ls-label field-has-icon ls-ico-search">
                        <input type="text" placeholder="Pesquisar por nome" class="ls-field" required>
                      </label>                            
                    </div>
                    <div class="col right-aligned">
                        <select class="select-field" style="width: 100%">
                            <option value="1" selected> Opção 1 </option>
                            <option value="1"> Opção 1 </option>
                            <option value="2"> Opção 2 </option>
                            <option value="3"> Opção 3 </option>
                            <option value="4"> Opção 4 </option>
                        </select>
                    </div>   
                </div>
            </div>
            <div class="ls-box">
                <table class="ls-table ls-no-margin-top">
                <thead>
                  <tr>
                    <th>Nome da Fonte</th>
                    <th>Custo</th>
                    <th>Popularidade</th>
                    <th>&nbsp;</th>
                  </tr>
                </thead>						
                <tbody>
                  <tr>
                    <td>
                      <div class="user-data">
                        <img src="assets/img/avatar-usuario.png" class="avatar" alt="Nome do cliente">
                        <div class="user-data-info">
                          <p class="user-data-header" data-detalhes-fontes><a href="#" class="texto-destaque">Alexandre Loes Paz</a></p>
                          <p class="user-data-description nv-icon-talk">Fonte da empresa Piraju atualizada</p>
                        </div>
                      </div>
                    </td>
                    <td>
                      R$2.000
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
                    <td class="right-aligned">
                      <button class="ls-btn ls-btn-primary" data-comprar-fonte>
                        Comprar
                      </button>
                    </td> 
                  </tr>
                  <tr>
                    <td>
                      <div class="user-data">
                        <img src="assets/img/avatar-usuario.png" class="avatar" alt="Nome do cliente">
                        <div class="user-data-info">
                          <p class="user-data-header" data-detalhes-fontes><a href="#" class="texto-destaque">Alexandre Loes Paz</a></p>
                          <p class="user-data-description nv-icon-talk">Fonte da empresa Piraju atualizada</p>
                        </div>
                      </div>
                    </td>
                    <td>
                      R$2.000
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
                    <td class="right-aligned">
                      <button class="ls-btn ls-btn-primary" data-comprar-fonte>
                        Comprar
                      </button>
                    </td> 
                  </tr>
                  <tr>
                    <td>
                      <div class="user-data">
                        <img src="assets/img/avatar-usuario.png" class="avatar" alt="Nome do cliente">
                        <div class="user-data-info">
                          <p class="user-data-header" data-detalhes-fontes><a href="#" class="texto-destaque">Alexandre Loes Paz</a></p>
                          <p class="user-data-description nv-icon-talk">Fonte da empresa Piraju atualizada</p>
                        </div>
                      </div>
                    </td>
                    <td>
                      R$2.000
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
                    <td class="right-aligned">
                      <button class="ls-btn ls-btn-primary" data-comprar-fonte>
                        Comprar
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