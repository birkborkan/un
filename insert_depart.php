<?php
include "conn.php";





$fac_name = $_POST['fac_name'];
$depart_name = $_POST['depart_name'];
$sem_no = $_POST['sem_no'];
$depart_asign = $_POST['depart_asign'];


if(!empty($fac_name) && !empty($depart_name) && !empty($sem_no) && !empty($depart_asign) ){
 if($fac_name and $depart_asign and $depart_name){
    $select = mysqli_query($connect,"select * from depart_table where fac_name = '$fac_name' and depart_name='$depart_name'  ");
    if(mysqli_num_rows($select) >0){
        $rows = mysqli_fetch_array($select);
        if($rows['status'] == 0){
            echo "find_depart";
        }else if($rows['status'] == 1){
              echo "deleted";
        }
        
    }else{
        $insert = mysqli_query($connect,"insert into depart_table(fac_name,depart_name,sem_no,depart_asign)
         values('$fac_name','$depart_name','$sem_no','$depart_asign')");
        echo "done";
    }
 }
}
else{echo "empty";
}

?>