

<?php

$conn = mysqli_connect("localhost","root","","exam2") or die("Connection failed");

if(isset($_POST['id'])){
$batch=$_POST['id'];
$dept=$_POST['dept'];

// $table_name=$_POST['dept'].'_'.$_POST['batch'];
$sql = "SELECT  Distinct semester FROM `exam` where batch = '$batch' and Department ='$dept'";

	$query = mysqli_query($conn,$sql) or die("Query Unsuccessful.");
    $str = "";
    $str = "<option  value=''>Select Semester</option>";
	
	while($row = mysqli_fetch_assoc($query)){
	  $str .= "<option value='{$row['semester']}'>{$row['semester']}</option>";

	}	echo $str;
}	



















elseif($_POST['batch_sem']){
	// $semester=$_POST['semester'];
	$dept=$_POST['dept_sem'];
	$batch=$_POST['batch_sem'];
	// $table_name=$_POST['dept'].'_'.$_POST['batch'];
	$sql = "SELECT Distinct semester FROM `exam` where Department='$dept'  and batch ='$batch'";
	
	$query = mysqli_query($conn,$sql) or die("Query Unsuccessful.");
    $str = "";
    $str = "<option  value=''>Select Semester</option>";
	
	while($row = mysqli_fetch_assoc($query)){
	  $str .= "<option value='{$row['semester']}'>{$row['semester']}</option>";

	}	echo $str;
	}











elseif($_POST['batch_std']){
	// $semester=$_POST['semester'];
	$dept=$_POST['dept_std'];
	$batch=$_POST['batch_std'];
	// $table_name=$_POST['dept'].'_'.$_POST['batch'];
	$sql = "SELECT Username FROM `exam` where Department='$dept'  and batch ='$batch'";
	
		$query = mysqli_query($conn,$sql) or die("Query Unsuccessful.");
		$str = "";
		$str = "<option value=''>Select User Name</option>";
		
		while($row = mysqli_fetch_assoc($query)){
		  $str .= "<option value='{$row['Username']}'>{$row['Username']}</option>";
	
		}	echo $str;
	}
	

	
elseif($_POST['user_img']){
	$user_img=$_POST['user_img'];
	$dept_img=$_POST['dept_img'];
	$batch_img=$_POST['batch_img'];
	$semester_img=$_POST['semester_img'];
	// $table_name=$_POST['dept'].'_'.$_POST['batch'];
	$sql = "SELECT  Distinct ImageName FROM `exam` where  Department='$dept_img'  and batch ='$batch_img' and Semester = '$semester_img' and Username='$user_img'";
// $sql=	"SELECT  Distinct ImageName FROM `exam` where Username = 'Mohd Khalid Haleez Siddiqui s/o Ejaz Ahm' and Department='CIS'  and batch ='2010' and Semester = '1'";
		$query = mysqli_query($conn,$sql) or die("Query Unsuccessful.");
		$str = "";
		// $str = "<option value=''>Select ImageName</option>";
		
		while($row = mysqli_fetch_assoc($query)){
		  $str .= "<option value='{$row['ImageName']}'>{$row['ImageName']}</option>";
	
		}	echo $str;
	}
	


	?>
	<!-- SELECT *
FROM exam
ORDER BY if((Username = '' OR Username IS NULL OR Username = '_%'),'999999',Username) ASC; -->