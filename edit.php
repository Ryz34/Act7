<?php 

	include_once("config.php");

if( isset($_POST['update']))
{
			$id = mysqli_real_escape_string($mysqli, $_POST['id']);
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
					echo "<font color='red'> iso3 field is empty. </font><br/>";
				}
				if(empty($numcode)){
					echo "<font color='red'> Numcode field is empty. </font><br/>";
				}
				if(empty($phonecode)){
					echo "<font color='red'> Phonecode field is empty. </font><br/>";
				}
				echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";

			} else {

				$result = mysqli_query($mysqli, "UPDATE country set iso='$iso', Name='$name', nicename='$nicename', iso3='$iso3', numcode='$numcode', phonecode='$phonecode' WHERE id=$id");
				header("Location: indexcountries.php");
				
			}

}
?>

<?php 

	$id = $_GET['id'];

	$result = mysqli_query($mysqli,"SELECT * from country where id=$id");

	while($res = mysqli_fetch_array($result))
	{
		$iso = $res['iso'];
		$name = $res['name'];
		$nicename = $res['nicename'];
		$iso3 = $res['iso3'];
		$numcode = $res['numcode'];
		$phonecode = $res['phonecode'];
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="wIDth=device-wIDth, initial-scale=1.0">
    <link id="theme-style" rel="stylesheet" href="css/edit.css">
	<title>Edit data</title>
</head>
<body style="background-image: url('image/background.jpg'); background-repeat: no-repeat; background-attachment: fixed; background-size: 100% 100%;">
<div class="container mx-auto rounded pl-5 pr-5 pt-5 pb-5 ml-5 mr-5 mb-5 mt-5" style="background-color: White;"><br>
	<form name="form1" method="post" action="edit.php">

    <table wIDht="25%">
			<tr>
				<td>ISO</td>
				<td><input type="text" name="iso" value="<?php echo $iso;?>"></td>
			</tr>
			<tr>
				<td>Name</td>
				<td><input type="text" name="name" value="<?php echo $name;?>"></td>
			</tr>
			<tr>
				<td>Nickname</td>
				<td><input type="text" name="nicename" value="<?php echo $nicename;?>"></td>
			</tr>
			<tr>
				<td>ISO3</td>
				<td><input type="text" name="iso3" value="<?php echo $iso3;?>" ></td>
			</tr>
			<tr>
				<td>Numcode</td>
				<td><input type="text" name="numcode" value="<?php echo $numcode;?>"></td>
			</tr>
			<tr>
				<td>Phonecode</td>
				<td><input type="text" name="phonecode" value="<?php echo $phonecode;?>"></td>
			</tr>
			<tr>
				<td>
					<input type="hIDden" name="id" value="<?php echo $_GET['id'];?>">
				</td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>		
		
<br>
	</form>

</div>

	
</body>
</html>