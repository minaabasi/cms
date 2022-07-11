<?php

function config(){
    $server='localhost';
    $user='root';
    $password='';
    $database='cms';

    $connection=mysqli_connect( $server , $user , $password , $database  );
    return $connection ;

}