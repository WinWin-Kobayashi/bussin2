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

        .schedules-section{
            /* background: lightblue; */
        }

        .announcements-section{
            /* background: lightcoral; */
        }

        .footer-section{
            /* background: lightgreen; */
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
       

        .table-container {
            overflow-y: auto; /* make the container scrollable */
            height: 500px; /* give a fixed height to the container */
        }

        table {
            width: 100%; /* make the table width match the container width */
            table-layout: fixed; /* make the table layout depend only on the table and column widths */
        }

        td {
            word-wrap: break-word; /* make the text wrap to the next line if too long */
            padding: 10px;
        }

        th {
            position: sticky;
            top: 0;
            background: white;
            padding: 10px;
            border: none;
            border-bottom: 1px solid grey;
        }
</style>
    
</head>
<body>
    <!-- background image -->
    <div class="main-background-container">
        <img src="img/bodyPicture1.png" alt="main-picture">

        <div class="button">
            <a href="#" class="btn" id="open-popup-btn">Subscribe</a>
        </div>
    </div>

    <!-- HEADER -->
    <?php include('header.php'); ?>

    <div class="slider-body">
        <div class="wrapper">
        <i id="left" class="fa-solid fa-angle-left"></i>
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

    <section class="schedules-section">
        <br> <h1 class="section-main-text">SCHEDULE</h1>
        <h3 class="section-sub-text">Live bus travel information</h3>

        <div class="schedules-section-nav-container" >
            <ul class="navlist"  style="background: white; width:fit-content; margin-left: 5rem; margin-top: 1.5rem;">
            <li id="stambyBtn" class="stambyBtn" style="border-bottom: 1px solid black; margin-right: 4.5rem;" class="schedule-nav"><a href="#home" onclick="loadStamby()">Bus Standby</a></li>
            <li class="arrivalBtn" id="arrivalBtn" style="border-bottom: 1px solid black; margin-right: 4.5rem;" class="schedule-nav"><a href="#about" onclick="loadArrivals()">Arrivals</a></li> <!-- Add the onclick attribute -->
            <li class="departureBtn" id="departureBtn" style="border-bottom: 1px solid black; margin-right: 4.5rem;" class="schedule-nav"><a href="#services" onclick="loadDepartures()">Departures</a></li> <!-- Add the onclick attribute -->
            </ul>
        </div>

        <div class="table-container" id="table-container">
            <?php include ('table/table-bus-standby.php'); ?> 
            <?php include ('table/table-arrivals.php'); ?> 
            <?php include ('table/table-departures.php'); ?> 
        </div>
    </section>


    <section class="announcements-section"> 
       <br> <h1 class="section-main-text">ANNOUNCEMENTS</h1>

       <!-- announcement table -->
       <div class="table-container">
            <?php include ('table/table-departures.php'); ?> 
       </div>
    </section>

    <section class="footer-section">

        <div class="footer-column">
            <br> <h1 class="section-main-text" >FOOTER</h1>
            <h3 class="section-sub-text">Goldfish x Rei for life</h3>
            <h3 class="section-sub-text">Yuri is life</h3>
            <h3 class="section-sub-text">Tuyu is life</h3>
            <h3 class="section-sub-text">Made in 2020</h3>
            <h3 class="section-sub-text">Shironeko</h3>
            <h3 class="section-sub-text">Boang ka</h3>
        </div>

        <div class="footer-column">
            <br> <h1 class="section-main-text" >FOOTER</h1>
            <h3 class="section-sub-text">Goldfish x Rei for life</h3>
            <h3 class="section-sub-text">Yuri is life</h3>
            <h3 class="section-sub-text">Tuyu is life</h3>
            <h3 class="section-sub-text">Made in 2020</h3>
            <h3 class="section-sub-text">Shironeko</h3>
            <h3 class="section-sub-text">Boang ka</h3>
        </div>

        <div class="footer-column">
            <br> <h1 class="section-main-text" >FOOTER</h1>
            <h3 class="section-sub-text">Goldfish x Rei for life</h3>
            <h3 class="section-sub-text">Yuri is life</h3>
            <h3 class="section-sub-text">Tuyu is life</h3>
            <h3 class="section-sub-text">Made in 2020</h3>
            <h3 class="section-sub-text">Shironeko</h3>
            <h3 class="section-sub-text">Boang ka</h3>
        </div>

        <div class="footer-column">
            <br> <h1 class="section-main-text" >FOOTER</h1>
            <h3 class="section-sub-text">Goldfish x Rei for life</h3>
            <h3 class="section-sub-text">Yuri is life</h3>
            <h3 class="section-sub-text">Tuyu is life</h3>
            <h3 class="section-sub-text">Made in 2020</h3>
            <h3 class="section-sub-text">Shironeko</h3>
            <h3 class="section-sub-text">Boang ka</h3>
        </div>
    </section>
    
</body>
</html>
