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


        .navlist a{
            color: white;
        }

        header span{
            color: white;
        }

        .main-background-container img {
            filter: brightness(0.6); /* Change this value to make the image darker or lighter */
        }

        .table-container{
            margin-left: -0.5rem;
            /* background: lightblue; */
            width: 1200px;
            height: 500px;
            margin-top: 3.5rem;
            border: 0.5px solid grey;
            border-radius: 5px;;
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
        <img src="img/booking.jpg" alt="main-picture">

        <div class="button">
            <a href="#" class="btn" id="open-popup-btn">Subscribe</a>
        </div>
    </div>

    <!-- HEADER -->
    <?php include('header.php'); ?>

    <section class="schedules-section" style="margin-top: -1rem;">
        <br> <h1 class="section-main-text" style="margin-left: -0.6rem;">LOST AND FOUND</h1>
        <h3 class="section-sub-text" style="margin-left: -0.6rem;">Lost items information</h3>
        <!-- lost and found table -->
        <div class="table-container">
            <?php include ('table/table-lost-and-found.php'); ?> 
        </div>
    </section>
    
</body>
