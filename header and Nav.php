<?php 
session_start();
    include('Xfunction/x-function.php');
    $obj= new model();

?>
<!DOCTYPE html>
<html>

<!-- Mirrored from templates.majesticthemes.com/recipepress/recipe-listing.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Apr 2018 13:57:32 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <title>Food & Health</title>
    <!--google fonts-->
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Karla:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <!--jquery ui stylesheet-->
    <link rel="stylesheet" href="../../code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">

    <!-- site favicon -->
    <link rel="icon" href="images/favicon.png" />

    <!--selectric stylesheet-->
    <link rel="stylesheet" href="css/selectric.css"/>
    <!--font awesome stylesheet-->
    <link rel="stylesheet" href="css/font-awesome.min.css"/>
    <!--swipe box stylesheet-->
    <link rel="stylesheet" href="css/swipebox.css"/>
    <!-- mean menu stylesheet-->
    <link rel="stylesheet" href="css/meanmenu.css"/>
    <!--slick slider stylesheet-->
    <link rel="stylesheet" href="css/slick.css"/>
    <link rel="stylesheet" href="css/slick-theme.css"/>
    <!--bootstrap stylesheets-->
    <link rel="stylesheet" href="css/bootstrap.css"/>
    <link rel="stylesheet" href="css/bootstrap-theme.css"/>
    <!--animate stylesheet-->
    <link rel="stylesheet" href="css/animate.css"/>
    <!--main stylesheet-->
    <link rel="stylesheet" href="css/main.css"/>
</head>
<body>
<!--pre-loader-->
<div class="preloader">
    <div class="loadr">
        <svg  viewbox="0 0 74.6 81">
            <path d="M67.8,12.9C51.7,5.2,26.2,0.2,26.2,0.2c-10.9-1.8-9.3,11.4-9,20.2c0,0.7,0.1,1.4,0.1,2c7.8,1.5,19.7,4,29.2,7.4c11.4,4.1,9.6,8.3,9.2,16c-0.2,4.9-0.4,14,1.1,21.3c7.7,1.4,13.8,1.9,13.1-0.3c-6.3-7.2-0.1-29.6,1.8-34.2C73.3,28.7,79.3,18.4,67.8,12.9z">      </path>
            <path d="M58.9,79.5c-6.5-5.6-6.2-23.6-5.8-31.3c0.4-7.7,2.1-11.9-9.2-16c-15.3-5.5-37.3-8.8-37.3-8.8c-9.1-1.1-6.6,8.4-5.5,15.1c1.7,10,5.4,22,7.9,27.8c2.8,6.5,8.9,7.3,8.9,7.3S65.4,85.1,58.9,79.5z"></path>
        </svg>
    </div>
</div>
<!--pre-loader ends-->

<!--header-->
<header>
    <div class="header header-var1 fade-load-down">
        <div class="responsive-menu"></div>
        <div class="nav-var1">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">

                        <div class="left-nav">
                            <nav class="nav-collapse">
                                <ul class="main-menu left">
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="our-chefs.php">About Chef</a></li>
                                    <ul><a href="recipe-listing.php?id='.$items['category_id'].'&cat_name='.$items['cat_name'].'"></a></ul>
                                    <li>
                                        <a href="recipe.php">Recipes</a>
                                        <ul>
                                            <?php
                                            $category=$obj->show_category();
                                            foreach ($category as $item) {

                                            echo'
                                            <li><a href="recipe-listing.php?id='.$item['category_id'].'&cat_name='.$item['cat_name'].'">'.$item['cat_name'].'</a></li>';
                                        }
                                            ?>
                                        </ul>
                                    </li>
                                    
                                    <li><a href="Feedback.php">Feedback</a></li>

                                </ul>
                            </nav>
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="logo-wrapper">
                            <a href="index.php"><img src="images/logo.png" alt="logo"/></a>
                        </div>
                    </div>

                    <div class="col-md-5">
                        <div class="right-nav">
                            <div class="wrapper-links">
                    <span class="sign-in-buttons">
                        <?php if(isset($_SESSION['uname']))
                            echo'<a class="login" href="UserProfile.php">Welcome:'.$_SESSION['uname'].'</a>
                            <a class="login" href="logout.php">Logout</a>';
                        else
                            echo'
                        <a class="login" href="login.php">Login</a>
                        <a class="register" href="register.php">Register</a>
                        ';
                        ?>
                    </span>
                            </div>
                            <nav class="nav-collapse">
                                <ul class="main-menu right">
                                    <li><a href="FAQ.php">F.A.Q</a></li>
                                    
                                    <li><a href="contact.php">Contact Us</a></li>
                                    <?php
                                                                        if(isset($_SESSION['uname']))
                                    {
                                    echo'<li><a class="submit-recipe" href="submit-recipe.php">Submit recipe</a></li>';
                                    }
                                    else
                                    {
                                     echo'<li><a class="submit-recipe" href="#"  style="visibility: hidden;">Submit recipe</a></li>';
                                    }
                                    ?>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
       


</header>
<!--header ends-->
