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
}

h1 {
  text-align: center;
}

.campaigns-list {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: flex-start;
}

.card {
  width: 300px;
  padding: 20px;
  margin: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  background-color: #f9f9f9;
}

h2, p {
  margin: 0;
  padding: 0;
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
  <h1>Liste des Campagnes</h1>
  <div class="campaigns-list">
    <?php
    // Connexion à la base de données
                 
    require_once('ConnectMySQLDB.php');
    
             
    $bd=new ConnectMySQLDB('localhost','inflfiel_social_traking','root','');
    //$bd=new ConnectMySQLDB('localhost','inflfiel_social_traking','inflfiel_UserSocial',')6WZghEwCWTN');

    // Requête SELECT
    $sql = "SELECT `name`,`start_date`,`end_date` FROM `campaigns` WHERE `company_id`=1";
    $result = $bd->executeCustomQuery($sql);

    // Parcours des lignes de résultat avec foreach
    foreach ($result as $row) {
        $name = $row['name'];
        $startDate = $row['start_date'];
        $endDate = $row['end_date'];
        ?>
        <!-- Affichage de chaque campagne -->
        <div class="card">
            <h2>Nom: <?php echo $name; ?></h2>
            <p>Date de début: <?php echo $startDate; ?></p>
            <p>Date de fin: <?php echo $endDate; ?></p>
        </div>
        <?php
    }

    ?>
  </div>
</body>
</html>