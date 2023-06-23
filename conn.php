<?php 
$link= mysqli_connect("localhost","root","","vv");
mysqli_select_db($link, "vv");
if(!$link ){
   die('Could not connect: ');
}
?>