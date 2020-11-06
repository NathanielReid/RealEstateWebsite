<?php
session_start();
// This is used to display the error messages
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once '../../includes/autoloaderController.inc.php';

// Click on finish
// Finish adds "update=propertyGalleryFinished" *
// if($_GET['update'] == propertyGalleryFinished) *
// Search database for most recently added row and find how many rooms it has *
// Store Number *
// if(stored number == 1) etc. then *
// Write html and INPUTS which will be given respective names *
// If isset then store as Variable *
// If isset then Validate *
// If isset then Add *
// On form submit Validate *
// Add rooms to DB *


// Create get all rooms by property ID function *
// Instantiate on single-properties page *
// Display *


// Visits
// 
// Create Visits Model *
// Create visit controller *
// Establish connection to visits DB *
// Fix form for visit-submit button *
// Add book visit to single property page *
// Find out seller_id for property *
// add visit to DB *
// Remove booking BTN if user already had booking for that property *

// Display Visits on buyer and seller pages
// 
// Sellers
// Display All by Seller Id *
// If confirm is clicked Then change the status to 1 (confirmed) *
// Disable confirm button *
// If declide is Clicked then change the status to 2 (declined) *
// Then Delete Vist *
// 
// Buyers
// Display all by Customer ID *
// Cancel Visits if need be *
// 


// FINAL NIGHT
// 
// Confirm Visits *
// Home Page *
// All Properties *
// Add everything to the DB to make it pretty *
// 
// Presentation Day
// 
// Add BANNER on all pages and change - Home - href *
// Check Validation *
// Add rooms to DB *
// Add Photos to DB *
// Add Amenities to DB *
// Download Photos to add for presentation *


// To finish Tonight

// Contact Us * 
// remove map * 


// MISSING 

// Alerts
// Notification System
// Messaging
// Search
// Email
// Edit / Delete Property
// Admin

// Search
// Query *
// JS. Bar *
// Switch add properties copy *

// Change edit and delete property to function only when seller clicks on his own property.
// No properties Found
?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
</head>

<body>


  
            <label for="price-min">Price:</label>
            <input type="range" name="price-min" id="price-min" value="200" min="0" max="1000">
            
        


</body>

</html>