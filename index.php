<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <?php
    include "includes/header_links.php";
    ?>
    <link rel="stylesheet" href="css/home.css">
</head>
<body>
    <!-------------------------------------------- Navbar-------------------------------------------------------------------------- -->
   <?php
   include "includes/header.php";
   ?>
   <!-- ----------------------------------------------------image---------------------------------------------  -->
   <div class="banner-container">
    <h2 class="white pb-3">Happiness per Square Foot</h2>

    <form id="search-form" method="GET" action="property_list.php">
        <div class="input-group city-search">
            <input type="text" class="form-control input-city" id='city' name='city' placeholder="Enter your city to search for PGs" />
            <div class="input-group-append">
                <button type="submit" class="btn btn-secondary">
                    <i class="fa fa-search"></i>
                </button>
            </div>
        </div>
    </form>
</div>

<!-- ---------------------------------------body-------------------------------------------------------------- -->
<div class="page-container">
    <h1 class="city-heading">
        Major Cities
    </h1>
    <div class="row">
        <div class="city-card-container col-md">
        <a href="property_list.php?city=Mumbai">
        <div class="city-card rounded-circle">
                    <img src="img/delhi.png" class="city-img" />
                </div>
            </a>
        </div>

        <div class="city-card-container col-md">
            <a href="property_list.php?city=Mumbai">
                <div class="city-card rounded-circle">
                    <img src="img/mumbai.png" class="city-img" />
                </div>
            </a>
        </div>

        <div class="city-card-container col-md">
        <a href="property_list.php?city=Mumbai">
        <div class="city-card rounded-circle">
                    <img src="img/bangalore.png" class="city-img" />
                </div>
            </a>
        </div>

        <div class="city-card-container col-md">
        <a href="property_list.php?city=Mumbai">
        <div class="city-card rounded-circle">
                    <img src="img/hyderabad.png" class="city-img" />
                </div>
            </a>
        </div>
    </div>
</div>

<!-- -------------------------------------------modals & footer------------------------------------------------------- -->

<?php
include "includes/signup_modal.php";
include "includes/login_modal.php";
include "includes/footer.php";
?>

<!-- --------------------------------------JS Links-------------------------------------------------------------------------- -->
   <script type="text/javascript" src="js/jquery.js"></script>
   <script type="text/javascript" src="js/bootstrap.min.js"></script>
   <script src="js/common.js" type="text/js"></script>
   <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script> -->
</body>
</html>