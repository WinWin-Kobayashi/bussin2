<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bussin Landing Page</title>

    <!-- other -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    
    <!-- Poppins Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- css -->
    <link rel="stylesheet" href="css/landing-page.css">
    <link rel="stylesheet" href="css/slider.css">

    <script src="js/slider.js" defer></script>
    <script src="js/table-swapper.js" defer></script>

    <style>
       .button {
            /* Add the position, top, left, and transform styles */
            position: absolute;
            top: 60%;
            left: 50%;
            transform: translate(-50%, -50%);
            /* Remove the z-index style */
        }
        
        section{
            margin-top: 5.5rem;
        }

        header {
            position: fixed; /* Change this value to fixed */
            z-index: 1;
            margin-top: 0.6rem;
        }

        .main-background-container {

        }

        .table-container{
            margin-left: 5rem;
            /* background: lightblue; */
            width: 1050px;
            height: 500px;
            margin-top: 3.5rem;
            border: 0.5px solid grey;
            border-radius: 5px;;
        }

        .footer-section .section-sub-text{
            font-weight: 400;
        }

        .footer-section{
            display: flex;
        }

        .navlist a{
            color: white;
        }

        header span{
            color: white;
        }

        .main-background-container img {
            filter: brightness(0.6); /* Change this value to make the image darker or lighter */
        }

        .carousel img{
            height: 300px;
            width: max-content;
            margin-top: 6rem;
        }

    </style>
</head>
<body>

    <!-- background image -->
    <div class="main-background-container">
        <img src="img/facilityPic.jpg" alt="main-picture">

        <div class="button">
            <a href="#" class="btn" id="open-popup-btn">Subscribe</a>
        </div>
    </div>

    <!-- HEADER -->
    <?php include('header.php'); ?>

    <section class="schedules-section" style="margin-top: -1rem;">
        <br> <h1 class="section-main-text" style="margin-left: -0.6rem;">TERMINAL FACILITIES</h1>
        <h3 class="section-sub-text" style="margin-left: -0.6rem;">Check out our terminal facilities</h3>

        <div class="slider-body">
            <div class="wrapper">
                <i id="left" class="fa-solid fa-angle-left" style="background: white; z-index: 2;"></i>
                <div class="carousel">
                    <img src="img/medical-facilities.jpg" alt="img" draggable="false">
                    <img src="img/How-to-keep-Entertained.jpg" alt="img" draggable="false">
                    <img src="img/Keeping-Kids-Entertained.jpg" alt="img" draggable="false">
                    <img src="img/Lost-found.jpg" alt="img" draggable="false">
                    <img src="img/gridPictures/ATM.jpg" alt="img" draggable="false">
                    <img src="img/facilities-for-PWD.jpg" alt="img" draggable="false">
                </div>
                <i id="right" class="fa-solid fa-angle-right"></i>
            </div>
        </div>
    </section>
    
</body>