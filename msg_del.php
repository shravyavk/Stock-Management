<?php 
include_once 'msgdb.php';

if(isset($_GET['id']))
    {
        $delete_id=$_GET['id'];
        $sql_delete=mysqli_query($conn,"DELETE FROM message WHERE id='$delete_id'");
        if($delete_id)
        {
            header('location: read_msg.php');
        }
        else
        {
            echo mysqli_error($conn);

        }
    }
?>