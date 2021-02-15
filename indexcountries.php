<?php 
	include_once("config.php");

	$result = mysqli_query($mysqli, "SELECT * FROM country");
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta Name="viewport" content="width=device-width, initial-scale=1.0">
    <link id="theme-style" rel="stylesheet" href="css/Style.css">
	<title>Homepage</title>
</head>
<body style="background-image: url('image/background.jpg'); background-repeat: no-repeat; background-attachment: fixed; background-size: 100% 100%;">
<div class="container mx-auto rounded pl-5 pr-5 pt-5 pb-5 ml-5 mr-5 mb-5 mt-5" style="background-color: lightblue;"><br>
<h1><?php echo "Countries around the World"; ?></h1>
	<h3><a href="add.html" style="color: white;"><b>+ Add New Data </b></a></h3><br/><br/>

    <table>
		<tr>
			<td class="pl-2"><u><b> ISO </td>
			<td class="pl-2"><u><b> Name </td>
			<td class="pl-4"><u><b> Nickname </td>
			<td class="pl-5"><u><b> ISO3</td>
			<td class="pl-5"><u><b> Numcode</td>
			<td class="pl-5"><u><b> Phonecode</td>
			<td class="pl-5"><u><b> Created at</td>
			<td class="pl-5"><u><b> Update</td>
		</tr> 
</div>
        <?php
while( $res = mysqli_fetch_array($result)){
    echo "<tr>";
    echo "<td>".$res['iso']."</td>";
    echo "<td>".$res['name']."</td>";
    echo "<td>".$res['nicename']."</td>";
    echo "<td>".$res['iso3']."</td>";
    echo "<td>".$res['numcode']."</td>";
    echo "<td>".$res['phonecode']."</td>";
    echo "<td>".$res['created_at']."</td>";
    echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete this record?')\">Delete</a></td>";
    echo "</tr>";
} 

?>
	</table><br><br>

    <nav class="btn btn-success blog-nav nav nav-justified my-5">
		<a class="text-white nav-link-prev nav-item nav-link rounded" href="index.php" style="color: Red;"><b>EXIT</b><i class="arrow-prev fas fa-long-arrow-alt-left"></i></a>
	</nav>
	
</body>
</html>