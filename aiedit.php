<html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Updating New Product Details</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link rel="icon" type="image/png" href="img/icon/aiet-logo.png" />
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">

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
            <a href="officeindex.php" class="navbar-brand">Stock  <span>Management</span></a>
            <button type="button" class="navbar-toggler"$data-toggle="collapse"$data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto">


                    <a href="officeindex.php" class="nav-item nav-link">Home</a>
                    <a href="aiview.php" class="nav-item nav-link">View Product</a>


                </div>
            </div>
        </div>
    </div>
    <!-- Nav Bar End -->


    <!-- Page Header Start -->
    <div class="page-header mb-0">
        <div class="container">
            <div class=$data>
                <div class="col-12">
                    <h2>Updating Product Detail</h2>
                </div>
                <div class="col-12">
                    <a href="officeindex.php">Home</a>

                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <?php
    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "artificialinteligence";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  


if(count($_POST)>0) {
mysqli_query($con,"UPDATE insertstock set invoiceno='" . $_POST['invoiceno'] . "', particulars='" . $_POST['particulars'] . "', quantity='" . $_POST['quantity'] . "', price='" . $_POST['price'] . "' ,dop='" . $_POST['dop'] . "' ,remarks='" . $_POST['remarks'] . "' WHERE invoiceno='" . $_POST['invoiceno'] . "'");
header("location:aiview.php");
}
$result = mysqli_query($con,"SELECT * FROM insertstock WHERE invoiceno='" . $_GET['invoiceno'] . "'");
$data= mysqli_fetch_array($result);
?>

<div class="booking">
        <div class="container">

<div class="col-lg-5">
<div class="booking-form">

<form method="POST" >
<center>
<img src="img/aiet.png" alt="Avatar" class="avatar" style=" width:150px;">
</center>
<hr />
<div><?php if(isset($message)) { echo $message; } ?>
</div>

Invoice Number: 

<input type="text" name="invoiceno" class="form-control"  value="<?php echo $data['invoiceno']; ?>">

<br>
Product Name : 
<input type="text" name="particulars" class="form-control" value="<?php echo $data['particulars']; ?>">
<br>
Quantity :
<input type="text" name="quantity" class="form-control" value="<?php echo $data['quantity']; ?>">
<br>
Price :
<input type="text" name="price" class="form-control" value="<?php echo $data['price']; ?>">
<br>
Date Of Purchase :
<input type="date" name="dop" class="form-control" value="<?php echo $data['dop']; ?>">
<br>

Remarks :
<input type="text" name="remarks" class="form-control" value="<?php echo $data['remarks']; ?>">
<br>

  <input class="btn custom-btn" type="submit" name="update" value="Update" onclick="alert('Record Updated Successfully...')">

</form>
</div>
</div>

        </div>
</div>
 

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