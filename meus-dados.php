<?php include("includes/head.php"); ?>
  <body>
    
    <?php include("includes/header.php"); ?>

    <?php include("includes/sidebar.php"); ?>


    <main class="ls-main">
      <div class="container-fluid">
        <div class="page-header">
          <h1 class="ls-title-intro">Meus dados</h1>
        </div>

        <div class="ls-boxes">
          <div class="ls-box">
            <div class="row">
                <div class="col-2">
                    <form action="upload/upload.html" class="dropzone zone-upload-profile-image" id="uploadImage"></form>                       
                    <!-- <div class="profile-image">
                        <img src="assets/img/avatar-usuario.png" alt="">
                    </div>                  --> 
                </div>
                <div class="col-10">
                  <div class="row">
                    <div class="col-8">
                        <label class="ls-label">
                          <input type="text" name="nome" placeholder="Nome" class="ls-field" required>
                        </label>   
                    </div>
                    <div class="col-4">
                        <label class="ls-label">
                          <input type="text" name="nome" placeholder="CPF" class="ls-field" required>
                        </label>   
                    </div>  
                    <div class="col-4">
                        <label class="ls-label">
                          <input type="text" name="nome" placeholder="Login" class="ls-field" required>
                        </label>   
                    </div>  
                    <div class="col-4">
                        <label class="ls-label">
                          <input type="text" name="nome" placeholder="E-mail" class="ls-field" required>
                        </label>   
                    </div>  
                    <div class="col-4">
                        <label class="ls-label">
                          <input type="password" name="nome" placeholder="Senha" class="ls-field" required>
                        </label>   
                    </div>                                                                                
                  </div>
                </div>
            </div>            
          </div>
          <div class="ls-box">
              <button class="ls-btn ls-btn-primary large fluid">Salvar alterações</button>
          </div>
        </div>

      </div>
    </main>

    <?php include("includes/scripts.php"); ?>

  </body>
</html>