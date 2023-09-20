<?php


require_once('ConnectMySQLDB.php');

header('Content-type:application/json;charset=utf-8');

// Autoriser l'accès depuis n'importe quelle origine
header('Access-Control-Allow-Origin: *');

// Autoriser les méthodes de requête spécifiées
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');

// Autoriser les en-têtes personnalisés et les en-têtes par défaut
header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');

// Spécifier la durée de validité des résultats préchargés (en secondes)
header('Access-Control-Max-Age: 3600');
$bd=new ConnectMySQLDB('localhost','mutzigst_auditions_test','root','');

if(isset($_GET['data']))
{ 
    

    $query="SELECT
    n.id_jury,
    j.name,
    c.matricule_cnadidat,
    c.name_candidat,
    c.picture,
    n.voice,
    n.prestation
    FROM
    msn_notes n
    JOIN msn_candidat c ON
    n.id_candidat = c.id_inscription
    JOIN msn_jury j ON
    n.id_jury = j.id_jury
     WHERE
    c.process = 1";

    $query_jury="SELECT `id_jury`,`name` FROM  `msn_jury`";

    $query_candidat="SELECT
    c.`matricule_cnadidat`,
    c.`name_candidat`,
    c.`picture` ,
    c.`id_inscription`
        FROM
            `msn_candidat` c
        WHERE c.`process` = 1;";
  
    $data = $bd->executeCustomQuery($query);
    $data_candidat = $bd->executeCustomQuery($query_candidat);
    $data_jury = $bd->executeCustomQuery($query_jury);

    print(json_encode(array("data"=>$data,  "candidat"=>$data_candidat,"jury"=>$data_jury), JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_NUMERIC_CHECK));  
   
    
}


if(isset($_GET['jury']))
{

     $query="SELECT `id_jury`,`name` FROM  `msn_jury`";
//   $bd=new ConnectMySQLDB('localhost','mutzigst_auditions','mutzigst_auditions','0pBmVi1}!m!257SsoqjEazX');
     $data = $bd->executeCustomQuery($query);
      print(json_encode($data, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_NUMERIC_CHECK));

}


if(isset($_GET['candidat']))
{
    $query="SELECT
    c.`matricule_cnadidat`,
    c.`name_candidat`,
    c.`picture` ,
    c.`id_inscription`
        FROM
            `msn_candidat` c
        WHERE c.`process` = 1;";

//   $bd=new ConnectMySQLDB('localhost','mutzigst_auditions','mutzigst_auditions','0pBmVi1}!m!257SsoqjEazX');
 
  $data = $bd->executeCustomQuery($query);
  print(json_encode($data, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_NUMERIC_CHECK));

}

if(isset($_GET['candidatOrder']))
{
    $query_encours = "SELECT
    id_candidat,
    `matricule_cnadidat`,
    `name_candidat`,
    `picture`,
    process,
    `id_inscription`,
    REPLACE(`tel`,'-', '') as `tel`
    FROM
    `msn_candidat` WHERE  process=1 and NOT (matricule_cnadidat IS NULL OR matricule_cnadidat='' OR matricule_cnadidat=' ')";

   $encours = $bd->executeCustomQuery($query_encours);
   $mat=$encours[0]["matricule_cnadidat"]+1;

   $query_suivant = "SELECT
               id_candidat,
               `matricule_cnadidat`,
               `name_candidat`,
               `picture`,
               process,
               `id_inscription`,
               REPLACE(`tel`, '-', '') as `tel`
               FROM
               `msn_candidat` WHERE   matricule_cnadidat=($mat) and NOT (matricule_cnadidat IS NULL OR matricule_cnadidat='' OR matricule_cnadidat=' ')";
  
   $suivant = $bd->executeCustomQuery($query_suivant);
   $mat++;
   $query_suivant1 = "SELECT
               id_candidat,
               `matricule_cnadidat`,
               `name_candidat`,
               `picture`,
               process,
               `id_inscription`,
               REPLACE(`tel`, '-', '') as `tel`
               FROM
               `msn_candidat` WHERE   matricule_cnadidat=($mat) and NOT (matricule_cnadidat IS NULL OR matricule_cnadidat='' OR matricule_cnadidat=' ')";
  
   $suivant1 = $bd->executeCustomQuery($query_suivant1);

   $mat++;
   $query_suivant2 = "SELECT
               id_candidat,
               `matricule_cnadidat`,
               `name_candidat`,
               `picture`,
               process,
               `id_inscription`,
               REPLACE(`tel`, '-', '') as `tel`
               FROM
               `msn_candidat` WHERE   matricule_cnadidat=($mat) and NOT (matricule_cnadidat IS NULL OR matricule_cnadidat='' OR matricule_cnadidat=' ')";
  
   $suivant2 = $bd->executeCustomQuery($query_suivant2);

   $mat++;
   $query_suivant3 = "SELECT
               id_candidat,
               `matricule_cnadidat`,
               `name_candidat`,
               `picture`,
                process,
               `id_inscription`,
               REPLACE(`tel`, '-', '') as `tel`
               FROM
               `msn_candidat` WHERE   matricule_cnadidat=($mat) and NOT (matricule_cnadidat IS NULL OR matricule_cnadidat='' OR matricule_cnadidat=' ')";
  
   $suivant3 = $bd->executeCustomQuery($query_suivant3);

  print(json_encode(
    array("encours"=>$encours,
          "suivant"=>$suivant,
          "suivant1"=>$suivant1,
          "suivant2"=>$suivant2,
          "suivant3"=>$suivant3), JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_NUMERIC_CHECK));

}
