<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style4.css">
    <title>Document</title>
    
    <!--Insert the logo of the Site-->
    <link rel="shortcut icon" href="Images/logo.png" type="image/x-icon">

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

    <!--Insert icons in our Site from Font Awesome-->
    <script src="https://kit.fontawesome.com/af920ecfdb.js" crossorigin="anonymous"></script>

    <link href="style.css"  rel="stylesheet">
    <script src="main.js"></script>
</head>
<body>
        <!--Start the Navbar section-->
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
            <a class="nav-link" aria-current="page" href="index.html" >Accueil</a>
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
              <a class="nav-link dropdown-toggle active" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"style="text-decoration : underline;">
                Espace Gestionnaire
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="login.php" target="-blank">
                    <i class="fa-solid fa-arrow-right"></i>Se connecter</a></li>
                <li><a class="dropdown-item" href="#"target="-blank"> 
                    <i class="fa-solid fa-arrow-right"></i>Vérifier les demandes des NRU</a></li>
              </ul>
            </li>
        </ul>
          
      </div>
    </div>
  </nav>
  <!--The Navbar section is Finished-->
    <br><br>
    <table align="center">
        <tr>
            <th>ID_User</th>
            <th>Date_Demande</th>
            <th id="fichiers">Fichiers</th>
        </tr>
        <tr>
            <td>62</td>
            <td>12/04/2022</td>
            <td id="V1">Vérifier</td>
        </tr>
     
        <tr>
            <td>63</td>
            <td>14/04/2022</td>
            <td id="V1">Vérifier</td>
        </tr>
        <tr>
            <td>64</td>
            <td>19/04/2022</td>
            <td id="V1">Vérifier</td>
        </tr>
        <tr>
            <td>65</td>
            <td>20/04/2022</td>
            <td id="V1">Vérifier</td>
        </tr>
        <tr>
            <td>66</td>
            <td>28/04/2022</td>
            <td id="V2">Vérifier</td>
        </tr>
        <tr>
            <td>67</td>
            <td>11/05/2022</td>
            <td id="V2">Vérifier</td>
        </tr>
        <tr>
            <td>68</td>
            <td>11/05/2022</td>
            <td id="V2">Vérifier</td>
        </tr>
     </table>
</body>
</html>