<style>
    body{
        overflow-x: hidden;
    }
</style>
<div class="container text-center">
    <h3 class="mt-2"><i class="fa fa-play" style="color: #cc0f0f;"></i> Playerdbphp</h3>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-4">
            <a class="btn btn-lg btn-danger w-100" href="home.php">
                <i class="fa fa-home"></i> Página Inicial 
            </a>
        </div>    
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-2">
            <a class="btn btn-lg btn-danger w-100" href="buscar.php">
                <i class="fa fa-search"></i> Buscar 
            </a>
        </div>   
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-2">
            <a class="btn btn-lg btn-danger w-100" href="sobre.php">
                <i class="fa fa-question"></i> Sobre
            </a>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-2">
            <?php
            @session_start();
            if($_SESSION){
                echo('<a class="nav-link link-danger" style="text-decoration: none;"href="controller/logoutController.php?cod=logout">
                        Logout
                      </a>
                    ');}
            ?>
        </div>   
    </div>
</div>