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
                <div class="ls-boxes">  
                    <div class="ls-box">
                        <div class="ls-form ls-form-horizontal row">
                            <label class="ls-label col">
                              <b class="ls-label-text">Nome</b>
                              <input type="text" name="nome" placeholder="Primeiro nome" class="ls-field" required>
                            </label>
                            <label class="ls-label col">
                              <b class="ls-label-text">Sobrenome</b>
                              <input type="text" name="nome" placeholder="Sobrenome" class="ls-field" required>
                            </label>
                            <label class="ls-label col">
                              <b class="ls-label-text">Nome</b>
                              <input type="text" name="nome" placeholder="Primeiro nome" class="ls-field" required>
                            </label>
                            <label class="ls-label col">
                              <b class="ls-label-text">Nome</b>
                              <input type="text" name="nome" placeholder="Primeiro nome" class="ls-field" required>
                            </label>                            
                        </div>
                    </div>
                    <div class="ls-box">
                      <p>Uma caixa genérica lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas, dicta, alias accusantium est unde autem ipsam libero tempora tempore nesciunt eveniet eaque laudantium qui facilis aut deserunt sequi suscipit perspiciatis.</p>
                    </div>
                    <div class="ls-box">
                      <p>Uma caixa genérica lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas, dicta, alias accusantium est unde autem ipsam libero tempora tempore nesciunt eveniet eaque laudantium qui facilis aut deserunt sequi suscipit perspiciatis.</p>
                    </div>
                  </div>
            </div>
            <!-- Fim Aba Templates -->

            <!-- Aba Perfil Relatórios -->
            <div id="perfilRelatorio" class="ls-tab-content">
              <p>Inventore consectetur ad est praesentium dolorem et voluptatem quod ratione et aut molestiae voluptatem explicabo. corporis autem nam eos ab omnis qui nostrum eum ab iste distinctio. aut sit iusto eum in consectetur quisquam exercitationem dolorem sunt et</p>
            </div>
            <!-- Fim Aba Perfil Rel atórios-->

            <!-- Aba Fontes -->         
            <div id="fontes" class="ls-tab-content">
              <p>Fontes Inventore consectetur ad est praesentium dolorem et voluptatem quod ratione et aut molestiae voluptatem explicabo. corporis autem nam eos ab omnis qui nostrum eum ab iste distinctio. aut sit iusto eum in consectetur quisquam exercitationem dolorem sunt et</p>
            </div>   
            <!-- Fim Aba Fontes -->         
          </div>
          <!-- Conteúdos Abas -->        

      </div>
    </main>
    
    <?php include("includes/scripts.php"); ?>
  </body>
</html>