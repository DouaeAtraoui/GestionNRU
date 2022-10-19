<?php
    $host = "localhost";
    $user = "postgres";
    $pass = "POSTfatima";
    $db = "projet";
    $authenticated=false;
    if(isset($_POST['verify1']) && $_POST['verify1']=="Connexion")
    {
         $code=$_POST['username'];
         $mdp=$_POST['password'];
         $conn=pg_connect("host=$host port=5432 dbname=$db user=$user password=$pass");
          if($conn)
          {
               $query="select * from verify1($1,$2)";
               $res=pg_query_params($conn,$query,array($code,$mdp));
               $result=pg_fetch_object($res);
               if($result)
               {
               $authenticated=$result->verify1==1;
               } 
          }

        if(!$authenticated){
          echo "not valid";
        }
        else{
          header('location:liste.php');
        }
        }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Se connecter</title>

    <link rel="shortcut icon" href="Images/logo.png" type="image/x-icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
    crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" 
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" 
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" 
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" 
    crossorigin="anonymous"></script>

    <!--Insert icons in our Site from Font Awesome-->
    <script src="https://kit.fontawesome.com/af920ecfdb.js" crossorigin="anonymous"></script>

    <link href="style3.css"  rel="stylesheet">
    <script src="main.js"></script>

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
            <a class="nav-link" aria-current="page" href="index.html">Accueil</a>
          </li>
  
          <li class="nav-item dropdown" style="font-family: 'Acme', sans-serif;" style="font-size: 79px;">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Espace Client
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="page1.2.html" target="-blank">
                <i class="fa-solid fa-arrow-right"></i>Note de Renseignement</a></li>
              <li><a class="dropdown-item" href="suivie.html"target="-blank"> 
                <i class="fa-solid fa-arrow-right"></i>Suivie de la Note de Renseignement</a></li>
            </ul>
          </li>
  
          <li class="nav-item dropdown" style="font-family: 'Acme', sans-serif;" style="font-size: 79px;">
              <a class="nav-link dropdown-toggle active" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="text-decoration : underline;">
                Espace Gestionnaire
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="login.php" target="-blank">
                    <i class="fa-solid fa-arrow-right"></i>Se connecter</a></li>
                <li><a class="dropdown-item" href="liste.php"target="-blank"> 
                    <i class="fa-solid fa-arrow-right"></i>Vérifier les demandes des NRU</a></li>
              </ul>
            </li>
        </ul>
          
      </div>
    </div>
  </nav>
  <!--The Navbar section is Finished-->
      <div id="container">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <h1>Pour accéder à l'Espace de Gestionnaire</h1>
            <h1>Merci de vous identifiez</h1>
            <br>
            
            <input type="number"  placeholder="Code" name="username" required>
            <br>
            <br>
            <input type="password" placeholder="Mot de passe" name="password" required>
            <br>
            <br>
            <input type="submit" name='verify1' value='Connexion' id='submit'>
        </form>
    </div>


    <div class="container">
        <footer class="row">
          <div class="col">
            <img src="Images/logo.png" alt="logo Club" width="200" height="200">
          </div>
      
          <div class="col">
      
          </div>
      
          <div class="col"  width="300" height="200">
            <h5>Informations</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><i class="fas fa-phone-alt"></i>+212(0)5 35 54 25 49</li>
              <li class="nav-item mb-2"><i class="fas fa-map-marker-alt"></i>Hamraoua - 25Km de Meknès</li>
            </ul>
          </div>
      
          <div class="col">
      
          </div>
      
          <div class="col">
            <div id="carte">
              <h5>Soyez le Bienvenu</h5>
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6613.9157053694125!2d-5.5212522!3d34.0192928!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda0427d19dd2f09%3A0xd68e4425b1ee4ecd!2sHamraoua!5e0!3m2!1sfr!2sma!4v1654782708133!5m2!1sfr!2sma" width="300" height="270" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
        </footer>
      </div>
</body>
</html>