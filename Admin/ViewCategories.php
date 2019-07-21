<?php 
include"header.php";
include"sidebar.php";
?>

                <!-- page content -->
                <div class="dev-page-content">                    
                    <!-- page content container -->
                    <div class="container" style="overflow: auto; height: 550px;">
                        
                        <!-- page title -->
                        <div class="page-title">
                            <h1>List Of Categories</h1>
                            
                            
                            <ul class="breadcrumb">
                                <li><a href="#">Dashboard</a></li>
                                <li><a href="#">Category List</a></li>
                            </ul>
                        </div>                        
                    



                        <div class="wrapper wrapper-white">
                            
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-sortable">
                                    <thead>
                                        <tr>
                                            <th>Category Image</th>
                                            <th>ID</th>
                                            <th>Category Name</th>
                                            <th>Category Description</th>
                                            <th>&nbsp</th>
                                            
                                    
                                        </tr>
                                    </thead>                               
                                      
                                   
                                <tbody>
                                        <?php
                                        $cat=$obj->show_adminCategory();
                                        foreach ($cat as $item) {
                                        echo '    
                                        <tr>
                                            <td><img src="images/categories/'.$item['cat_img'].'" style=" width: 40px;height: 40px" ></td>
                                            <td>'.$item['category_id'].'</td>
                                            <td>'.$item['cat_name'].'</td>
                                            <td>'.$item['cat_description'].'</td>
                                            <td><button><a href="AddCategories.php?catid='.$item['category_id'].'">update</a></button>
                                            
                                           
                                            

                                        </tr>';
                                            
                                        }

                                        ?>      
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>  



                        <!-- Copyright -->
                        <div class="copyright">
                            <div class="pull-left">
                                &copy; 2015 <strong>Aqvatarius</strong>. All rights reserved.
                            </div>
                            <div class="pull-right">
                                <a href="#">Terms of use</a> / <a href="#">Privacy Policy</a>
                            </div>
                        </div>
                      



                        <!-- ./datatables plugin -->











                        <!-- ./Copyright -->
                        
                    </div>
                    <!-- ./page content container -->                                       
                </div>
                <!-- ./page content -->                                                
            </div>  
            <!-- ./page container -->
            
            <!-- right bar -->
            <!-- ./right bar -->            
            
                    <?php 
include"footer.php";
?>
  
         