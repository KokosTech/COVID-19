<?php

$conn = mysqli_connect('localhost' , 'root' , '' , 'demo');

/* $conn = mysqli_connect('http://185.27.134.10/' , 'epiz_25452004' , 'ORfRVdFqLpoN3' , 'epiz_25452004_comments');
 */
if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}