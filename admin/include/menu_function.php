<?php
include_once "config.php";
function add_menu($data){
    $connection= config();
    $sql="INSERT INTO menu_tbl (title , `url` ,`status` , chid , sort) VALUE ('$data[title]' , '$data[url]' , '$data[status]' , '$data[parents]' , '$data[sort]')";
    mysqli_query($connection , $sql);
    }

function list_menu(){
    $connection=config();
    $sql="SELECT * FROM menu_tbl ";
    $result=mysqli_query($connection , $sql);
    return $result;
    }

function chid($row){
    $connection=config();
    $sql="SELECT * FROM menu_tbl WHERE menu_id='$row[chid]' ";
    $result=mysqli_query($connection , $sql);
    return $result;
    }

function edit_menu($id){
    $connect=config();
    $sql="SELECT * FROM menu_tbl WHERE menu_id='$id' ";
    $result=mysqli_query($connect , $sql);
    $row=mysqli_fetch_assoc($result);
    return $row;
        
    }

function delete_menu($id){
    $connect=config();
    $sql="DELETE FROM menu_tbl WHERE menu_id='$id'";
    mysqli_query($connect , $sql);
    header("location:index.php?d=menu&p=list");

    }
function show_menu(){
    $connect=config();
    $sql="SELECT * FROM menu_tbl WHERE chid='0' AND status='1' ";
    $result=mysqli_query($connect , $sql);
    while($row=mysqli_fetch_assoc($result)){
        $res[]=$row;
    }
    return $res;
}

function show_submenu($id){
    $connect=config();
    $sql="SELECT * FROM menu_tbl WHERE chid='$id' AND status='1' ";
    $result=mysqli_query($connect , $sql);
    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result)){
            $res[]=$row;
        }
        return $res;
    }
}


?>