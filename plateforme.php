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
  
  
  
  .search-form
  {
    justify-content: center;
    align-items: center; 
  }
  

  </style>
</head>
<body>
 
<div class="sidebar">
    <ul>
    <li><a href="index.php">Accueil</a></li>
      <li><a href="campaign.php">Campagne</a></li>
       <li><a href="plateforme.php">Plateforme</a></li>
      <li><a href="produit.php">Produit</a></li> 
    </ul>
  </div>
  <div class="content">
    


  <h1 class="container">Liste des Platforms</h1>
  <div class="campaigns-list">
  <form id="search-form" class="search-form" >
                      <input type="text" id="search-input" style="border: none; outline: none; background: none; flex: 1; padding: 6px; font-size: 14px;" placeholder="Rechercher un influenceur...">
                      <button type="button" style="background-color: transparent; border: none; outline: none; cursor: pointer; padding: 6px; border-radius: 50%;">
                          <i class="fas fa-search" style="color: #666; font-size: 16px;"></i>
                      </button>
                  </form>
    <?php
    // Connexion à la base de données
                 
    require_once('ConnectMySQLDB.php');
    
             
    $bd=new ConnectMySQLDB('localhost','inflfiel_social_traking','root','');
    //$bd=new ConnectMySQLDB('localhost','inflfiel_social_traking','inflfiel_UserSocial',')6WZghEwCWTN');

    // Requête SELECT
    $sql = "SELECT id,`name`,created_at as `start_date` FROM `platforms`";
    $result = $bd->executeCustomQuery($sql);

    // Parcours des lignes de résultat avec foreach
    foreach ($result as $row) {
        $id=$row['id'];
        $name = $row['name'];
        $startDate = $row['start_date'];
       
        ?>
        <!-- Affichage de chaque campagne -->
        <a href="details_plateforme.php?platform_id=<?=$id?>" class="card-link"> 
            <div class="card">
            <h2>Nom: <strong class="platform-name"><?php echo $name; ?></strong> </h2>
                <p>Date de début: <?php echo $startDate; ?></p>
            </div>
        </a>

        <?php
    }

    ?>
  </div>



  </div>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
$(document).ready(function() {
    $('#search-input').on('input', function() {
        var searchTerm = $(this).val().toLowerCase();
        $('.card').each(function() {
            var influencerName = $(this).find('.platform-name').text().toLowerCase();
            if (influencerName.includes(searchTerm)) {
                $(this).show();
            } else {
                $(this).hide();
            }
        });
    });
});
</script>

</body>
</html>