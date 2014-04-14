<!DOCTYPE html>
<html lang="en">
  <head>
  
  
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="RebirthArmitage" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>Carpedeism</title>
	
	<link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>

    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="main.css" rel="stylesheet">
	
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="icon" href="favicon.ico" type="image/x-icon">
	
  </head>

  <body onload="res()" id="topbar">
  
  <div class="container" id="mbody"></div>

    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><img class="center-block" style="max-height:50px; margin-top:-15px;" src="./logo.png"/></a><div style="width:400px; height:50px; margin-top:-20px;"><h1>Carpe-Deism</h1></div>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Me</a></li>
            <li><a href="#about">My Articles</a></li>
            <li>
				<ul class="nav navbar-nav">
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">My Account<b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="#">Action</a></li>
						<li><a href="#">Another action</a></li>
						<li><a href="#">Something else here</a></li>
						<li class="divider"></li>
						<li><a href="#">Separated link</a></li>
						<li class="divider"></li>
						<li><a href="#">One more separated link</a></li>
					  </ul>
					</li>
				  </ul>
			</li>
          </ul>
		        <form class="navbar-form navbar-right" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
        </div><!--/.nav-collapse -->
      </div>
    </div>
	   

    
	<div class="container" id="mbody">
		<h3>Can you see me???</h3>
		<h3 style="color:white;">Carpe Diem My Friends...</h3>


<?PHP

$con=mysqli_connect("localhost","root","","carpedeism");

if (mysqli_connect_errno()){
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

for($i = 1; $i < 17; $i++){

$result = mysqli_query($con,"SELECT * FROM articles where id=". $i);

while($row = mysqli_fetch_array($result)){
	$title[$i] = $row['title'];
	$views[$i] = $row['views'];
}

mysqli_close($con);

$y = 0;
$x = 0;
$z = 0;

while ($y < 4){
	echo "<div class='row'>";
	$x = 0;
	$z = 0;
	while ($x < 3) {
			echo "<div class='col-md-3'>";
			echo "	<div class='jumbotron' id='jimg' style='background: url('./". $img[$y + $x + 1].".jpg') no-repeat center; background-size:500px;'>";
			echo "		<ul class='nav nav-pills nav-stacked' style='opacity:.8;width:185%; margin-left:-60px; text-align:left; margin-top:-10px;'>";
			echo "		  <li class='active'>";
			echo "			<a href='#'>";
			echo "			  <span class='badge pull-right' sytle='opacity:.8;'>".$views[]."</span>";
			echo "				".$title[]."";
			echo "			</a>";
			echo "		  </li>";
			echo "		</ul>";
			echo "		<div style='background:white; width:180%; margin-left:-60px; padding:2px;opacity:.7; margin-top:10px;'><p id='art-cont'>".$artCont[]."</p></div>";
			while $z < $tagCount - 1{
				echo " <div style='margin-top:15px;margin-right:-120px;'><span class='label label-info'>".$tag[]."</span>";
				$z++;
			}	
			echo "		<div style='padding:0px; buffer:0px; margin:0px; width:90%; margin-left:-60px; margin-top:10px; position: absolute; bottom:0;'><div class='progress'>";
			echo "		  <div class='progress-bar progress-bar-info' role='progressbar' aria-valuenow='20' aria-valuemin='0' aria-valuemax='100' style='width: ".$positive[]."%'>";
			echo "			<span class='sr-only'>20% Complete</span>";
			echo "		  </div>";
			echo "	</div></div></div></div>";
		$x++;
	}
	$y++;
}



?>