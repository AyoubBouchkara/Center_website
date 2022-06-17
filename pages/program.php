<?php 
    require '../config/connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program</title>
    <link rel='stylesheet' href='../css/bootstrap.css'/> 
    <link rel='stylesheet' href='../css/hover.css'/> 
    <link rel="stylesheet" href="../css/style.css" />
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/program.css">
    <style>
        .row{
            width: 100%;
            margin-left: auto;
            margin-right: auto;
            margin-top: 3%;
            padding-left: 25px;
        }
        .col-lg-6{
            background-color: whitesmoke;
            width: 60%;
            border-radius: 10px;
        }
        .col-lg-3 {
            height: auto;
        }
        .col-lg-3 img{
            width: 100%;
            height: 160px;
            border-radius: 10px;
        }
        .col-lg-6 h3{
            padding: 18px 0px 0px 10px;
        }
        .col-lg-6 p{
            padding: 5px 0px 0px 10px;
        }
        .col-lg-6 table{
            margin: 10px;
        }
        .col-lg-6 tr td{
            padding: 10px;
        }
        .col-lg-6 tr td span{
            font-weight: 700;
        }
    </style>
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
    <!--End Our Navbar--> 

    <!-- Satrt Body -->

    <div class="container-fluid">
        <?php 
            $sql = "SELECT * FROM programinfo";
            $excute = $conn->query($sql);
            while($result = $excute->fetch(PDO::FETCH_ASSOC)){
        ?>
        <div class="row">
            <div class="col-lg-3">
                <img src="../img/program/<?= $result['image'] ?>" alt="">
            </div>
            <div class="col-lg-6">
                <h3><?= $result['title'] ?></h3>
                <p><?= $result['discr'] ?></p>
            </div>
        </div>
        <?PHP
            }
        ?>
    </div>

    <!-- End Body -->

    <script src="js/jquery-3.6.0.min.js"></script> 
<script src="js/main.js"></script>       
<script src="js/bootstrap.js"></script>    
<script src="https://kit.fontawesome.com/51f2f74832.js" crossorigin="anonymous"></script>
</body>
</html>