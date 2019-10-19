<?php
session_start();
include("conn.php");
$username = $_POST['username'];
$password =  $_POST['password'];
 
if(!empty($username) and !empty($password)){



    $select = mysqli_query($connect,"select * from login where username='$username' and password='$password'") ;
    if(mysqli_num_rows($select) > 0){
        while ($rows = mysqli_fetch_array($select)){
        $uname = $rows['username'];
        $upass = $rows['password'];

        } 
        if($uname == $username && $upass == $password){
          $_SESSION['username'] = $uname;
          echo "done";
        }
    }else{
        echo "user_not_found";
    }
}



?>