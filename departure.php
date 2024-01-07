<!-- establish a connection and session -->
<?php 
	// require_once('connection.php');

	// session_start();

    // if(!isset($_SESSION["user_email"]))
    // {
    //     header("location:login.php");
    // }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="css/style.css"> 
    <link rel="stylesheet" href="css/table.css">
    <link rel="stylesheet" href="css/button.css">
    <link rel="stylesheet" href="css/modal.css">
    <link rel="stylesheet" href="css/extra.css">
    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="css/actions.css">

    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!----===== Boxicons CSS ===== -->
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <title>Bus Information</title>

	<style>
		button.button {
			padding: 0;
			margin: 0;
			background: none;
			border: none;
		}

		button.button i {
			font-size: 24px; /* Adjust the size according to your needs */
			color: white; /* Set the color you want for the icon */
		}

        .container{
            margin-top: -1%;
        }

        .status{
            padding: 10px;
        }
	</style>
</head>
<body>

    <?php include 'sidebar.php' ?>

    <section class="dashboard">

		<!-- HEADER -->
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>

            <div class="search-box">
                <i class="uil uil-search"></i>
                <input type="text" placeholder="Search here...">
            </div>
            
            <!--<img src="images/profile.jpg" alt="">-->
        </div>

		<!-- HERO -->
        <div class="dash-content">

			<!-- MARKER -->
            <div class="overview">
                <div class="title">
                    <i class="uil uil-tachometer-fast-alt"></i>
                    <span class="text">Departure</span>
                </div>
            </div>

			<!-- TABLE -->
			<div class="container">
				<table>
					<thead>
						<tr>
							<th style="">#</th>
							<th style="">Bus No.</th>
							<th style="">Departure Time</th>
							<th style="">Destination</th>
							<th style="">Service</th>
                            <th style="">Passenger</th>
							<th style="">Driver's Name</th>
							<th style="">Conductor's Name</th>
							<th style="">Operation</th>
						</tr>
					</thead>
					<tbody>
                        <tr>
                            <td> 1</td>
                            <td> 064310 </td>
                            <td> Notado Jonel</td>
                            <td> Jonel Notado</td>
                            <td> 4</td> <td> 1</td>
                            <td> 064310 </td>
                            <td> Notado Jonel</td>
                            <td class="status"> Arrived </td>
                        </tr>
					</tbody>
			    </table>
		    </div>
        </div>
    </section>

    <script src="js/script.js"></script>

</body>
</html>


