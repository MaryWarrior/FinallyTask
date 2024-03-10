<?php
if(isset($_POST['name'])){
    $_SESSION['name'] = $_POST['name'];
    include 'index.php'; 
} else header('location: index.php');
?>