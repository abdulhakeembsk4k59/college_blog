<?php
    $conn=mysqli_connect("localhost","root","","blog");
    $id=1;
    $sql = "SELECT * FROM data";
    $query = mysqli_query($conn,$sql);
    if(isset($_REQUEST["new_post"])){
        $title = $_REQUEST["title"];
        $content = $_REQUEST["content"];
        $sql = "INSERT INTO data(title,content) VALUES('$title', '$content')";
        mysqli_query($conn,$sql); 
        header("Location: index.php?info=added");
        exit(); 
    }
    if(isset($_REQUEST['id'])){
        $id=$_REQUEST['id'];
        $sql="SELECT *  FROM data WHERE id=$id";
        $query=mysqli_query($conn,$sql);
    }

    if(isset($_REQUEST["delete"])){
        $id=$_REQUEST['id'];
        $sql="DELETE from data where id=$id";
        header("Location: index.php?info=deleted");
        $query=mysqli_query($conn,$sql);
        exit(); 
    }


    if(isset($_REQUEST['editedPost'])){
        $tit=$_REQUEST['ed_title'];
        $con=$_REQUEST['ed_content'];
        $sql="UPDATE `data` SET `title` = '$tit', `content` = '$con' WHERE `data`.`id` = $id";
        $query=mysqli_query($conn,$sql);   
        header("Location: index.php?info=edited");
        exit(); 

    }
    
    // if(isset($_REQUEST["edit_post"])){
        
    //     $title = $_REQUEST["title"];
    //     $content = $_REQUEST["content"];

    //     $sql = "UPDATE `data` SET `title` = $title, `content` = $content WHERE `data`.`id` = $id";
    //     $query=mysqli_query($conn,$sql); 
    //     header("Location: index.php?info=edited");
    //     exit(); 
    // }
    

?>