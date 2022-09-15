<?php

$con=new mysqli('localhost', 'root', 'pass','crud-operation');
if (!$con){
    die(mysqli_error($con));
}

?>