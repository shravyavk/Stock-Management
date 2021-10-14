<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Seraching Product Details</title>
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

    <script src="https://use.fontawesome.com/your-embed-code.js"></script>
    
</head>

<body>

    <!-- Nav Bar Start -->
    <div class="navbar navbar-expand-lg bg-light navbar-light">
        <div class="container-fluid">
            <a href="officeindex.php" class="navbar-brand">Stock  <span>Management</span></a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto">
                    <a href="officeindex.php" class="nav-item nav-link">Home</a>
              
                    
                    <form class="example" action="mechsearch.php" style="margin:auto;max-width:300px;" method="POST">
                        <input type="text" placeholder="Search.." name="search2">
                        <button type="submit" name="submit"><i class="fa fa-search"></i></button>
                    </form>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Nav Bar End -->


    <!-- Page Header Start -->
    <div class="page-header mb-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Product Details</h2>
                </div>
                <div class="col-12">
                    <a href="officeindex.php">Home</a>

                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- View Start -->
    
    <table id="customers">
    
    <thead>
    <tr>
        <th>Invoice No</th>
        <th>Particulars</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>Date of Purchase</th>
        <th>Remarks</th>
        <th>Actions</th>
    </tr>
</thead>
    <tbody>
    <?php
    
    include "mechdb.php";

    $sql = mysqli_query($conn,"SELECT * FROM insertstock where particulars like '%$_POST[search2]%'");

    if(mysqli_num_rows($sql)==0)
				{
					echo ("<script LANGUAGE='JavaScript'>
    window.alert('Sorry No Stocks Found....');
    window.location.href='officeindex.php';
    </script>");

				}
				else
				{
                    while($row=mysqli_fetch_assoc($sql))
        {
?>
<tr>
<td><?php echo $row['invoiceno']; ?></td>
<td><?php echo $row['particulars']; ?></td>
<td><?php echo $row['quantity']; ?></td>
<td><?php echo $row['price']; ?></td>
<td><?php echo $row['dop']; ?></td>
<td><?php echo $row['remarks']; ?></td>

            
            
<td>
           <div>
                        <a class="button button1" onclick="alert('Do you want to edit this Record..?')" href="mechedit.php?invoiceno=<?php echo $row['invoiceno']; ?>"><i class="fas fa-edit"></i></a>
                        <a class="button button2" onclick="alert('Do you want to delete this Record..?')" href="mechdelete.php?invoiceno=<?php echo $row['invoiceno'];?>"><i class="fas fa-trash-alt"></i></a>
                    </div>
</td>
        </tr>
        
        <?php
        } 
        echo "</table>";
    }
         
mysqli_close($conn);
?>
</tbody>
</table>

<div>
    <br><br>
                                <button class="print custom-btn" onclick="window.print()">Print</button>
                            </div>

        <!-- Inserting End -->

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




