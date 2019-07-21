<?php 
include('header and Nav.php');
 ?>
<!--banner-->



<div class="banner banner-blog">
    <div class="container ">
        <div class="main-heading">
            <h1>hello</h1>
        </div>

    </div>
</div>

<div class="advance-search">
    <!--advance search form-->

    <div class="container">
        <div class="wrapper-search">
            <div class="container-tags">
            <span class="tag">
                <span class="tag-inner">Find Recipes <i class="fa fa-angle-down"></i></span>
            </span>

            </div>
            <div class="outer-advance-search">

                <form action="#" id="advance-search">
                    <fieldset>
                        <div class="inner-advance-search">

                            <div class="form-field">
                                <label for="ingredient">ingredient</label>
                                <select name="ingredient" id="ingredient" class="advance-selectable">
                                    <option value="ing1" selected="selected">Any Ingredient</option>
                                    <option value="ing2">Butter</option>
                                    <option value="ing3">Cheese</option>
                                    <option value="ing4">Cream</option>
                                    <option value="ing5">Yeast</option>
                                </select>
                            </div>

                            <div class="form-field">
                                <label for="course">course</label>
                                <select name="course" id="course" class="advance-selectable">
                                    <option value="ing1" selected="selected">Any Course</option>
                                    <option value="ing2">Butter</option>
                                    <option value="ing3">Cheese</option>
                                    <option value="ing4">Cream</option>
                                    <option value="ing5">Yeast</option>
                                </select>
                            </div>

                            <div class="form-field">
                                <label for="cuisine">cuisine</label>
                                <select name="cuisine" id="cuisine" class="advance-selectable">
                                    <option value="ing1" selected="selected">Any Cuisine</option>
                                    <option value="ing2">Butter</option>
                                    <option value="ing3">Cheese</option>
                                    <option value="ing4">Cream</option>
                                    <option value="ing5">Yeast</option>
                                </select>
                            </div>

                            <div class="form-field">
                                <label for="time">Cooking Time</label>
                                <select name="time" id="time" class="advance-selectable">
                                    <option value="ing1" selected="selected">Any Cooking Time</option>
                                    <option value="ing2">Butter</option>
                                    <option value="ing3">Cheese</option>
                                    <option value="ing4">Cream</option>
                                    <option value="ing5">Yeast</option>
                                </select>
                            </div>

                            <div class="form-field">
                                <label for="calories">calories</label>
                                <select name="calories" id="calories" class="advance-selectable">
                                    <option value="ing1" selected="selected">Any Calories</option>
                                    <option value="ing2">Butter</option>
                                    <option value="ing3">Cheese</option>
                                    <option value="ing4">Cream</option>
                                    <option value="ing5">Yeast</option>
                                </select>
                            </div>

                            <button type="submit"><i class="fa fa-search"></i></button>

                        </div>
                    </fieldset>

                </form>
            </div>
        </div>
    </div>

    <!--advance search form ends-->
</div>

<!--banner ends-->
<div class="recipes-home-body inner-page">
<div class="container">
<div class="row">
<div class="col-md-12 col-lg-12">
<div class="recipe-set ">
<div class="wrapper-detail-contents detail-2">
<div class="single-recipe-detail">
    

<?php



        $id=$_SESSION['id'];
            $user=$obj->show_User_recipie($id);
            foreach ($user as $item) 
            {
                echo'



    <div class="wrapper-recipe-heading">
        <div class="heading">
            <h2>'.$item['recipe_title'].'</h2>

        </div>
       
    </div>

    <div class="slider-recipe-detail2">
        <div class="wrapper-slider-detail">
            <div class="recipe-slider">
                <div class="slider-detail2">
               <img src="images/recipes_pic/'.$item['recipies_pic'].'" alt="image"/>     
                </div>
                
            </div>

            <ul class="recipe-specs-2">
                <li><span>Yield : </span>'.$item['serve'].'</li>
                <li><span>Servings : </span>'.$item['serve'].'</li>
                <li><span>Prep Time : </span>'.$item['prepation_time'].'</li>
                <li><span>Cook Time : </span>'.$item['cooking_time'].'</li>
            </ul>
        </div>
    </div>
</div>


<div class="recipe-detail-body">
<ul class="pre-tags">
    <li><span>Cuisine : </span>Chinese</li>
    <li><span>Course : </span>Side Dish</li>
    <li><span>Skill Level : </span>'.$item['diffulty'].'</li>
</ul>
<div class="separator-post"></div>
<p>'.$item['recipe_description'].'</p>
<br/>
<div class="ingredients-checkbox">
    <div class="ingredients">
        <h3>Ingredients</h3>
        <ul>
            <li>
                <label>
                    <input type="checkbox"/>
                    60 ml extra virgin olive oil
                </label>
            </li>
            <li>
                <label>
                    <input type="checkbox"/>
                    230 g bacon, diced into 1/4 -inch pieces
                </label>
            </li>
            <li>
                <label>
                    <input type="checkbox"/>
                    120 ml dry white wine
                </label>
            </li>
            <li>
                <label>
                    <input type="checkbox"/>
                    3 large eggs
                </label>
            </li>
            <li>
                <label>
                    <input type="checkbox"/>
                    180 ml grated parmesan cheese
                </label>
            </li>
            <li>
                <label>
                    <input type="checkbox"/>
                    1 Spoon Salt
                </label>
            </li>

        </ul>
    </div>
    <div class="nutritional">
        <h3>Nutritional</h3>
        <div class="nutrition-detail">
            <div class="left-box">
                Protine
                <br/>
                <span>6.60g</span>
            </div>
            <div class="right-box">
                Fat Saturated
                <br/>
                <span>39.5g</span>
            </div>
        </div>
        <div class="separator-post"></div>
        <div class="nutrition-detail">
            <div class="left-box">
                Deitary Fiber
                <br/>
                <span>50g</span>
            </div>
            <div class="right-box">
                Sodium
                <br/>
                <span>10g</span>
            </div>
        </div>
        <div class="separator-post"></div>
        <div class="nutrition-detail">
            <div class="left-box">
                Fat Total
                <br/>
                <span>60g</span>
            </div>
            <div class="right-box">
                Carbohydrate
                <br/>
                <span>0</span>
            </div>
        </div>
        <div class="separator-post"></div>
        <div class="nutrition-detail">
            <div class="left-box">
                Energy
                <br/>
                <span>900mg</span>
            </div>
            <div class="right-box">
                Cholesterol
                <br/>
                <span>80g</span>
            </div>
        </div>

    </div>
</div>
';

}

?>











</div>
</div>
</div>

</div>

</div>
</div>
<?php include('Footer.php') ?>