 







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


  function give_pages(url) {
   
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById('titley').innerHTML = "إضافة كلية جديدة";
        document.getElementById('contenty').innerHTML = this.responseText;
      }
    };
 
    xhttp.open("POST",url, true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
     xhttp.send();
  }
