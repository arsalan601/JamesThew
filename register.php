<?php
include('header and Nav.php');

?>
<!--banner-->
<div class="banner banner-blog">
    <div class="container ">
        <div class="main-heading">
            <h1>Register</h1>
        </div>

    </div>
</div>

<!--banner ends-->

<!--main content area-->
<div class="wrapper-main-contents">
<div class="container">
<div class="row">
<div class="col-md-2"></div>
<div class="col-md-8">
    <!--single post-->
    <article class="post-single">
        <div class="post-contents">
            <h1 class="lined">Register</h1><br>
            <div class="post-contents-inner">
                
                  <fieldset>
                        <form action="" method="POST">

                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Username" name="name" />
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Enter Your Valid E-mail Address" name="email" />
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" name="pass" />
                            </div>
                            <div class="form-group">
                                <input type="radio" name="rdbsub" value="monthly"><label>Monthly Subscription</label> 
                                <input type="radio" name="rdbsub" value="yearly"><label>Yearly Subscription</label>
                            </div>
                            <div class="form-group">
                                <button class="default-btn min-width-button theme-color" type="submit" name="btnsubmit">Register</button>
                            </div>
                            <?php
                                    if(isset($_POST['btnsubmit']))
                                    {
                                    $user_name = $_POST['name'];
                                    $Email = $_POST['email'];
                                    $password = $_POST['pass'];
                                    $sub=$_POST['rdbsub'];
                                    $subdate= date('Y-m-d');
                                    

                                    $a=$obj->register($user_name,$Email,$password,$sub,$subdate);

                                    
                                      echo '<script> 
                                      window.location.assign("login.php");
                                       </script>';
                                       
  
                                  }
                                ?>
                            
                          <p>Already have a account? <a href="login.php">Sign in</a></p>
                        </form>


                        </fieldset>  

</div>
</div>
</article>
</div>
</div>
</div>
</div>
<?php
include('Footer.php');
?>