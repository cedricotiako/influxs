<!DOCTYPE html>
<html>
<head>
  <title>Definir Les Objectifs</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-5">
    <h2>Definir Les Objectifs</h2>
    <?php
      require_once('../ConnectMySQLDB.php');
          $bd;$actionsTypes;$influencers;
          try {
            $bd = new ConnectMySQLDB('localhost','inflfiel_social_traking','root','');
            
            //Requête pour récupérer les types d'actions
            $sql = "SELECT id, name FROM actions_types";

            $actionsTypes = $bd->executeCustomQuery($sql);

            //Requête pour récupérer les types d'actions
            $sql = "SELECT id, full_name FROM influencers";
         
            $influencers = $bd->executeCustomQuery($sql);

          } catch (PDOException $e) {
            echo 'Erreur de connexion : ' . $e->getMessage();
            exit();
          }
          ?>



    <form method="POST" action="insertion.php">
      <div class="form-group">
        <label for="actions_types_id">Type d'action :</label>
        <select class="form-control" id="actions_types_id" name="actions_types_id">
          <?php
         
           
            foreach ($actionsTypes as $actionType) {
              echo '<option value="' . $actionType['id'] . '">' . $actionType['name'] . '</option>';
            }
         
          ?>
        </select>
      </div>
      <div class="form-group">
        <label for="influencers_id">Influenceur :</label>
        <select class="form-control" id="influencers_id" name="influencers_id">
          <?php
          // Requête pour récupérer les influenceurs
         
          foreach ($influencers as $influencer) {
            echo '<option value="' . $influencer['id'] . '">' . $influencer['full_name'] . '</option>';
          }
          ?>
        </select>
      </div>
      <div class="form-group">
        <label for="objectif">Objectif :</label>
        <input type="text" class="form-control" id="objectif" name="objectif">
      </div>
      <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
  </div>
</body>
</html>