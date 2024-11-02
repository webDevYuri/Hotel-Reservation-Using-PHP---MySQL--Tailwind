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
        <nav class="navbar py-2 fixed top-0 left-0 w-full z-50">
            <div class="header-top-element duration-300 flex items-center justify-between mb-2 px-10">
                <div class="social-header-links flex gap-5">
                    <a href="#" class="no-underline text-green-50 text-xl">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>
                    <a href="#" class="no-underline text-green-50 text-xl">
                        <i class="fa-brands fa-tiktok"></i>
                    </a>
                    <a href="#" class="no-underline text-green-50 text-xl">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                    <a href="#" class="no-underline text-green-50 text-xl">
                        <i class="fa-brands fa-x-twitter"></i>
                    </a>
                </div>
                <div class="contact-header flex gap-5">
                    <div class="flex">
                        <i class="fa-solid fa-phone text-green-50 text-xl me-2"></i>
                        <p class="text-green-50">+63 907 098 4368</p>
                    </div>
                    <div class="flex">
                        <i class="fa-solid fa-envelope text-green-50 text-xl me-2"></i>
                        <p class="text-green-50">grandluxehotel@gmail.com</p>
                    </div>
                </div>
            </div>

            <hr class="header-hr duration-300">

            <div class="p-10 nav-link-list">
                <ul class="nav-container flex items-center gap-7 justify-center">
                    <li>
                        <a href="index.php" class="nav-link duration-300 ease-in text-xl font-semibold text-green-50 px-5 py-2">HOME</a>
                    </li>
                    <li>
                        <a href="facilities-page.php" class="nav-link link-active duration-300 ease-in text-xl font-semibold text-green-50 bg-green-950 rounded-br-3xl rounded-tl-3xl px-5 py-2" style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">FACILITIES</a>
                    </li>
                    <li>
                        <a href="room-page.php" class="nav-link duration-300 ease-in text-xl font-semibold text-green-50 px-5 py-2">ROOMS</a>
                    </li>
                    <li>
                        <a href="index.php"><img src="assets/logo/logo.png" alt="LOGO" class="duration-1000 ease-in logo-image p-2"></a>
                    </li>
                    <li>
                        <a href="offers-page.php" class="nav-link duration-300 ease-in text-xl font-semibold text-green-50 px-5 py-2">OFFERS</a>
                    </li>
                    <li>
                        <a href="gallery-page.php" class="nav-link duration-300 ease-in text-xl font-semibold text-green-50 px-5 py-2">GALLERY</a>
                    </li>
                    <li>
                        <a href="contact-page.php" class="nav-link duration-300 ease-in text-xl font-semibold text-green-50 px-5 py-2">CONTACT</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    
    <section id="facilities">
        <?php
            include 'components/facilities.php'
        ?>
    </section>

    <section id="checkAvailability">
        <?php
            include 'components/check-availability.php'
        ?>
    </section>

    <section id="footer">
        <?php
            include 'components/footer.php'
        ?>
    </section>

    <script src="js/carousel.js"></script>
    <script src="js/navbarAnimation.js"></script>
    <script src="js/animation.js"></script>
</body>
</html>