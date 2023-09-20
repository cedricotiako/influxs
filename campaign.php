<!DOCTYPE html>
<html>
<head>
  <title>Liste des Campagnes</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
  <style>

body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 20px;
  background-color: #007bff;
}

h1 {
  width: 100%;
  text-align: center;
  justify-content: center;
  vertical-align: middle;
  background-color: #f9f9f9;
}

.campaigns-list {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: flex-start;
  background-color: #007bff;
}

.card {
  text-align: center;
  justify-content: center;
  vertical-align: auto;
  width: 300px;
  height: 70px;
  padding: 20px;
  margin: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  background-color: #f9f9f9;
  /* box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2); Ombre */
        /* transition: transform 0.2s ease-in-out; Effet de transition au survol */
}

.card:hover {
        transform: scale(1.05); /* Zoom au survol */
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3); /* Ombre plus prononcée */
    }
.card{
       
       
        padding: 10px;
        border-radius: 5px;
        /*display: flex;*/
        /*align-items: flex-start;*/
    }
h2, p {
  margin: 0;
  padding: 0;
}

.card-link {
        text-decoration: none;
        color: #333; /* Couleur du texte */
    }

h2 {
  font-size: 18px;
  font-weight: bold;
}

p {
  font-size: 16px;
  margin-top: 5px;
  color: #888;
}

  </style>
</head>
<body>
  <h1 class="container">Liste des Campagnes</h1>
  <div class="campaigns-list">
    <?php
    // Connexion à la base de données
                 
    require_once('ConnectMySQLDB.php');
    
             
    $bd=new ConnectMySQLDB('localhost','inflfiel_social_traking','root','');
    //$bd=new ConnectMySQLDB('localhost','inflfiel_social_traking','inflfiel_UserSocial',')6WZghEwCWTN');

    // Requête SELECT
    $sql = "SELECT id,`name`,`start_date`,`end_date` FROM `campaigns` WHERE `company_id`=1";
    $result = $bd->executeCustomQuery($sql);

    // Parcours des lignes de résultat avec foreach
    foreach ($result as $row) {
        $id=$row['id'];
        $name = $row['name'];
        $startDate = $row['start_date'];
        $endDate = $row['end_date'];
        ?>
        <!-- Affichage de chaque campagne -->
        <a href="details_campaign.php?campaign_id=<?=$id?>" class="card-link"> 
            <div class="card">
                <h2>Nom: <?php echo $name; ?></h2>
                <p>Date de début: <?php echo $startDate; ?></p>
                <!-- <p>Date de fin: <?php echo $endDate; ?></p> -->
            </div>
        </a>

        <?php
    }

    ?>
  </div>
</body>
</html>