<?php
include('header and Nav.php');

?>
<!--banner-->
<div class="banner banner-blog">
    <div class="container ">
        <div class="main-heading">
            <h1>Login</h1>
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
            <h1 class="lined">Login</h1><br>
            <div class="post-contents-inner">
                
                  <fieldset>
                        <form action="" method="POST">

                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Your username" name="name" />
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Your password" name="pass" />
                            </div>
                            <div class="form-group">
                              <button class="default-btn min-width-button theme-color" type="submit" name="btnsubmit">Login</button>
                            </div>    
                                <?php
                                    if(isset($_POST['btnsubmit']))
                                    {
                                      $user_name = $_POST['name'];
                                      $password = $_POST['pass'];
                                    

                                      $b=$obj->login($user_name,$password);
                                    

                                        foreach ($b as $item)
                                        {
                                            $_SESSION['role_id']=$item['role_id'];                
                                            $_SESSION['id']=$item['user_id'];
                                            $_SESSION['uname']=$item['user_name'];
                                            $_SESSION['subscriptiontype']=$item['subcribtion_type'];
                          
                                            $_SESSION['subdate']=$item['subcribtion_date'];
                                        }

                                       $c=mysqli_num_rows($b);

                                        if($c>0)
                                        {

                                            if($_SESSION['role_id']==1)
                                              {
                                                  echo '<script> 
                                                  window.location.assign("Admin/index.php");
                                                        </script>';
                                              }
                                              else
                                              {
                                                  echo '<script> 
                                                  window.location.assign("index.php");
                                                  </script>';
                                              }
                                        }
                                        else
                                        {
                                            echo '<script> 
                                              alert("invalid user name and password");
                                              </script>';
                                        }

                                  }
                                ?>
  
                            
                            
                          <p>Dont have an account yet? <a href="register.php">Sign up.</a></p>
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