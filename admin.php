<?php require "head.php"; ?>
<?php include "navBar.php"; ?>

<div class="container mt-4">
  <div class="row">
    <div class="col-6 bg-primary ">
      <form action="guardarBiografia.php" method="post">
        <div class="form-group">
          <label for="text">Nombre del Estudiante:</label>
          <input type="text" class="form-control" name="nombre" placeholder="Escribe tu Nombre" id="nombre">
        </div>
        <div class="form-group mt-2">
          <label for="descripcion">Biobrafia:</label>
          <textarea name="descripcion" id="descripcion" cols="30" rows="10"></textarea>
        </div>
        <button type="submit" class="btn btn-warning btn-block mt-2">Guardar Biografia</button>
      </form> 
    </div>
    <div class="col-6 bg-warning">
      <form action="agregarBlog.php" method="post">
        <div class="form-group">
          <label for="text">Escribir Blog:</label>
          <input type="text" class="form-control" name="blog" placeholder="Escribir Blog" id="nombre">
        </div>
        <div class="form-group mt-2">
          <label for="text">Escribe el contenido del Blog:</label>
          <textarea name="descripcionBlog" id="descripcionBlog" cols="30" rows="10"></textarea>          
        </div>
        <div class="form-group">
          <label for="password">Escribe la Password</label>
          <input type="password" name="passwordBlog" class="form-control" placeholder="Escribe tu Password" id="psw">
        </div>
        <button type="submit" class="btn btn-primary btn-block my-2">Agregar Blog</button>
      </form> 
    </div>
  </div>
  <div class="row mt-4">
    <div class="col-12 bg-danger p-2">
    <form action="GuardarPassword.php" method="post">
        <div class="form-group">
          <label for="password">password</label>
          <input type="password" class="form-control" placeholder="Escribe tu password" name="oldPsw" id="psw">
        </div>
        <div class="form-group">
          <label for="password">Password Nueva</label>
          <input type="password" class="form-control" placeholder="Escribe tu Password Nueva" name="newPsw" id="newPsw">
        </div>
        <div class="form-group">
          <label for="password">Confirmar Password:</label>
          <input type="password" class="form-control" placeholder="Confirma tu Password Nueva" name="confNewPsw" id="confNewPas">
        </div>
        <button type="submit" class="btn btn-primary btn-block mt-2">Cambiar Contasenia</button>
      </form> 
    </div>
    
  </div>
</div>   


<?php include "footer.php"; ?>