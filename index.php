<?php
    include 'functions/main-functions.php';

    $pages = scandir('pages/');
    if(isset($_GET['page']) && !empty($_GET['page'])){
        if(in_array($_GET['page'].'.php',$pages)){
            $page = $_GET['page'];
        }else{
            $page = "error";
        }
    }else{
        $page = "home";
    }

    $pages_functions = scandir('functions/');
    if(in_array($page.'.func.php',$pages_functions)){
        include 'functions/'.$page.'.func.php';
    }

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Le Meilleur de l'Actualité</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta charset=utf-8>
        <meta name=description content="">
        <meta name=viewport content="width=device-width, initial-scale=1">
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/font-awesome.css" rel="stylesheet">
        <link href="css/themetypo.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/widget.css" rel="stylesheet">
        <link href="color.css" rel="stylesheet">
        <link href="css/flexslider.css" rel="stylesheet">
        <link href="css/owl.carousel.css" rel="stylesheet">
        <link href="css/jquery.bxslider.css" rel="stylesheet">    
        <link href="css/prettyphoto.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">
    </head>

    <body>
        <?php include 'pages/'.$page.'.php'; ?>

        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="js/materialize.js"></script>
        <script src="js/script.js"></script>
        <script src="js/jquery.flexslider.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.countdown.js"></script>  
        <script src="js/waypoints-min.js"></script>
        <script src="js/jquery.bxslider.min.js"></script>
        <script src="js/jquery.accordion.js"></script>
        <script src="js/jquery.circlechart.js"></script>
        <script src="js/jquery.prettyphoto.js"></script>
        <script src="js/kode_pp.js"></script>
        <script src="js/functions.js"></script>
    </body>
</html>