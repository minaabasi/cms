<?php
    session_start();
    include_once('config.php');
    function user_login($data){
        $connect=config();
        $sql="SELECT *FROM user_tbl WHERE email='$data[email]' ";
        $result=mysqli_query($connect , $sql);
        $row=mysqli_fetch_assoc($result);

        if($data['password']==$row['password']){
            $_SESSION['name']=$row['fullname'];
            header("location:index.php");
        }else{
            header("location:login.php?login=error");
        }

    }

    function check_login(){
        if(!isset($_SESSION['name'])){
            header("location:login.php?login=error");
        }

    }

    function add_user($data){
        $connect=config();
        $sql="INSERT INTO user_tbl (fullname , email , `password` ,phone_number ) VALUE
         ('$data[fullname]' ,'$data[email]' ,'$data[password]' ,'$data[phone]' )";
         mysqli_query($connect , $sql);
    }

    function user_list(){
        $connect=config();
        $sql="SELECT * FROM user_tbl";
        $result=mysqli_query($connect , $sql);
        return $result;
    }


    function edit_user($id){
        $connect=config();
        $sql="SELECT * FROM user_tbl WHERE user_id='$id' ";
        $result=mysqli_query($connect , $sql);
        $row=mysqli_fetch_assoc($result);
        return $row;

    }
    function user_logout(){
        session_start();
        session_destroy();
        header("location:login.php?logout=true");
    }

    function delete_user($id){
        $connect=config();
        $sql="DELETE FROM user_tbl WHERE user_id='$id' ";
        mysqli_query($connect , $sql);
        header("location:index.php?d=user&p=list");

    }

?>