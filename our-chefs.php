<?php
include('header and Nav.php');

?>
<!--banner-->
<div class="banner banner-blog">
    <div class="container ">
        <div class="main-heading">
            <h1>our chef</h1>
        </div>

    </div>
</div>

<!--banner ends-->

<!--main content area-->
<section class="wrapper-main-contents all-chefs">
<div class="container">
<div class="line-heading">
    <h1 class="lined">James Thew</h1>
</div>
<div class="wrapper-head-chef">
    <div class=head-chef>
        <div class="left-side">
            <a href="#"><img src="images/temp-images/head-chef.jpg" alt="head chef"/></a>
        </div>
        <div class="right-side">
            <ul class="expertise">
                <?php
            $category=$obj->show_category();
            foreach ($category as $item) {
                echo'
                <li><img src=images/categories/'.$item['icon_img'].'>'.$item['cat_name'].'</li>
                     ';
                         }
            ?>

            </ul>
         
           
            <div class="separator-chef"></div>
            <p>
                James Thew is one of the famous cook working in one of the five star hotels in the city. He is so famous that the publishers approach him to write recipes book, and provide some of the tips pertaining to the recipes, etc. Also some of the producers want him to work for their recipe shows where he needs to cook two or three recipes of different categories like juices, non-vegetarian and vegetarian recipes, Italian recipes, etc.

            </p>
            <br/>
            <a class="button-default theme-filled video-button" href="#">Watch Video</a>

           
        </div>

    </div>
    <div class="bg-corner-head-chef">
        <img src="images/temp-images/bg-corner-shef.jpg" alt="image"/>
    </div>
</div>
</div>
</section>

<?php
include('Footer.php');
?>