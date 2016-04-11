<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <title>QM - Buscar Fila</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="../css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="../css/style-custom.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <div class="container">

      <div class="row">
          <form class="col s10 m6 login" id="form-cad">
              <a id="logo-container" href="../" class="brand-logo"><img src="../images/logo.png"></a>
              <p>Já é usuário? <a href="login.php">Entrar</a></p>
              <div class="row">
                  <div class="input-field col s12">
                      <input id="name" type="text" name="nome" class="validate" required="required">
                      <label for="name">Name</label>
                  </div>
              </div>
            <div class="row">
              <div class="input-field col s12">
                <input id="email" type="email" name="email" class="validate" required="required">
                <label for="email">Email</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input id="password" type="password" name="password" class="validate" required="required">
                <label for="password">Password</label>
              </div>
            </div>
              <div class="row">
                  <div class="input-field col s12">
                      <input id="confirmPassword" type="password" name="confirmPassword" class="validate" required="required">
                      <label for="confirmPassword">Confirm Password</label>
                  </div>
              </div>
              <div class="row">
              <div class="input-field col s12">
                <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                    <i class="material-icons right">send</i>
                </button>        
              </div>
            </div> 
          </form>
        </div>
  </div>
<!-- Modal Structure -->
<div id="modal1" class="modal">
    <div class="modal-content">
        <h4>Mensagem</h4>
        <p></p>
    </div>
    <div class="modal-footer">
        <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Ok</a>
    </div>
</div>
  <!--  Scripts-->
  <script src="../js/jquery-2.1.1.min.js"></script>
  <script src="../js/materialize.js"></script>
  <script src="../js/init.js"></script>
  <script src="../js/valida.js"></script>
</body>
</html>
