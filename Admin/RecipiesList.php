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
                            <h1>List Of Recipies</h1>
                            
                            
                            <ul class="breadcrumb">
                                <li><a href="#">Dashboard</a></li>
                                <li><a href="#">Recipies List</a></li>
                            </ul>
                        </div>                        
                    



                        <div class="wrapper wrapper-white">
                            
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-sortable">
                                    <thead>
                                        <tr>
                                            <th>Picture</th>
                                            <th>Recipe Title</th>
                                            <th>Preparation Time</th>
                                            <th>Cooking Time</th>
                                            <th>Difficulty</th>
                                            <th>Serves</th>
                                            <th>category</th>
                                            <th>description</th>
                                            <th>&nbsp</th>

                                            
                                            
                                        </tr>
                                    </thead>                               
                                    <tbody>
                                        <?php
                                        $recipie=$obj->show_adminrecipies();
                                        foreach ($recipie as $item) {
                                        echo '    
                                        <tr>
                                            <td><img src="img/recipes_pic/'.$item['recipies_pic'].'" style=" width: 40px;height: 40px" ></td>
                                            <td>'.$item['recipe_title'].'</td>
                                            <td>'.$item['prepation_time'].'</td>
                                            <td>'.$item['cooking_time'].'</td>
                                            <td>'.$item['diffulty'].'</td>
                                            <td>'.$item['serve'].'</td>
                                            <td>'.$item['cat_name'].'</td>
                                            <td>'.$item['recipe_description'].'</td>
                                            <td><button><a href="addrecipies.php?recpID='.$item['reciepe_id'].'">update</a></button>
                                    
                                            

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
  
