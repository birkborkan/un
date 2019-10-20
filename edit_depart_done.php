<?php
include "conn.php";





$fac_name = $_POST['fac_name'];
$depart_name = $_POST['depart_name'];
$depart_asign = $_POST['depart_asign'];
$depart_id = $_POST['depart_id'];
 if($depart_asign and $depart_name){
   
        $update = mysqli_query($connect,"update depart_table set
        fac_name = '$fac_name',
        depart_name ='$depart_name',
        depart_asign = '$depart_asign',
        id = '$depart_id' where id = '$depart_id'");
        if($update){
            echo "done";
        }
    
 }

?>