<?php 
$db = new mysqli('localhost','root','','dwms');
if(!$db) {
    die('Please check Your database connection'.mysqli_error($db));
}

?>
