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
            <?php
            $id=$_SESSION['id'];
            $user=$obj->show_User($id);
            foreach ($user as $item) 
            {
                echo'
<div class="line-heading">
    <h1 class="lined">'.$item['first_name'].' '.$item['last_name'].'</h1>
</div>
<div class="wrapper-head-chef">
    <div class=head-chef>
        <div class="left-side">
            <a href="#"><img src="images/temp-images/head-chef.jpg" alt="head chef"/></a>
        </div>
        <div class="right-side">

            <div class="separator-chef"></div>
            <p style="color: white;">'.$item['user_description'].'</p>
            <nav class="nav-collapse">
                <ul class="main-menu right">
                            
                    <li style="color: white;"><h4>favorite_spices : </h4>'.$item['favorite_spices'].'</li>
                    <li style="color: white;"><h4>favorite_appliances : </h4>'.$item['favorite_appliances'].'</li>
                    <li style="color: white;"><h4>favorite_cusine : </h4>'.$item['favorite_cusine'].'</li>
                </ul>
        </nav>
';
            }
            ?>
            <br>
            <section class="contact-option-single">
                            <h3>Recipies</h3>
                            <h4 style="color: white;"><a href="">hello</a></h4>
                            <h4 style="color: white;"><a href="">hello</a></h4>
                            <h4 style="color: white;"><a href="">hello</a></h4>
                            <h4 style="color: white;"><a href="">hello</a></h4>
                        </section>
            
           
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