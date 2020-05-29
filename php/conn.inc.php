<?php

$conn = mysqli_connect('sql105.epizy.com' , 'epiz_25452004' , 'ORfRVdFqLpoN3' , 'epiz_25452004_comments');

if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}