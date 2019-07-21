<?php 

class model 
{
	
	function con()
	{
		$a=mysqli_connect("localhost","root","","jamesthew") or die("Error In Database");
		return $a;
	}
	function show_category()
	{
		$b=mysqli_query($this->con(),"call sp_category") Or die ("Error in s_cat");
		return $b;
	}
	function show_recipe($cid)
	{
		$c=mysqli_query($this->con(),"call sp_recipe($cid)") or die ("Error in s_recipe");
		return $c;
	}
	function show_all_recipe()
	{
		$d=mysqli_query($this->con(),"call sp_all_recipe") or die ("Error in s_recipe");
		return $d;
	}
	function show_recipe_detail($rid)
	{
		$e=mysqli_query($this->con(),"call sp_recipe_detail($rid)") or die ("Error in s_Recipe_Detail");
		return $e;
	}
	function addfeedback($name,$email,$review,$phonenumber,$subject,$detail)
	{
		$f=mysqli_query($this->con(),"call sp_addfeedback('$name','$email','$review','$phonenumber','$subject','$detail')") or die ("Error in s_Add Feed Back");
		return $f;
	}
	function contact($name,$email,$phonenumber,$message)
	{
		$g=mysqli_query($this->con(),"call sp_contact('$name','$email','$phonenumber','$message')") or die ("Error in Contact");
		return $g;
	}
	function tip()
	{
		$h=mysqli_query($this->con(),"call sp_tips") or die ("Error in Tip");
		return $h;
	}
	function login($user_name,$password)
	{
		$i=mysqli_query($this->con(),"call sp_login('$user_name','$password')") or die ("Error in Login");
		return $i;
	}
	function register($user_name,$Email,$password,$sub,$subdate)
	{
		$j=mysqli_query($this->con(),"call sp_register('$user_name','$Email','$password','$sub','$subdate')") or die ("Error in Register");
		return $j;
	}
	function show_compition()
	{
		$k=mysqli_query($this->con(),"call sp_show_contest") or die ("Error in show compitition");
		return $k;
	}
	function addsubmitrecipe($prepation_time,$cooking_time,$diffulty,$serve,$calories,$protiens,$carbs,$fat,$saturation,$fiber,$sugar,$salt,$cntst_id,$recipies_pic,$recipe_title,$recipe_description,$user_name,$user_email,$submit_date)
	{
		$l=mysqli_query($this->con(),"INSERT INTO tbl_recipe_competition(prepation_time,cooking_time,diffulty,serve,calories,protiens,carbs,fat,saturation,fiber,sugar,salt,Contest_id,recipies_pic,recipe_title,recipe_description,user_name,user_email,submit_date) VALUES ('$prepation_time','$cooking_time','$diffulty','$serve','$calories','$protiens','$carbs','$fat','$saturation','$fiber','$sugar','$salt','$cntst_id','$recipies_pic','$recipe_title','$recipe_description','$user_name','$user_email','$submit_date')") or die ("Error in Submit recipe");
		return $l;
	}
	function show_winner()
	{
		$m=mysqli_query($this->con(),"call sp_ShowWinner") or die ("Error in Show Winner");
		return $m;
	}
	function show_User($id)
	{
		$n=mysqli_query($this->con(),"call sp_showuser($id)") or die ("Error in User Profile");
		return $n;
	}
	function show_user_recipe($prepation_time,$cooking_time,$diffulty,$serve,$calories,$protiens,$carbs,$fat,$saturation,$fiber,$sugar,$salt,$recipies_pic,$recipe_title,$recipe_description,$user_name,$user_email,$submit_date,$user_id)
	{
		$o=mysqli_query($this->con(),"call sp_SubmitUserRecipe('$prepation_time','$cooking_time','$diffulty','$serve','$calories','$protiens','$carbs','$fat','$saturation','$fiber','$sugar','$salt','$recipies_pic','$recipe_title','$recipe_description','$user_name','$user_email','$submit_date','$user_id')") or die ("Error in User Submit Recipe");
		return $o;
	}
	
	function sp_AddTip($tips_titles,$tips_desspcriptions,$tips_imgs)
	{
		$p=mysqli_query($this->con(),"call sp_AddTip('$tips_titles','$tips_desspcriptions','$tips_imgs')") or die ("Error in Show tips");
		return $p;
	}


}

?>