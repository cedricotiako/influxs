<?php
require 'vendor/autoload.php'; // Inclure le fichier d'autoloading de PhpSpreadsheet

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

// recuperation des infos de l'influenceur en get
    $influenceurId=null;
    $date_debut = null;
    $date_fin = null;
    $query='';
if(isset($_GET['id']) && !empty($_GET['id']))
{
    $influenceurId=$_GET['id'];
    $date_debut = $_GET["dateDebut"]??null;
    $date_fin = $_GET["dateFin"]??null;
    if ($date_debut == null or $date_fin == null)
    $query = "SELECT
    i.name AS influenceur,
    a.publication_date AS date_de_publication,
    at.name AS type_d_action,
    k.label AS kpi,
    SUM(ad.value) AS total_value,
    a.text,
    p.name AS Canal_de_publication,
    cp.name AS campagne
    FROM actions_details AS ad
    JOIN kpis AS k ON ad.kpi_id = k.id
    JOIN actions AS a ON ad.action_id = a.id
    JOIN campaigns AS cp ON a.campaign_id = cp.id
    JOIN actions_types AS at ON a.reaction_type_id = at.id
    JOIN contracts AS c ON a.contract_id = c.id
    JOIN influencers AS i ON c.influenceur_id = i.id
    JOIN platforms AS p ON a.platform_id = p.id
    WHERE influenceur_id = $influenceurId
    GROUP BY i.name, a.publication_date, at.name, k.label, a.text, p.name, cp.name";
    else
    $query = "SELECT
                i.name AS influenceur,
                a.publication_date AS date_de_publication,
                at.name AS type_d_action,
                k.label AS kpi,
                SUM(ad.value) AS total_value,
                a.text,
                p.name AS Canal_de_publication,
                cp.name AS campagne
                FROM actions_details AS ad
                JOIN kpis AS k ON ad.kpi_id = k.id
                JOIN actions AS a ON ad.action_id = a.id
                JOIN campaigns AS cp ON a.campaign_id = cp.id
                JOIN actions_types AS at ON a.reaction_type_id = at.id
                JOIN contracts AS c ON a.contract_id = c.id
                JOIN influencers AS i ON c.influenceur_id = i.id
                JOIN platforms AS p ON a.platform_id = p.id
                WHERE influenceur_id = $influenceurId
                AND (a.publication_date BETWEEN '$date_debut' AND '$date_fin')
                GROUP BY i.name, a.publication_date, at.name, k.label, a.text, p.name, cp.name";
}
else 
{
    $query="SELECT
    i.name AS influenceur,
    a.publication_date AS date_de_publication,
    at.name AS type_d_action,
    k.label AS kpi,
    SUM(ad.value) AS total_value,
    a.text ,
    p.name AS Canal_de_publication,
    cp.name AS campagne
    FROM actions_details AS ad
    JOIN kpis AS k ON ad.kpi_id = k.id
    JOIN actions AS a ON ad.action_id = a.id
    JOIN campaigns AS cp ON a.campaign_id = cp.id
    JOIN actions_types AS at ON a.reaction_type_id = at.id
    JOIN contracts AS c ON a.contract_id = c.id
    JOIN influencers AS i ON c.influenceur_id = i.id
    JOIN platforms AS p ON a.platform_id = p.id
    
    GROUP BY i.name, a.publication_date, at.name, k.label, a.text, p.name, cp.name  
    ORDER BY `influenceur` ASC";
}




// Créer un nouveau classeur
$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

// Ajouter des en-têtes
$sheet->setCellValue('A1', 'influenceur');
$sheet->setCellValue('B1', 'date de publication');
$sheet->setCellValue('C1', 'type d\'action');
$sheet->setCellValue('D1', 'kpi');
$sheet->setCellValue('E1', 'total value');
$sheet->setCellValue('F1', 'text');
$sheet->setCellValue('G1', 'Canal de publication');
$sheet->setCellValue('H1', 'campagne');


require_once('ConnectMySQLDB.php');
    
$bd=new ConnectMySQLDB('localhost','inflfiel_social_traking','root','');
//$bd=new ConnectMySQLDB('localhost','inflfiel_social_traking','inflfiel_UserSocial',')6WZghEwCWTN');

$sql = "SELECT id, full_name, email, phone, status, created_at, images FROM influencers";


$data =$bd->executeCustomQuery($query);

$row = 2;
foreach ($data as $rowData) {
    $col = 'A';

    foreach ($rowData as $cellData) {
        $sheet->setCellValue($col.$row, $cellData);
        $sheet->getColumnDimension($col)->setAutoSize(true);
        $col++;
    }
    $row++;
}

// Appliquer des styles
// $styleArray = [
//     'font' => [
//         'bold' => true,
//         'color' => ['rgb' => 'FFFFFF'],
//         'size' => 12,
//     ],
//     'fill' => [
//         'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
//         'startColor' => ['rgb' => 'FF1100'],
//     ],
// ];

// ...
// Appliquer des styles
$headerStyleArray = [
    'font' => [
        'bold' => true,
        'color' => ['rgb' => 'FFFFFF'],
        'size' => 12,
        'name' => 'Arial', // Nom de la police
    ],
    'fill' => [
        'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
        'startColor' => ['rgb' => '000000'], // Couleur de fond
    ],
    'borders' => [
        'outline' => [
            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN, // Style de bordure
            'color' => ['rgb' => '000000'], // Couleur de bordure
        ],
    ],
    'alignment' => [
        'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER, // Alignement horizontal
        'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER, // Alignement vertical
        'wrapText' => true, // Texte enveloppé
    ],
];
$columnHeaders = 'A1:H1';
$sheet->getStyle($columnHeaders)->applyFromArray($headerStyleArray);



// Appliquez des filtres aux en-têtes de colonne
$sheet->setAutoFilter($columnHeaders);

// $sheet->getStyle('A1:H1')->applyFromArray($styleArray);
// Enregistrer le fichier Excel
$writer = new Xlsx($spreadsheet);
$filename = 'reporting_influxs.xlsx';
if(isset($_GET['id']) && !empty($_GET['id']))
{
    $filename= $data[0]['influenceur']."_reporting_influxs_de_".$date_debut."_".$date_fin.".xlsx";
    if ($date_debut == null or $date_fin == null)
       $filename= $data[0]['influenceur']."_reporting_influxs.xlsx";
}
$writer->save($filename);

// Télécharger le fichier
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment; filename="'.$filename.'"');
readfile($filename);
unlink($filename); // Supprimer le fichier après le téléchargement
