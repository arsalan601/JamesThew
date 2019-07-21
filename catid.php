<?php 

    include('Xfunction/x-function.php');
    $obj= new model();
    $cid=$_GET['cid'];
?>
<select class="form-control" name="cmb_racipeid" onchange="rid(this.value)">
                                    <option>Select Recipe</option>
                                    <?php 
											$cat=$obj->show_recipe($cid);
											foreach ($cat as $item) {
												echo"<option value=".$item['recipe_title'].">".$item['recipe_title']."</option>";
											}
										?>
                                </select>