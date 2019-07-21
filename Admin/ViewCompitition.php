<?php 
include"header.php";
include"sidebar.php";
?>
<script>
    function confirmationwinner(anchor)
    {
        var conf = confirm('Are you sure you want to set this winner?');

        if(conf)
            window.location=anchor.attr("href");
    }
</script>
                <!-- page content -->
                <div class="dev-page-content">                    
                    <!-- page content container -->
                    <div class="container" style="overflow: auto; height: 550px;">
                        
                        <!-- page title -->
                        <div class="page-title">
                            <h1>List Of Compitition</h1>
                            
                            
                            <ul class="breadcrumb">
                                <li><a href="#">Dashboard</a></li>
                                <li><a href="#">Compitition List</a></li>
                            </ul>
                        </div>                        
                    



                       <div class="wrapper wrapper-white">
                            
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-sortable">
                                    <thead>
                                        <tr>
                                            <th>User Name</th>
                                            <th>Recipe Name</th>
                                            <th>Recipe Description</th>
                                            <th>Recipe Image</th>
                                            <th>Submit Date</th>
                                            <th>Winner</th>
                                            
                                        </tr>
                                    </thead> 
                                    <tbody>
                                        
                                        <?php
                                        $comp=$obj->show_adminComp();
                                        foreach ($comp as $item) {
                                             $_SESSION['compitition_id']=$item['recipe_competition_id'];
                                              $_SESSION['contest_id']=$item['Contest_id'];
                                        echo '    
                                        <tr>
                                            
                                            <td>'.$item['user_name'].'</td>
                                            <td>'.$item['recipe_title'].'</td>
                                            <td>'.$item['recipe_description'].'</td>
                                            <td><img src="img/recipes_pic/'.$item['recipies_pic'].'" style=" width: 40px;height: 40px" ></td>
                                            <td>'.$item['submit_date'].'</td>
                                            <td><input type="radio" name="optradio" onclick="javascript:confirmationwinner($(this));return false;" href="Addannounce.php"></td>
                                           
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
  
         