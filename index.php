<?php 
include_once 'msgdb.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
<style>
        #count {
            border-radius: 50%;
            position: relative;
            top: -10px;
            left: -10px;
        }
    </style>

    <meta charset="utf-8">
    <title>Stock Management System</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link rel="icon" type="image/png" href="img/icon/aiet-logo.png" />
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">

    <script src="https://use.fontawesome.com/your-embed-code.js"></script>


    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Nunito:600,700" rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />


    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

    <!-- Nav Bar Start -->
    <div class="navbar navbar-expand-lg bg-light navbar-light">
        <div class="container-fluid">
            <a href="officeindex.html" class="navbar-brand">Stock <span>Management </span></a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto">

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Departments</a>
                        <div class="dropdown-menu">
                            <a href="csview.php" class="dropdown-item">COMPUTER SCIENCE DEPARTMENT</a>
                            <a href="infoview.php" class="dropdown-item">INFORMATION SCIENCE</a>
                            <a href="eletronicview.php" class="dropdown-item">ELETRONIC AND COMMUNICATION</a>
                            <a href="mechview.php" class="dropdown-item">MACHANICAL ENGINEERING</a>
                            <a href="civilview.php" class="dropdown-item">CIVIL ENGINEERING</a>
                            <a href="aiview.php" class="dropdown-item">ARTIFICIAL INTELIGENCE AND MACHINE LEARNING</a>
                            <a href="mbaview.php" class="dropdown-item">MBA</a>
                            <a href="eletricalview.php" class="dropdown-item">ELETRICAL AND PUMBLING</a>
                            <a href="laibraryview.php" class="dropdown-item">LAIBRARY</a>
                            <a href="maintananceview.php" class="dropdown-item">MAINTANANCE</a>
                            <a href="mathview.php" class="dropdown-item">MATHEMATICAL</a>
                            <a href="physicsview.php" class="dropdown-item">PHYSICS</a>
                            <a href="chemistryview.php" class="dropdown-item">CHEMISTRY</a>

                        </div>
                    </div>
                    <a href="officereport.html" class="nav-item nav-link">Report</a>
                   


                    <?php 
        
            $sql_get=mysqli_query($conn,"SELECT * FROM message WHERE status=0");
            $count=mysqli_num_rows($sql_get);

            ?>

                   

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="fas fa-bell"></i>
                            <span class="badge bg-danger" id="count"><?php echo $count; ?></span></a>
                        <div class="dropdown-menu">
                            <?php 

                            $sql_get1=mysqli_query($conn,"SELECT * FROM message WHERE status=0");
                            if(mysqli_num_rows($sql_get1)>0)
                            {
                                while($result=mysqli_fetch_assoc($sql_get1))
                                {
                                    echo '<a class="dropdown-item text-primary font-weight-bold" href="read_msg.php?id='.$result['id'].'">'.$result['message'].'</a>';
                                    echo '<div class="dropdown-divider"></div>';
                                }

                            }
                            else{
                                echo '<a class="dropdown-item text-danger font-weight-bold"><i class="fas fa-frown"></i> Sorry! No Message..</a>';
                            }

                            ?>         
                        </div>
                    </div>
                    <a class="nav-link" href="read_msg.php"><i class="fas fa-envelope"></i></a>

                    <form class="example" action="officesearch.php" style="margin:auto;max-width:300px;" method="POST">
                        <input type="text" placeholder="Search.." name="search2">
                        <button type="submit" name="submit"><i class="fa fa-search"></i></button>
                    </form>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php"><i class="fas fa-power-off p-1"> Logout</i></a>
                    </li>

                </div>
            </div>
        </div>
    </div>


    <!-- Nav Bar End -->


    <!-- Carousel Start -->

    <div class="carousel">
        <div class="container-fluid">
            <div class="owl-carousel">

                <div class="carousel-item">
                    <div class="carousel-img">
                        <img src="img/aiet1.jpg" alt="Image">
                    </div>
                    <!-- First Carousel Start -->
                    <div class="carousel-text">
                        <img src="IMG/aiet-logo.png" style="width:200px; height:200px;" />
                        <h1>ALVA'S INSTITUTE <span>OF ENGINEERING & </span> TECHNOLOGY</h1>
                        <p>
                            Welcome to Alva’s Institute of Engineering & Technology (AIET) Alva’s Education Foundation® (AEF) was born out of the entrepreneurial vision of Dr. M Mohan Alva, an ayurvedic doctor, an educationalist and a social reformer in Moodubidri, South India.
                            Alva’s Institute of Engineering and Technology is a premier engineering college situated in Mijar was founded in 2008 by AEF to provide affordable quality professional education to the youth of this underdeveloped region.</p>
                        <div class="carousel-btn">
                            <a class="btn custom-btn" href="officeview.php">View Product </a>
                            <a class="btn custom-btn" href="officeinsert.html">Add Product</a>
                        </div>
                    </div>
                    <!-- First Carousel End -->
                </div>

                <!-- Second Carousel Start -->
                <div class="carousel-item">
                    <div class="carousel-img">
                        <img src="img/aiet3.jpg" alt="Image">
                    </div>
                    <div class="carousel-text">
                        <img src="IMG/aiet-logo.png" style="width:200px; height:200px;" />
                        <h1>A Unit of <span>Alva's Education Foundation(R)</span> Moodbidire</h1>
                        <p>
                            Welcome to Alva’s Institute of Engineering & Technology (AIET) Alva’s Education Foundation® (AEF) was born out of the entrepreneurial vision of Dr. M Mohan Alva, an ayurvedic doctor, an educationalist and a social reformer in Moodubidri, South India.
                            Alva’s Institute of Engineering and Technology is a premier engineering college situated in Mijar was founded in 2008 by AEF to provide affordable quality professional education to the youth of this underdeveloped region.</p>
                        <div class="carousel-btn">
                            <a class="btn custom-btn" href="officeview.php">View Product</a>
                            <a class="btn custom-btn" href="officeinsert.html">Add Product</a>
                        </div>
                    </div>
                </div>
                <!-- Second Carousel End -->

                <!-- Third Carousel Start -->
                <div class="carousel-item">
                    <div class="carousel-img">
                        <img src="img/aiet2.jpg" alt="Image">
                    </div>
                    <div class="carousel-text">
                        <img src="IMG/aiet-logo.png" style="width:200px; height:200px;" />
                        <h1>Stock <span>Management</span> System</h1>
                        <p>
                            Welcome to Alva’s Institute of Engineering & Technology (AIET) Alva’s Education Foundation® (AEF) was born out of the entrepreneurial vision of Dr. M Mohan Alva, an ayurvedic doctor, an educationalist and a social reformer in Moodubidri, South India.
                            Alva’s Institute of Engineering and Technology is a premier engineering college situated in Mijar was founded in 2008 by AEF to provide affordable quality professional education to the youth of this underdeveloped region.</p>
                        <div class="carousel-btn">
                            <a class="btn custom-btn" href="officeview.php">View Product</a>
                            <a class="btn custom-btn" href="officeinsert.html">Add Product</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Third Carousel End -->
        </div>
    </div>
    <!-- Carousel End -->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>