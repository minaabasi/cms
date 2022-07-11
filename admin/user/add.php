<?php
    if(isset($_POST['frm'])){
        $data=$_POST['frm'];
        include_once "include/user_function.php";
        add_user($data);
    }
?>

<div class="container-fluid">

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="page-title-box">
                                        <div class="row align-items-center">
                                            <div class="col-md-8">
                                                <h4 class="page-title m-0">افزودن کاربر</h4>
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
                                                <label for="example-text-input" class="col-sm-2 col-form-label">نام و نام خانوادگی</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text"
                                                    name="frm[fullname]"  >
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-search-input" class="col-sm-2 col-form-label">ایمیل</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="email"
                                                    name="frm[email]" id="example-search-input">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-email-input" class="col-sm-2 col-form-label">رمزعبور</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="password" name="frm[password]" id="example-email-input">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-url-input" class="col-sm-2 col-form-label">موبایل</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" name="frm[phone]" id="example-url-input">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-url-input" class="col-sm-2 col-form-label">تصویر پروفایل</label>
                                                <div class="col-sm-10">
                                                <div >
                                                        <input name="file" type="file" name="pic" multiple="multiple">
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group row">
                                                <label for="example-url-input" class="col-sm-2 col-form-label"></label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="submit"
                                                    name="btn" id="example-url-input" style="background-color: darkcyan; color:aliceblue;" value="افزودن">
                                                </div>
                                            </div>
                                            
                                            
                                                      </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->    
                            </form>        

                        </div>