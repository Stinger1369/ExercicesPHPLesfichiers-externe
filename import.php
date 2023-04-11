<?php
// Lire le fichier TSV
$tsvFile = file_get_contents('menu.tsv');
$tsvData = explode("\n", $tsvFile);
$menu = [];
foreach ($tsvData as $row) {
  $menu[] = explode("\t", $row);
}

// Lire le fichier CSV
$csvFile = file_get_contents('menu.csv');
$csvData = explode("\n", $csvFile);
$menu = [];
foreach ($csvData as $row) {
  $menu[] = str_getcsv($row, ",");
}
?>