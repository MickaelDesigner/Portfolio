<?php
/*
Template Name: Mickael
*/
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../asset/css/styles.css">
    <link rel="stylesheet" href="./asset/css/styles.css">
    <link rel="stylesheet" href="./asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <title>Mickael</title>
</head>
<body>
    <header>
        <a href="./index.php" class="logo">Mickael</a>
        <div class="rightSide">
            <div class="btns dayNight">
                <ion-icon name="moon-outline"></ion-icon>
                <ion-icon name="sunny-outline"></ion-icon>
            </div>
            <div class="btns menuToggle">
                <ion-icon name="menu-outline"></ion-icon>
                <ion-icon name="close-outline"></ion-icon>
            </div>
        </div>
    </header>
    <ul class="navegation">
        <li><a href="./index.php" data-img="WORK">WORK</a></li>
        <li><a href="./template/about.php" data-img="ABOUT">ABOUT</a></li>
        <div class="navegation__sci">
            <a href="#" class="icon__nav"><ion-icon name="logo-facebook"></ion-icon></a>
            <a href="#" class="icon__nav"><ion-icon name="logo-instagram"></ion-icon></a>
            <a href="#" class="icon__nav"><ion-icon name="logo-github"></ion-icon></a>
        </div>
        <div class="copyright__sci">
            <p class="copyrightTextSci">© 2021 Mickael Vasquez</p>
        </div>
    </ul>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script>
        let dayNight = document.querySelector('.dayNight')
        let menuToggle = document.querySelector('.menuToggle')
        let body = document.querySelector('body')
        let navegation = document.querySelector('.navegation')

        dayNight.onclick = function(){
            body.classList.toggle('dark')
            dayNight.classList.toggle('active')
        }
        menuToggle.onclick = function(){
            menuToggle.classList.toggle('active')
            navegation.classList.toggle('active')
        }
    </script>
    <section class="main">
        <video src="asset/img/video.mp4" autoplay loop muted type="mp4"></video>
        <img src="asset/img/mask_1.jpg" class="mask">
        <a href="template/mickael.php" class="title__main"><h2>Mickael</h2></a>
    </section>
<?php include("template/foooter.php");?>
