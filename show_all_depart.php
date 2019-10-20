<?php 
include "conn.php";



$select = mysqli_query($connect,"select * from depart_table");

if(mysqli_num_rows($select)>0){
echo '<table class="table">
<thead>
  <tr>
    <th scope="col">#</th>
    <th scope="col">اسم الكلية</th>
    <th scope="col">القسم</th>
    <th scope="col">رمز القسم</th>
    <th scope="col"> تعديل</th>
  </tr>
</thead>
<tbody>';
$counter = 0;
while($rows = mysqli_fetch_array($select)){
    $counter++;
echo '
<tr>
<th scope="row">'.$counter.'</th>
<td>'.$rows['fac_name'].'</td>
<td>'.$rows['depart_name'].'</td>
<td>'.$rows['depart_asign'].'</td>
<td><span class="btn btn-success" onclick="edit_depart('.$rows['id'].')">تعديل</span></td>
 
</tr>
';

}
echo '  </tbody>
</table>';
}else{
    echo "<span style='text-danger'>لا توجد اقسام مدخلة في النظام</span>";
}

?>