<?php 
require('libs/rb.php');
R::setup('mysql:host=localhost;dbname=Around the world', 'root', '');
$con = mysqli_connect('localhost', 'root', '', 'Around the world');
?>