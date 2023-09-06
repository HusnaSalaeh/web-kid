<meta charset="utf-8">
<?php
include('../condb.php'); 
	
	$firstName = $_POST["firstName"];
	$lastName = $_POST["lastName"];
	$gender = $_POST["gender"];
	$age = $_POST["age"];
	$disease = $_POST["disease"];
	$childNo = $_POST["childNo"];
	$relation = $_POST["relation"];

  //   $check = "
	// SELECT firstName 
	// FROM tbl_parent  
	// WHERE firstName = '$firstName' 
	// ";
  //   $result1 = mysqli_query($condb, $check) or die(mysqli_error());
  //   $num=mysqli_num_rows($result1);

  //   if($num > 0)
  //   {
	//     echo "<script>";
	//     echo "alert(' ข้อมูลซ้ำ กรุณาเพิ่มใหม่อีกครั้ง !');";
	//     echo "window.history.back();";
	//     echo "</script>";
  //   }else{

	$sql = "INSERT INTO tbl_parent
	(
	firstName,
	lastName,
	gender,
	age,
	disease,
	childNo,
	relation
	)
	VALUES
	(
	'$firstName',
	'$lastName',
	'$gender',
	'$age',
	'$disease',
	'$childNo',
	'$relation'
	)";

	$result = mysqli_query($condb, $sql) or die ("Error in query: $sql " . mysqli_error());

	// }//close chk duplicat firstName

    mysqli_close($condb);
	
	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('เพิ่มข้อมูลสำเร็จ');";
	echo "window.location = 'index.php'; ";
	echo "</script>";
	}else{
	echo "<script type='text/javascript'>";
	//echo "alert('Error!!');";
	echo "window.location = 'index.php'; ";
	echo "</script>";
}
?>