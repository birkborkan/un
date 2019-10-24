
/// thiis login function
$(document).ready(function(){
 $('.hide_show').click(function(){
  $("#down_from_top").slideUp();
  $(".drop_value").html(" ");
 
 });
 /*
 $(".btn1").click(function(){
  ;
});
 ** $(".btn2").click(function(){
    $("p").slideDown();
     });
    */
 

   (function pulse(back) {
    $('#seventyfive').animate(
        {
            width: (back) ? $('#seventyfive').width() +3 : $('#seventyfive').width() -3            
        }, 700);
    $('#seventyfive').animate(
        {          
            'font-size': (back) ? '100px' : '140px',
            opacity: (back) ? 1 : 0.5
        }, 700, function(){pulse(!back)});
    })(false);
});

 
function login() {
   
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
          if(this.responseText === "done"){
             window.location.assign('index.php');
          }
          else if(this.responseText === "user_not_found"){
             
            $(document).ready(function(){
        
              $(".drop_value").html("<span style='color:red;'>  اسم المستخدم او كلمة المرور خطأ </span>");
             $("#down_from_top").slideDown().delay(3000).fadeOut();
             
           
          
           });
          }
      }
    }
    var username2 = document.getElementById("username").value
    var password2 = document.getElementById("password").value
    xhttp.open("POST", "login_done.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
     xhttp.send("username="+username2+"&password="+password2);
  }

// this is give for giving the pages to the div
  function give_pages(url,titlee) {
   
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById('titley').innerHTML = titlee;
        document.getElementById('contenty').innerHTML = this.responseText;
      }else{
        document.getElementById('titley').innerHTML = "<img src='img/ajax-loader.gif'/> &nbsp; جاري جلب البيانات ........";

      }
    };
 
    xhttp.open("POST",url, true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
     xhttp.send();
  }
  //add new faculty 
  
  function add_fac() {
    var fac_name = document.getElementById("fac_name").value;
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        if(this.responseText ==="done"){
        document.getElementById('titley').innerHTML = "<span style='color:green;'>تم إضافة كلية "+fac_name+" بنجاح</span>";
      }else if(this.responseText === "find_fac"){
        document.getElementById('titley').innerHTML ="إضافة كلية جديدة";
      
        $(document).ready(function(){
        
          $(".drop_value").html("<span style='color:red;'> هذا الكلية موجودة مسبقآ </span>");
         $("#down_from_top").slideDown().delay(3000).fadeOut();
         
       
      
       });
      } 
      }else{
        document.getElementById('titley').innerHTML = "<img src='img/ajax-loader.gif'/> &nbsp; جاري المعالجة...  ";
      }
    };
if(fac_name === ""){
 
  $(document).ready(function(){
        
    $(".drop_value").html("<span style='color:red;'> رجاء ادخال اسم الكلية  </span>");
   $("#down_from_top").slideDown().delay(3000).fadeOut();
   
 

 });

}else{

    xhttp.open("POST","insert_fac.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
     xhttp.send("fac_name="+fac_name);
}
  }  
  
  
  //add new depart
  function add_depart() {
    var fac_name = document.getElementById("fac_name").value;
    var depart_name = document.getElementById("depart_name").value;
    var sem_no = document.getElementById("sem_no").value;
    var depart_asign = document.getElementById("depart_asign").value;
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        if(this.responseText ==="done"){
         
        $(document).ready(function(){
        
          $(".drop_value").html("<span style='color:green;'>تم إضافة كلية "+fac_name+" قسم "+ depart_name +" بنجاح</span>");
         $("#down_from_top").slideDown().delay(3000).fadeOut();
         
         document.getElementById('titley').innerHTML ="إضافة قسم  جديد";
    
       });
      }else if(this.responseText === "find_depart"){
        document.getElementById('titley').innerHTML ="إضافة قسم  جديد";
        $(document).ready(function(){
        
          $(".drop_value").html("<span style='color:red;'>  هذا القسم موجود مسبقآ  </span>");
         $("#down_from_top").slideDown().delay(3000).fadeOut();
        
         
       
    
       });
      } else if(this.responseText==="empty"){
        $(document).ready(function(){
        
          $(".drop_value").html("<span style='color:red;'>الرجاء ملئ جميع الحقول </span>");
         $("#down_from_top").slideDown().delay(3000).fadeOut();
         document.getElementById('titley').innerHTML ="إضافة قسم  جديد";
         
    
       });
      }
      else if(this.responseText === "deleted"){
        document.getElementById('titley').innerHTML ="إضافة قسم  جديد";
    
        $(document).ready(function(){
        
          $(".drop_value").html("<span style='color:red;'> هذا القسم تم حذفه مسبقآ لإرجاعه اذهب الي ارشيف النظام </span>");
         $("#down_from_top").slideDown().delay(3000).fadeOut();
         
       
    
       });
      }
      }else{
        document.getElementById('titley').innerHTML = "<img src='img/ajax-loader.gif'/> &nbsp; جاري المعالجة...  ";
      }
    };


    xhttp.open("POST","insert_depart.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
     xhttp.send("fac_name="+fac_name+"&depart_name="+depart_name+"&depart_asign="+depart_asign+"&sem_no="+sem_no);

  }

  //edit department function
  function edit_depart(url) {


    
   
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
         
        document.getElementById('titley').innerHTML = "<span style='color:green;'> تعديل بيانات القسم</span>";
        document.getElementById('contenty').innerHTML = this.responseText;
      }else{
        document.getElementById('titley').innerHTML = "<img src='img/ajax-loader.gif'/> &nbsp; جاري المعالجة...  ";
      }
    };
 

    xhttp.open("POST","edit_depart.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
     xhttp.send("edit_depart_id="+url);

  }
 //add new depart done
 function edit_depart_done(url) {
  var fac_name = document.getElementById("fac_name2").value;
  var depart_name = document.getElementById("depart_name2").value;
  var depart_asign = document.getElementById("depart_asign2").value;
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      if(this.responseText ==="done"){
      document.getElementById('titley').innerHTML = "تعديل بيانات القسم";
 
      $(".drop_value").html("<span style='color:green;'>تم  تعديل بيانات  كلية "+fac_name+" قسم "+ depart_name +" بنجاح</span>");
   $("#down_from_top").slideDown().delay(3000).fadeOut();
    }  
    }else{
      document.getElementById('titley').innerHTML = "<img src='img/ajax-loader.gif'/> &nbsp; جاري المعالجة...  ";
    }
  };
if(fac_name === "" || depart_asign === "" || depart_name === ""){
  $(document).ready(function(){
        
    $(".drop_value").html("<span style='color:red;'> رجاء ملئ جميع الحقول </span>");
   $("#down_from_top").slideDown().delay(3000).fadeOut();
   
 

 });
}else{

  xhttp.open("POST","edit_depart_done.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
   xhttp.send("fac_name="+fac_name+"&depart_name="+depart_name+"&depart_asign="+depart_asign+"&depart_id="+url);
}
} //delete depart from system
 function delete_depart(url) {
  
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      if(this.responseText ==="done"){
      document.getElementById('titley').innerHTML = "<span style='color:green;'> تم حذف القسم بنجاح  </span>";
    

      give_pages('show_all_depart_delete.php',' حذف الاقسام');

      $(document).ready(function(){
        
          $(".drop_value").html("<span style='color:green;'> تم حذف قسم "+depart_name+ " من كلية " + fac_name+" بنجاح  </span>");
         $("#down_from_top").slideDown().delay(3000).fadeOut();
         
       
    
       });
    }  
    }else{
      document.getElementById('titley').innerHTML = "<img src='img/ajax-loader.gif'/> &nbsp; جاري المعالجة...  ";
    }
  };
  var fac_name = document.getElementById("face_name_delete"+url).innerHTML;
  var depart_name = document.getElementById("depart_name_delete"+url).innerHTML;
  
 if(confirm(" هل تريد مسح قسم "+depart_name+ " من كلية " + fac_name)){

  xhttp.open("POST","depart_delete.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
   xhttp.send("depart_id="+url);
}
}