<?php 
    require_once '../config/connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Secular+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel='stylesheet' href='../css/bootstrap.css'/> 
    <link rel='stylesheet' href='../css/hover.css'/> 
    <link rel="stylesheet" href="../css/style.css" />
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/eventStyle.css">
    <title>Educator</title>
</head>
<body>
    <!--Start Our Navbar-top-->
    <div class="navbar-top">
        <ul class="info-left">
            <li>
                <i class="fa-regular fa-message"></i>
                info@ajit9ra.com
            </li>
            <li>
                <i class="fa-solid fa-phone"></i>
                +212 600-000-000
            </li>
        </ul>
        <ul class="info-right">
            <li>
                <label class="follow-us">Follow Us :</label>
                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                <a href="#"><i class="fa-brands fa-youtube"></i></a>
            </li>
            <li>
                <a href="../index.html?#preregister">Pre-Register</a>
            </li>
        </ul>
    </div>
    <!--End Our Navbar-top-->

    <!--Start Our Navbar--> 
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container-fluid">
            <img src="../img/logo.png" alt="" width="50" height="50" style="margin-left: 20px;">
        <a class="navbar-brand" href="../index.html">Ajit9ra</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="../index.html">HOME</a>
            </li>
            <li class="nav-item">
                <a class="nav-link my-active" href="location.html">LOCATION</a>
            </li>
            <li class="nav-item my-active">
                <a class="nav-link" href="#">SERVICE</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="event.php">EVENTS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">CONTACT</a>
            </li>
            </ul>
        </div>
        </div>
    </nav>

    <div class="container-fluid">
        <?php
            $sql_cmd = 'SELECT * FROM `eventinfo` ORDER BY dateline DESC;';
            $Excute = $conn->query($sql_cmd);
            while($result = $Excute->fetch(PDO::FETCH_ASSOC)){
        ?>
        <div class="row">
            <div class="col-lg-6 image-side col-sm-12 col-md-12">
                <img src="../img/events/<?= $result['img_1']?>" alt="">
                <img src="../img/events/<?= $result['img_2']?>" alt="">
                <img src="../img/events/<?= $result['img_3']?>" alt="">
            </div>
            <div class="col-lg-5 admin-discr col-sm-12 col-md-12">
                <img src="../img/user.png" alt="">
                <b>Admin</b>
                <p><?= $result['discr']?></p>
                <span>Date : <?= $result['dateline']?></span>
            </div>
        </div>
        <?php
            }
        ?>
        <div id="fullpage" onclick="this.style.display='none';">
            <button>
                <img src="../img/cancel.png" alt="Close" width="50" height="50">
            </button>
        </div>
        <center><hr style="width: 70%;"></center>
    </div>

    <script src="../js/bootstrap.js"></script>    
    <script src="https://kit.fontawesome.com/51f2f74832.js" crossorigin="anonymous"></script>
    <script>
        const imgs = document.querySelectorAll('.image-side img');
        const fullPage = document.querySelector('#fullpage');

        imgs.forEach(img => {
        img.addEventListener('click', function() {
            fullPage.style.backgroundImage = 'url(' + img.src + ')';
            fullPage.style.display = 'block';
            fullPage.style.position = 'fixed';
        });
        });
    </script>
</body>
</html>