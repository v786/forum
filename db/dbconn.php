
<?php
    include "dbsettings.php";
    $dbcon=mysqli_connect($dbserver,$dbusername,"");  
    mysqli_select_db($dbcon,$dbname); 

    function shout($x){
      echo "<script>alert('".$x."')</script>";
    }

    function query($dbcon,$query){
      return mysqli_query($dbcon,$query);
    } 

    function loc($url){
      echo "<script>window.location='".$url."';</script>";
    }
?>