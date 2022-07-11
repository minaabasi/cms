<?php
    include_once "include/user_function.php";
    $result=user_list();
    
?>

<div class="container-fluid">

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="page-title-box">
                                        <div class="row align-items-center">
                                            <div class="col-md-8">
                                                <h4 class="page-title m-0">لیست کاربران</h4>
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
            
                                            
            
                                            <table id="mainTable" class="table table-striped mb-0">
                                                <thead>
                                                <tr>
                                                    <th>نام</th>
                                                    <th>ایمیل</th>
                                                    <th>شماره تماس</th>
                                                    <th>تصویر</th>
                                                    <th>ویرایش</th>
                                                    <th>حذف</th>
                                                    
                                                </tr>
                                                </thead>
                                                <tbody>
                                                
                                                    <?php while($row=mysqli_fetch_assoc($result)){ ?>
                                                <tr>
                                                    <td><?php echo $row['fullname']; ?></td>
                                                    <td><?php echo $row['email']; ?></td>
                                                    <td><?php echo $row['phone_number']; ?></td>
                                                    <td>
                                                        <img src="<?php echo $row['pic']; ?>">
                                                    </td>
                                                    <td>
                                                        <a href="index.php?d=user&p=edit&a=<?php echo $row['user_id']; ?>" >
                                                        <img src="assets/images/edit.png" width="50px">
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="index.php?delete=<?php echo $row['user_id']; ?>">
                                                        <img src="assets/images/delete.png" width="50px">
                                                        </a>
                                                    </td>
                                                    </tr>
                                                    <?php } ?>
                                                    
                                                
                                               
                                                </tbody>
                                                
                                            </table>
            
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->            

                        </div>