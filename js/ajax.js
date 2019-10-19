 







function login() {
   
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
          if(this.responseText === "done"){
             window.location.assign('index.php');
          }
          else if(this.responseText === "user_not_found"){
             alert("اسم المستخدم او كلمة السر");
          }
      }
    };
    var username2 = document.getElementById("username").value
    var password2 = document.getElementById("password").value
    xhttp.open("POST", "login_done.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
     xhttp.send("username="+username2+"&password="+password2);
  }


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
  
  
  function add_fac() {
    var fac_name = document.getElementById("fac_name").value;
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        if(this.responseText ==="done"){
        document.getElementById('titley').innerHTML = "<span style='color:green;'>تم إضافة كلية "+fac_name+" بنجاح</span>";
      }else if(this.responseText === "find_fac"){
        document.getElementById('titley').innerHTML ="إضافة كلية جديدة";
        alert("هذا الكلية موجودة مسبقآ");
      } 
      }else{
        document.getElementById('titley').innerHTML = "<img src='img/ajax-loader.gif'/> &nbsp; جاري المعالجة...  ";
      }
    };
if(fac_name === ""){
  alert("رجاء ادخال اسم الكلية") ;
}else{

    xhttp.open("POST","insert_fac.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
     xhttp.send("fac_name="+fac_name);
}
  }
