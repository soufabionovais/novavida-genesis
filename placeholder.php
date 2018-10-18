<?php include("includes/head.php"); ?>
  <body>

    <?php include("includes/header.php"); ?>

    <?php include("includes/sidebar.php"); ?>

    <main class="ls-main">
      <div class="container-fluid">
        <div class="page-header">
          <h1 class="ls-title-intro">Desenvolvimento</h1>
        </div>


<!-- <div class="relatorios-processamento">
  <table class="ls-table">
    <tbody>
      <tr class="toggle">
        <th colspan="2" title="Fonte">
        Fonte 001
        </th>
        <th class="warning" title="Status">
          <i class="nv-icon-info-circle"></i>  Falha ao processar
        </th>            
      </tr>
      <tr>  
        <td>55 registors retornados</td>
        <td> <i class="icone-relogio nv-icomoon-clock-3 texto-destaque"></i> processado em 12 minutos</td>
        <td>
            <div class="ui header">
              <div class="content">
                <span class="atencao uppercase">Falha ao processar</span>
                <div class="sub header">2 tentativas realizadas</div>
              </div>
              <button class="ls-btn ls-btn-icon secondary no-bg no-padding"> <i class="icone nv-icomoon-sync"></i> </button>            
            </div>	
        </td>
      </tr>
    </tbody>
  </table>

  <table class="ls-table">
    <tbody>
      <tr class="toggle">
        <th colspan="2" title="Fonte">
        Fonte 002
        </th>
        <th class="success" title="Status">
          <i class="nv-icon-check-circle"></i>  Concluído
        </th>            
      </tr>
      <tr>  
        <td>55 registors retornados</td>
        <td> <i class="icone-relogio nv-icomoon-clock-3 texto-destaque"></i> processado em 12 minutos</td>
        <td>
            <p class="sucesso uppercase text-center">Concluído</p>
        </td>
      </tr>
    </tbody>
  </table>

  <table class="ls-table">
    <tbody>
      <tr class="toggle">
        <th colspan="2" title="Fonte">
        Fonte 003
        </th>
        <th>
          100% concluído
        </th>            
      </tr>
      <tr>  
        <td>55 registors retornados</td>
        <td> <i class="icone-relogio nv-icomoon-clock-3 texto-destaque"></i> processado em 12 minutos</td>
        <td>
            <p class="texto-destaque uppercase text-center">Concluído</p>
        </td>
      </tr>
    </tbody>
  </table>

  <table class="ls-table">
    <tbody>
      <tr class="toggle">
        <th colspan="2" title="Fonte">
          Fonte 004
        </th>
        <th>
          <span class="atencao">Aguardando...</span>
        </th>
      </tr>
      <tr>
        <td>55 registors retornados</td>
        <td> <i class="icone-relogio nv-icomoon-clock-3 texto-destaque"></i> processando...</td>
        <td>
          <p class="atencao uppercase text-center">Aguardando</p>
        </td>
      </tr>
    </tbody>
  </table>
</div> -->

<!-- Fim popover relatóios pendentes -->
<div class="detalhes-relatorios-pendentes">
  <ul class="ls-tabs-nav box-tabs">
    <li class="ls-active"><a data-ls-module="tabs" href="#tab-workflow">Workflow</a></li>
    <li><a data-ls-module="tabs" href="#tab-historico">Histórico</a></li>
  </ul>
  <div class="ls-tabs-container">
    <div id="tab-workflow" class="ls-tab-content tab-workflow ls-active">
      <div class="ls-boxes box-linha-conteudo">
          <div class="ls-box box-linha-conteudo__header">
              <div class="row">
                <div class="col-7">
                    <h3 class="box-linha-conteudo__titulo">Departamento Jurídico</h3>
                </div>
                <div class="col">
                    <h3 class="box-linha-conteudo__titulo">Aprovado</h3>
                </div>
              </div>
          </div>
          <div class="ls-box">
              <div class="row row d-flex align-items-center">
                <div class="col-7">
                    <div class="user-data">
                      <div class="user-data-info">
                        <p class="user-data-header">Alexandre Loes Paz</p>
                        <p class="user-data-description nv-icon-talk">Fonte da empresa Piraju atualizada</p>
                      </div>
                    </div>
                </div>
                <div class="col">
                    <span class="label positivo nv-icon-check">Aprovado</span>
                    <span class="label neutro nv-icomoon-clock-3">15/02/2018 15:30</span>
                </div>
              </div>
          </div>          
      </div>
      <div class="ls-boxes box-linha-conteudo">
          <div class="ls-box box-linha-conteudo__header">
              <div class="row">
                <div class="col-7">
                    <h3 class="box-linha-conteudo__titulo">Departamento Financeiro</h3>
                </div>
                <div class="col">
                    <h3 class="box-linha-conteudo__titulo">Aprovado</h3>
                </div>
              </div>
          </div>
          <div class="ls-box">
              <div class="row row d-flex align-items-center">
                <div class="col-7">
                    <div class="user-data">
                      <div class="user-data-info">
                        <p class="user-data-header">Alexandre Loes Paz</p>
                        <p class="user-data-description nv-icon-talk">Fonte da empresa Piraju atualizada</p>
                      </div>
                    </div>
                </div>
                <div class="col">
                    <span class="label negativo nv-icon-remove">Reprovado</span>
                    <span class="label neutro nv-icomoon-clock-3">15/02/2018 15:30</span>
                </div>
              </div>
          </div>          
      </div> 
      <div class="ls-boxes box-linha-conteudo">
          <div class="ls-box box-linha-conteudo__header">
              <div class="row">
                <div class="col-8">
                    <h3 class="box-linha-conteudo__titulo">Departamento Fiscal</h3>
                </div>
                <div class="col">
                    <h3 class="box-linha-conteudo__titulo">Aprovado</h3>
                </div>
              </div>
          </div>
          <div class="ls-box">
              <div class="row row d-flex align-items-center">
                <div class="col-8">
                    <div class="user-data">
                      <div class="user-data-info">
                        <p class="user-data-header">Alexandre Loes Paz</p>
                        <p class="user-data-description nv-icon-talk">Fonte da empresa Piraju atualizada</p>
                      </div>
                    </div>
                </div>
                <div class="col">
                    <span class="label center-aligned">Aguardando</span>
                    <!-- <span class="label neutro nv-icomoon-clock-3">15/02/2018 15:30</span> -->
                </div>
              </div>
          </div>          
      </div>  
      <div class="ls-boxes box-linha-conteudo">
          <div class="ls-box box-linha-conteudo__header">
              <div class="row">
                <div class="col-8">
                    <h3 class="box-linha-conteudo__titulo">Departamento Auditoria</h3>
                </div>
                <div class="col">
                    <h3 class="box-linha-conteudo__titulo">Aprovado</h3>
                </div>
              </div>
          </div>
          <div class="ls-box">
              <div class="row row d-flex align-items-center">
                <div class="col-8">
                    <div class="user-data">
                      <div class="user-data-info">
                        <p class="user-data-header">Alexandre Loes Paz</p>
                        <p class="user-data-description nv-icon-talk">Fonte da empresa Piraju atualizada</p>
                      </div>
                    </div>
                </div>
                <div class="col">
                    <span class="label center-aligned">Aguardando</span>
                    <!-- <span class="label neutro nv-icomoon-clock-3">15/02/2018 15:30</span> -->
                </div>
              </div>
          </div>          
      </div>                  
    </div>
    <div id="tab-historico" class="ls-tab-content">
        af dfl;a jdkfal kdjf akdfs jkahdfs
    </div>
  </div>
</div>
<!-- Fim popover relatóios pendentes -->


    
    




      </div>
    </main>
    
    <?php include("includes/scripts.php"); ?>
  </body>
</html>