<html>
    <body>
    <?php

$host = "localhost";  
$user = "root";  
$password = '';  
$db_name = "mechanicalengineering";  
  
$con = mysqli_connect($host, $user, $password, $db_name);  
if(mysqli_connect_errno()) {  
    die("Failed to connect with MySQL: ". mysqli_connect_error());  
}  

$invoiceno = $_GET['invoiceno']; // get id through query string

$del = mysqli_query($con,"delete from insertstock where invoiceno = '$invoiceno'"); // delete query

if($del)
{
    mysqli_close($con); // Close connection
    header("location:mechview.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>
    </body>
</html>