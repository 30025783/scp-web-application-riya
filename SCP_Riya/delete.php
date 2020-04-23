<?php 
session_start();
    include 'connection.php';
    $id=(int) $_GET['id'];
    $result= $connection->query("delete from subject where id=$id")or die($connection->error);
    if($result)
    {        
        header("Location:deleteview.php");
    }
    
?>