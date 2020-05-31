<!--- All included code is written by Ludvig Olausson --->
<!DOCTYPE html>
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <meta charset='utf-8'>
    <title>Trailstop</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/main.css'>
    <link rel="stylesheet" href="css/slider.css">
    <link rel="stylesheet" href="css/bar.css">
    <link rel="stylesheet" href="css/front-page-products.css">
    <link rel="stylesheet" href="css/recommended.css">
    <script src="js/phone_menu.js"></script>
    <style>#arrow_y{transition: .5s; margin: 0 auto;}</style>
</head>
<body>
<?php 
    require "../src/dbconnect.php";
    include "../src/functions.php";
    include "layout/header.php"; //Header, importera för att få in headern på sidan.
    include "layout/phone_menu.php"; //Hamburgarmeny, importera för att få in mobil menu på sidan.
    include "layout/front-page/slider.php"; //Slider som visar bilder
    include "layout/front-page/bar.php"; // En brytare som bryter av de olika delarna på sidan. typ som <hr>
    include "layout/front-page/front-page-products.php"; // Visar produkter på framsidan. Samt en väljare för märke/brand
    include "layout/front-page/bar-rec.php"; // En brytare som bryter av de olika delarna på sidan. typ som <hr>
    include "layout/front-page/recommended.php"; // Visar produkter på framsidan.
    include "layout/footer.php"; // Footer, importera för att få in footer på din sida.   
?>
    <script src="js/slider.js"></script> <!---Slidshow--->
    <script src="js/arrow_position.js"></script> <!--För pilen på framsidan--->
</body>
</html> 