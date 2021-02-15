<?php

  //initialize session
  session_start();

  if( !isset($_SESSION['email']) || empty($_SESSION['email'])){
    header('location: login.php');
    exit;
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link id="theme-style" rel="stylesheet" href="css/index.css">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  <title>Dashboard</title>
</head>
<body style="background-image: url('image/background.jpg'); background-repeat: no-repeat; background-attachment: fixed; background-size: 100% 100%;">
  <div class="container">
    <div class="row">

  
            <h2 style="color: white;"><strong>&nbsp;&nbsp;&nbsp;&nbsp; Welcome to My Web Application :)</strong></h2>
                    
		<div class="col-sm-12" style="padding-right: 47%; padding-left: 0%;">
          <div class="rounded" style="background-color: White; margin-bottom: 0px; padding: 2px; padding-left: 10px;">
            <h1 style="color: Black;">Dashboard</h1>
            <h3 class="card-title" style="margin-bottom: 1px;"><a class="text-dark" href="indexcountries.php"><li style="color: blue;"><u> Countries</u></li></h3>
            
        </div>
          <div class="card-group">
              <img class="rounded card-img-top border border-dark" src="image/country.jpg"  alt="Card image cap">
                
    </div>
    
		<div class="col-sm-12 border border-bottom-dark mt-3">
			
		</div>
		</div>
		<h4 class="col-sm-1"><a href="logout.php" class="mt-3 btn btn-danger" style="color: white;">Logout</a></h4>
		</div>  
      </div>
    </div>
  </div>
  
</body>
</html>