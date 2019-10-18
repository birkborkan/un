 







function login() {
    var username = document.getElementById("username").value
    var password = document.getElementById("password").value
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
       alert(this.responseText);
      }
    };
    var username = document.getElementById("username").value
    var password = document.getElementById("password").value
    xhttp.open("GET", "login_done.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
     xhttp.send("username="+username+"&password="+password);
  }