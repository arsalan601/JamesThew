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
                            <h1>FAQs</h1>
                            
                            
                            <ul class="breadcrumb">
                                <li><a href="#">Dashboard</a></li>
                                <li><a href="#">Add FAQ</a></li>
                            </ul>
                        </div>           
                         <div class="wrapper wrapper-white">
                            
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-sortable">
                                    <thead>
                                        <tr>
                                            <th>FAQs</th>
                                            <th>Answere</th>
                                            
                                            
                                            
                                    
                                        </tr>
                                    </thead>                               
                                      
                                   
                                <tbody>
                                        <?php
                                        $FAQ=$obj->show_FAQs();
                                        foreach ($FAQ as $item) {
                                        echo '    
                                        <tr>
                                            <td>'.$item['faq_question'].'</td>
                                            <td>'.$item['faq_ans'].'</td>

                                        </tr>';
                                            
                                        }

                                        ?>      
                                    </tbody>
                                </table>
                            </div>

                        <div class="copyright">
                            <div class="pull-left">
                                &copy; 2015 <strong>Aqvatarius</strong>. All rights reserved.
                            </div>
                            <div class="pull-right">
                                <a href="#">Terms of use</a> / <a href="#">Privacy Policy</a>
                            </div>
                        </div>
                        <!-- ./Copyright -->
                        
                    </div>
                    <!-- ./page content container -->                                       
                </div>
                <!-- ./page content -->                                                
            
            <!-- ./page container -->
            
            <!-- right bar -->
            <!-- ./right bar -->            
            
                    <?php 
include"footer.php";
?>
  
         