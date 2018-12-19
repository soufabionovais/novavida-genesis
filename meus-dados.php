<?php include("includes/head.php"); ?>

<body>

  <?php include ("includes/header.php"); ?>

  <div class="main-wrap">


    <?php include("includes/sidebar.php"); ?>

    <main class="main-content">
      <header class="page-header">
        <h1 class="page-header-title">Meus Dados</h1>
      </header> 

      <div class="boxes-group">
          <div class="box-content">

            <div class="row">
              <div class="col-2">
                <form action="upload/upload.html" class="dropzone zone-upload-profile-image" id="uploadProfileImage"></form>
              </div>
              <div class="col-10">
                <div class="row">
                  <div class="col-8">
                    <label class="form-label">
                      <input type="text" name="nome" placeholder="Nome" class="input-text inverted" required>
                    </label>   
                  </div>
                  <div class="col-4">
                    <label class="form-label">
                      <input type="text" name="nome" placeholder="CPF" class="input-text inverted" required>
                    </label>   
                  </div>  
                  <div class="col-4">
                    <label class="form-label">
                      <input type="text" name="nome" placeholder="Login" class="input-text inverted" required>
                    </label>   
                  </div>  
                  <div class="col-4">
                    <label class="form-label">
                      <input type="text" name="nome" placeholder="E-mail" class="input-text inverted" required>
                    </label>   
                  </div>  
                  <div class="col-4">
                    <label class="form-label">
                      <input type="password" name="nome" placeholder="Senha" class="input-text inverted" required>
                    </label>   
                  </div>                                                                                
                </div>
              </div>
            </div>            

          </div>
          <div class="box-content">
            <!-- <button class="btn primary large fluid">Salvar alterações</button> -->
            <a class="btn primary large fluid" href="index.php">Salvar alterações</a>
          </div>
      </div>
    </main>
  </div>  

  

  
  <?php include("includes/scripts.php"); ?>
</body>
</html>
