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
                            <h1>Add Recipies</h1>
                            
                            <ul class="breadcrumb">
                                <li><a href="#">Dashboard</a></li>
                                <li><a href="#">Add Recipies</a></li>
                            </ul>
                        </div>                        
                        



                        <div class="wrapper wrapper-white">
                            
                            <form action="" method="POST">
                              <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Recipies Title</label>
                                        <input type="text" class="form-control" name="txtrecipiestitle" placeholder="Enter Recipies Title"/>
                                    </div>
                                </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Preperation Time</label>
                                        <input type="text" class="form-control" name="txtpreperationtime" placeholder="Enter Preperation Time"/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Cooking Time</label>
                                        <input type="text" class="form-control" name="txtcookingtime" placeholder="Enter Cooking Time"/>
                                    </div>
                                </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Difficulty</label>
                                        <input type="text" class="form-control" name="txtdifficulty" placeholder="Enter Difficulties"/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Serves</label>
                                        <input type="text" class="form-control" name="txtserve" placeholder="Serves How Many Peoples ?"/>
                                    </div>
                                </div>
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
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Calories</label>
                                        <input type="text" class="form-control" name="txtcalories" placeholder="Enter Calories"/>
                                    </div>
                                </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Protiens</label>
                                        <input type="text" class="form-control" name="txtprotiens" placeholder="Enter Protiens"/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Carbs</label>
                                        <input type="text" class="form-control" name="txtcarbs" placeholder="Enter Carbs"/>
                                    </div>
                                </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Fats</label>
                                        <input type="text" class="form-control" name="txtfats" placeholder="Enter Fats"/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Saturation</label>
                                        <input type="text" class="form-control" name="txtsaturation" placeholder="Enter Saturation"/>
                                    </div>
                                </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Fiber</label>
                                        <input type="text" class="form-control" name="txtFiber" placeholder="Enter Fiber"/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Sugar</label>
                                        <input type="text" class="form-control" name="txtsugar" placeholder="Enter sugar"/>
                                    </div>
                                </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Salt</label>
                                        <input type="text" class="form-control" name="txtsalt" placeholder="Enter Salt"/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Recipy Description</label>
                                        <input type="text" class="form-control" name="txtdescription" placeholder="Enter Description"/>
                                    </div>
                                </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Paid Or Unpaid</label>
                                        <select name="cmbpaid" class="form-control">
                                            <option value="0">Paid</option>
                                            <option value="1">Unpaid</option>
                                        </select>
                                
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Recipy Image <span>Custom color</span></label>
                                        <br/>                                                               
                                        <input type="file" class="file btn-primary" name="image_pic"/>
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
                         $prepationtime=$_POST['txtpreperationtime'];
                         $cookingtime=$_POST['txtcookingtime'];
                         $diffulty=$_POST['txtdifficulty'];
                         $serve=$_POST['txtserve'];
                         $calories=$_POST['txtcalories'];
                         $protiens=$_POST['txtprotiens'];
                         $carbs=$_POST['txtcarbs'];
                         $fat=$_POST['txtfats'];
                         $saturation=$_POST['txtsaturation'];
                         $fiber=$_POST['txtFiber'];
                         $sugar=$_POST['txtsugar'];
                         $salt=$_POST['txtsalt'];
                         $category=$_POST['cmbcat'];
                         $recipies_pic=$_POST['image_pic'];
                         $recipetitle=$_POST['txtrecipiestitle'];
                         $recipedescription=$_POST['txtdescription'];
                         $cmbpaid=$_POST['cmbpaid'];
                          


                          $obj->add_recipy($prepationtime,$cookingtime,$diffulty,$serve,$calories,$protiens,$carbs,$fat,$saturation,$fiber,$sugar,$salt,$category,$recipiespic,$recipetitle,$recipedescription,$cmbpaid);
                            echo'<script> alert("Recipe Added Successfully");
                            window.location.assign("addrecipies.php")</script>';
                                        

                             
                          }
                        

                        ?>


                        
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
  
    