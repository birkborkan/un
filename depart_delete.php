<?php
include "conn.php";
$depart_id = $_POST['depart_id'];





if($depart_id){
    $delete = mysqli_query($connect,"update depart_table set status = '1' where id='$depart_id'");
    if($delete){
        echo "done"; 
    }
}
?>