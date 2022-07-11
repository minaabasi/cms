<?php

    include_once "config.php";
    function add_menu(){
        $connection= config();
        $sql="INSERT INTO menu_tbl () VALUE ()";
        mysqli_query($connection , $sql);
    }

    function list_menu(){

    }

    function edit_menu(){

    }

    function delete_menu(){

    }

?>