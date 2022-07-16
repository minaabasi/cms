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

    function delete_menu(){

    }

?>