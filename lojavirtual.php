<!DOCTYPE html>
<html>
 <head>
  <title>Loja Virtual</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/js/ie-emulation-modes-warning.js"></script>

    <link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript" src="javascript.js"></script>
  </style>
</head>
<body>

  <div id="header">
    <div id="logo"><img src="imagens/devaneioslogo.png" width=467px; /></div>
     <ul id="navbar">
           <li><a href="index.php">Home</a></li>
           <li><a href="sobre.php">Sobre</a></li>
           <li><a href="tirinhas.php">Tirinhas</a></li>
       <li class="dropdown">
         <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Login</b> <span class="caret"></span></a>
     <ul id="login-dp" class="dropdown-menu">
       <li>
          <div class="row">
             <div class="col-md-12">
                <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
                   <div class="form-group">
                      <label class="sr-only" for="exampleInputEmail2">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email" required>
                   </div>
                   <div class="form-group">
                      <label class="sr-only" for="exampleInputPassword2">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Senha" required>
                   </div>
                   <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Logar</button>
                     </div>
                  </form>
               </div>
               <div class="bottom text-center">
                Não tem cadastro? <a href="cadastro.php"><b>Cadastre-se</b></a>
               </div>
            </div>
         </li>
       </ul>
         </li>
            <li><a href="lojavirtual.php">Loja Virtual</a></li>
       </ul>
     </div><!-- /.navbar-collapse -->


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->
<div class="starter">
 <div class="container marketing">
      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img class="img-circle" src="imagens/camisa/camisa.png" alt="Generic placeholder image" width="140" height="140">
          <h4>Estampa Mulher Maravilha</h4>
          <h2>R$20,00</h2>
            <label class="container">Comprar<input type="checkbox" checked="checked" value="1"><span class="checkmark"></span></label>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="imagens/camisa/camisa2.png" alt="Generic placeholder image" width="140" height="140">
          <h4>Estampa Logo Devaneios</h4>
        <h2>R$20,00</h2>
          <label class="container">Comprar<input type="checkbox" checked="checked" value="2"><span class="checkmark"></span></label>
        </div><!-- /.col-lg-4 -->

        <div class="col-lg-4">
          <img class="img-circle" src="imagens/camisa/camisa3.png" alt="Generic placeholder image" width="140" height="140">
          <h4>Estampa Logo Devaneios</h4>
        <h2>R$20,00</h2>
        <label class="container">Comprar<input type="checkbox" checked="checked" value="3"><span class="checkmark"></span></label>
        </div><!-- /.col-lg-4 -->
      </div>
    </div>

    <div class="starter">
     <div class="container marketing">
        <div class="col-lg-4">
          <img class="img-circle" src="imagens/camisa/camisa4.png" alt="Generic placeholder image" width="140" height="140">
          <h4>Estampa Diana e Steve </h4>
          <h2>R$20,00</h2>
          <label class="container">Comprar<input type="checkbox" checked="checked" value="4"><span class="checkmark"></span></label>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="imagens/camisa/camisaf2.png" alt="Generic placeholder image" width="140" height="140">
          <h4>Estampa Mulher Maravilha</h4>
          <h2>R$20,00</h2>
            <label class="container">Comprar<input type="checkbox" checked="checked" value="5"><span class="checkmark"></span></label>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="imagens/camisa/camisaf3.png" alt="Generic placeholder image" width="140" height="140">
          <h4>Estampa Logo Devaneios</h4>
          <h2>R$20,00</h2>
          <label class="container">Comprar<input type="checkbox" checked="checked" value="6"><span class="checkmark"></span></label>
        </div><!-- /.col-lg-4 -->
   </div>
 </div>
 <div class="starter">
  <div class="container marketing">
        <div class="col-lg-4">
          <img class="img-circle" src="imagens/camisa/camisaf1.png" alt="Generic placeholder image" width="140" height="140">
          <h4>Estampa Diana e Steve</h4>
          <h2>R$20,00</h2>
          <label class="container">Comprar<input type="checkbox" checked="checked" value="7"><span class="checkmark"></span></label>
        </div><!-- /.col-lg-4 -->
      </div>
    </div>
  </div>




    <footer class="bd-footer text-muted">
     <div class="container">
       <center>
       <h4>Social Media</h4>
       <a href="https://www.facebook.com/devaneios.abstratos/?ref=br_rs"> <img src="icons/facebook.png" width=50px;/> </a>
       <a href="https://www.instagram.com/dasaxavierart/"> <img src="icons/instagram.png" width=70px;/></a>
     </center>
       <p> Desenvolvido por Dasayeve Xavier & Deise Silva para a displicina WEBI</p>
    </div>
  </footer>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>