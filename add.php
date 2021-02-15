<?php 
	include_once("config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link id="theme-style" rel="stylesheet" href="css/add.css">
	<title>Add Script</title>
</head>
<body style="background-image: url('image/background.jpg'); background-repeat: no-repeat; background-attachment: fixed; background-size: 100% 100%;">
<div class="container mx-auto rounded pl-5 pr-5 pt-5 pb-5 ml-5 mr-5 mb-5 mt-5" style="background-color: White;"><br>
<?php
if( isset($_POST['Submit'])){
	$iso = mysqli_real_escape_string($mysqli, $_POST['iso']);
	$name = mysqli_real_escape_string($mysqli, $_POST['name']);
	$nicename = mysqli_real_escape_string($mysqli, $_POST['nicename']);
	$iso3 = mysqli_real_escape_string($mysqli, $_POST['iso3']);
	$numcode = mysqli_real_escape_string($mysqli, $_POST['numcode']);
	$phonecode = mysqli_real_escape_string($mysqli, $_POST['phonecode']);

	if( empty($iso) || empty($name) || empty($nicename)|| empty($iso3)|| empty($numcode)|| empty($phonecode) ){

		if(empty($iso)){
			echo "<font color='red'> ISO field is empty. </font><br/>";
		}
		if(empty($name)){
			echo "<font color='red'> Name field is empty. </font><br/>";
		}
		if(empty($nicename)){
			echo "<font color='red'> Nickname field is empty. </font><br/>";
		}
		if(empty($iso3)){
			echo "<font color='red'> ISO3 field is empty. </font><br/>";
		}
		if(empty($numcode)){
			echo "<font color='red'> Numcode field is empty. </font><br/>";
		}
		if(empty($phonecode)){
			echo "<font color='red'> Phonecode field is empty. </font><br/>";
		}
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a></br></br>";

	} else {

		$result = mysqli_query($mysqli, "INSERT INTO country(iso, name, nicename, iso3, numcode, phonecode) VALUES ('$iso', '$name', '$nicename', '$iso3', '$numcode', '$phonecode')");
		echo "<font color='black'> Data Added Successfully.";
		echo "<br></br><a href='indexcountries.php'><font color='red'> View Result </a>";
	}


}
?>

</div>
	
</body>
</html>