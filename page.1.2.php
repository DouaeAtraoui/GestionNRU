<?php
    session_start();
    $_SESSION['id_utilisateur']=$oid;
    $host = "localhost";
    $user = "postgres";
    $pass = "POSTfatima";
    $db = "projet";
    if (isset($_POST['submit'])){


        $first_name=$_POST['prenom'];
        $last_name=$_POST['nom'];
        $cin=$_POST['cin'];
        $adress=$_POST['adresse'];
        $tel=$_POST['telephone'];
        $email=$_POST['email'];
        $prop=$_POST['type_utilisateur'];
        $conn=pg_connect("host=$host port=5432 dbname=$db user=$user password=$pass");
        $query=pg_query($conn,"INSERT INTO utilisateur(nom, prenom, email, adresse, telephone, cin, type_utilisateur) 
        VALUES ('$last_name', '$first_name', '$email', '$adress', '$tel', '$cin', '$prop');");
        $oid = pg_last_oid($query);
        if ($query)
        {
            header("Location:page2.2.html");
        }
        else
        {
            echo "error insering data";
        }
      }


?>