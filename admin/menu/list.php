<?php
    include_once "include/menu_function.php";
    $result=list_menu();
    
    
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
                                                    <th>عنوان</th>
                                                    <th>آدرس</th>
                                                    <th>ترتیب نمایش</th>
                                                    <th>سرگروه</th>
                                                    <th>ویرایش</th>
                                                    <th>حذف</th>
                                                    
                                                </tr>
                                                </thead>
                                                <tbody>
                                                
                                                    <?php while($row=mysqli_fetch_assoc($result)){ ?>
                                                <tr>
                                                    <td><?php echo $row['title']; ?></td>
                                                    <td><?php echo $row['url']; ?></td>
                                                    <td><?php echo $row['sort']; ?></td>
                                                    <td>
                                                        <?php
                                                        if($row['chid']==0){
                                                            echo 'سرگروه ندارد';
                                                        }else{
                                                            $res=chid($row);
                                                        while($resu=mysqli_fetch_assoc($res)){
                                                            echo $resu['title'];
                                                        }
                                                        }

                                                            
                                                        ?>
                                                    </td>
                                                    
                                                    <td>
                                                        <a href="index.php?d=menu&p=edit&id=<?php echo $row['menu_id'];?>">
                                                        <img src="assets/images/edit.png" width="50px">
                                                        </a>
                                                    </td>
                                                    
                                                    <td>
                                                        <a href="index.php?delete=<?php echo $row['menu_id']; ?>">
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
                        