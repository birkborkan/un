<?php
include "conn.php";





$edit_depart_id = $_POST['edit_depart_id'];
if($edit_depart_id){
 
 
    $select = mysqli_query($connect,"select * from depart_table where id = '$edit_depart_id'");
    if(mysqli_num_rows($select) >0){

        $row2 = mysqli_fetch_array($select);
        ?>

          
<form  style='text-align:right;'>
                    اسم الكلية :
                    <div class="form-control "   id="">
                   <?php
                   $select  = mysqli_query($connect,"select * from fac_table");
                   if(mysqli_num_rows($select)>0){
                         echo "<select style='width:100%;' id='fac_name2'>";
                         while($rows = mysqli_fetch_array($select)){
                            echo " <option> ".$rows['fac_name']." </option>";
                         }
                        
                         echo"
                         </select>
                         ";
                   }else{
                   echo "<select>
                       <option>لا توجد كلية مضافة في النظام</option>
                       </select>
                       ";
                   }
                   ?>
                    </div>
                    اسم القسم:
                    <input type="text" class="form-control " value='<?php echo $row2['depart_name']?>'  id="depart_name2" placeholder="">
                    رمز القسم:
                    <input type="text" class="form-control " value='<?php echo $row2['depart_asign']?>' id='depart_asign2'   placeholder='هذا الرمز خاص بقسم معين ولا يمكن تكراره 
                    رجاء اختياره بعناية مثلآ CS, IT الخ ......'>
                     
            
              
              <br>
               
                <a href="#" onclick = 'return false;' onmousedown="edit_depart_done(<?php echo $row2['id']?>);"class="btn btn-primary btn-user btn-block">
                  اجراء عملية التعديل
                </a>
                </form>
            
        <?php
    }else{
      
        echo "not_find_depart";
    }
 
}

?>