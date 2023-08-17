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
        <style>
            .col-md-12{
                border: 1px solid green;
                background: gray;
            }
        </style>
</head>
<body>
<div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">
    <div class="c-sidebar-brand d-lg-down-none">
        <i class="fa fa-spotify" style="color: #28c356;"></i>
        <h3>Sportfy</h3>
    </div>
    <ul class="c-sidebar-nav">
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="home.php">
                <i class="c-sidebar-nav-icon fa fa-home"></i> Página Inicial </a>
        </li>
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="Recomendados.php">
            <i class="fa fa-record-vinyl"></i> recomendados </a>
        </li>
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="Buscar.php">
            <i class="fa fa-magnifying-glass"></i> Buscar </a>
        </li>
        <?php
                    @session_start();
                    if($_SESSION){
                        echo('<li class="nav-item">
                        <a class="nav-link link-danger" 
                        style="text-decoration: none;"
                        href="controller/logoutController.php?cod=logout">Logout</a>
                        </li>');
                    }
        ?>
    </ul>
</div>
    
</body>
</html>