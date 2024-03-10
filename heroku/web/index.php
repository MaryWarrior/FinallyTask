<?php
if(!empty($_SESSION['name'])){
    echo "Hello ".$_SESSION['name'];
    include 'exit.php';
    exit();
} else {
    include 'index.html'; 
}
?>