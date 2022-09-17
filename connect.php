<?php

 $con=new mysqli('localhost','root','-k|QZP1g*+1bb-Dy','id19542814_crudoperation');
 if ($result){
    echo "Data inserted successfully";
}
 else {
    die(mysqli_error($con));
}
 
?>