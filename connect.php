<?php
$con = mysqli_connect('localhost','root');

if($con){
    echo "connection succesful";
} else {
    echo "No connection";
}

mysqli_select_db($con, 'anubhav');

$comment = $_POST['comment'];

$query = " insert into mysqltable (comment)
values ('$comment')";

echo "$query";

mysqli_query($con,$query);

header('location:blogpost.php');

?>