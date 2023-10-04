<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Lien vers Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- Liens vers les fichiers CSS de DataTables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <!-- Liens vers les fichiers JavaScript de jQuery et DataTables -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Inclure la bibliothèque Chart.js -->
   
    <!-- ... Autres balises d'en-tête ... -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>


    

    <title>Details</title>
    <style>
        /* Ajoutez vos styles personnalisés ici si nécessaire */
        .card {
            border: 1px solid #ccc;
            border-radius: 8px;
            margin: 10px;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 10px;
        }



        .picture img {
            width: 50px;
            height: 50px;
            object-fit: cover;
            
        }

        .info {
            margin-top: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .icon {
            color: #888;
            font-size: 18px;
            margin-right: 10px;
        }

        h3 {
            margin: 0;
            padding: 5px;

        }
        th{
            text-align: center;
            /*padding: auto;*/
            align-items: center;
            padding: 5px;
            border: 2px solid gray;
        }

        th,td
        {
          border: 2px solid gray;
            padding: 5px;
        }

        .export {
        position: fixed; top:10px; right:10px;
        float: right;
        /*background-color: #007bff;*/
        /*color: #fff;*/
            background-color:#fff ;
            color:#007bff;
            border-radius: 5px;
        border: 1px solid #007bff ;
        padding: 10px 20px;
        cursor: pointer;
        z-index: 1;
        }


        .export:hover{
            background-color:#007bff ;
            color:#fff;


        }

        input[type="date"] {
                    padding: 8px;
                    border: 1px solid #ccc;
                    border-radius: 4px;
                    font-size: 14px;
                    width: 200px;
                    text-align: center; /* Centre la date */
        }








.card-container {
  display: flex;
  flex-wrap: wrap;

}

.card-a {
  flex: 0 0 200px; /* Largeur fixe pour chaque carte */
  margin: 10px;
  border: 1px solid #ffffff;
  padding: 10px;
  background-color: white;
  border-radius: 8px;
}

.platform-a {
  width: 50px;
  height: 50px;
}

.platform-a img {
  width: 100%;
  height: 100%;
}

 .info-a {
 /* margin-left: 10px;*/
  font-size: 20px;font-weight: bold;
} 

.info-a h3 {
  font-size: 16px;
  margin: 0;
}

.info-a p {
  /* font-size: 14px; */
  margin: 0;
}

body {
  font-family: 'Poppins', sans-serif;

}








        .custom-header {
            text-align: center;
            background-color: #007bff;
            padding: 20px;
            margin-bottom: 5% ;
        }


        .back-link {
            font-size: 30px;
            font-weight: bold;
            color: white;
            text-decoration: none;
            margin-left: 0px;
        }



        
.sidebar {
    width: 125px;
    height: 100%;
    background-color: #f1f1f1;
    position: fixed;
    left: 0;
    top: 0;
  }
  
  .sidebar ul {

    list-style-type: none;
    padding: 0;
    margin: 0;
    padding: 10px;
  }
  
  .sidebar li {
    padding: 10px;
    width: 100;
    height: auto;
  }
  
  .sidebar li a {
    text-decoration: none;
    color: #000;
  }
  
  .content {
    margin-left: 125px;

    padding: 20px;
  }


  
.filter-form {
  display: flex;
  flex-direction: row;
  max-width: 80%;
  margin: 0 auto;
  justify-content: center;
  align-items: center;
  margin-bottom: 20px;
}

.search-form
{
  justify-content: center;
  align-items: center; 
}





.form-group {
  margin-left: 20px;
  float: left;
  width: 200px;
}

label {
  font-weight: bold;
  color: #fff;
  margin-bottom: 5px;
}



input[type="date"],
select,
.apply-button {
  width: 100%;
  height: 40px;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
  background-color: #f2f2f2;
  color: #333333;
  font-family: Arial, sans-serif;
  font-size: 14px;
  transition: border-color 0.3s ease;
  box-sizing: border-box; /* Ajout de la boîte de dimensionnement */
  margin-top: 10px; /* Ajout de l'espacement supplémentaire */
}

input[type="date"]:hover,
select:hover {
  border-color: #999999;
}

input[type="date"]:focus,
select:focus {
  outline: none;
  border-color: #999999;
  box-shadow: 0 0 5px rgba(153, 153, 153, 0.5);
}




.search-form {
  display: flex;
  align-items: center;
  justify-content: center;
  background-color: #f2f2f2;
  border: 1px solid #ccc;
  border-radius: 20px;
  padding: 8px;
  width: 80%;
  margin: 0 auto;
}


.apply-button {

  color: #fff;
  /* border-radius: 4px;
  transition: border-color 0.3s ease;  */
   margin-top: 5%;
  background-color: #007bff;
  /* border: 1px solid #ccc;
  color: #fff;
  border: none;
  height: 40px; 
  border: 1px solid #ccc;
  margin-left: 10px;
  border-radius: 4px;
  background-color: #007bff;
  font-family: Arial, sans-serif;
  font-size: 14px;
  transition: border-color 0.3s ease; */
}

    </style>
</head>
<body>


        <?php

function separateurMilliers($nombre) {
    return number_format($nombre, 0, ',', ' ');
}
            // Vérifiez d'abord si l'ID est présent dans la requête GET
            if(isset($_GET['id'])) {
                // Récupérez l'ID depuis la requête GET
                $influencerId = $_GET['id'];
                $date_debut='2023-01-01';
                $date_fin=date("Y-m-d"); 
                
                require_once('ConnectMySQLDB.php');
    
             
             $bd=new ConnectMySQLDB('localhost','inflfiel_social_traking','root','');
             //$bd=new ConnectMySQLDB('localhost','inflfiel_social_traking','inflfiel_UserSocial',')6WZghEwCWTN');
                $query_nbr_abonner="SELECT influenceur_name, Facebook, Instagram, Tiktok, Twitter, YouTube, Ayoba
                FROM total_abonner
                WHERE influenceur_id = $influencerId;";

               $query_objectif_influenceur = "SELECT `id`,`name`,`status`,`icon`,`created_at`,`updated_at` FROM `actions_types` WHERE 1";

                $query = "SELECT * FROM influencers WHERE  id=$influencerId";
                $query_engagement= "SELECT value FROM vue_engagement_influenceurs WHERE influenceur_id=$influencerId";
                $query_kpi="SELECT COUNT(*) AS kpi
                FROM vue_max_actions_details
                WHERE influenceur_id = $influencerId and publication_date > '2023-01-01'";

                $query_table="SELECT
                i.name AS influenceur,
                a.publication_date AS date_de_publication,
                at.name AS type_d_action,
                k.label AS kpi,
                SUM(ad.value) AS total_value,
                a.text ,
                p.name AS Canal_de_publication,
                cp.name AS company,a.link
                FROM actions_details AS ad
                JOIN kpis AS k ON ad.kpi_id = k.id
                JOIN actions AS a ON ad.action_id = a.id
                JOIN campaigns AS cp ON a.campaign_id = cp.id
                JOIN actions_types AS at ON a.reaction_type_id = at.id
                JOIN contracts AS c ON a.contract_id = c.id
                JOIN influencers AS i ON c.influenceur_id = i.id
                JOIN platforms AS p ON a.platform_id = p.id
                WHERE influenceur_id=$influencerId and a.publication_date > '2023-01-01'
                GROUP BY i.name, a.publication_date, at.name, k.label, a.text, p.name, cp.name,a.link  ";

                $sql = "SELECT SUM(v.value) AS nombre_details, k.label AS nom_kpi
                FROM vue_max_actions_details v
                JOIN kpis k ON v.kpi_id = k.id
                WHERE v.influenceur_id = $influencerId and k.companies_id=1 and v.publication_date > '2023-01-01'
                GROUP BY v.influenceur_id, v.kpi_id";

                $sql_chat_1 = "SELECT p.name AS platform, SUM(v.value) AS value
                        FROM vue_max_actions_details v
                        INNER JOIN platforms p ON p.id = v.platform_id
                        WHERE v.influenceur_id = $influencerId and v.publication_date > '2023-01-01'
                        GROUP BY p.name;
                        ";

                $sql_chat_2 = "SELECT c.name AS campagne, SUM(v.value) AS value
                FROM vue_max_actions_details v
                INNER JOIN campaigns c ON c.id = v.campaign_id
                WHERE v.influenceur_id = $influencerId and v.publication_date > '2023-01-01'
                GROUP BY c.name;
                ";

                $sql_chat_3="SELECT p.name AS produit, SUM(v.value) AS value
                FROM vue_max_actions_details v
                INNER JOIN products p ON p.id = v.product_id
                WHERE v.influenceur_id = $influencerId and v.publication_date > '2023-01-01'
                GROUP BY p.name;";

                $sql_chat_4=
                "SELECT cp.name AS campagne, COUNT(*) AS kpi
                FROM vue_max_actions_details v
                JOIN campaigns AS cp ON v.campaign_id = cp.id
                WHERE influenceur_id = $influencerId and v.publication_date > '2023-01-01'
                GROUP BY v.campaign_id";

                $sql_chat_5="SELECT p.name AS platform, COUNT(*) AS kpi
                FROM vue_max_actions_details v
                JOIN platforms AS p ON v.platform_id = p.id
                WHERE influenceur_id = $influencerId and v.publication_date > '2023-01-01'
                 GROUP BY v.platform_id";

                $sql_chat_6="SELECT p.name AS produit, COUNT(*) AS kpi
                FROM vue_max_actions_details v
                INNER JOIN products p ON p.id = v.product_id
                WHERE v.influenceur_id = $influencerId and v.publication_date > '2023-01-01'
                GROUP BY p.name;";


               if(isset($_POST["dateFilter"]) && !empty($_POST["dateFilter"])) {
                // Récupération des valeurs soumises du formulaire
                $date_debut = $_POST["dateDebut"];
                $date_fin = $_POST["dateFin"];


                 // Requête pour obtenir le nombre total de KPIs pour l'influenceur
                $query_kpi = "SELECT COUNT(*) AS kpi
                FROM vue_max_actions_details
                WHERE influenceur_id = $influencerId
                AND (publication_date BETWEEN '$date_debut' AND '$date_fin' OR date_j BETWEEN '$date_debut' AND '$date_fin')";

                // Requête pour obtenir les détails d'actions avec filtres de dates
                $query_table = "SELECT
                i.name AS influenceur,
                a.publication_date AS date_de_publication,
                at.name AS type_d_action,
                k.label AS kpi,
                SUM(ad.value) AS total_value,
                a.text,
                p.name AS Canal_de_publication,
                cp.name AS company,a.link
                FROM actions_details AS ad
                JOIN kpis AS k ON ad.kpi_id = k.id
                JOIN actions AS a ON ad.action_id = a.id
                JOIN campaigns AS cp ON a.campaign_id = cp.id
                JOIN actions_types AS at ON a.reaction_type_id = at.id
                JOIN contracts AS c ON a.contract_id = c.id
                JOIN influencers AS i ON c.influenceur_id = i.id
                JOIN platforms AS p ON a.platform_id = p.id
                WHERE influenceur_id = $influencerId
                AND (a.publication_date BETWEEN '$date_debut' AND '$date_fin')
                GROUP BY i.name, a.publication_date, at.name, k.label, a.text, p.name, cp.name,a.link";

                // Autres requêtes similaires avec les mêmes conditions de date
                $sql = "SELECT SUM(v.value) AS nombre_details, k.label AS nom_kpi
                FROM vue_max_actions_details v
                JOIN kpis k ON v.kpi_id = k.id
                WHERE v.influenceur_id = $influencerId and k.companies_id=1
                AND (v.publication_date BETWEEN '$date_debut' AND '$date_fin' OR v.date_j BETWEEN '$date_debut' AND '$date_fin')
                GROUP BY v.influenceur_id, v.kpi_id";

                // Pour le chat 1
                $sql_chat_1 = "SELECT p.name AS platform, SUM(v.value) AS value
                FROM vue_max_actions_details v
                INNER JOIN platforms p ON p.id = v.platform_id
                WHERE v.influenceur_id = $influencerId 
                AND (v.publication_date BETWEEN '$date_debut' AND '$date_fin' OR v.date_j BETWEEN '$date_debut' AND '$date_fin')
                GROUP BY p.name";

                // Pour le chat 2
                $sql_chat_2 = "SELECT c.name AS campagne, SUM(v.value) AS value
                FROM vue_max_actions_details v
                INNER JOIN campaigns c ON c.id = v.campaign_id
                WHERE v.influenceur_id = $influencerId
                AND (v.publication_date BETWEEN '$date_debut' AND '$date_fin' OR v.date_j BETWEEN '$date_debut' AND '$date_fin')
                GROUP BY c.name";

                // Pour le chat 3
                $sql_chat_3 = "SELECT p.name AS produit, SUM(v.value) AS value
                FROM vue_max_actions_details v
                INNER JOIN products p ON p.id = v.product_id
                WHERE v.influenceur_id = $influencerId
                AND (v.publication_date BETWEEN '$date_debut' AND '$date_fin' OR v.date_j BETWEEN '$date_debut' AND '$date_fin')
                GROUP BY p.name";

                // Pour le chat 4
                $sql_chat_4 = "SELECT cp.name AS campagne, COUNT(*) AS kpi
                FROM vue_max_actions_details v
                JOIN campaigns AS cp ON v.campaign_id = cp.id
                WHERE influenceur_id = $influencerId 
                AND (v.publication_date BETWEEN '$date_debut' AND '$date_fin' OR v.date_j BETWEEN '$date_debut' AND '$date_fin')
                GROUP BY v.campaign_id";

                // Pour le chat 5
                $sql_chat_5 = "SELECT p.name AS platform, COUNT(*) AS kpi
                FROM vue_max_actions_details v
                JOIN platforms AS p ON v.platform_id = p.id
                WHERE influenceur_id = $influencerId 
                AND (v.publication_date BETWEEN '$date_debut' AND '$date_fin' OR v.date_j BETWEEN '$date_debut' AND '$date_fin')
                GROUP BY v.platform_id";

                // Pour le chat 6
                $sql_chat_6 = "SELECT p.name AS produit, COUNT(*) AS kpi
                FROM vue_max_actions_details v
                INNER JOIN products p ON p.id = v.product_id
                WHERE v.influenceur_id = $influencerId
                AND (v.publication_date BETWEEN '$date_debut' AND '$date_fin' OR v.date_j BETWEEN '$date_debut' AND '$date_fin')
                GROUP BY p.name";

               }

               $query_action="SELECT
               SUM(v.value) AS val,
               k.`name` AS nom_actions
           FROM
               vue_max_actions_details v
           JOIN actions_types k ON
               v.reaction_type_id = k.id
           JOIN campaigns AS cp
           ON
               v.campaign_id = cp.id
           JOIN platforms AS p
           ON
               v.platform_id = p.id
           JOIN products AS pr
           ON
               v.product_id = pr.id
             WHERE v.influenceur_id = $influencerId 
              AND (v.publication_date BETWEEN '$date_debut' AND '$date_fin' OR v.date_j BETWEEN '$date_debut' AND '$date_fin')
           GROUP BY
               v.influenceur_id,
               v.reaction_type_id;";

          $query_nb_action="SELECT
          k.`name` AS nom_actions,
          COALESCE(COUNT(*), 0) AS valeur
      FROM
          vue_max_actions_details v
      JOIN campaigns AS cp
      ON
          v.campaign_id = cp.id
      JOIN platforms AS p
      ON
          v.platform_id = p.id
      JOIN products AS pr
      ON
          v.product_id = pr.id
      JOIN actions_types k ON
          v.reaction_type_id = k.id
          WHERE v.influenceur_id = $influencerId 
              AND (v.publication_date BETWEEN '$date_debut' AND '$date_fin' OR v.date_j BETWEEN '$date_debut' AND '$date_fin')
      GROUP BY
          v.reaction_type_id;";

            
        if(isset($_POST['goFilter'])) 
        {
    
            $campaigns = (isset($_POST['campaigns']) && !empty($_POST['campaigns']))? $_POST['campaigns']:NULL;
            $platform = (isset($_POST['platform']) && !empty($_POST['platform']))? $_POST['platform']:NULL;
            $prodruit = (isset($_POST['prodruit']) && !empty($_POST['prodruit']))? $_POST['prodruit']:NULL; 
            $date = (isset($_POST['date']) && !empty($_POST['date']))? $_POST['date'] :'2023-01-01';
        
            $query_campaigns="0";
            if($campaigns!=NULL) 
            $query_campaigns= " cp.id=$campaigns ";
            
            $query_prodruit="0";
            if($prodruit!=NULL)
            $query_prodruit= " pr.id=$prodruit ";
        
            $query_platform="0";
            if($platform!=NULL)
            $query_platform= " p.id=$platform ";
        
          




             // Requête pour obtenir le nombre total de KPIs pour l'influenceur
             $query_kpi = "SELECT COUNT(*) AS kpi
             FROM vue_max_actions_details v
             JOIN campaigns AS cp ON v.campaign_id = cp.id
             JOIN platforms AS p ON v.platform_id = p.id
             JOIN products AS pr ON v.product_id = pr.id
             WHERE v.influenceur_id = $influencerId AND ($query_prodruit OR $query_campaigns OR $query_platform)
             AND (v.publication_date BETWEEN '$date_debut' AND '$date_fin' OR v.date_j BETWEEN '$date_debut' AND '$date_fin')";

             // Requête pour obtenir les détails d'actions avec filtres de dates
             $query_table = "SELECT
             i.name AS influenceur,
             a.publication_date AS date_de_publication,
             at.name AS type_d_action,
             k.label AS kpi,
             SUM(ad.value) AS total_value,
             a.text,
             p.name AS Canal_de_publication,
             cp.name AS company,a.link
             FROM actions_details AS ad
             JOIN kpis AS k ON ad.kpi_id = k.id
             JOIN actions AS a ON ad.action_id = a.id
             JOIN campaigns AS cp ON a.campaign_id = cp.id
             JOIN actions_types AS at ON a.reaction_type_id = at.id
             JOIN contracts AS c ON a.contract_id = c.id
             JOIN influencers AS i ON c.influenceur_id = i.id
             JOIN platforms AS p ON a.platform_id = p.id
             JOIN products AS pr ON a.product_id = pr.id
             WHERE influenceur_id = $influencerId
             AND (a.publication_date BETWEEN '$date_debut' AND '$date_fin') AND ($query_prodruit OR $query_campaigns OR $query_platform)
             GROUP BY i.name, a.publication_date, at.name, k.label, a.text, p.name, cp.name,a.link";

             // Autres requêtes similaires avec les mêmes conditions de date
             $sql = "SELECT SUM(v.value) AS nombre_details, k.label AS nom_kpi
             FROM vue_max_actions_details v
             JOIN kpis k ON v.kpi_id = k.id
             JOIN campaigns AS cp ON v.campaign_id = cp.id
             JOIN platforms AS p ON v.platform_id = p.id
             JOIN products AS pr ON v.product_id = pr.id
             WHERE v.influenceur_id = $influencerId and k.companies_id=1 AND ($query_prodruit OR $query_campaigns OR $query_platform)
             AND (v.publication_date BETWEEN '$date_debut' AND '$date_fin' OR v.date_j BETWEEN '$date_debut' AND '$date_fin')
             GROUP BY v.influenceur_id, v.kpi_id";

             // Pour le chat 1
             $sql_chat_1 = "SELECT p.name AS platform, SUM(v.value) AS value
             FROM vue_max_actions_details v
             JOIN campaigns AS cp ON v.campaign_id = cp.id
             JOIN platforms AS p ON v.platform_id = p.id
             JOIN products AS pr ON v.product_id = pr.id
             WHERE v.influenceur_id = $influencerId AND ($query_prodruit OR $query_campaigns OR $query_platform)
             AND (v.publication_date BETWEEN '$date_debut' AND '$date_fin' OR v.date_j BETWEEN '$date_debut' AND '$date_fin')
             GROUP BY p.name";

             // Pour le chat 2
             $sql_chat_2 = "SELECT cp.name AS campagne, SUM(v.value) AS value
             FROM vue_max_actions_details v
             JOIN campaigns AS cp ON v.campaign_id = cp.id
             JOIN platforms AS p ON v.platform_id = p.id
             JOIN products AS pr ON v.product_id = pr.id
             WHERE v.influenceur_id = $influencerId AND ($query_prodruit OR $query_campaigns OR $query_platform)
             AND (v.publication_date BETWEEN '$date_debut' AND '$date_fin' OR v.date_j BETWEEN '$date_debut' AND '$date_fin')
             GROUP BY cp.name";

             // Pour le chat 3
             $sql_chat_3 = "SELECT pr.name AS produit, SUM(v.value) AS value
             FROM vue_max_actions_details v
             JOIN campaigns AS cp ON v.campaign_id = cp.id
             JOIN platforms AS p ON v.platform_id = p.id
             JOIN products AS pr ON v.product_id = pr.id
             WHERE v.influenceur_id = $influencerId AND ($query_prodruit OR $query_campaigns OR $query_platform)
             AND (v.publication_date BETWEEN '$date_debut' AND '$date_fin' OR v.date_j BETWEEN '$date_debut' AND '$date_fin')
             GROUP BY pr.name";

             // Pour le chat 4
             $sql_chat_4 = "SELECT cp.name AS campagne, COUNT(*) AS kpi
             FROM vue_max_actions_details v
             JOIN campaigns AS cp ON v.campaign_id = cp.id
             JOIN platforms AS p ON v.platform_id = p.id
             JOIN products AS pr ON v.product_id = pr.id
             WHERE influenceur_id = $influencerId AND ($query_prodruit OR $query_campaigns OR $query_platform) 
             AND (v.publication_date BETWEEN '$date_debut' AND '$date_fin' OR v.date_j BETWEEN '$date_debut' AND '$date_fin')
             GROUP BY v.campaign_id";

             // Pour le chat 5
             $sql_chat_5 = "SELECT p.name AS platform, COUNT(*) AS kpi
             FROM vue_max_actions_details v
             JOIN campaigns AS cp ON v.campaign_id = cp.id
             JOIN platforms AS p ON v.platform_id = p.id
             JOIN products AS pr ON v.product_id = pr.id
             WHERE influenceur_id = $influencerId AND ($query_prodruit OR $query_campaigns OR $query_platform) 
             AND (v.publication_date BETWEEN '$date_debut' AND '$date_fin' OR v.date_j BETWEEN '$date_debut' AND '$date_fin')
             GROUP BY v.platform_id";

             // Pour le chat 6
             $sql_chat_6 = "SELECT pr.name AS produit, COUNT(*) AS kpi
             FROM vue_max_actions_details v
             JOIN campaigns AS cp ON v.campaign_id = cp.id
             JOIN platforms AS p ON v.platform_id = p.id
             JOIN products AS pr ON v.product_id = pr.id
             WHERE v.influenceur_id = $influencerId AND ($query_prodruit OR $query_campaigns OR $query_platform) 
             AND (v.publication_date BETWEEN '$date_debut' AND '$date_fin' OR v.date_j BETWEEN '$date_debut' AND '$date_fin')
             GROUP BY pr.name";

                $query_action="SELECT
                SUM(v.value) AS val,
                k.`name` AS nom_actions
                FROM
                vue_max_actions_details v
                JOIN actions_types k ON
                v.reaction_type_id = k.id
                JOIN campaigns AS cp
                ON
                v.campaign_id = cp.id
                JOIN platforms AS p
                ON
                v.platform_id = p.id
                JOIN products AS pr
                ON
                v.product_id = pr.id
                WHERE v.influenceur_id = $influencerId AND ($query_prodruit OR $query_campaigns OR $query_platform) 
                AND (v.publication_date BETWEEN '$date_debut' AND '$date_fin' OR v.date_j BETWEEN '$date_debut' AND '$date_fin')
                GROUP BY
                v.influenceur_id,
                v.reaction_type_id;";
           
        }


            // Exécutez la requête et obtenez les résultats
                $results_chat_1 = $bd->executeCustomQuery($sql_chat_1);
                $result = $bd->executeCustomQuery($sql);
                $kpis=$bd->executeCustomQuery($query_kpi);
                $influencer =$bd->executeCustomQuery($query);
                $table=$bd->executeCustomQuery($query_table);
                $total_engagement=$bd->executeCustomQuery($query_engagement);
                $nbr_abonner=$bd->executeCustomQuery($query_nbr_abonner)[0]??null; //$query_action
                $action_engagement=$bd->executeCustomQuery($query_action);
                $nb_action_kpi=$bd->executeCustomQuery($query_nb_action);
                  $objectif_influenceur=$bd->executeCustomQuery($query_objectif_influenceur)[0]??null;
               // var_dump($nbr_abonner);
                // Maintenant vous pouvez utiliser $influencerId pour effectuer des opérations basées sur l'ID, par exemple interroger la base de données ou afficher des détails spécifiques à l'influenceur avec cet ID
              
                




                $nb_action_kpiData = array();

                // Parcourez les résultats et remplissez le tableau engagementData , k.label AS 
                foreach ($nb_action_kpi as $row) {
                    $platform = $row['nom_actions'];
                    $value = $row['valeur'];
                    
                    // Remplissez le tableau avec les données d'engagement
                    $nb_action_kpiData[] = array(
                        "kpi" => $platform,
                        "value" => $value
                    );
                }
             
                $nb_action_kpiDataJSON = json_encode($nb_action_kpiData);
                

        
                
                $kipsData = array();

                // Parcourez les résultats et remplissez le tableau engagementData , k.label AS 
                foreach ($result as $row) {
                    $platform = $row['nom_kpi'];
                    $value = $row['nombre_details'];
                    
                    // Remplissez le tableau avec les données d'engagement
                    $kipsData[] = array(
                        "kpi" => $platform,
                        "value" => $value
                    );
                }
             
                $kipsDataJSON = json_encode($kipsData);




                $actionsData = array();

        // Parcourez les résultats et remplissez le tableau engagementData
        foreach ($action_engagement as $row) {
            $platform = $row['nom_actions'];
            $value = $row['val'];
            
            // Remplissez le tableau avec les données d'engagement
            $actionsData[] = array(
                "engagement" => $platform,
                "value" => $value
            );
        }
     
        $actionsDataJSON = json_encode($actionsData);


        // Initialisez un tableau pour stocker les données d'engagement
        $engagementData = array();

        // Parcourez les résultats et remplissez le tableau engagementData
        foreach ($results_chat_1 as $row) {
            $platform = $row['platform'];
            $value = $row['value'];
            
            // Remplissez le tableau avec les données d'engagement
            $engagementData[] = array(
                "plateform" => $platform,
                "value" => $value
            );
        }
     
        $engagementDataJSON = json_encode($engagementData);
        


        



        $results_chat_2 = $bd->executeCustomQuery($sql_chat_2);


        $engagementData = array();


        foreach ($results_chat_2 as $row) {
            $campagne = $row['campagne'];
            $value = $row['value'];
            

            $engagementData[] = array(
                "campagne" => $campagne,
                "value" => $value
            );
        }
     
        $campaignEngagementData = json_encode($engagementData);





       


        $results_chat_3 = $bd->executeCustomQuery($sql_chat_3);


        $engagementData = array();


        foreach ($results_chat_3 as $row) {
            $produit = $row['produit'];
            $value = $row['value'];
            

            $engagementData[] = array(
                "produit" => $produit,
                "value" => $value
            );
        }
     
        $productEngagementData = $engagementData;

















       
        


        $results_chat_4 = $bd->executeCustomQuery($sql_chat_4);


        $actionData = array();


        foreach ($results_chat_4 as $row) {
            $campagne = $row['campagne'];
            $kpi = $row['kpi'];
            

            $actionData[] = array(
                "campagne" => $campagne,
                "kpi" => $kpi
            );
        }
     
        $campagneActionData = $actionData;



       

        // Exécutez la requête et obtenez les résultats
        $results_chat_5 = $bd->executeCustomQuery($sql_chat_5);

        // Initialisez un tableau pour stocker les données d'engagement
        $actionData = array();

        // Parcourez les résultats et remplissez le tableau engagementData
        foreach ($results_chat_5 as $row) {
            $platform = $row['platform'];
            $kpi = $row['kpi'];
            
            // Remplissez le tableau avec les données d'engagement
            $actionData[] = array(
                "platform" => $platform,
                "kpi" => $kpi
            );
        }
     
        $platformActionData = $actionData;



        // Exécutez la requête et obtenez les résultats
        $results_chat_6 = $bd->executeCustomQuery($sql_chat_6);

        // Initialisez un tableau pour stocker les données d'engagement
        $actionData = array();

        // Parcourez les résultats et remplissez le tableau engagementData
        foreach ($results_chat_6 as $row) {
            $produit = $row['produit'];
            $kpi = $row['kpi'];
            
            // Remplissez le tableau avec les données d'engagement
            $actionData[] = array(
                "produit" => $produit,
                "kpi" => $kpi
            );
        }
     
        $productActionData = $actionData;






       
        // Création de la matrice inversée
        $matrix = array();
        foreach ($result as $row)
         {
            $kpi = $row["nom_kpi"];
            $nombreDetails = $row["nombre_details"];
            
            if (!isset($matrix[$kpi])) {
                $matrix[$kpi] = array();
            }
            
            array_push($matrix[$kpi], $nombreDetails);
        }
        // print_r(json_encode($matrix));



             
             
             ?>

<div class="sidebar">
    <ul>
      <li><a href="index.php">Accueil</a></li>
      <li><a href="campaign.php">Campagne</a></li>
       <li><a href="plateforme.php">Plateforme</a></li>
      <li><a href="produit.php">Produit</a></li> 
    </ul>
  </div>
  <div class="content">
   
    

<section  class="influencers-section">
  
    <div style="background-color: #d3d3d3" class="container">
       


        <div style="text-align: left" class="custom-header">
            <a href="index.php" class="back-link">⇦ Liste des Influenceurs</a>

            <fieldset>
                      <legend>Filtre</legend>
                      <form class="filter-form" action="" method="post">
                          <div class="form-group">
                                <label for="campaigns">Campaigns</label>
                                <select name="campaigns" >
                                <option value="" >Tout </option> 
                                <?php
                                  $query_campaigns = "SELECT * FROM campaigns WHERE name!='Default Campagn' AND company_id=1";
                                  $campaigns =$bd->executeCustomQuery($query_campaigns);
                                    if (count($campaigns) > 0) 
                                    {
                                        foreach ($campaigns as $key => $row) {
                                          $campaignId = $row["id"];
                                            $campaignName = $row["name"];
                                            echo "<option value='$campaignId'>$campaignName</option>";
                                        }
                                    } 
                                    else 
                                    {
                                        echo "<option>Aucune campagne disponible.</option>";
                                    }
                                ?> 
                                </select>
                          </div>
                          <div class="form-group">
                            <label for="platform">Platform</label>
                            <select name="platform" >
                            <option value="" >Tout </option>
                                <?php

                              $query_platforms = "SELECT * FROM platforms ";
                              $platforms = $bd->executeCustomQuery($query_platforms);

                              if (count($platforms) > 0) {
                                  foreach ($platforms as $key => $row) {
                                      $platformId = $row["id"];
                                      $platformName = $row["name"];
                                      echo "<option value='$platformId'>$platformName</option>";
                                  }
                              } else {
                                  echo "<option>Aucune plateforme disponible.</option>";
                              }
                                ?> 
                            </select>
                          </div>
                          <div class="form-group">
                              <label for="prodruit">Prodruit</label>
                              <select name="prodruit">
                              <option value="" >Tout </option>
                              <?php
                                $query_products = "SELECT * FROM products WHERE company_id=1";
                                $products = $bd->executeCustomQuery($query_products);

                                if (count($products) > 0) {
                                    foreach ($products as $key => $row) {
                                        $productId = $row["id"];
                                        $productName = $row["name"];
                                        echo "<option value='$productId'>$productName</option>";
                                    }
                                } else {
                                    echo "<option>Aucun produit disponible.</option>";
                                }
                              ?>
                              </select>
                          </div>
                          <div class="form-group">
                              <label for="date">Date</label>
                              <input type="date" id="date" name="date" min="2023-01-01" value="" style="text-align: center;">
                          </div>
                          <div class="form-group">
                              <br>
                              <button type="submit" name="goFilter" class="apply-button" style="width: 80%;">
                                Appliquer
                              </button>
                              <button class="export" type="submit">Exporter</button>
                          </div>
                      </form>
                     
                
            </fieldset>
                <br>
                    <form class="mb-4" method="POST" action="">
                        <label for="dateDebut">Date de début : </label>
                        <input type="date" id="dateDebut" name="dateDebut" min="2023-01-01" value="2023-01-01">
                        
                        <label for="dateFin">Date de fin : </label>
                        <input type="date" id="dateFin" name="dateFin" min="2023-01-01" value="<?php echo date('Y-m-d'); ?>">
                        <br><br>
                        <button type="submit" name="dateFilter" class="btn btn-primary">Filtrer</button>
                    </form>
        </div>


<?php

$ObjectifData = array();

?>

        <?php echo ($date_debut!=null && $date_fin!=null)?" de <strong style='color:blue'> $date_debut </strong > à <strong style='color:blue'> $date_fin</strong>":""; ?>
                <form action="export.php?id=<?=$influencerId?>&dateDebut=<?=$date_debut?>&dateFin=<?=$date_fin?>" method="post">
                    <button class="export" type="submit">Exporter</button>
                </form>
    
            <center>
                    <div class="picture">
                        <img  style=" border-radius: 50%;width:100px;height: 100px" src="<?php echo $influencer[0]['images']?'https://bo.influxs.live/BO/_lib/file/img/'.$influencer[0]['images']:'images/profil.png'; ?>" alt="Profile Image">
                    </div>
                    <h3><?php echo $influencer[0]['full_name']; ?></h3>

                    <br>
                  




  
                      <h2 style="margin: 5%;color: #007bff;font-weight: bold;">Carte de Présentation des Objectifs</h2>
                      <div class="card-container">
                            <div class="col-md-4">
                                <div class="card-a">
                                            <div class="platform-a">
                                                <img src="images/Video.png" alt="Facebook">
                                            </div>
                                            <div class="info-a">
                                                <h3>Vidéo</h3>
                                                <p>Objectifs :<samp style="font-size: 20px;font-weight: bold;"> <?=separateurMilliers($objectif_influenceur['Video']??null)??"Indisponible"?>  </samp></p>
                                                <p>Réalisations :<samp style="font-size: 20px;font-weight: bold;"> / </samp></p>
                                            </div>
                                </div>
                            </div>
                          
                        </div>
                    

                       <h2 style="margin: 5%;color: #007bff;font-weight: bold;">Nombre d'abonné par plateforme</h2>
                    <div style="margin-top: 5%" class="card-container">
                        <div class="col-md-4">
                            <div class="card-a">
                                        <div class="platform-a">
                                            <img src="images/facebook_logo.png" alt="Facebook">
                                        </div>
                                        <div class="info-a">
                                            <h3>Facebook</h3>
                                            <p>Nombre d'abonnés :<samp style="font-size: 20px;font-weight: bold;"> <?=separateurMilliers($nbr_abonner["Facebook"]??null)??"Indisponible"?>  </samp></p>
                                        </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card-a">
                                        <div class="platform-a">
                                            <img src="images/instagram_logo.png" alt="Instagram">
                                        </div>
                                        <div class="info-a">
                                            <h3>Instagram</h3>
                                            <p>Nombre d'abonnés :<samp style="font-size: 20px;font-weight: bold;"> <?=separateurMilliers($nbr_abonner["Instagram"]??null)??"Indisponible"?></samp></p>
                                        </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card-a">
                                        <div class="platform-a">
                                            <img src="images/Tiktok_logo.png" alt="Instagram">
                                        </div>
                                        <div class="info-a">
                                            <h3>Tiktok</h3>
                                            <p>Nombre d'abonnés :<samp style="font-size: 20px;font-weight: bold;"> <?=separateurMilliers($nbr_abonner["Tiktok"]??null)??"Indisponible"?> </samp></p>
                                        </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card-a">
                                        <div class="platform-a">
                                            <img src="images/Twitter_logo.png" alt="Instagram">
                                        </div>
                                        <div class="info-a">
                                            <h3>X</h3>
                                            <p> Nombre d'abonnés :<samp style="font-size: 20px;font-weight: bold;"> <?=separateurMilliers($nbr_abonner["Twitter"]??null)??"Indisponible"?> </samp></p>
                                        </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card-a">
                                        <div class="platform-a">
                                            <img src="images/YouTube_logo.png" alt="Instagram">
                                        </div>
                                        <div class="info-a">
                                            <h3>YouTube</h3>
                                            <p>Nombre d'abonnés :<samp style="font-size: 20px;font-weight: bold;"> <?=separateurMilliers($nbr_abonner["YouTube"]??null)??"Indisponible"?> </samp></p>
                                        </div>
                            </div>
                        </div>
                         <div class="col-md-4">
                            <div class="card-a">
                                        <div class="platform-a">
                                            <img src="images/Ayoba_logo.png" alt="Instagram">
                                        </div>
                                        <div class="info-a">
                                            <h3>Ayoba</h3>
                                            <p>Nombre d'abonnés :<samp style="font-size: 20px;font-weight: bold;"> <?=separateurMilliers($nbr_abonner["Ayoba"]??null)??"Indisponible"?> </samp></p>
                                        </div>
                            </div>
                        </div>
                    </div>
<h2 style="margin: 5%;color: #007bff;font-weight: bold;">Statistiques par KPI</h2>
            </center>
       
                
            
            <div style="margin-top: 5%" class="row">

<div class="col-md-3">
    <div class="card">
        <div class="picture">
            <img src="images/kpi.png" alt="Profile Image">
        </div>

        <div class="info">
        <p>
            <samp style="font-size: 40px;font-weight: bold;">  <?= separateurMilliers($kpis?($kpis[0]?$kpis[0]["kpi"]:0):0)?></samp>
            </p>
            <h4>Total Activations</h4>
           
        </div>
    </div>
</div>



<div class="col-md-3">
    <div class="card">
        <div class="picture">
            <img src="images/vue.png" alt="Profile Image">
        </div>
        <div class="info">
        <p>
            <samp style="font-size: 40px;font-weight: bold;">  <?= separateurMilliers($matrix?(isset($matrix["Nombre de vues "])?$matrix["Nombre de vues "][0]:0):0)?></samp>
            </p>
            <h4>Total Vues</h4>
           
        </div>

    </div>
</div>



<div class="col-md-3">
    <div class="card">
        <div class="picture">
            <img src="images/share.png" alt="Profile Image">
        </div>

        <div class="info">
           <p>
            <samp style="font-size: 40px;font-weight: bold;">  <?= separateurMilliers($matrix?(isset($matrix["Nombre des partages "])?$matrix["Nombre des partages "][0]:0):0)?></samp>
            </p>
            <h4>Total Partages</h4>
           
        </div>
    </div>
</div>


<div class="col-md-3">
    <div class="card">
        <div class="picture">
            <img src="images/like.png" alt="Profile Image">
        </div>
        <div class="info">
           <p>
            <samp style="font-size: 40px;font-weight: bold;">  <?= separateurMilliers($matrix?( isset($matrix["Nombre de likes "])?$matrix["Nombre de likes "][0]:0):0)?></samp>
            </p>
            <h4>Total Likes</h4>
        </div>
    </div>
</div>


<div class="col-md-3">
    <div class="card">
        <div class="picture">
            <img src="images/comment.png" alt="Profile Image">
        </div>
    
        <div class="info">
        <p>
            <samp style="font-size: 40px;font-weight: bold;">  <?=separateurMilliers($matrix? (isset($matrix["Nombre de commentaires "])?$matrix["Nombre de commentaires "][0]:0):0)?></samp>
            </p>
            <h4>Total Commentaires</h4>
        </div>
    </div>
</div>


<?php
        $Total__engagement=
($matrix? (isset($matrix["Nombre de commentaires "])?$matrix["Nombre de commentaires "][0]:0):0)+
($matrix?(isset($matrix["Nombre de vues "])?$matrix["Nombre de vues "][0]:0):0)+
($matrix?(isset($matrix["Nombre des partages "])?$matrix["Nombre des partages "][0]:0):0) + ($matrix?( isset($matrix["Nombre de likes "])?$matrix["Nombre de likes "][0]:0):0)
        ?>

<div class="col-md-3">
    <div class="card">
        <div class="picture">
            <img src="images/group.png" alt="Profile Image">
        </div>

        <div class="info">
            <p>
            <samp style="font-size: 40px;font-weight: bold;">  <?= separateurMilliers( $Total__engagement??$total_engagement[0]['value'])?></samp>
            </p>
            <h4>Total Engagements </h4>
           
        </div>
        
    </div>
</div>
</div>
    </div>



    <div style="text-align: center;background-color: #d3d3d3;margin-bottom: 10%;" class="container mt-4">
        <h2 style="margin: 5%;color: #007bff;font-weight: bold;">Tableau d'actions des influenceurs</h2>

        <table id="tableau-influenceurs" class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>Date de publication</th>
                    <th>Type d'action</th>
                    <th>KPI</th>
                    <th>Valeur totale</th>
                    <th>Texte</th>
                    <th>Canal de publication</th>
                    <th>Campagne</th>
                    <th>Lien</th>
                </tr>
            </thead>
            <tbody>

                <?php 
                    foreach ($table as $key => $val)
                    {
                        ?>
                        
                        <tr>

                        <td><?=$val['date_de_publication']?></td>
                        <td><?=$val['type_d_action']?></td>
                        <td><?=$val['kpi']?></td>
                        <td><?=separateurMilliers($val['total_value'])?></td>
                        <td><?=$val['text']?></td>
                        <td><?=$val['Canal_de_publication']?></td>
                        <td><?=$val['company']?></td>
                        <td><a href="<?=$val['link']?>" target="_blank">Lien Vers La publication </a></td>
                        </tr>
                       
                        <?php 
                    }
                ?>

            </tbody>
        </table>
    </div>


    <div class="container">
        <h2 style="margin: 5%;color: #007bff;font-weight: bold;">Engagement par KPI et Type D'action</h2>
        <div class="card"> 
            <div class="col-md-9">
                <canvas id="actionsChart" width="400" height="200"></canvas>
            </div>
        </div>
       <br>

        <div class="card"> 
            <div class="col-md-9">
                <canvas id="kipsChart" width="400" height="200"></canvas>
            </div>
        </div>
<br><br>
    </div>

    

    <div class="container">
        <h2 style="margin: 5%;color: #007bff;font-weight: bold;">Nombre d'action par KPI et Type D'action</h2>


        <div class="card"> 
            <div class="col-md-9">
                <canvas id="actionkipsChart" width="400" height="200"></canvas>
            </div>
        </div>
<br><br>
    </div>


    <div class="container">
     <!-- <canvas id="chartEngagement" width="400" height="200"></canvas> -->
        <div class="card"> 
            <div class="col-md-9">
                <canvas id="engagementChart" width="400" height="200"></canvas>
            </div>
        </div>


        <div class="card"> 
            <div class="col-md-9">
                <canvas id="campaignEngagementChart" width="400" height="200"></canvas>
            </div>
        </div>


        <div class="card"> 
            <div class="col-md-9">
                <canvas id="productEngagementChart" width="400" height="200"></canvas>
            </div>
        </div>

       <div class="card"> 
            <div class="col-md-9">
                <canvas id="campaignActionChart" width="400" height="200"></canvas>
            </div>
        </div>

        <div class="card"> 
            <div class="col-md-9">
                <canvas id="plateformActionChart" width="400" height="200"></canvas>
            </div>
        </div>
        
        <div class="card"> 
            <div class="col-md-9">
                <canvas id="productActionChart" width="400" height="200"></canvas>
            </div>
        </div>



    </div>

    
</section>

</div>  

<script>
    $(document).ready(function() {
        $('#tableau-influenceurs').DataTable();
    });
</script>



<script>
document.addEventListener("DOMContentLoaded", function() 

{
    

 // Récupérez l'élément canvas
 var canvas = document.getElementById("actionkipsChart");

// Parsez les données JSON récupérées du PHP
var nb_action_KpiData = <?php echo $nb_action_kpiDataJSON; ?>;
console.log(nb_action_KpiData)
// Créez des tableaux pour les labels de plateforme et les valeurs d'engagement
var labels = nb_action_KpiData.map(function(item) {
    return item.kpi;
});

var values = nb_action_KpiData.map(function(item) {
    return item.value;
});

// Créez le diagramme en utilisant Chart.js
var ctx = canvas.getContext("2d");
new Chart(ctx, {
    type: "bar",
    data: {
        labels: labels,
        datasets: [{
            label: "Nombre d'action par KPI",
            data: values,
            backgroundColor: "rgba(200, 186, 75, 0.8)",
            borderColor: "rgba(75, 192, 192, 1)",
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        },
        plugins: {
            tooltip: {
                enabled: true,
                intersect: false, // Affiche les tooltips par défaut sans le survol
                callbacks: {
                    label: function(context) {
                        var label = context.dataset.label || '';
                        var value = context.parsed.y || 0;
                        return label + ': ' + value;
                    }
                }
            }
        }
    }
});






 // Récupérez l'élément canvas
 var canvas = document.getElementById("kipsChart");

// Parsez les données JSON récupérées du PHP
var kipsData = <?php echo $kipsDataJSON; ?>;
console.log(kipsData)
// Créez des tableaux pour les labels de plateforme et les valeurs d'engagement
var labels = kipsData.map(function(item) {
    return item.kpi;
});

var values = kipsData.map(function(item) {
    return item.value;
});

// Créez le diagramme en utilisant Chart.js
var ctx = canvas.getContext("2d");
new Chart(ctx, {
    type: "bar",
    data: {
        labels: labels,
        datasets: [{
            label: "Engagement par KPI",
            data: values,
            backgroundColor: "rgba(250, 186, 7, 0.8)",
            borderColor: "rgba(75, 192, 192, 1)",
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});





    // Récupérez l'élément canvas
    var canvas = document.getElementById("actionsChart");

    // Parsez les données JSON récupérées du PHP
    var actionsData = <?php echo $actionsDataJSON; ?>;
    console.log(actionsData)
    // Créez des tableaux pour les labels de plateforme et les valeurs d'engagement
    var labels = actionsData.map(function(item) {
        return item.engagement;
    });

    var values = actionsData.map(function(item) {
        return item.value;
    });

    // Créez le diagramme en utilisant Chart.js
    var ctx = canvas.getContext("2d");
    new Chart(ctx, {
        type: "bar",
        data: {
            labels: labels,
            datasets: [{
                label: "Engagement par type d'action",
                data: values,
                backgroundColor: "rgba(27, 16, 21, 0.8)",
                borderColor: "rgba(75, 192, 192, 1)",
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });




    var canvas = document.getElementById("engagementChart");

    // Parsez les données JSON récupérées du PHP
    var engagementData = <?php echo $engagementDataJSON; ?>;
console.log(engagementData)
    // Créez des tableaux pour les labels de plateforme et les valeurs d'engagement
    var labels = engagementData.map(function(item) {
        return item.plateform;
    });

    var values = engagementData.map(function(item) {
        return item.value;
    });

    // Créez le diagramme en utilisant Chart.js
    var ctx = canvas.getContext("2d");
    new Chart(ctx, {
        type: "bar",
        data: {
            labels: labels,
            datasets: [{
                label: "Engagement par plateforme",
                data: values,
                backgroundColor: "rgba(75, 192, 192, 0.2)",
                borderColor: "rgba(75, 192, 192, 1)",
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });


        // Les données d'engagement par campagne
        var campaignEngagementData = <?php echo $campaignEngagementData; ?>;
         console.log(campaignEngagementData)
        // Récupération des noms de campagne et des valeurs d'engagement
        var campagnes = campaignEngagementData.map(item => item.campagne);
        var valeurs = campaignEngagementData.map(item => item.value);
        
        // Création du diagramme en bande
        var ctx = document.getElementById('campaignEngagementChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: campagnes,
                datasets: [{
                    label: 'Engagement par Campagne',
                    data: valeurs,
                    backgroundColor: 'rgba(241, 86, 250, 0.2)', // Couleur de remplissage des barres
                    borderColor: 'rgba(241, 86, 250, 1)', // Couleur de bordure des barres
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true // L'axe Y commence à zéro
                    }
                }
            }
        });

   // Les données d'engagement par produit
    var productEngagementData = <?php echo json_encode($productEngagementData); ?>;
          console.log(productEngagementData)
        // Récupération des noms de produit et des valeurs d'engagement
        var produits = productEngagementData.map(item => item.produit);
        var valeurs = productEngagementData.map(item => item.value);
        
        // Création du diagramme en bande
        var ctx = document.getElementById('productEngagementChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: produits,
                datasets: [{
                    label: 'Engagement par Produit',
                    data: valeurs,
                    backgroundColor: 'rgba(39, 245, 67, 0.2)', // Couleur de remplissage des barres
                    borderColor: 'rgba(39, 245, 67, 1)', // Couleur de bordure des barres
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true // L'axe Y commence à zéro
                    }
                }
            }
        });


   // Récupérez l'élément canvas
   var canvas = document.getElementById("campaignActionChart");

// Parsez les données JSON récupérées du PHP
var actionData = <?php echo json_encode($campagneActionData); ?>;
console.log(actionData)
// Créez des tableaux pour les labels de plateforme et les valeurs d'engagement
var labels = actionData.map(function(item) {
    return item.campagne;
});

var values = actionData.map(function(item) {
    return item.kpi;
});

// Créez le diagramme en utilisant Chart.js
var ctx = canvas.getContext("2d");
new Chart(ctx, {
    type: "bar",
    data: {
        labels: labels,
        datasets: [{
            label: "Nombre d\'action par campagne",
            data: values,
            backgroundColor: "rgba(245, 234, 39, 0.2)",
            borderColor: "rgba(245, 234, 39, 1)",
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});



        var plateformActionData = <?php echo json_encode($platformActionData); ?>;
        console.log(plateformActionData)


        var campagnes = plateformActionData.map(item => item.platform);
        var valeurs = plateformActionData.map(item => item.kpi);
        

        var ctx = document.getElementById('plateformActionChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: campagnes,
                datasets: [{
                    label: 'Nombre d\'action par plateforme',
                    data: valeurs,
                    backgroundColor: 'rgba(54, 39, 245, 0.2)',
                    borderColor: 'rgba(54, 39, 245, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            },
            plugins: {
            legend: {
                display: true, // Affiche la légende
                labels: {
                    font: {
                        size: 12 // Ajustez la taille de la police de la légende selon vos besoins
                    }
                }
            }
        }
        });




   var productEngagementData = <?php echo json_encode($productActionData); ?>;
        console.log(productEngagementData)

        var produits = productEngagementData.map(item => item.produit);
        var valeurs = productEngagementData.map(item => item.kpi);
        

        var ctx = document.getElementById('productActionChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: produits,
                datasets: [{
                    label: 'Nombre d\'action par Produit',
                    data: valeurs,
                    backgroundColor: 'rgba(245, 39, 39, 0.2)',
                    borderColor: 'rgba(245, 39, 39, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            },
            plugins: {
            tooltip: {
                enabled: true,
                intersect: false, // Affiche les tooltips par défaut sans le survol
                callbacks: {
                    label: function(context) {
                        var label = context.dataset.label || '';
                        var value = context.parsed.y || 0;
                        return label + ': ' + value;
                    }
                }
            }
        }
        });


});
</script>



<?php
            } 
             

            else {
                // Redirigez ou affichez un message d'erreur si l'ID n'est pas présent dans la requête GET
                echo "L'ID de l'influenceur n'a pas été fourni.";
            }
        ?>
</body>
</html>
