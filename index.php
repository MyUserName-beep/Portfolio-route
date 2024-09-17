<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"/>
  <link rel="stylesheet" href="./assets/css/navbar.css">
  <link rel="stylesheet" href="./assets/css/home.css">
</head>
  <body>

<?php

$page = isset($_GET['route']) ? $_GET['route'] : 'home';

// Valid pages
$validPages = ['home', 'about', 'service', 'contact'];

if (in_array($page, $validPages)) {
    $pagePath = "pages/{$page}.php";
} else {
    $pagePath = 'comon/404.php'; // default page
}

// Include the navigation bar
include "./comon/navbar.php";

// Include the requested page
?>

<div class="content"><?php include $pagePath; ?> </div>

<?php include "./comon/footer.php"; ?>


  </body>
</html>
<script src="./assets/js/navbar.js"></script>
