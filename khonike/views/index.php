<?php
session_start();
// This is used to display the error messages
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

// Includes
include_once __DIR__ . "/../controllers/propertycontroller.class.php";
include_once __DIR__ . "/../controllers/photocontroller.class.php";

// Instantiate
$propertyController = new PropertyController();
$photoController = new PhotoController();

// Calls to DB
$properties = $propertyController->showAllProperties();
$x = 1;
?>


<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Khonike - Real Estate</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico in the root directory -->
    <link href="../assets/images/favicon.ico" type="img/x-icon" rel="shortcut icon">
    <!-- All css files are included here. -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/iconfont.min.css">
    <link rel="stylesheet" href="../assets/css/plugins.css">
    <link rel="stylesheet" href="../assets/css/helper.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- Modernizer JS -->
    <script src="../assets/js/vendor/modernizr-3.7.1.min.js"></script>
    <script>
        /*--
    Search Price Range
-----------------------------------*/
        var $searchPriceRange = $('#search-price-range');
        $searchPriceRange.slider({
            range: true,
            min: 0,
            max: 100000,
            values: [12500, 75000],
            slide: function(event, ui) {
                $searchPriceRange.find('.ui-slider-handle:eq(0)').html('<span>' + '$' + ui.values[0] + '</span>');
                $searchPriceRange.find('.ui-slider-handle:eq(1)').html('<span>' + '$' + ui.values[1] + '</span>');
            }
        });
        $searchPriceRange.find('.ui-slider-handle:eq(0)').html('<span>' + '$' + $searchPriceRange.slider("values", 0) + '</span>');
        $searchPriceRange.find('.ui-slider-handle:eq(1)').html('<span>' + '$' + $searchPriceRange.slider("values", 1) + '</span>');
    </script>
</head>

<body>

    <div id="main-wrapper">

        <!--Header section start-->
        <?php
        include_once('header.php');
        ?>
        <!--Header section end-->

        <!--slider section start-->
        <div class="hero-section section position-relative">

            <!--Hero Item start-->
            <div class="hero-item align-items-end">
                <ul class="kenburns-slideshow">
                    <li><img src="../assets/images/hero/home-1.jpg" alt=""></li>
                    <li><img src="../assets/images/hero/home-2.jpg" alt=""></li>
                    <li><img src="../assets/images/hero/home-3.jpg" alt=""></li>
                </ul>
                <div class="container">
                    <div class="row">
                        <div class="col-12">

                            <!--Property Search start-->
                            <div class="property-search hero-property-search">
                                <h1 class="title">Find Your <span>Dream</span> Home</h1>
                                <form name="searchForm" action="../assets/php/search.php" method="POST">
                                    <div>
                                        <select name="searchCity" class="nice-select">
                                            <option value="Montreal">Montreal</option>
                                        </select>
                                    </div>

                                    <div>
                                        <select name="searchType" class="nice-select">
                                            <option value="Sale">Sale</option>
                                            <option value="Rent">Rent</option>
                                        </select>
                                    </div>

                                    <div>
                                        <select name="searchStructure" class="nice-select">
                                            <option value="House">House</option>
                                            <option value="Condominium">Condominium</option>
                                        </select>
                                    </div>

                                    <!-- <div>
                                        <select class="nice-select" required>
                                            <option value="">Bedrooms</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                        </select>
                                    </div>

                                    <div class="col-3">
                                        <select class="nice-select">
                                            <option>Bathrooms</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option>6</option>
                                            <option>7</option>
                                            <option>8</option>
                                            <option>9</option>
                                            <option>10</option>
                                            <option>11</option>
                                            <option>12</option>
                                        </select>
                                    </div> -->

                                    <!-- <div>
                                        <div id="search-price-range"></div>
                                    </div> -->

                                    <div>
                                        <input name="searchPrice" type="number" min="100" max="10000000" placeholder="Maximum Price" required>
                                    </div>

                                    <div>
                                        <button name="searchForm-submit" type="submit">search</button>
                                    </div>
                                </form>

                            </div>
                            <!--Property Search end-->

                        </div>
                    </div>
                </div>
            </div>
            <!--Hero Item end-->

        </div>
        <!--slider section end-->

        <!--Template section-->
        <div class="feature-section feature-section-border-bottom section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-40 pb-lg-50 pb-md-40 pb-sm-30 pb-xs-20">
            <div class="container">
                <div class="row">

                    <!--Feature start-->
                    <div class="col-lg-3 col-sm-6 col-12 mb-30">
                        <div class="feature-2">
                            <div class="icon"><i class="pe-7s-piggy"></i></div>
                            <div class="content">
                                <h4>Save Money</h4>
                                <p>Book a Visit With One of Our Representatives For Free</p>
                            </div>
                        </div>
                    </div>
                    <!--Feature end-->

                    <!--Feature start-->
                    <div class="col-lg-3 col-sm-6 col-12 mb-30">
                        <div class="feature-2">
                            <div class="icon"><i class="pe-7s-display1"></i></div>
                            <div class="content">
                                <h4>User Friendly</h4>
                                <p>Explore Our Newly Designed Easy-To-Use Website</p>
                            </div>
                        </div>
                    </div>
                    <!--Feature end-->

                    <!--Feature start-->
                    <div class="col-lg-3 col-sm-6 col-12 mb-30">
                        <div class="feature-2">
                            <div class="icon"><i class="pe-7s-map"></i></div>
                            <div class="content">
                                <h4>Montreal Based</h4>
                                <p>Easily Search For the Local Property That Matches Your Needs</p>
                            </div>
                        </div>
                    </div>
                    <!--Feature end-->

                    <!--Feature start-->
                    <div class="col-lg-3 col-sm-6 col-12 mb-30">
                        <div class="feature-2">
                            <div class="icon"><i class="pe-7s-shield"></i></div>
                            <div class="content">
                                <h4>Reliable</h4>
                                <p>Our Hardworking Team Works Around the Clock to Keep You Satisfied</p>
                            </div>
                        </div>
                    </div>
                    <!--Feature end-->

                </div>
            </div>
        </div>
        <!--Template section end-->

        <!--Feature property section start-->
        <div class="property-section section pt-70 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-100 pb-lg-80 pb-md-70 pb-sm-60 pb-xs-50">
            <div class="container">

                <!--Section Title start-->
                <div class="row">
                    <div class="col-md-12 mb-60 mb-xs-30">
                        <div class="section-title center">
                            <h1>Featured Properties</h1>
                        </div>
                    </div>
                </div>
                <!--Section Title end-->

                <div class="row">

                    <!--Property Slider start-->
                    <div class="property-carousel section">

                        <!-- Foreach to cycle through rows in property -->
                        <? foreach ($properties as $property) {
                        $listingId = $property['property_id'];
                        $propertyPhotos = $photoController->showAllPhotosByListingIdAndSequence1($listingId);
                        ?>

                        <!--Property start-->
                        <div class="property-item col">
                            <div class="property-inner">
                                <div class="image">
                                    <a href="<?php echo 'single-properties-gallery.php' . "?propertyId=" . $property['property_id']; ?>"><img id="propertyPhotoPreview" src="<?php echo $propertyPhotos[0]['photos']; ?>" alt="" class="responsive image" height="265px"></a>
                                    <ul class="property-feature">
                                        <li>
                                            <span class="area"><img src="<? ?>" alt="">
                                                <? echo $property['size_exterior']; ?> SqFt</span>
                                        </li>
                                        <li>
                                            <span class="bed"><img src="../assets/images/icons/bed.png" alt="">
                                                <? echo $property['bedrooms_total']; ?></span>
                                        </li>
                                        <li>
                                            <span class="bath"><img src="../assets/images/icons/bath.png" alt="">
                                                <? echo $property['bathroom_total']; ?></span>
                                        </li>
                                        <li>
                                            <span class="parking"><img src="../assets/images/icons/parking.png" alt="">
                                                <? echo $property['parking_space_total']; ?></span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="content">
                                    <div class="left">
                                        <h3 class="title"><a href="single-properties.php">Property <?php echo $x++; ?></a></h3>
                                        <span class="location"><img src="../assets/images/icons/marker.png" alt=""><?php echo $property['address'] . ", " . $property['city']; ?></span>
                                    </div>
                                    <div class="right">
                                        <div class="type-wrap">
                                            <span class="price"><?php
                                                                $price = strlen($property['price']);
                                                                $newPrice = null;

                                                                switch (true) {
                                                                    case $price == 3:
                                                                        $newPrice = substr($property['price'], 0, 3) . "$";
                                                                        echo $newPrice;
                                                                        break;
                                                                    case $price == 4:
                                                                        $newPrice = substr($property['price'], 0, 4) . "$";
                                                                        echo $newPrice;
                                                                        break;
                                                                    case $price == 5:
                                                                        $newPrice = substr($property['price'], 0, 2) . "K";
                                                                        echo $newPrice;
                                                                        break;
                                                                    case $price == 6:
                                                                        $newPrice = substr($property['price'], 0, 3) . "K";
                                                                        echo $newPrice;
                                                                        break;
                                                                    case $price == 7:
                                                                        $million = substr($property['price'], 0, 1) . ".";
                                                                        $hundreds = substr($property['price'], 1, 2) . "M";
                                                                        $newPrice = $million . $hundreds;
                                                                        echo $newPrice;
                                                                        break;
                                                                    case $price == 8:
                                                                        $million = substr($property['price'], 0, 2) . ".";
                                                                        $hundreds = substr($property['price'], 2, 2) . "M";
                                                                        $newPrice = $million . $hundreds;
                                                                        echo $newPrice;
                                                                        break;
                                                                    default:
                                                                        echo "-";
                                                                        break;
                                                                } ?><span><?php if ($property['property_type'] == "Rent") {
                                                                                echo "m";
                                                                            } ?></span></span>
                                            <span class="type">
                                                <?php
                                                if ($property['property_type'] == "Sale") {
                                                    echo "For Sale";
                                                } elseif ($property['property_type'] == "Rent") {
                                                    echo "For Rent";
                                                } else {
                                                    echo "-";
                                                }
                                                ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?}?>
                        <!--Property end-->

                    </div>
                    <!--Property Slider end-->

                </div>

            </div>
        </div>
        <!--Feature property section end-->

        <!--CTA Section start-->
        <div class="cta-section section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-100 pb-lg-80 pb-md-70 pb-sm-60 pb-xs-50" style="background-image: url(../assets/images/bg/homes-4.jpg)">
            <div class="container">
                <div class="row">
                    <div class="col">

                        <!--CTA start-->
                        <div class="cta-content text-center">
                            <h1><span>Buy</span> or <span>Sell</span> Properties <br> In Seconds With <span>Khonike</span></h1>
                            <div class="buttons">

                                <!-- <a href="register.php">Add Property</a>
                                <a href="properties-carousel2.html">Browse Properties</a> -->
                            </div>
                        </div>
                        <!--CTA end-->

                    </div>
                </div>
            </div>
        </div>
        <!--CTA Section end-->

        <!--Brand section start-->
        <div class="brand-section section pt-50 pb-100 pb-lg-80 pb-md-70 pb-sm-60 pb-xs-50">
            <div class="container">

                <!--Section Title start-->
                <div class="row">
                    <div class="col-md-12 mb-60 mb-xs-30">
                        <div class="section-title center">
                            <h1>Our Proud Partners</h1>
                        </div>
                    </div>
                </div>
                <!--Section Title end-->

                <div class="row">

                    <!--Brand Slider start-->
                    <div class="brand-carousel section">
                        <div class="brand col"><img src="../assets/images/brands/brand-1.png" alt=""></div>
                        <div class="brand col"><img src="../assets/images/brands/brand-2.png" alt=""></div>
                        <div class="brand col"><img src="../assets/images/brands/brand-3.png" alt=""></div>
                        <div class="brand col"><img src="../assets/images/brands/brand-4.png" alt=""></div>
                        <div class="brand col"><img src="../assets/images/brands/brand-5.png" alt=""></div>
                        <div class="brand col"><img src="../assets/images/brands/brand-6.png" alt=""></div>
                    </div>
                    <!--Brand Slider end-->

                </div>

            </div>
        </div>
        <!--Brand section end-->

        <?php
        include_once("footer.php");
        ?>

    </div>

    <!-- Placed js at the end of the document so the pages load faster -->

    <!-- All jquery file included here -->
    <script src="https://maps.google.com/maps/api/js?sensor=false&libraries=geometry&v=3.22&key=AIzaSyDAq7MrCR1A2qIShmjbtLHSKjcEIEBEEwM"></script>
    <script src="../assets/js/vendor/jquery-3.4.1.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/plugins.js"></script>
    <script src="../assets/js/map-place.js"></script>
    <script src="../assets/js/main.js"></script>

</body>

</html>