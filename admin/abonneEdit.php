<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <style>
        /* Style pour le formulaire */
        form {
          max-width: 400px;
          margin: 0 auto;
          padding: 20px;
          background-color: #f2f2f2;
          border: 1px solid #ccc;
          border-radius: 5px;
          font-family: Arial, sans-serif;
        }

        /* Style pour les champs de saisie */
        select, input {
          width: 100%;
          padding: 10px;
          margin-bottom: 10px;
          border: 1px solid #ccc;
          border-radius: 4px;
          box-sizing: border-box;
        }

        /* Style pour les boutons */
        button {
          padding: 10px 20px;
          margin-right: 10px;
          border: none;
          border-radius: 4px;
          cursor: pointer;
          font-size: 14px;
          font-weight: bold;
        }

        button[type="reset"] {
          background-color: #ddd;
        }

        button[type="submit"] {
          background-color: #4CAF50;
          color: white;
        }

        /* Styles pour le modal popup */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.5);
          }

          .modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            max-width: 400px;
          }

          .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
          }

          .close:hover,
          .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
          }
  </style>
</head>
<body>

 <!-- Modal popup -->
 <div id="myModal" class="modal">
    <div class="modal-content">
      <span class="close">&times;</span>
      <p id="successMessage">Mise à jour effectuée avec succès.</p>
    </div>
  </div>
<?php
  require_once('../ConnectMySQLDB.php');
    
  $bd=new ConnectMySQLDB('localhost','inflfiel_social_traking','root','');
  //$bd=new ConnectMySQLDB('localhost','inflfiel_social_traking','inflfiel_UserSocial',')6WZghEwCWTN'); 


  if ($_SERVER['REQUEST_METHOD'] === 'POST' && !isset($_POST['submit']) && empty($_POST['submit'])) {
    $selectedValue = $_POST['selectedValue'];
    $variablePHP = $selectedValue;
    echo "Valeur enregistrée avec succès : " . $selectedValue;
  }


  if(isset($_POST['submit'])) {
    $influenceur_id = $_POST['influenceur_id'];

    $Facebook = $_POST['Facebook'];
    $Instagram = $_POST['Instagram'];
    $Tiktok = $_POST['Tiktok'];
    $Twitter = $_POST['Twitter'];
    $YouTube = $_POST['YouTube'];
    $Ayoba = $_POST['Ayoba'];
    
    // Créer un tableau associatif avec les données récupérées
    $data = array(
      'Facebook' => $Facebook,
      'Instagram' => $Instagram,
      'Tiktok' => $Tiktok,
      'Twitter' => $Twitter,
      'YouTube' => $YouTube,
      'Ayoba' => $Ayoba
  );
  
    $insert=$bd->update('total_abonner',$data,array('influenceur_id' =>$influenceur_id));
    if ($insert){
      echo "<script>showModal();</script>";
      echo '<p id="successMessage"><span style="color: green;"><strong><em>Mise à jour effectuée avec succès.</em></strong></span></p>';
    }
    else
    {
        echo '<p id="successMessage"><span style="color: red;"><strong><em>Echec Mise à jour</em></strong></span></p>';
    }

  }
?>






  <div class="container">
   <center><h2>Formulaire d'enregistrement du nombre d'abonne</h2></center> 
   <br>
    <form method="POST" action="">
    <div class="form-group">
      <label for="influenceur_id">Selectionner l'influenceur :</label>
      <select name="influenceur_id" onchange="sendSelectedValue()">
                  <?php
              $query_influencers = "SELECT `influenceur_id`,`influenceur_name` FROM `total_abonner` WHERE 1;";
              $influencers = $bd->executeCustomQuery($query_influencers);

              if (count($influencers) > 0) {
                  foreach ($influencers as $key => $row) {
                      $influencerId = $row["influenceur_id"];
                      $influencerName = $row["influenceur_name"];
                      echo "<option value='$influencerId'>$influencerName</option>";
                  }
              } else {
                  echo "<option>Aucun influenceur disponible.</option>";
              }
              ?>
      </select>
   </div>


      <div class="form-group">
        <label for="Facebook">Facebook :</label>
        <input type="text" class="form-control" id="Facebook" name="Facebook">
      </div>

      <div class="form-group">
        <label for="Instagram">Instagram :</label>
        <input type="text" class="form-control" id="Instagram" name="Instagram">
      </div>

      <div class="form-group">
        <label for="Tiktok">Tiktok :</label>
        <input type="text" class="form-control" id="Tiktok" name="Tiktok">
      </div>

      <div class="form-group">
        <label for="Twitter">Twitter :</label>
        <input type="text" class="form-control" id="Twitter" name="Twitter">
      </div>

      <div class="form-group">
        <label for="YouTube">YouTube :</label>
        <input type="text" class="form-control" id="YouTube" name="YouTube">
      </div>

      <div class="form-group">
        <label for="Ayoba">Ayoba :</label>
        <input type="text" class="form-control" id="Ayoba" name="Ayoba">
      </div>
      <div class="form-group">
   <button type="reset"> ANNULER </button>
   <button type="submit" class="btn btn-primary" name="submit">Enregistrer</button>
    
  </div>
    </form>
  </div>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    // Afficher le modal popup
    function showModal() {
      var modal = document.getElementById("myModal");
      modal.style.display = "block";
    }

    // Fermer le modal popup
    function closeModal() {
      var modal = document.getElementById("myModal");
      modal.style.display = "none";
    }

    // Attacher l'événement de fermeture au bouton de fermeture
    var closeButton = document.getElementsByClassName("close")[0];
    closeButton.addEventListener("click", closeModal);

    // // Afficher le modal popup après soumission du formulaire
    // <?php
    // if ($_SERVER["REQUEST_METHOD"] == "POST") {
      
    // }
    // ?>
    
    function getSelectedValue() {
      var selectElement = document.getElementById("influenceur_id");
      var selectedValue = selectElement.value;
      console.log(selectedValue);
    }
 
    function sendSelectedValue() {
      //var selectedValue = document.getElementById("influenceur_id").value;
      var selectElement = document.getElementById("influenceur_id");
      console.log(selectElement);
      var selectedValue = selectElement.value;
      $.ajax({
        url:  window.location.href,
        type: 'POST',
        data: { selectedValue: selectedValue },
        success: function(response) {
          console.log(response);
        }
      });
    }
  </script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>
</html>