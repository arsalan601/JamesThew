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
                             <form action="" method="POST">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Frequently Ask Questions</label>
                                        <input type="text" class="form-control" name="txtFAQs" placeholder="Enter FAQs"/>
                                    </div>
                                </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Answeres</label>
                                        <input type="text" class="form-control" name="txtAns" placeholder="Enter Answeres"/>
                                    </div>
                                </div>
                            
                            <div class="row">
                                
                                <div class="pull-right margin-top-10">
                                        <button type="submit" name="btnsubmit">Submit</button>
                                    </div>
                                </form>
                            </div>

<?php

if(isset($_POST['btnsubmit']))
{
         $f_questions=$_POST['txtFAQs'];
         $f_answeres=$_POST['txtAns'];

$obj->add_faqs($f_questions,$f_answeres);
    echo'<script> alert("FAQs Added Successfully");
    window.location.assign("addFAQs.php")</script>';


 }
?>



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
  
         