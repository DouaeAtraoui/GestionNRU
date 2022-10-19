<?php
    session_start();
    echo $_SESSION['id_utilisateur'];
    $host = "localhost";
    $user = "postgres";
    $pass = "POSTfatima";
    $db = "projet";
    if (isset($_POST['submit'])){


        $T_F=$_POST['TF'];
        $S_F=$_POST['SF'];
        $N_P=$_POST['nature_projet'];
        $X1=$_POST['X1'];
        $X2=$_POST['X2'];
        $X3=$_POST['X3'];
        $X4=$_POST['X4'];
        $Y1=$_POST['Y1'];
        $Y2=$_POST['Y2'];
        $Y3=$_POST['Y3'];
        $Y4=$_POST['Y4'];
        $cin = file_get_contents($_FILES['carte_identite']['tmp_name']);
        $plan_topo = file_get_contents($_FILES['plan_topographique']['tmp_name']);
        $cert_prop = file_get_contents($_FILES["certificat_prop"]["tmp_name"]);
        $plan_cad = file_get_contents($_FILES["plan_cadastral"]["tmp_name"]);
        $cin1 = pg_escape_bytea($cin);
        $plan_topo1 = pg_escape_bytea($plan_topo);
        $cert_prop1 = pg_escape_bytea($cert_prop);
        $plan_cad1 = pg_escape_bytea($plan_cad);
        $date=date('Y-m-d');
    
        $conn=pg_connect("host=$host port=5432 dbname=$db user=$user password=$pass");

        $query=pg_query($conn,"INSERT INTO parcelle(titre_foncier, statut_foncier, nature_projet, parcelle) 
        VALUES ('$T_F', '$S_F', '$N_P', 'POLYGON(($X1 $Y1,$X2 $Y2,$X3 $Y3,$X4 $Y4,$X1 $Y1))');INSERT INTO pieces_jointes(carte_identite, plan_topographique, certificat_prop, plan_cadastral) 
        VALUES ('$cin1', '$plan_topo1', '$cert_prop1', '$plan_cad1');INSERT INTO demande_nru(date_demande) VALUES('$date');");

        
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