<?php
include "conn.php";





$fac_name = $_POST['fac_name'];
 if($fac_name){
    $select = mysqli_query($connect,"select * from fac_table where fac_name = '$fac_name'");
    if(mysqli_num_rows($select) >0){
        echo "find_fac";
    }else{
        $insert = mysqli_query($connect,"insert into fac_table(fac_name) values('$fac_name')");
        echo "done";
    }
 }

?>