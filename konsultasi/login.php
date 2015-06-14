<?php
session_start();
include 'database.php';

if(!empty($_POST)){
     
    $username = $_POST['username'];
    $password = ($_POST['password']);
 
    $sql = "select * from user where username='".$username."' and password='".$password."'";
    #echo $sql."<br />";
    $query = mysql_query($sql) or die (mysql_error());
 
    // pengecekan query valid atau tidak
    if($query){
        $row = mysql_num_rows($query);
         
        // jika $row > 0 atau username dan password ditemukan
        if($row > 0){
            $_SESSION['isLoggedIn']=1;
            $_SESSION['username']=$username;
            header('Location: ../admin.php');
        }else{
            echo "<b><center>username atau password salah<center></b>";
        }
    }
}
?>