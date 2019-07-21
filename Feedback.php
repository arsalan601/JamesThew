<?php 
include('header and Nav.php');
?>
<script>
	
	function cid(cid){
		var ajx = new XMLHttpRequest();
		ajx.open("GET","catid.php?cid="+cid,true);
		ajx.onreadystatechange=function(){
			document.getElementById('recipe').innerHTML = ajx.responseText;
		}
		ajx.send();
	}

	function rid(rid){
		var ajx = new XMLHttpRequest();
		ajx.open("GET","racipeid.php?rid=",true);
		ajx.onreadystatechange=function(){
			document.getElementById('rating').innerHTML = ajx.responseText;
		}
		ajx.send();
	}

</script>
<!--banner-->
<div class="banner banner-blog">
    <div class="container ">
        <div class="main-heading">
            <h1>Feed Back</h1>
        </div>

    </div>
</div>
<!--banner ends-->

<!--main content area-->
<div class="wrapper-main-contents">
<div class="container">
<div class="row">
<div class="col-md-12 col-lg-12">
    <!--single post-->
    <article class="post-single">
        <div class="post-contents">
            <div class="post-contents-inner">
            	<h1 class="lined">Feedback</h1>
               
               
        <div class="recipe-set">
            <div class="contact-container">
            	
            	
                <div class="row">
                
                    <div class="col-md-12">
                    	<fieldset>
						<form action="" method="POST">
							<div class="contact-option-single">
							<div class="form-group">
								<input class="form-control" type="text" name="txt_name" placeholder="Please Enter Your Name" required>
							</div>
							<div class="form-group">
								<input class="form-control" type="text" name="txt_email" placeholder="Please Enter Your Valid E-mail Adress" required>
							</div>
							<div class="form-group">
								<input class="form-control" type="Number" name="txt_num" placeholder="Please Enter Your PhoneNumber" required>
							</div>

							<div class="form-group">
								<select class="form-control" name="cat_name" onchange="cid(this.value)">
										<option>Select Category</option>
										<?php 
											$cat=$obj->show_category();
											foreach ($cat as $item) {
												echo"<option value=".$item['category_id'].">".$item['cat_name']."</option>";
											}
										?>
								</select>
							</div>
							<div class="form-group" id="recipe">
								
							</div>
							<div class="form-group" id="rating">
									
							</div>
							<div class="form-group">
								<textarea class="form-control" type="text" name="txt_msg" placeholder="Please Enter Your Comment" required></textarea>
							</div>
							<br><br>
							     <input class="default-btn min-width-button theme-color" type="submit" name="btnsubmit" value="Submit">
							     <?php
							     if(isset($_POST['btnsubmit']))
							     {
							  
							     	$name = $_POST['txt_name'];
							     	$email = $_POST['txt_email'];
							     	$review = $_POST['cmb_review'];
							     	$phonenumber = $_POST['txt_num'];
							     	$subject = $_POST['cmb_racipeid'];
							     	$detail = $_POST['txt_msg'];

							     	$a=$obj->addfeedback($name,$email,$review,$phonenumber,$subject,$detail);
							     	
								  	if ($a==true) {
									  echo '<script> 
									  alert("Mubarak Ho '.$name.' Ka Feedback Add Hogaya!!! :* :*");
									  window.location.assign("Feedback.php");
									   </script>';
									}
									else {
									  echo '<script> 
									  alert("Nahi Hoya...!!!");
									   </script>';
									}

								  	}

							     ?>
							</div>
						</form>   
						</fieldset>                     
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
<!--main content area-->
<?php include('Footer.php') ?>