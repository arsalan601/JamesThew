<?php 
include('header and Nav.php');
$rcp_id=$_GET['id'];
$catname=$_GET['cat_name'];

 ?>
<!--banner-->
<div class="banner banner-blog">
    <div class="container ">
        <div class="main-heading">
            <h1><?php echo $catname?></h1>
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
<div class="col-md-8 col-lg-9">
<div class="recipe-set">
<div class="listing-buttons">
    <span class="grid "><i class="fa fa-th-large"></i></span>
    <span class="list current"><i class="fa fa-bars"></i></span>
</div>
<h2>Recent Recipes</h2>

<div class="recipe-listing listing-list">

<?php


$category=$obj->show_recipe($rcp_id);
foreach ($category as $item) {

   $a=0;   
if(isset($_SESSION['subdate']))
{

$date1=date_create($_SESSION['subdate']);
        //$date1=date_create("2018-12-05");
$date2=date_create( date('Y-m-d'));
$diff=date_diff($date1,$date2);
$a=$diff->format("%a");
}
echo($a);

foreach ($category as $item) {

if(isset($_SESSION['uname']))
{
    if((isset($_SESSION['subscriptiontype'])=="monthly" && $a<30) || (isset($_SESSION['subscriptiontype'])=="yearly" && $a<365))
        {
                    echo'<div class="listing">';
                    echo'<div class="image">';
                        echo'<a href="#">';
                            echo'<img src="images/recipes_pic/'.$item['recipies_pic'].'" alt="image"/>';
                        echo'</a>';
                    echo'</div>';
                    echo'<div class="detail">';
                          echo'<h4><a href="recipe-detail.php?id='.$item['reciepe_id'].'&cat_name='.$item['cat_name'].'">'.$item['recipe_title'].'</a></h4>';
                        echo'<p>
                        '.$item['recipe_description'].'
                        </p>';
                          echo'<div class="meta-listing">';
                            echo'<ul class="post-meta">';
                            if($item['is_paid']==1)
                               echo' <li class="author"><a href="#">paid</a></li>';
                             else
                                echo' <li class="author"><a href="#">Free</a></li>';
                            echo'</ul>';
                            echo'<div class="rating-box">
                                <span class="rating-figure">(4.1 / 5)</span>
                            </div>            </div>
                    </div>
                </div>
                ';
        }
        else
        {
                 echo'<div class="listing">';
                echo'<div class="image">';
                    echo'<a href="#">';
                        echo'<img src="images/recipes_pic/'.$item['recipies_pic'].'" alt="image"/>';
                    echo'</a>';
                echo'</div>';
                echo'<div class="detail">';
                     if($item['is_paid']==0)
             echo'<h4><a href="recipe-detail.php?id='.$item['reciepe_id'].'&cat_name='.$item['cat_name'].'">'.$item['recipe_title'].'</a></h4>';
                  else
             echo'<h4>'.$item['recipe_title'].'</h4>';

                    echo'<p>
                    '.$item['recipe_description'].'
                    </p>';
                      echo'<div class="meta-listing">';
                        echo'<ul class="post-meta">';
                        if($item['is_paid']==1)
                            echo' <li class="author">Please subcription Again</li>';
                             else
                                echo' <li class="author"><a href="#">Free</a></li>';
                            
                        echo'</ul>';
                        echo'<div class="rating-box">
                            <span class="rating-figure">(4.1 / 5)</span>
                        </div>            </div>
                </div>
            </div>
            ';
        }

}

else
{
     echo'<div class="listing">';
    echo'<div class="image">';
        echo'<a href="#">';
            echo'<img src="images/recipes_pic/'.$item['recipies_pic'].'" alt="image"/>';
        echo'</a>';
    echo'</div>';
    echo'<div class="detail">';
  if($item['is_paid']==0)
             echo'<h4><a href="recipe-detail.php?id='.$item['reciepe_id'].'&cat_name='.$item['cat_name'].'">'.$item['recipe_title'].'</a></h4>';
         else
             echo'<h4>'.$item['recipe_title'].'</h4>';

        echo'<p>
        '.$item['recipe_description'].'
        </p>';
          echo'<div class="meta-listing">';
            echo'<ul class="post-meta">';
              if($item['is_paid']==1)
               echo' <li class="author"><a href="#">paid</a></li>';
             else
                echo' <li class="author"><a href="#">Free</a></li>';
            echo'</ul>';
            echo'<div class="rating-box">
                <span class="rating-figure">(4.1 / 5)</span>
            </div>            </div>
    </div>
</div>
';
}
}
}


?>


</div>
</div>
</div>
<div class="col-md-4 col-lg-3">
<aside>
<div class="side-bar">
<!--recipes search widget-->
<div class="widget recipe-search">
     <?php
 $result=$obj->show_category();
foreach($result as $items){

echo '
        <div class="category-list">
            <ul>
                <li><a href="recipe-listing.php?id='.$items['category_id'].'&cat_name='.$items['cat_name'].'">'.$items['cat_name'].'</a>
                    <div class="list-icons">
                        <span><img src=images/categories/'.$items['icon_img'].'></span>
                    </div>
        </div>' ;
        
        }
    
    ?>
   
</div>
<!--recipes search widget ends-->

<!--popular recipes widget-->
<div class="widget latest-news-widget">
    <h2>popular recipes</h2>
    <ul>
        <li>
            <div class="thumb">
                <a href="#">
                    <img src="images/temp-images/widget-thumbnail.jpg" alt="thumbnail"/>
                </a>
            </div>
            <div class="detail">
                <a href="#">Pimento Cheese Potato Skins</a>
                <span class="post-date">March 21,2015</span>
            </div>
        </li>

        <li>
            <div class="thumb">
                <a href="#">
                    <img src="images/temp-images/widget-thumbnail.jpg" alt="thumbnail"/>
                </a>
            </div>
            <div class="detail">
                <a href="#">Pimento Cheese Potato Skins</a>
                <span class="post-date">March 21,2015</span>
            </div>
        </li>

        <li>
            <div class="thumb">
                <a href="#">
                    <img src="images/temp-images/widget-thumbnail.jpg" alt="thumbnail"/>
                </a>
            </div>
            <div class="detail">
                <a href="#">Pimento Cheese Potato Skins</a>
                <span class="post-date">March 21,2015</span>
            </div>
        </li>

        <li>
            <div class="thumb">
                <a href="#">
                    <img src="images/temp-images/widget-thumbnail.jpg" alt="thumbnail"/>
                </a>
            </div>
            <div class="detail">
                <a href="#">Pimento Cheese Potato Skins</a>
                <span class="post-date">March 21,2015</span>
            </div>
        </li>

    </ul>
</div>
<!--popular recipes widget ends-->

</div>
</aside>
</div>
</div>

</div>
</div>

<?php include('Footer.php') ?>