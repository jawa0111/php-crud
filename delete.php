<?php
    include "connect.php";
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "DELETE from `crud1` where id=$id";
        $conn->query($sql);
    }
    header('location:/CRUD/index.php');
    exit;
?>