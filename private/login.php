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
          <form class="col s10 m6 login" id="form-login" method="post">
          <a id="logo-container" href="../index.php" class="brand-logo"><img src="../images/logo.png"></a>
            <div class="row" id="users" style="display:none;">
                <div class="col s12">
                    <p style="color: red;">Invalid e-mail or password</p>
                </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input id="email" type="email" class="validate" name="email" required="required">
                <label for="email">Email</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input id="pass" type="password" class="validate" name="pass" required="required">
                <label for="password">Password</label>
              </div>
            </div>
              <div class="row">
                  <div class="input-field col s12">
                      <p>Novo por aqui? <a href="cadastro.php">Cadastre-se</a></p>
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
</body>
<!--  Scripts-->
<script src="../js/jquery-2.1.1.min.js"></script>
<script src="../js/materialize.js"></script>
<script src="../js/init.js"></script>
<script src="../js/valida.js"></script>
</html>
