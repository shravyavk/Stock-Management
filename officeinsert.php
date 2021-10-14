<!DOCTYPE html>
<html>
  
<head>
    <meta charset="utf-8">
    <title>Adding New Product Details</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link rel="icon" type="image/png" href="img/icon/aiet-logo.png" />
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">
</head>
  
<body>
    <center>
        <?php
        include "dbconn.php";

		$invoiceno = $_REQUEST['invoiceno'];
        $particulars = $_REQUEST['particulars'];
        $quantity = $_REQUEST['quantity'];
        $price = $_REQUEST['price'];
        $dop= $_REQUEST['dop'];
        $remarks = $_REQUEST['remarks'];
          
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO insertstock  VALUES ('$invoiceno','$particulars', 
            '$quantity','$price','$dop','$remarks')";
          
        if(mysqli_query($conn, $sql)){
            echo ("<script LANGUAGE='JavaScript'>
    window.alert('Succesfully Updated');
    window.location.href='officeview.php';
    </script>");
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
 
		mysqli_close($conn);
        ?>
    </center>
</body>
  
</html>