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
                            <h1>Add Contest</h1>
                            
                            
                            <ul class="breadcrumb">
                                <li><a href="#">Dashboard</a></li>
                                <li><a href="#">Add Contest</a></li>
                            </ul>
                        </div> 

                <div class="wrapper wrapper-white">
                    <form method="post">
                       <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Contest Title</label>
                                        <input type="text" class="form-control" name="txtcontesttitle" placeholder="Enter Contest Title"/>
                                    </div>
                                </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Open Or Closed</label>
                                        <select name="cmbopen" class="form-control">
                                            <option>~select~</option>
                                            <option value="0">Open</option>
                                            <option value="1">Closed</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Contest Starting Date</label>
                                        <input type="Date" class="form-control" name="txtstart" />
                                    </div>
                                </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                        <label>contest Ending Date</label>
                                        <input type="Date" class="form-control" name="txtend" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Select Category <span>list of Categories</span></label>
                                        <select name="cmbcat" class="form-control">
                                            <option>~select~</option>
                                            <?php 
                                            $cat=$obj->show_cat();
                                            foreach ($cat as $item)
                                            {

                                            echo"<option value=".$item['category_id'].">".$item['cat_name']."</option>";
                        
                                            }

                                            ?>
                                            </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Contest Description</label>
                                        <input type="text" class="form-control" name="txtdes" placeholder="Enter Contest Description"/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                
                                <div class="pull-right margin-top-10">
                                        <button type="submit" name="btnsubmit">Submit</button>
                                </div>
                            </div>
                    </form>
                </div>
<?php

if(isset($_POST['btnsubmit']))
{
         $c_tittle=$_POST['txtcontesttitle'];

        $c_start = $_POST['txtstart'];
        $c_end = $_POST['txtend'];
         $c_id=$_POST['cmbcat'];
         $is_open=$_POST['cmbopen'];
         $c_des=$_POST['txtdes'];
        

    $q  = $obj->add_contest($c_tittle,$c_start,$c_end,$c_id,$is_open,$c_des);


        echo '<script> alert("Contest Added Successfully");
    window.location.assign("ContestList.php")</script>';


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
  
         