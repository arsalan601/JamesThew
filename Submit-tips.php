<?php
include('header and Nav.php');

 $cntst_id=$_GET['id'];


?>
<!--banner-->
<div class="banner banner-blog">
    <div class="container ">
        <div class="main-heading">
            <h1>Submit Tips</h1>
        </div>

    </div>
</div>
<!--banner ends-->



<div class="wrapper-main-contents">
<div class="container">
<div class="row">
<div class="col-md-12 col-lg-12">
    <!--single post-->

    <article class="post-single">
        <div class="post-contents">
            <div class="post-contents-inner">
    <div class="recipe-set submit-recipe-set">
        <h2>Submit Tips</h2>
        <div class="submit-recipe-form">
            <form action="" id="" method="POST" enctype="multipart/form-data">
                <div class="row">
                <div class="col-md-12">
                    <label for="title">Tips Title</label>
                    <input class="required" title="*Enter Recipe Title" type="text" name="txt_title"/>
                </div>
                <div class="col-md-12">
                    <label for="short-description">User Name</label>
                    <input class="required" type="text" name="txt_username" title="*enter User name"/>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-12">
                <label for="recipe-content">Tip Description</label>
                <textarea class="required" title="*Enter Recipe Description" name="txt_recipe_description" cols="30" rows="10"></textarea>
                </div>
            </div>
            <div class="row">
                <label for="upload-image">Upload Tip Image</label>
                <input class="required" title="*Please Upload Recipe Images" type="file" name="fileUpload"/>
             </div>

                </div>
                <div class="text-center">
                    <button type="submit" class="default-btn min-width-button theme-color" name="btnsubmit" value="Submit">Submit Your Tip</button>
                    </div>
                    <?php


                    if(isset($_POST['btnsubmit']))
                    {

                        $recipe_title = $_POST['txt_title'];
                        $user_name = $_POST['txt_username'];
                        $recipe_description = $_POST['txt_recipe_description'];
                        $recipies_pic = $_FILES['fileUpload']['name'];


                        $obj->addsubmitrecipe($prepation_time,$cooking_time,$diffulty,$serve,$calories,$protiens,$carbs,$fat,$saturation,$fiber,$sugar,$salt,$cntst_id,$recipies_pic,$recipe_title,$recipe_description,$user_name,$user_email,$submit_date);
                            
                            echo"<script>alert('Error')</script>";
                            
                                      echo '<script> 
                                      alert("Your Recipe Has Been Sucessfully Submitted...!!!");
                                      window.location.assign("index.php");
                                       </script>';
                        
                }

                    ?>
                
            </form>
        </div>
    </div>
</div>
</div>
</div>
</div>
</article>
</div>
</div>
</div>
</div>
<?php include('Footer.php');

?>
   
