<?php
include_once('config.php');

function add($data){
    $connect=config();
    $sql="INSERT INTO blog_cat_tbl (title , sort , `status`) VALUE ('$data[title]' , '$data[sort]' , '$data[status]' )";
    mysqli_query($connect , $sql);


}

function list_cat(){
    $connect=config();
    $sql="SELECT * FROM blog_cat_tbl";
    $res=mysqli_query($connect , $sql);
    return $res;

}

function show_edit($id){
    $connect=config();
    $sql="SELECT * FROM blog_cat_tbl WHERE blog_cat_id='$id' ";
    $result=mysqli_query($connect , $sql);
    $row=mysqli_fetch_assoc($result);
    return $row;
}

function edit($data){
    $connect=config();
    $sql="UPDATE blog_cat_tbl SET title='$data[title]' , sort='$data[sort]' , status='$data[status]' ";
    mysqli_query($connect , $sql);

}

function delete($id){
    $connect=config();
    $sql="DELETE FROM blog_cat_tbl WHERE blog_cat_id='$id' ";
    mysqli_query($connect , $sql);
}
?>