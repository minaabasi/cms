<?php
include_once('config.php');
function add_blog($data){
    $connection=config();
    $sql="INSERT INTO `blog_tbl` (title , writer , `date` , `text` ) VALUES ('$data[title]' , '$data[writer]' , '$data[date]' , '$data[text]' )";
    mysqli_query($connection , $sql);
}

function list_blog(){
    $connection=config();
    $sql="SELECT * FROM blog_tbl";
    $result=mysqli_query($connection ,$sql);
    return $result;
}

function show_blog($id){
    $connection=config();
    $sql="SELECT * FROM blog_tbl WHERE blog_id='$id'";
    $result=mysqli_query($connection ,$sql);
    $row=mysqli_fetch_assoc($result);
    return $row;
}

function edit_blog($data , $id){
    $connection=config();
    $sql="UPDATE blog_tbl SET title='$data[title]' , text='$data[text]' , writer='$data[writer]' , `date`='$data[date]' WHERE blog_id='$id' ";
    mysqli_query($connection ,$sql);
}

function delete_blog($id){
    $connection=config();
    $sql="DELETE FROM blog_tbl WHERE blog_id='$id' ";
    mysqli_query($connection , $sql);
}