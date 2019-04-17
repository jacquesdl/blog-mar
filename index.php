<?php

  include 'functions/main-functions.php';
  
  // --- Gère les directions des pages ---

  /*
    scandir - Liste les fichiers et dossiers dans un dossier -
  */
  $pages = scandir('pages/');
  /*
    isset -  Détermine si une variable est déclarée et est différente de NULL -
  */
  if(isset($_GET['page']) && !empty($_GET['page'])){
    /*
      in_array - Indique si une valeur appartient à un tableau -
    */
    if(in_array($_GET['page'].'.php',$pages))
    {
      $page = $_GET['page'];
    }
    else
    {
      $page = "error";
    }
  }
  else
  {
    $page = "home";
  }

  // --- Gère les directions des pages functions ---

  $pages_functions = scandir('functions/');
  if(in_array($page.'.function.php', $pages_functions))
  {
    include 'functions/'.$page.'.function.php';
  }
?>
<!DOCTYPE html>
<html>

<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>

    <div class= "container">
      <?php 
        include 'pages/'.$page.'.php';
      ?>
    </div>
</body>

</html>