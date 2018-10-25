<?php include("includes/head.php"); ?>
  <body>
    
    <?php include("includes/header.php"); ?>

    <?php include("includes/sidebar.php"); ?>


    <main class="ls-main">
      <div class="container-fluid">
        <div class="page-header">
          <h1 class="ls-title-intro">Dashboard</h1>
        </div>

        <div class="dashboard">
          <div class="row">
            <div class="col">
              <div class="ls-box">
                  <div class="row">
                      <div class="col">
                        <div class="box-notificacoes orange">
                          <a href="#">
                            <span class="icone nv-icon-talking"></span>
                            Alerta de Monitoria <span class="ls-tag contador">999</span>
                          </a>
                        </div>
                      </div>
                      <div class="col">
                        <div class="box-notificacoes purple">
                        <a href="#">
                            <span class="icone nv-icon-talking"></span>
                            Chamados <span class="ls-tag contador">999</span>
                          </a>
                        </div>
                      </div>
                      <div class="col">
                        <div class="box-notificacoes blue">
                        <a href="#">
                          <span class="icone nv-icon-talking"></span>
                          Mensagens <span class="ls-tag contador">999</span>
                        </a>
                        </div>
                      </div>
                      <div class="col">
                        <div class="box-notificacoes green">
                          <a href="liberar-fontes.php">
                            <span class="icone nv-icon-talking"></span>
                            Aprovar Solicitações <span class="ls-tag contador">999</span>
                          </a>
                        </div>
                      </div>
                  </div>
              </div>          
            </div>
          </div>
          <div class="row">
            <div class="col-8">
              <div class="ls-box">
                <table class="ls-table"> 
                  <thead>
                  <tr>
                    <th>Relatório em andamento</th>
                    <th>Andamento</th>
                    <th>Ação</th>
                  </tr>
                  </thead>
                  <tbody>
                    <tr> 
                      <td>
                        <div class="user-data">
                          <img src="assets/img/avatar-usuario.png" alt="Nome do usuário" class="avatar" />
                          <div class="user-data-info">
                            <p class="user-data-header">Alexandre Loes Paz <a href="#" class="texto-destaque">| #5558468</a></p>
                            <p class="user-data-description nv-icon-talk">333.222.666/0001-00</p>
                          </div>
                        </div>                      
                      </td>
                      <td class="center-aligned">
                          <div data-ls-module="progressBar" role="progressbar" aria-valuenow="60"></div>
                      </td>
                      <td>
                        <div class="icon-buttons-group justify-content-start">
                          <button class="ls-btn ls-btn-icon primary no-bg"><i class="nv-icon-check-circle"></i></button>
                          <button class="ls-btn ls-btn-icon no-bg"><i class="nv-icon-remove-circle"></i></button>
                        </div>                      
                      </td>
                    </tr>
                    <tr> 
                      <td>
                        <div class="user-data">
                          <img src="assets/img/avatar-usuario.png" alt="Nome do usuário" class="avatar" />
                          <div class="user-data-info">
                            <p class="user-data-header">Alexandre Loes Paz <a href="#" class="texto-destaque">| #5558468</a></p>
                            <p class="user-data-description nv-icon-talk">333.222.666/0001-00</p>
                          </div>
                        </div>                      
                      </td>
                      <td class="center-aligned">
                          <div data-ls-module="progressBar" role="progressbar" aria-valuenow="60"></div>
                      </td>
                      <td>
                        <div class="icon-buttons-group justify-content-start">
                          <button class="ls-btn ls-btn-icon primary no-bg"><i class="nv-icon-check-circle"></i></button>
                          <button class="ls-btn ls-btn-icon no-bg"><i class="nv-icon-remove-circle"></i></button>
                        </div>                      
                      </td>
                    </tr>  
                    <tr> 
                      <td>
                        <div class="user-data">
                          <img src="assets/img/avatar-usuario.png" alt="Nome do usuário" class="avatar" />
                          <div class="user-data-info">
                            <p class="user-data-header">Alexandre Loes Paz <a href="#" class="texto-destaque">| #5558468</a></p>
                            <p class="user-data-description nv-icon-talk">333.222.666/0001-00</p>
                          </div>
                        </div>                      
                      </td>
                      <td class="center-aligned">
                          <div data-ls-module="progressBar" role="progressbar" aria-valuenow="60"></div>
                      </td>
                      <td>
                        <div class="icon-buttons-group justify-content-start">
                          <button class="ls-btn ls-btn-icon primary no-bg"><i class="nv-icon-check-circle"></i></button>
                          <button class="ls-btn ls-btn-icon no-bg"><i class="nv-icon-remove-circle"></i></button>
                        </div>                      
                      </td>
                    </tr>                                      
                  </tbody>
                </table>
              </div>   
              <div class="row">
                <div class="col">
                  <div class="ls-boxes box-livros-recentes">
                    <div class="ls-box">
                        <header class="header bg-blue-gradient">
                            <div class="row d-flex align-items-center">
                              <div class="col">
                                Livros Recentes
                              </div>
                              <div class="col">
                                <select class="select-field" data-position="right">
                                    <option placeholder> Mês </option>
                                    <option value="1"> Dia </option>
                                    <option value="1"> Semana </option>
                                    <option value="3"> Mês </option>
                                    <option value="4"> Ano </option>
                                </select>                                
                              </div>
                            </div>
                            <div class="row">
                              <div class="col">
                                  <div class="total-livros-recentes nv-icon-note">2453</div>
                              </div>
                            </div>
                        </header>
                    </div>
                    <div class="ls-box bg-grey content-area">
                      <div class="item-line">
                          <span class="texto-destaque nv-icon-note"><a href="#" title="Nome do livro">Alpha Contabilidade</a></span>
                          <span class="icone-calendario nv-icomoon-calendar-full">25/06/94</span>
                      </div>
                      <div class="item-line">
                          <span class="texto-destaque nv-icon-note"><a href="#" title="Nome do livro">Alpha Contabilidade</a></span>
                          <span class="icone-calendario nv-icomoon-calendar-full">25/06/94</span>
                      </div>
                      <div class="item-line">
                          <span class="texto-destaque nv-icon-note"><a href="#" title="Nome do livro">Alpha Contabilidade</a></span>
                          <span class="icone-calendario nv-icomoon-calendar-full">25/06/94</span>
                      </div>
                      <div class="item-line">
                          <span class="texto-destaque nv-icon-note"><a href="#" title="Nome do livro">Alpha Contabilidade</a></span>
                          <span class="icone-calendario nv-icomoon-calendar-full">25/06/94</span>
                      </div>
                      <div class="item-line">
                          <span class="texto-destaque nv-icon-note"><a href="#" title="Nome do livro">Alpha Contabilidade</a></span>
                          <span class="icone-calendario nv-icomoon-calendar-full">25/06/94</span>
                      </div> 
                    </div>   
                    <div class="ls-box center-aligned">
                      <a href="livros.php" class="texto-destaque center-aligned">Ver mais livros</a>
                    </div>                                     
                  </div>
                </div>
                <div class="col">
                  <div class="ls-boxes box-feed-noticias">
                    <div class="ls-box">
                        <header class="header small-header bg-blue-gradient">
                            <div class="row d-flex align-items-center">
                              <div class="col">
                                Feed de notícias
                                <i class="icone nv-icomoon-bell"></i>
                              </div>
                            </div>
                        </header>
                    </div>
                    <div class="ls-box bg-grey content-area">
                      <div class="item-line item-line-block d-block">
                          <span class="texto-destaque icone-calendario nv-icomoon-calendar-full"><a href="#" title="Nome da notícia">Hoje 16:24</a></span>
                          <div class="sub-content">Fonte da empresa Piraju atualizada</div>
                      </div>
                      <div class="item-line item-line-block d-block">
                          <span class="texto-destaque icone-calendario nv-icomoon-calendar-full"><a href="#" title="Nome da notícia">Ontem 16:24</a></span>
                          <div class="sub-content">Fonte da empresa Piraju atualizada</div>
                      </div>
                      <div class="item-line item-line-block d-block">
                          <span class="texto-destaque icone-calendario nv-icomoon-calendar-full"><a href="#" title="Nome da notícia">25/06/94</a></span>
                          <div class="sub-content">Fonte da empresa Piraju atualizada</div>
                      </div>
                      <div class="item-line item-line-block d-block">
                          <span class="texto-destaque icone-calendario nv-icomoon-calendar-full"><a href="#" title="Nome da notícia">25/06/94</a></span>
                          <div class="sub-content">Fonte da empresa Piraju atualizada</div>
                      </div>
                      <div class="item-line item-line-block d-block">
                          <span class="texto-destaque icone-calendario nv-icomoon-calendar-full"><a href="#" title="Nome da notícia">25/06/94</a></span>
                          <div class="sub-content">Fonte da empresa Piraju atualizada</div>
                      </div> 
                    </div>  
                    <div class="ls-box center-aligned">
                      <a href="#" class="texto-destaque center-aligned">Ver mais</a>
                    </div>                                     
                  </div>                
                </div>
              </div>
            </div>
            <div class="col-4">
              <div class="ls-boxes box-loja-fontes-container">
                <div class="ls-box">
                    <div class="ls-box-inner bg-blue-gradient">
                    <h2 class="ls-title center-aligned nv-icon-home">Loja de Fontes</h2>
                      <div class="content-area">
                        <div class="ls-box box-loja-fontes">
                          <h3 class="ls-title">Justiça Federal DF</h3>
                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.</p>  
                          <a href="#" class="ls-btn ls-btn-primary">Solicitar</a>
                        </div>
                        <div class="ls-box box-loja-fontes">
                          <h3 class="ls-title">Justiça Federal DF</h3>
                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.</p>  
                          <a href="#" class="ls-btn ls-btn-primary">Solicitar</a>
                        </div>
                        <div class="ls-box box-loja-fontes">
                          <h3 class="ls-title">Justiça Federal DF</h3>
                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.</p>  
                          <a href="#" class="ls-btn ls-btn-primary">Solicitar</a>
                        </div>
                        <div class="ls-box box-loja-fontes">
                          <h3 class="ls-title">Justiça Federal DF</h3>
                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.</p>  
                          <a href="#" class="ls-btn ls-btn-primary">Solicitar</a>
                        </div>    
                      </div>                                                        
                    </div>
                </div>  

                <div class="ls-box center-aligned">
                    <a href="#" class="texto-destaque">Ver mais fontes</a>              
                </div>
              </div>
            </div>                  
          
          </div>
          <div class="ls-box">
              <div class="row">
                <div class="col-5">
                    <div class="box-ranking-relatorios bg-blue-gradient">
                        <div class="row d-flex align-items-center">
                            <div class="col-7">
                              Ranking de Relatórios
                            </div>
                            <div class="col">
                                <select class="select-field" data-position="right">
                                    <option placeholder> Mês </option>
                                    <option value="1"> Dia </option>
                                    <option value="1"> Semana </option>
                                    <option value="3"> Mês </option>
                                    <option value="4"> Ano </option>
                                </select>                               
                            </div>
                        </div>

                        <div class="ls-box box-grafico">
                          <div class="row">
                              <div class="col">
                                <div class="item-line item-line-block d-block item-pf">
                                    <span class="texto-destaque">Pessoa física</span>
                                    <div class="sub-content">31550</div>
                                </div>  
                                <div class="item-line item-line-block d-block item-pj">
                                    <span class="texto-destaque">Pessoa jurídica</span>
                                    <div class="sub-content">31550</div>
                                </div>                                
                              </div>
                              <div class="col">
                                    <div class="chart-wrapper doughnut">
                                      <canvas class="doughnut-chart" width="1" height="1"></canvas>
                                      <div class="chart-background"></div>
                                      <span class="chart-unique-value">
                                          <span class="label">Total</span>
                                          <span class="js-count">
                                              64
                                          </span>
                                      </span>
                                    </div>                              
                              </div>
                          </div>
                                                   
                        </div>

                    </div>
                </div>
                <div class="col">
                    <section class="ls-box box-aprovacao">
                        <header>
                          <h3 class="box-titulo nv-icon-customer">Alexandre Lopes Paz</h3>
                        </header>
                        <div class="item-line bg-grey">
                            <span>Aprovou</span>
                            <span class="texto-destaque">1988</span>
                        </div>
                        <div class="item-line bg-grey">
                            <span>Pendente</span>
                            <span class="texto-destaque">199</span>
                        </div>      
                        <div class="item-line bg-grey">
                            <span>Reprovou</span>
                            <span class="texto-destaque">31</span>
                        </div>   
                        <footer class="footer center-aligned"><strong class="bold">TOTAL</strong>: 230</footer>                        
                    </section>                 
                </div>
                <div class="col">
                    <section class="ls-box box-aprovacao">
                        <header>
                          <h3 class="box-titulo nv-icon-customer">Alexandre Lopes Paz</h3>
                        </header>
                        <div class="item-line bg-grey">
                            <span>Aprovou</span>
                            <span class="texto-destaque">1988</span>
                        </div>
                        <div class="item-line bg-grey">
                            <span>Pendente</span>
                            <span class="texto-destaque">199</span>
                        </div>      
                        <div class="item-line bg-grey">
                            <span>Reprovou</span>
                            <span class="texto-destaque">31</span>
                        </div>   
                        <footer class="footer center-aligned"><strong class="bold">TOTAL</strong>: 230</footer>                        
                    </section>                 
                </div>
                <div class="col">
                    <section class="ls-box box-aprovacao">
                        <header>
                          <h3 class="box-titulo nv-icon-customer">Alexandre Lopes Paz</h3>
                        </header>
                        <div class="item-line bg-grey">
                            <span>Aprovou</span>
                            <span class="texto-destaque">1988</span>
                        </div>
                        <div class="item-line bg-grey">
                            <span>Pendente</span>
                            <span class="texto-destaque">199</span>
                        </div>      
                        <div class="item-line bg-grey">
                            <span>Reprovou</span>
                            <span class="texto-destaque">31</span>
                        </div>   
                        <footer class="footer center-aligned"><strong class="bold">TOTAL</strong>: 230</footer>                        
                    </section>                 
                </div> 
              </div>                                         
          </div>
        </div>



      </div>
    </main>

    <?php include("includes/scripts.php"); ?>

  </body>
</html>