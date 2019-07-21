<?php 
include"header.php";
include"sidebar.php";

if(isset($_GET['catid']))
{
    $a=$obj->show_catid($_GET['catid']);
    while ($item=mysqli_fetch_array($a))
    {
   
?>

                <!-- page content -->
                <div class="dev-page-content">                    
                    <!-- page content container -->
                    <div class="container" style="overflow: auto; height: 550px;">
                        
                        <!-- page title -->
                        <div class="page-title">
                            <h1>Update Categories</h1>
                            
                            
                            <ul class="breadcrumb">
                                <li><a href="#">Dashboard</a></li>
                                <li><a href="#">Update Categories</a></li>
                            </ul>
                        </div>                        
                    <div class="wrapper wrapper-white">
                        <form action="" method="POST">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Category Name</label>
                                        <input type="text" class="form-control" name="txtcatname" value="<?php echo $item['cat_name'] ?>" />
                                    </div>
                                </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Category Description</label>
                                        <input type="text" class="form-control" name="txtcatdes" value="<?php echo $item['cat_description'] ?>"/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Category Image <span ><?php echo $item['cat_img'] ?></span></label>
                                        <input type="hidden" name="previous"  value="<?php echo $item['cat_img'] ?>" />
                                        <br/>                                                               
                                        <input type="file" class="file btn-primary" value="" name="image_pic"/>
                                    </div>                        
                                </div>
                                
                            </div>
                            <div class="row">
                                
                                <div class="pull-right margin-top-10">
                                    <button type="submit" name="btnUpdate">Update</button>
                                </div>
                                </div>
                                 </form>
<?php

if(isset($_POST['btnUpdate']))
{
         $cat_nam=$_POST['txtcatname'];
         $cat_des=$_POST['txtcatdes'];
        $cat_img="";
       if(isset($_POST['image_pic']))
     {
         $cat_img=$_POST['image_pic'];
      }
      else
      {
        $cat_img=$_POST['previous'];
      }

            
$obj->update_cat($cat_nam,$cat_des,$cat_img,$_GET['catid']);
echo'<script> alert("Category Updated Successfully");
window.location.assign("ViewCategories.php")</script>';

}

}
}
else
{
?>
                           
                        
               <!-- page content -->
                <div class="dev-page-content">                    
                    <!-- page content container -->
                    <div class="container" style="overflow: auto; height: 550px;">
                        
                        <!-- page title -->
                        <div class="page-title">
                            <h1>Add Categories</h1>
                            
                            
                            <ul class="breadcrumb">
                                <li><a href="#">Dashboard</a></li>
                                <li><a href="#">Add Categories</a></li>
                            </ul>
                        </div>                        
                    <div class="wrapper wrapper-white">
                        <form action="" method="POST">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Category Name</label>
                                        <input type="text" class="form-control" name="txtcatname" placeholder="Enter Category Name"/>
                                    </div>
                                </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Category Description</label>
                                        <input type="text" class="form-control" name="txtcatdes" placeholder="Enter Category Description"/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Category Image <span>Custom color</span></label>
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
         $cat_name=$_POST['txtcatname'];
         $cat_des=$_POST['txtcatdes'];
         $image=$_POST['image_pic'];
        
            
$obj->add_categories($cat_name,$cat_des,$image);
echo'<script> alert("Category Added Successfully");
                            window.location.assign("AddCategories.php")</script>';

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
}
include"footer.php";
?>
  
         