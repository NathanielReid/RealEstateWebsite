<?php
// This is used to display the error messages
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Inculdes
include_once '../../includes/autoloaderController.inc.php';
include_once 'functions.php';

// Instantiate
$propertyController = new PropertyController();

if (isset($_POST['searchForm-submit'])) {
    
    // Create Variables
    $searchCity = $_POST['searchCity'];
    $searchType = $_POST['searchType'];
    $searchStructure = $_POST['searchStructure'];
    $searchPrice = $_POST['searchPrice'];

    echo $searchCity . '<br>';
    echo $searchType . '<br>';
    echo $searchStructure . '<br>';
    echo $searchPrice;

    $property = $propertyController->showPropertyBySearch($searchCity, $searchType, $searchStructure, $searchPrice);
    header("Location: ../../views/properties-search.php?update=success&city=" . $searchCity . "&type=" . $searchType . "&structure=" . $searchStructure . "&price=" . $searchPrice);
    pre_r($property);

}

?>