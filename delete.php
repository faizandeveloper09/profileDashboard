<?php

include 'connect.php';

 if  (isset($_GET['connect.php']));

 $id = $_GET['deleteid'];

 $sql = "delete from `dashboarddesign`.`userprofile`where id = $id";

 $result = mysqli_query($connect, $sql);

 if ($result){

    header ('location: display.php');

 }else {

    die(mysqli_query($connect,$sql));
    
 }


?>