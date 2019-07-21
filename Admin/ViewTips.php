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
                            <h1>List Of Tips</h1>
                            
                            
                            <ul class="breadcrumb">
                                <li><a href="#">Dashboard</a></li>
                                <li><a href="#">TipsList</a></li>
                            </ul>
                        </div>                        
                    



                        <div class="wrapper wrapper-white">
                            
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-sortable">
                                    <thead>
                                        <tr>
                                            <th>Tips Title</th>
                                            <th>Tips Description</th>
                                            <th>Tips Image</th>
                                            
                                            
                                    
                                        </tr>
                                    </thead>                               
                                      
                                   
                                <tbody>
                                        <?php
                                        $tip=$obj->show_tips();
                                        foreach ($tip as $item) {
                                        echo '    
                                        <tr>
                                            <td>'.$item['tips_title'].'</td>
                                            <td>'.$item['tips_description'].'</td>
                                            <td><img src="images/'.$item['tips_img'].'" style=" width: 40px;height: 40px" ></td>
                                            
                                           
                                            

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
  
         