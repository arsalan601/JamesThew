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
                            <h1>List Of Contest</h1>
                            
                            
                            <ul class="breadcrumb">
                                <li><a href="#">Dashboard</a></li>
                                <li><a href="#">Contest List</a></li>
                            </ul>
                        </div>                        
                    

                               <div class="wrapper wrapper-white">
                            
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-sortable">
                                    <thead>
                                        <tr>
                                            <th>Contest title</th>
                                            <th>Recipe Category</th>
                                            <th>Contest Start</th>
                                            <th>Contest End</th>
                                            
                                    
                                        </tr>
                                    </thead>                               
                                      
                                   
                                <tbody>
                                        <?php
                                        $cont=$obj->show_adminContest();
                                        foreach ($cont as $item) {
                                        echo '    
                                        <tr>
                                            <td>'.$item['contest_tittle'].'</td>
                                            <td>'.$item['cat_name'].'</td>
                                            <td>'.$item['contest_start'].'</td>
                                            <td>'.$item['contest_end'].'</td>
                                           
                                            

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
  
         