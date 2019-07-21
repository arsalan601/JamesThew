<?php
include('header and Nav.php');

 $cntst_id=$_GET['id'];  


?>
<!--banner-->
<div class="banner banner-blog">
    <div class="container ">
        <div class="main-heading">
            <h1>Submit Recipe</h1>
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
        <h2>Submit Recipe</h2>
        <div class="submit-recipe-form">
            <form action="" id="" method="POST" enctype="multipart/form-data">
                <div class="row">
                <div class="col-md-6">
                    <label for="title">Recipe Title</label>
                    <input class="required" title="*Enter Recipe Title" type="text" name="txt_title"/>
                </div>
                <div class="col-md-6">
                    <label for="short-description">User Name</label>
                    <input class="required" type="text" name="txt_username" title="*enter User name"/>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="title">Email</label>
                    <input class="required" type="email" name="txt_email" placeholder="Email Address" title="*enter valid email address"/>
                </div>
                
                    <div class="col-sm-6">
                        <label for="skill">Skill Level</label>
                        <input class="required" type="text" name="txt_skill" placeholder="Type any one Easy,Medium,Hard" title="*Enter Skill Level"/>
                    </div>
                </div>
                <div class="row">
                <div class="col-md-6">
                    <label for="title">Serve</label>
                    <input class="required" title="*Enter Serve" type="text" name="txt_serve" title="*valid countity" class="number" />
                </div>
                <div class="col-md-6">
                    <label for="short-description">Calories</label>
                    <input class="required" title="*Enter Calories" type="text" name="txt_calories" />
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="title">Protiens</label>
                    <input class="required" title="*Enter Protiens" type="text" name="txt_protiens"  />
                </div>
                <div class="col-md-6">
                    <label for="short-description">Carbs</label>
                    <input class="required" title="*Enter Carbs" type="text" name="txt_carbs" />
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="title">Fat</label>
                    <input class="required" title="*Enter Fat" type="text" name="txt_Fat" />
                </div>
                <div class="col-md-6">
                    <label for="short-description">Saturation</label>
                    <input class="required" title="*Enter Saturation" type="text" name="txt_saturation"/>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="title">Fiber</label>
                    <input class="required" title="*Enter Fiber" type="text" name="txt_fiber" />
                </div>
                <div class="col-md-6">
                    <label for="short-description">Sugar</label>
                    <input class="required" title="*Enter Sugar" type="text" name="txt_sugar" />
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="title">Salt</label>
                    <input class="required" title="*Enter Salt" type="text" name="txt_salt" />
                </div>
                <div class="col-md-6">
                    <label for="short-description">Preparation Time</label>
                    <input class="required" title="*Enter Preparation Time" type="text" name="txt_preparation_time"/>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="title">Cook Time</label>
                    <input class="required" title="*Enter Cook Time" type="text" name="txt_cook_time" />
                </div>
                
            </div>
            <div class="row">
                <div class="col-lg-12">
                <label for="recipe-content">User Description</label>
                <textarea class="required" title="*Enter User Description" name="txt_user_description" cols="30" rows="10"></textarea>
                </div>
            </div>

            
        
            <div class="row">
                <div class="col-lg-12">
                <label for="recipe-content">Recipe Description</label>
                <textarea class="required" title="*Enter Recipe Description" name="txt_recipe_description" cols="30" rows="10"></textarea>
                </div>
            </div>
            <div class="row">
                <label for="upload-image">Upload Recipe Images</label>
                <input class="required" title="*Please Upload Recipe Images" type="file" name="fileUpload"/>
             </div>

                </div>
                <div class="text-center">
                    <button type="submit" class="default-btn min-width-button theme-color" name="btnsubmit" value="Submit">Submit Your Recipe</button>
                    </div>
                    <?php


                    if(isset($_POST['btnsubmit']))
                    {

                        $prepation_time = $_POST['txt_preparation_time'];
                        $cooking_time = $_POST['txt_cook_time'];
                        $diffulty = $_POST['txt_skill'];
                        $serve = $_POST['txt_serve'];
                        $calories = $_POST['txt_calories'];
                        $protiens = $_POST['txt_protiens'];
                        $carbs = $_POST['txt_carbs'];
                        $fat = $_POST['txt_Fat'];
                        $saturation = $_POST['txt_saturation'];
                        $fiber = $_POST['txt_fiber'];
                        $sugar = $_POST['txt_sugar'];
                        $salt = $_POST['txt_salt'];
                        $recipies_pic = $_FILES['fileUpload']['name'];
                        $recipe_title = $_POST['txt_title'];
                        $recipe_description = $_POST['txt_recipe_description'];
                        $user_name = $_POST['txt_username'];
                        $user_email = $_POST['txt_email'];
                        $submit_date =date("Y-m-d");
                       

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
   
