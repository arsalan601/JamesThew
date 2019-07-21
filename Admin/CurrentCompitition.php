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
                            <h1>Current Compitition</h1>
                            
                            <ul class="breadcrumb">
                                <li><a href="#">Dashboard</a></li>
                                <li><a href="#">Current Compitition</a></li>
                            </ul>
                        </div>                        
                        


                        <div class="wrapper wrapper-white">
                            
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-sortable">
                                    <thead>
                                        <tr>
                                            <th>User Name</th>
                                            <th>Recipe Title</th>
                                            <th>Recipe Description</th>
                                            <th>Recipe Image</th>
                                            <th>Submit Date</th>
                                            <th>Winner</th>
                                            
                                            
                                            
                                        </tr>
                                         <?php
$p=$obj->currentcompition();

foreach($p as $pp)
{

    $_SESSION['competition_id']=$pp['recipe_competition_id'];
    $_SESSION['contest_id']=$pp['cID'];
    echo "<tr>
                                         <td>".$pp['user_name']."</td>
                                  <td>".$pp['recipe_title']."</td>
                                  <td>".$pp['recipe_description']."</td>
                                  <td><img style='width:50px;height:50px' src=../../jamesthew.com/img/".$pp['recipies_pic']."></td>
                                  <td>".$pp['submit_date']."</td>
                                  <td>
                                     <input type='radio' name='optradio' onClick='javascript:confirmationwinner($(this));return false;' href='Addannounce.php'>
                                  </td>
                                            
                                            
                                            
                                        </tr>";

}
echo "<script>alert(".$_SESSION['competition_id'].")</script>"; 
?>
                                    </thead>                               
                                      
                                   
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
  
    