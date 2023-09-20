<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="style.css">

  <title>Mini Tableau de Bord</title>

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

  <section class="influencers-section">

      <div class="container header">
<!--          <img  src="./influxsLogo.png" alt="influxs">-->
          <h2 class="mb-4">Reporting Influx</h2>
          <form action="export.php" method="post">
<!--            <button class="export" type="submit">Exporter</button>-->
          </form>


        
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
      </div>

    <div class="container">

    <div class="row">



<!-- ... balises suivantes ... -->



<!-- ... balises précédentes ... -->

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

<!-- ... balises suivantes ... -->






  <!-- ... Autres éléments HTML ... -->
      </div>


<!-- 
      <nav style="margin-top: 20px" aria-label="Page navigation">
        <ul class="pagination justify-content-center">
          <li class="page-item disabled">
            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Précédent</a>
          </li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#">Suivant</a>
          </li>
        </ul>
      </nav> -->
    </div>
  </section>
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
