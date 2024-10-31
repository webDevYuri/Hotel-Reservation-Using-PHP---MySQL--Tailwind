<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="shortcut icon" href="assets/logo/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Diana's Resort</title>
</head>
<body class="bg-green-50">
    <header>
        <?php 
            include 'components/navbar.php'
        ?>
    </header>
    
    <section id="hero">
        <?php
            include 'components/bg-carousel.php'
        ?>
    </section>

    <section id="tagline">
        <?php
            include 'components/tagline.php'
        ?>
    </section>

    <section id="strength">
        <?php
            include 'components/strength.php'
        ?>
    </section>

    <section id="whyChooseUs">
        <?php
            include 'components/why-choose-us.php'
        ?>
    </section>

    <section id="popularRoom">
        <?php
            include 'components/popular-room.php'
        ?>
    </section>

    <section id="deluxeRoom">
        <?php
            include 'components/deluxe-room.php'
        ?>
    </section>

    <section id="newsLetter">
        <?php
            include 'components/news-letter.php'
        ?>
    </section>

    <script src="js/carousel.js"></script>
    <script src="js/navbarAnimation.js"></script>
</body>
</html>