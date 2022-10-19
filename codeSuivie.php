<?php
    $host = "localhost";
    $user = "postgres";
    $pass = "POSTfatima";
    $db = "projet";
    if (isset($_POST['id_utilisateur'])){

        $id=$_POST['id_utilisateur'];
 
        $conn=pg_connect("host=$host port=5432 dbname=$db user=$user password=$pass");
        $query=pg_query($conn,"SELECT * FROM utilisateur where id_utilisateur=$id");
        
        if ($query)
        {
            header("Location: codeSuivie.php");
        }
        else
        {
            echo "error insering data";
        }
      }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Code Suivie</title>
    <link rel="stylesheet"type="text/css" href="Style1.css">
    <!--This is to apply the effect of Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
    crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" 
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" 
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" 
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" 
    crossorigin="anonymous"></script>
     
</head>
<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-light" style="background-color: #c0c0c0;">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.html">
              <img src="Images/logo.png" alt="logo Site" width="60" height="60">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      
              <li class="nav-item" style="font-family: 'Acme', sans-serif;">
                <a class="nav-link active" aria-current="page" href="index.html">Accueil</a>
              </li>
      
              <li class="nav-item dropdown" style="font-family: 'Acme', sans-serif;" style="font-size: 79px;">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"style="text-decoration : underline;">
                  Espace Client
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="page1.2.html" target="-blank">
                    <i class="fa-solid fa-arrow-right"></i>Note de Renseignement</a></li>
                  <li><a class="dropdown-item" href="suivie.html" target="-blank"> 
                    <i class="fa-solid fa-arrow-right" ></i>Suivie de la Note de Renseignement</a></li>
                </ul>
              </li>
      
              <li class="nav-item dropdown" style="font-family: 'Acme', sans-serif;" style="font-size: 79px;">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Espace Gestionnaire
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="login.php" target="-blank">
                        <i class="fa-solid fa-arrow-right"></i>Se connecter</a></li>
                    <li><a class="dropdown-item" href="suivie.html"target="-blank"> 
                        <i class="fa-solid fa-arrow-right"></i>Vérifier les demandes des NRU</a></li>
                  </ul>
                </li>
            </ul>
              
          </div>
        </div>
      </nav>
      <div class="group1">

        
      <div>
        <h2>Demande d'une NRU</h2> 
        <h3>Votre demande est enregistrée avec succès</h3>
        <h3>Voici votre code de suivie: </h3>
        <form action="suivie.html">
          <input type="text" value='Suivie de la demande'>
        </form>
      </div>
</body>
</html>