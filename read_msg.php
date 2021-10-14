<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Reading Message</title>
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
                    <h2>Messages</h2>
                </div>
                <div class="col-12">
                    <a href="officeindex.php">Home</a>

                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

   
<?php 
include_once 'msgdb.php';
?>
<?php
if(isset($_GET['id']))
{
    $main_id=$_GET['id'];
    $sql_update=mysqli_query($conn,"UPDATE message SET status=1 WHERE id='$main_id'");

}

?>
<!doctype html>
<html lang="en">
  <head>
      <style>
          #table1
          {
              margin-top:2%
          }
          </style>
  </head>
  <body>
   <div class="container" id="table1">
       <div class="row">
           <table class="table">
               <thead class="thead-dark">
                   <tr>
                       <th scope="col">S.no</th>
                       <th scope="col">Name</th>
                       <th scope="col">Message</th>
                       <th scope="col">Date</th>
                       <th scope="col">Delete</th>
</tr>
</thead>
<tbody>
    <?php 
    $sr_no=1;
    $sql_get = mysqli_query($conn,"SELECT * from message WHERE status=1");
    while($main_result=mysqli_fetch_assoc($sql_get)) :?>
        <tr>
            <th scope="row"><?php echo $sr_no++; ?></th>
            <td><?php echo $main_result['name']; ?></td>
            <td><?php echo $main_result['message']; ?></td>
            <td><?php echo $main_result['cr_date']; ?></td>
            <td><a href="msg_del.php?id=<?php echo $main_result['id'];?>" class="text-danger" ><i class="fas fa-trash"></i></a></td>
    </tr>
    <?php 
    endwhile
    ?>
    </tbody>
    </table>
    
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
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
  </body>
</html>

