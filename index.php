<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="style.css">

  <title>Mini Tableau de Bord</title>
  <style>
    /* Styles pour les liens */
   /* .card-link {*/
   /*   text-decoration: none; !* Supprimer la soulignement par défaut *!*/
   /*   color: #333; !* Changer la couleur du texte du lien *!*/
   /*!*  // display: block;  Faire en sorte que les liens occupent toute la largeur de la carte *!*/
   /* }*/
   /* */
   /* !* Styles pour les liens actifs (optionnel) *!*/
   /* .card-link:hover {*/
   /*   background-color: #f0f0f0; !* Changer la couleur d'arrière-plan au survol *!*/
   /* }*/


    /*                                  header                              */

    body {
        font-family: Arial, sans-serif;
        /*background-image: url("influxsLogo.png");*/
    }

    .container {
        text-align: center;
        background-color: #f0f0f0;
        padding: 20px;
        border-radius: 10px;
    }

    .header {
        background-color: #007bff;
        color: #fff;
        padding: 10px;
        border-radius: 5px;
        /*display: flex;*/
        /*align-items: flex-start;*/
    }

    .header img {
        width: 100px; /* Largeur de l'image */
        height: 100px; /* Hauteur de l'image */
        /*margin-right: 10px;*/

    }

    /*.export {*/
    /*    background-color: #007bff;*/
    /*    color: #fff;*/
    /*    border: none;*/
    /*    padding: 10px 20px;*/
    /*    border-radius: 5px;*/
    /*    cursor: pointer;*/
    /*}*/

    .export:hover {
        background-color: #0056b3;
    }


    /*                                            card                                         */


    .card {
        background-color: #f5f5f5; /* Couleur de fond */
        border: 1px solid #ccc; /* Bordure */
        border-radius: 10px; /* Rayon des coins */
        width: 300px; /* Largeur de la carte */
        /*margin: 10px; !* Marge autour de la carte *!*/
        box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2); /* Ombre */
        transition: transform 0.2s ease-in-out; /* Effet de transition au survol */
    }

    /* Style du lien dans la carte */
    .card-link {
        text-decoration: none;
        color: #333; /* Couleur du texte */
    }

    /* Style de l'image du profil */
    .profile-image {
        max-width: 100%;
        border-radius: 10px 10px 0 0; /* Rayon des coins supérieurs */
    }

    /* Style du contenu de la carte */
    .card-content {
        padding: 10px;
    }

    /* Style du nom de l'influenceur */
    .influencer-name {
        font-weight: bold; /* Style de police gras */
        font-size: 18px; /* Taille de police */
    }

    /* Effet de hover sur la carte */
    .card:hover {
        transform: scale(1.05); /* Zoom au survol */
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3); /* Ombre plus prononcée */
    }







 .export{
position: fixed; top: 10%; right: 20px;
background-color:#fff ;
color: #007bff;
border: 1px solid #007bff;
padding: 10px 20px;
cursor: pointer;
z-index: 1;
}


 .export:hover{
     color: #fff;
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
  margin-bottom: 5px;
}

/* input[type="date"],
select,.apply-button {
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
} */

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



  </style>
</head>
<body>



  <?php 
  require_once('ConnectMySQLDB.php');
    
  $bd=new ConnectMySQLDB('localhost','inflfiel_social_traking','root','');
  //$bd=new ConnectMySQLDB('localhost','inflfiel_social_traking','inflfiel_UserSocial',')6WZghEwCWTN');
  
  $query = "SELECT id, full_name, email, phone, status, created_at, images FROM influencers WHERE company_id =1";
  $query="SELECT i.id, i.full_name, i.email, i.phone, i.status, i.created_at, i.images 
  FROM actions_details AS ad
  JOIN kpis AS k ON ad.kpi_id = k.id
  JOIN actions AS a ON ad.action_id = a.id
  JOIN campaigns AS cp ON a.campaign_id = cp.id
  JOIN actions_types AS at ON a.reaction_type_id = at.id
  JOIN contracts AS c ON a.contract_id = c.id
  JOIN influencers AS i ON c.influenceur_id = i.id
  JOIN platforms AS p ON a.platform_id = p.id
  WHERE a.publication_date > '2023-01-01' AND i.company_id =1 and i.id NOT IN (66,4,21) GROUP BY  i.id";
  

  $query_campaigns = "SELECT * FROM campaigns";
  $campaigns =$bd->executeCustomQuery($query_campaigns);
  if(isset($_POST['goFilter'])) {
    
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

  
      $query="SELECT i.id, i.full_name, i.email, i.phone, i.status, i.created_at, i.images 
        FROM actions_details AS ad
        JOIN kpis AS k ON ad.kpi_id = k.id
        JOIN actions AS a ON ad.action_id = a.id
        JOIN campaigns AS cp ON a.campaign_id = cp.id
        JOIN actions_types AS at ON a.reaction_type_id = at.id
        JOIN contracts AS c ON a.contract_id = c.id
        JOIN influencers AS i ON c.influenceur_id = i.id
        
        JOIN platforms AS p ON a.platform_id = p.id
        JOIN products AS pr ON a.product_id = pr.id
        WHERE a.publication_date >= '$date' AND i.company_id =1   
         and i.id NOT IN (66,4,21)  AND ($query_prodruit OR $query_campaigns OR $query_platform) GROUP BY  i.id";


   
  }

  $influencers =$bd->executeCustomQuery($query);
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

      <section class="influencers-section">

            <div class="container header">
                      <h2 class="mb-4">Reporting Influx</h2>



            
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

            
                  <form id="search-form" class="search-form" >
                      <input type="text" id="search-input" style="border: none; outline: none; background: none; flex: 1; padding: 6px; font-size: 14px;" placeholder="Rechercher un influenceur...">
                      <button type="button" style="background-color: transparent; border: none; outline: none; cursor: pointer; padding: 6px; border-radius: 50%;">
                          <i class="fas fa-search" style="color: #666; font-size: 16px;"></i>
                      </button>
                  </form>
            </div>


            <div class="container">

                        <div class="row">




                          <div class="card-list" style="padding-top: 20px;">
                              <!-- Boucle pour générer les cartes -->
                              <?php foreach ($influencers as $influencer) { ?>

                                  <div class="card">
                                    <a href="details.php?id=<?php echo $influencer['id']; ?>" class="card-link">
                                    <center>  <img src="<?php echo $influencer['images']?'https://bo.influxs.live/BO/_lib/file/img/'.$influencer['images']:'images/profil.png'; ?>" alt="<?php echo $influencer['full_name']; ?>" class="profile-image"></center>
                                        <div class="card-content">
                                        <div class="card-divider"></div>
                                        <center>
                                            <div class="card-head">
                                              <strong class="influencer-name"><?php echo $influencer['full_name']; ?></strong>
                                                <!-- <a href="tel:<?php //echo $influencer['phone']; ?>" class="icon"><i class="fas fa-phone"></i></a>
                                                <a href="mailto:<?php // echo $influencer['email']; ?>" class="icon"><i class="fas fa-envelope"></i></a>
                                  -->
                                            </div></center>
                                            <!--
                                                <div class="card-divider"></div>
                                                <div class="card-info">
                                                    <p><strong>Téléphone :</strong> <?php // echo $influencer['phone']; ?></p>
                                                    <p><strong>Email:</strong> <?php // echo $influencer['email']; ?></p>
                                                </div>
                                            -->
                                        </div>
                                    </a>
                                  </div>

                              <?php } ?>
                          </div>

                        </div>



            </div>

      </section>

  </div> 


  <!-- ... Autres éléments HTML ... -->


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
    $(document).ready(function() {
        $('#search-input').on('input', function() {
            var searchTerm = $(this).val().toLowerCase();
            $('.card').each(function() {
                var influencerName = $(this).find('.influencer-name').text().toLowerCase();
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
