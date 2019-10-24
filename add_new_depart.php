 
<?php include "conn.php";?>


   
                   
                  <form  style='text-align:right;'>
                    اسم الكلية :
                    <div class="form-control "   id="">
                   <?php
                   $select  = mysqli_query($connect,"select * from fac_table");
                   if(mysqli_num_rows($select)>0){
                         echo "<select style='width:100%;' id='fac_name'>";
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
                    <input type="text" class="form-control "   id="depart_name" placeholder="">
                     عدد الفصول :
                    <input type="text" class="form-control "   id="sem_no" placeholder="">
                    رمز القسم:
                    <input type="text" class="form-control " id='depart_asign'   placeholder='هذا الرمز خاص بقسم معين ولا يمكن تكراره 
                    رجاء اختياره بعناية مثلآ CS, IT الخ ......'>
                     
            
              
              <br>
                <a href="#" onclick = 'return false;' onmousedown='add_depart();'class="btn btn-primary btn-user btn-block">
                  إضافة
                </a>
                </form>
            
            
        
     
 
