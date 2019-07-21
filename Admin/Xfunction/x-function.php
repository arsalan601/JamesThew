<?php

/**
* 
*/
class model
{
	
	function con()
	{
		$A=mysqli_connect("localhost","root","","jamesthew") or die ("error in database");
		return $A;
	}

	function add_recipy($prepationtime,$cookingtime,$diffulty,$serve,$calories,$protiens,$carbs,$fat,$saturation,$fiber,$sugar,$salt,$category,$recipiespic,$recipetitle,$recipedescription,$cmbpaid)
	{
		$B=mysqli_query($this->con(),"call sp_addrecipie('$prepationtime','$cookingtime','$diffulty','$serve','$calories','$protiens','$carbs','$fat','$saturation','$fiber','$sugar','$salt','$category','$recipiespic','$recipetitle','$recipedescription','$cmbpaid')") or die ("error in Add Recipies");
		return $B;
	}


	function show_cat()
	{
		$C=mysqli_query($this->con(),"SELECT category_id,cat_name FROM tbl_categories") or die("error in show category");
		return $C;

	}

	function add_contest($c_tittle,$c_start,$c_end,$c_id,$is_open,$c_des)
	{
		$D=mysqli_query($this->con(),"call sp_addcontest('$c_tittle','$c_start','$c_end','$c_id','$is_open','$c_des');") or die ("Error In AddContest");
        return $D;
	}

	function add_categories($cat_name,$cat_des,$image)
	{
		$E=mysqli_query($this->con(),"call sp_addCategory('$cat_name','$cat_des','$image')") or die ("Error In AddCategory");
        return $E;
	}
 
    function show_adminrecipies()
	{
		$F=mysqli_query($this->con(),"call sp_showrecipiee") or die("error in show category");
		return $F;

	}

    function show_recipies()
	{
		$G=mysqli_query($this->con(),"call sp_showrecipiee") or die("error in show category");
		return $G;

	}


	function add_faqs($f_questions,$f_answeres)
	{
		$X=mysqli_query($this->con(),"call sp_addFAQs('$faq_question','$faq_ans')") or die ("Error In AddFAQs");
        return $X;
	}

	function AddTips($t_img,$t_title,$t_des)
	{
		$Y=mysqli_query($this->con(),"call sp_addtips('$t_img','$t_title','$t_des')") or die ("Error In AddTips");
        return $Y;
	}

	function show_adminCategory()
		{
			$G=mysqli_query($this->con(),"call sp_showcat") or die("error in show category");
			return $G;

		}

	function show_adminContest()
		{
			$H=mysqli_query($this->con(),"call sp_showcontest") or die("error in show contest");
			return $H;

		}

	function show_adminComp()
		{
			$J=mysqli_query($this->con(),"call sp_showcomp()") or die("error in show compitition");
			return $J;

		}

	function show_tips()
		{
			$K=mysqli_query($this->con(),"call sp_showtips") or die("error in show Tips");
			return $K;

		}

	function show_FAQs()
		{
			$L=mysqli_query($this->con(),"call sp_showFAQs") or die("error in show FAQs");
			return $L;

		}

		function show_catid($id)
		{
			$L=mysqli_query($this->con(),"call sp_catid($id)") or die("error in show cat");
			return $L;

		}

		function update_cat($cat_nam,$cat_des,$cat_img,$catid)
		{
			
			$M=mysqli_query($this->con(),"call sp_updatecat('$cat_nam','$cat_des','$cat_img',$catid)") or die("error in update Category");
			

		}

		function delete_cat($cat_nam,$cat_des,$cat_img,$catid)
		{
			
			$M=mysqli_query($this->con(),"call sp_dltcat()") or die("error in update Category");
			return $M;

		}

		function addanounce($comp_id,$cat_id,$date)
		{
			$N=mysqli_query($this->con(),"INSERT INTO tbl_announce(recipe_competition_id,contest_id,anounce_date) VALUES($comp_id,$cat_id,'$date')") or die("Error in adding winner");
			return $N;			
		}

		function updatecompetition($comp_id)
		{
			$O=mysqli_query($this->con(),"UPDATE  tbl_recipe_competition set winner=1 where recipe_competition_id=$comp_id") or die("Error in update competition");
		}

		function currentcompition(){
			$N=mysqli_query($this->con(),"call currentcompition();") or die("Error in view compitition");
			return $N;	
		}

function updatecontest($id){
			$N=mysqli_query($this->con(),"call sp_updatecontest($id);") or die("Error in view compitition");
			return $N;	
		}


	}

	












?>