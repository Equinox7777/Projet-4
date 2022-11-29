<?php require_once "cfg/config.php"; ?>
<html>
 <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Style Css -->
    <link id="theme" type="text/css" rel="stylesheet" href="css/white.css"/>
    <link type="text/css" rel="stylesheet" href="css/style.css"/>

    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@700;800&display=swap" rel="stylesheet">
    <link rel="Icon" href="img/logo-gc.jpg">
    <title>Connexion</title>
 </head>
 <body>
    
 <div class="navbar-fixed">
  <nav>
      <div class="nav-wrapper">
        <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
            <li><i class="material-icons dark-mode-icon left">wb_sunny</i></a></li>
            <li class="switch"><label><input type="checkbox"><span class="lever"></span></label></li>
        </ul>
      </div>
  </nav>
</div>
  <ul id="slide-out" class="sidenav">
    <li><i class="material-icons dark-mode-icon icon-margin left">wb_sunny</i></a></li>
    <li class="switch"><label><input type="checkbox"><span class="lever"></span></label></li>
  </ul>

    <h2 class="black-text-css" >Inscription</h2>
    <form class="form-style" method="post" action="actions/signup.php">
        <input type='email' name='email' placeholder='email'/>
        <input type='text' name='username' placeholder='username'/>
        <input type='password' name='password' placeholder='password'/>
        <input type='submit' value='Créer un compte' />
    </form>
  <h2 class="black-text-css">Connexion</h2>
  <form class="form-style" method="post" action="actions/login.php">
    <input type='text' name='username' placeholder='username'/>
    <input type='password' name='password' placeholder='password'/>
    <input type='submit' value='Me connecter' />
  </form>

<!-- JQuery -->
<script type="text/javascript" src="js/jquery.min.js"></script>

<!--Js MAterialize-->
<script type="text/javascript" src="js/materialize.min.js"></script>

<!-- Script -->
<script type="text/javascript" src="js/script.js"></script>

 </body>
</html>