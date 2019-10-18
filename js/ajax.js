 







function login() {
   
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
       alert(this.responseText);
      }
    };
    var username2 = document.getElementById("username").value
    var password2 = document.getElementById("password").value
    xhttp.open("POST", "login_done.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
     xhttp.send("username="+username2+"&password="+password2);
  }