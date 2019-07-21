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
                            <h1>Add Tips</h1>
                            
                            
                            <ul class="breadcrumb">
                                <li><a href="#">Dashboard</a></li>
                                <li><a href="#">Add Tips</a></li>
                            </ul>
                        </div>                        
                          <div class="wrapper wrapper-white">
                              <form action="" method="POST">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Tips Title</label>
                                        <input type="text" class="form-control" name="txttipstitle" placeholder="Enter Tips Title"/>
                                    </div>
                                </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Tips Description</label>
                                        <input type="text" class="form-control" name="txtdescription" placeholder="Enter Tips Description"/>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Tips Image <span>Custom color</span></label>
                                        <br/>                                                               
                                        <input type="file" class="file btn-primary" name="image_pic"/>
                                    </div>
                                    <div class="pull-right margin-top-10">
                                       <button type="submit" name="btnsubmit">Submit</button>
                                    </div>

                                  </form> 
                                </div>


<?php

if(isset($_POST['btnsubmit']))
{
         $t_img=$_POST['image_pic'];
         $t_title=$_POST['txttipstitle'];
         $t_des=$_POST['txtdescription'];
        
$obj->add_tips($t_img,$t_title,$t_des);
echo'<script> alert("Tips Added Successfully");
                            window.location.assign("ViewTips.php")</script>';



}

?>
                            
                            



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
            </div>  
            <!-- ./page container -->
            
            <!-- right bar -->
            <!-- ./right bar -->            
            
                    <?php 
include"footer.php";
?>
  
         