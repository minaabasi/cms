<?php 
    include_once "include/menu_function.php";
    if(isset($_POST['btn'])){
        $data=$_POST['frm'];
        add_menu($data);        
    
    }


?>





<div class="container-fluid">

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="page-title-box">
                                        <div class="row align-items-center">
                                            <div class="col-md-8">
                                                <h4 class="page-title m-0">افزودن منو</h4>
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

                            <div class="row">
                                <div class="col-12">
                                    <div class="card m-b-30">
                                        <div class="card-body">
            
                                          
            
                                            <form method="post">
                                            <div class="form-group row">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">عنوان </label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text"  name="frm[title]"
                                                    id="example-text-input">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-search-input" class="col-sm-2 col-form-label">آدرس</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" name="frm[url]"  id="example-search-input">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-email-input" class="col-sm-2 col-form-label">سرگروه</label>
                                                <div class="col-sm-10">
                                                    <select class="custom-select" name="frm[parents]">
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="example-search-input" class="col-sm-2 col-form-label">وضعیت</label>
                                                <div class="col-sm-10" style="display: flex ;">
                                                    <input class="form-control" type="radio" name="frm[status]"  id="example-search-input" value="1">مرد
                                                    <input class="form-control" type="radio" name="frm[status]"  id="example-search-input" value="0">زن
                                                </div>
                                                
                                            </div>

                                                
                                            
                                            <div class="form-group row">
                                                <label for="example-url-input" class="col-sm-2 col-form-label"></label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="submit"
                                                    name="btn" id="example-url-input" style="background-color: darkcyan; color:aliceblue;" value="افزودن">
                                                </div>
                                            </div>
                                            
                                            </form>
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->            

                        </div>