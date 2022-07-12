<?php

    include_once "config.php";
    function add_menu($data){
        $connection= config();
        $sql="INSERT INTO menu_tbl (title , `url` ,`status`) VALUE ('$data[title]' , '$data[url]' , '$data[status]')";
        mysqli_query($connection , $sql);
    }

    function list_menu(){
        $connection=config();
        $sql="SELECT * FROM menu_tbl ";
        $result=mysqli_query($connection , $sql);
        return $result;
    }

    function edit_menu(){

    }

    function delete_menu(){

    }

?>