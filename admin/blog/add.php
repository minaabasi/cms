<?php

include_once('include/blog_function.php');
include_once('include/blog_cat_function.php');
 if(isset($_POST['btn'])){
    $data=$_POST['frm'];
    add_blog($data);
 }
 $row=list_cat();
?>


<div class="container-fluid">

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="page-title-box">
                                        <div class="row align-items-center">
                                            <div class="col-md-8">
                                                <h4 class="page-title m-0">افزودن مقاله</h4>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="float-right d-none d-md-block">
                                                    
                                                </div>
                                            </div>
                                            <!-- end col -->
                                        </div>
                                        <!-- end row -->
                                    </div>
                                    <!-- end page-title-box -->
                                </div>
                            </div> 
                            <!-- end page title -->

                            <form method="post" >
                            <div class="row">
                                <div class="col-12">
                                    <div class="card m-b-30">
                                        <div class="card-body">
                                            <div class="form-group row">
                                                <div class="col-sm-9">
                                                    <input class="form-control" type="text"
                                                    name="frm[title]" placeholder="عنوان" >
                                                    <br>
                                                    <textarea class="col-sm-12" name="frm[text]"  rows="15" style="border:1px solid gray; ">
                                                    </textarea>

                                                </div>
                                                <div class="col-sm-3">
                                                    <input class="form-control" type="submit"
                                                    name="btn" id="example-url-input" style="background-color: darkcyan; color:aliceblue;" value="افزودن">
                                                    <br>
                                                    <input class="form-control" type="text" placeholder="نویسنده" name="frm[writer]">
                                                    <br>
                                                    <select class="form-control"name="frm[categury]">
                                                    <?php
                                                        foreach($row as $rows){
                                                            echo "<option>".$rows['title'] . "<?option>";
                                                        }
                                                    ?>
                                                    </select>
                                                    <br>
                                                    <input class="form-control" type="date" name="frm[date]">
                                                </div>
                                            </div>
                                            
                                            
                                            
                                                      </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->    
                            </form>        

                        </div>