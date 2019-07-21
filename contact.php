<?php
include('header and Nav.php');
?>
<!--banner-->
<div class="banner banner-blog">
    <div class="container ">
        <div class="main-heading">
            <h1>Contact Us</h1>
        </div>

    </div>
</div>
<!--banner ends-->

<!--main content area-->
<section class="recipes-home-body inner-page">
    <div class="container">
        <div class="recipe-set">
            <h2>Our Locations</h2>
            <div class="contact-container">
                <div class="row">
                    <div class="col-md-4">
                        <section class="contact-option-single">
                            <h3>Registered office</h3>
                            <p>
                                Main Shar-e-Faisal Progressive Center <br/>
                                2nd Floor James Thew
                            </p>
                            <ul class="contact-options">
                                <li class="phone"><span>Phone: </span>+92-304-0123153</li>
                                <li class="fax"><span>Fax: </span>+92-304-0123153</li>
                                <li class="email"><span>Email: </span>adeen.khan.53@gmail.com</li>
                            </ul>
                        </section>
                    </div>
                    <div class="col-md-4">
                        <section class="contact-option-single">
                            <h3>Our Restaurant</h3>
                            <p>
                                Main Shar-e-Faisal Progressive Center <br/>
                                2nd Floor James Thew
                            </p>
                            <ul class="contact-options">
                                <li class="phone"><span>Phone: </span>+92-304-0123153</li>
                                <li class="fax"><span>Fax: </span>+92-304-0123153</li>
                                <li class="email"><span>Email: </span>adeen.khan.53@gmail.com</li>
                            </ul>
                        </section>
                    </div>
                    <div class="col-md-4">
                        <section class="contact-option-single">
                            <h3>Other Office</h3>
                            <p>
                                Main Shar-e-Faisal Progressive Center <br/>
                                2nd Floor James Thew
                            </p>
                            <ul class="contact-options">
                                <li class="phone"><span>Phone: </span>+92-304-0123153</li>
                                <li class="fax"><span>Fax: </span>+92-304-0123153</li>
                                <li class="email"><span>Email: </span>adeen.khan.53@gmail.com</li>
                            </ul>
                        </section>
                    </div>
                </div>

                <div class="separator-post"></div>
<form action="" id="contact-form" method="post" >
                <div class="row">
                    <div class="col-md-6">
                        <div class="contact-option-single">
                            <h3>Quick Contact</h3>
                            <fieldset>
                                <form>
                                    <input class="required" type="text" name="txt_name" placeholder="Name" title="*Enter Your Name"/>
                                    <input class="required" type="email" name="txt_email" placeholder="Email Address" title="*enter valid email address"/>
                                    <input type="number" class="number" name="txt_number" placeholder="Phone Number"/>
                                    <textarea class="required" name="txt_message" id="message" cols="30" rows="10" placeholder="Message" title="*type your message"></textarea>
                                    <input class="default-btn min-width-button theme-color" type="submit" name="btn_submit" value="submit message">


                                        <?php



                                         if(isset($_POST['btn_submit']))
                                         {

                                            $name = $_POST['txt_name'];
                                            $email = $_POST['txt_email'];
                                            $phonenumber = $_POST['txt_number'];
                                            $message = $_POST['txt_message'];
                        
                                            $a=$obj->contact($name,$email,$phonenumber,$message);

                                            if ($a==true) {
                                              echo '<script> 
                                              alert("Mubarak Ho '.$name.' Ka Message Aaya!!! :* :*");
                                              window.location.assign("contact.php");
                                               </script>';
                                            }
                                            else {
                                              echo '<script> 
                                              alert("Nahi Hoya...!!!");
                                               </script>';
                                            }

                                        }

                                        ?>


                                </form>

                            </fieldset>
                            <div class="error-container"></div>
                            <div id="message-sent"></div>
                        </div>
                    </div>
                    <div class="col-md-6">


                        <!--google map-->
                        <div class="contact-option-single">
                            <h3>Find Location on Map</h3>
                            <div class="map-wrapper">
                                <div>
                                  <img src="images/Map.png" width="530px";>  
                                </div>

                            </div>
                            
                        </div>
                        <!--google map ends-->
                    </div>
                </div>
 </form>
            </div>
        </div>
    </div>
</section>
<!--main content area-->
<?php include('Footer.php'); ?>


