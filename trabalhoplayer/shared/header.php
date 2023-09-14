<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
        <script src="js/jquery-3.5.1.js" type="text/javascript"></script>
        <script src="js/cdn.datatables.net_1.13.4_js_jquery.dataTables.min.js" type="text/javascript"></script>
        <link href="css/cdn.datatables.net_1.13.4_css_jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/line-awesome/1.3.0/font-awesome-line-awesome/css/all.min.css"/>
        <style>@import url('https://fonts.googleapis.com/css2?family=Beth+Ellen&family=Special+Elite&display=swap');</style>
        <style>@import url('https://fonts.googleapis.com/css2?family=Mr+Dafoe&family=Special+Elite&display=swap');</style>
        <style>@import url('https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap');</style>
        <style>
            .side-bar-esquerda{
                /*border: 1px solid red;*/
                background-color: #1A1A1A;
                height: 100vh !important; 
            }
            .side-bar-esquerda h3{
                color: #DEDEDE;
            }
            body{
                overflow-x: hidden;
            }
        </style>
</head>
<body style="background-color: rgb(65, 65, 65); display:flex;">
<div class="row" style="background-color: #1A1A1A;">
    <div class=" side-bar-esquerda">
        <div class="row mr-2">
        <h3><i class="fa fa-play" style="color: #cc0f0f;"></i>Playerdbphp</h3>
        </div>
        <ul>
        <li class="mt-1 mb-1" style="list-style: none;">
            <a class="btn btn-danger w-100" role="button" href="home.php">
                <i class="c-sidebar-nav-icon fa fa-home"></i> Página Inicial </a>
        </li>
        <li class="mt-1 mb-1" style="list-style: none;">
            <a class="btn btn-danger w-100" href="buscar.php">
            <i class="fa fa-search"></i> Buscar </a>
        </li>
        <li class="mt-1 mb-1" style="list-style: none;">
            <a class="btn btn-danger w-100" href="sobre.php">
            <i class="fa fa-question"></i> Sobre </a>
        <?php

        @session_start();
        if($_SESSION){
    echo('<li class="mt-1 mb-1" style="list-style: none;">
        <a class="nav-link link-danger" 
        style="text-decoration: none;"
        href="controller/logoutController.php?cod=logout">Logout</a></li></ul>');}
echo('</div>');
        ?>
    </ul>
</div>
    
</body>
</html>