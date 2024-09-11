<!DOCTYPE html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Store Fix</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <style>
    BODY {
      background-color: #F2F2F2;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .LoginContenedor {
      background-color: #FFFFFF;
      display: block;
      padding: 20px;
      top: 20px;
      border: 1px solid #CCCCCC;
      width: 400px;
      height: 360px;
      margin: 0 auto;
    }

    .LoginParametros {
      margin-top: 20px;
    }

    .btn-secondary {
      color: #ffffff;
      background-color: #777;
      border-color: #555;
    }

    .btn-secondary:hover,
    .btn-secondary:focus,
    .btn-secondary:active,
    .btn-secondary.active,
    .open .dropdown-toggle.btn-secondary {
      color: #ffffff;
      background-color: #888;
      border-color: #444;
    }
  </style>

</head>

<body>

  <div class="LoginContenedor">
    <div class="row align-items-center no-gutters">
      <div class="col-12 d-flex justify-content-center">
        <img src="images/logotipoStoreFix.png" height="57">
      </div>
    </div>
    <form method="POST" class="LoginParametros">

      <?php
      require_once("controller/loginController.php");
      $log=new LoginController();
      $log->login();
      ?>

      <div class="row align-items-center">
        <div class="col-12">
          <label for="LoginName">Nombre de usuario o RUT</label>
          <input name="LoginName" type="text" id="LoginName" value="" class="form-control">
        </div>
      </div>
      <div class="row align-items-center ">
        <div class="col-12">
          <label for="LoginClave">Contrase&ntilde;a</label>
          <input name="LoginClave" type="password" id="LoginClave" class="form-control" placeholder="contrase&ntilde;a">
        </div>
      </div>
      <div class="row">
        <div class="col-12" id="AlertaLogin">
          &nbsp;
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <br>
          <input type="submit" class="btn btn-secondary float-right bottom" name="doLogin" value="Acceder">
          <i id="loginIcon" class="fa fa-circle-o-notch fa-spin" style="display:none" aria-hidden="true"></i>

        </div>
      </div>
    </form>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>