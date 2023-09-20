<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
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
if(isset($_POST['submit'])) {
    $influenceur_id = $_POST['influenceur_id'];

    $status = $_POST['status'];
    $video = $_POST['video'];
    $post = $_POST['post'];
    $comment = $_POST['comment'];
  
    $ayoba = $_POST['ayoba'];
   
    $figuration360 = $_POST['Figuration360'];
    $activationTerrain = $_POST['Activation_Terrain'];
    $apparitionsEvenement = $_POST['Apparitions_Evenement'];
    $stories = $_POST['Stories'];
    $live = $_POST['Live'];
    $tag = $_POST['tag'];
    // Créer un tableau associatif avec les données récupérées
    $data = array(
     

      'status' => $status,
      'video' => $video,
      'post' => $post,
      'comment' => $comment,
     
      'ayoba' => $ayoba,
     
      'Figuration360' => $figuration360,
        'Activation_Terrain' => $activationTerrain,
        'Apparitions_Evenement' => $apparitionsEvenement,
        'Stories' => $stories,
        'Live' => $live,
        'tag' => $tag
    );
  
    $insert=$bd->update('objectif_influenceur',$data,array('influenceur_id' =>$influenceur_id));
    if ($insert){
      echo "<script>showModal();</script>";
      echo '<p id="successMessage"><span style="color: green;"><strong><em>Mise à jour effectuée avec succès.</em></strong></span></p>';
    }
    else
    {
        echo '<p id="successMessage"><span style="color: red;"><strong><em>Echec Mise à jour</em></strong></span></p>';
    }
    // Faire quelque chose avec le tableau associatif
    // Par exemple, afficher les valeurs
    // foreach($data as $key => $value) {
    //   echo $key . ": " . $value . "<br>";
    // }
  
    // Insérer les données dans la base de données ou effectuer d'autres actions nécessaires
  }
?>

<form class="objectif-form" action="" method="post">
  <div class="form-group">
    <label for="influenceur_id">Selectionner l'influenceur :</label>
    <select name="influenceur_id">
                <?php
            $query_influencers = "SELECT id, full_name FROM influencers";
            $influencers = $bd->executeCustomQuery($query_influencers);

            if (count($influencers) > 0) {
                foreach ($influencers as $key => $row) {
                    $influencerId = $row["id"];
                    $influencerName = $row["full_name"];
                    echo "<option value='$influencerId'>$influencerName</option>";
                }
            } else {
                echo "<option>Aucun influenceur disponible.</option>";
            }
            ?>
    </select>
  </div>
  <div class="form-group">
    <label for="status">Statut :</label>
    
    <select id="status" name="status">
     <option value="Signed">Signed</option>
     <option value="Unsigned">Unsigned</option>
     <option value="In progress">In progress</option>
    </select>
  </div>
  <div class="form-group">
    <label for="video">Nombre de vidéos :</label>
    <input type="number" id="video" name="video">
  </div>
  <div class="form-group">
    <label for="post">Nombre de publications :</label>
    <input type="number" id="post" name="post">
  </div>
  <div class="form-group">
    <label for="comment">Nombre de commentaires :</label>
    <input type="number" id="comment" name="comment">
  </div>

  <div class="form-group">
    <label for="ayoba">Nombre d'Ayoba :</label>
    <input type="number" id="ayoba" name="ayoba">
  </div>

  <div class="form-group">
    <label for="engagement">Figuration dans une campagne 360° :</label>
    <input type="number" id="engagement" name="Figuration360">
  </div>
  <div class="form-group">
    <label for="engagement">Nombre d'activation terrain :</label>
    <input type="number" id="engagement" name="Activation_Terrain">
  </div>
  <div class="form-group">
    <label for="engagement">Nombre d'apparitions évènement :</label>
    <input type="number" id="engagement" name="Apparitions_Evenement">
  </div>
  <div class="form-group">
    <label for="engagement">Nombre de stories :</label>,        
    <input type="number" id="engagement" name="Stories">
  </div>
  <div class="form-group">
    <label for="engagement">Nombre de live :</label>
    <input type="number" id="engagement" name="Live">
  </div>
  <div class="form-group">
    <label for="engagement">Nombre de tag :</label>
    <input type="number" id="engagement" name="tag">
  </div>
  <div class="form-group">
   <button type="reset"> ANNULER </button>
   <button type="submit" name="submit">Enregistrer</button> 
  </div>
</form>


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
  </script>
</body>
</html>