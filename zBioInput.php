<html>
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Science Exploration | Mini Ecosystem</title>

<link rel="stylesheet" href="foundation.min.css">
<link rel="stylesheet" href="styleSheet.css">

</head>
<body> 
<div class="top-bar">
	<div class="top-bar-left">
		<ul class="menu">
			<li class="menu-text">Experiments</li>
			<li>
			<a href="default.htm">Main Page</a></li>
			<li><div class="dropdown">
					<button onclick="myFunction1()" class="dropbtn">  Photic Sneeze Reflex</button>
					<div id="myDropdown1" class="dropdown-content">
						<a href="zLightReflex_info.html">About</a>
						<a href="zLightReflexSelfTest.html">Self Test</a>
						
					</div>
				</div>
			</li>
			<li><div class="dropdown">
				<button onclick="myFunction2()" class="dropbtn">  Mini Ecosystem</button>
				<div id="myDropdown2" class="dropdown-content">
					<a href="zInfoOnBioTable.html">Background</a>
					<a href="zBioInput.php">Enter Data</a>
					<a href="zMiniEcosystemOutput.php">Data Output </a>
				</div>
			</div></li>
			<li><div class="dropdown">
					<button onclick="myFunction3()" class="dropbtn">  Milgram Experiment</button>
					<div id="myDropdown3" class="dropdown-content">
						<a href="zMilgramExperimentInput.php">Start Here</a>
						<a href="zCompareMilgramResults.php">Compare Results</a>
						<a href="zMilgramExperimentAbout.html">About the Experiment</a>
						<a href="zMilgramSignificance.htm">Significance of Experiment</a>
					</div>
			</div></li>
			<li><div class="dropdown">
					<button onclick="myFunction4()" class="dropbtn">  Buoyancy</button>
					<div id="myDropdown4" class="dropdown-content">
						<a href="zPHETsym.htm">PHET Simulation</a>
						<a href="zBouyInfo.htm">Information on Buoyancy</a>
											</div>
			</div></li>

		</ul>
	</div>
</div>
<div class="callout large primary">
	<div class="row column text-center">
		<h1>Science Simulations</h1>
		<h2 class="subheader"> Mini Ecosystem Enter Data </h2>
	</div>
</div>
<div class="row medium-8 large-7 columns">
<div class="blog-post">

<?php 
   if ( ! empty( $_POST ) ) {   
$host="216.119.113.102";
$username="mjhol_Admin";
$password="20mjholton**";
$db_name="mjholton_MySQL";
$tbl_name="ecosystemtable";
$connection=mysqli_connect("$host","$username","$password","$db_name");

if (mysqli_connect_error())
    {
    echo "The application has failed to connect to the mysql database server: " .mysqli_connect_error();
    }
    
    
$carnivore   = test_input($_POST["animal2"]);
mysqli_query($connection,"UPDATE mjholton_MySQL.ecosystemtable SET animal2 = '$carnivore' Where generation = 1");

$herbivore   = test_input($_POST["animal3"]);
mysqli_query($connection,"UPDATE mjholton_MySQL.ecosystemtable SET animal3 = '$herbivore' Where generation = 1");

$carnivorePopulation  = test_input($_POST["animal2population"]);
mysqli_query($connection,"UPDATE mjholton_MySQL.ecosystemtable SET animal2population= '$carnivorePopulation' Where generation = 1");

$herbivorePopulation  = test_input($_POST["animal3population"]);
mysqli_query($connection,"UPDATE mjholton_MySQL.ecosystemtable SET animal3population= '$herbivorePopulation' Where generation = 1");

$plantPopulation = test_input($_POST["ferns"]);
mysqli_query($connection,"UPDATE mjholton_MySQL.ecosystemtable SET ferns= '$plantPopulation' Where generation = 1");

$rainlevel = test_input($_POST["averageRainfall_1"])*1;
mysqli_query($connection,"UPDATE mjholton_MySQL.ecosystemtable SET averageRainfall= '$rainlevel' Where generation = 1");

$fact = test_input($_POST["extraFactor_1"]);
mysqli_query($connection,"UPDATE mjholton_MySQL.ecosystemtable SET extraFactor= '$fact' Where generation = 1");


if($fact == "Hunters Arive"){
if($herbivorePopulation<=5000){	$herbivorePopulation = $herbivorePopulation * 0.9;
 
 } if( $carnivorePopulation<=5000){	$carnivorePopulation = $carnivorePopulation * 0.9;

}
if($herbivorePopulation>5000){	$herbivorePopulation = $herbivorePopulation -1000;
 
 } if( $carnivorePopulation>5000){	$carnivorePopulation = $carnivorePopulation -1000;

}

}


$increaseCarn= 0;
$increaseHerb= 0; 
$decreasePret= 0;
$decreasePrey= 0;
$rateplants= 0;



	if($carnivore =="Coyote"){
		//animal3	
		if($herbivore=="Lizard"){
				$increaseCarn= 0.02;
				$increaseHerb= 0.02; 
				$decreasePret= 00.015;
				$decreasePrey= 00.007;
				$rateplants= 0.9*$plantPopulation/$herbivorePopulation;
		}
		elseif($herbivore=="Bison"){
				$increaseCarn= 0.035;
				$increaseHerb= 0.035; 
				$decreasePret= 0.015;
				$decreasePrey= 0.002;
				$rateplants= 0.04*$plantPopulation/$herbivorePopulation;
		}
		elseif($herbivore=="Tapir"){
				$increaseCarn= 0.03;
				$increaseHerb= 0.03; 
				$decreasePret= 0.015;
				$decreasePrey= 0.003;
				$rateplants= 0.07*$plantPopulation/$herbivorePopulation;
		}
	}
	elseif($carnivore =="Jaguar"){	
		if($herbivore=="Lizard"){
				$increaseCarn= 0.01;
				$increaseHerb= 0.04; 
				$decreasePret= 0.04;
				$decreasePrey= 00.002;
				$rateplants= 0.9*$plantPopulation/$herbivorePopulation;
		}
		elseif($herbivore=="Bison"){
				$increaseCarn= 0.03;
				$increaseHerb= 0.02; 
				$decreasePret= 0.013;
				$decreasePrey= 0.004;
				$rateplants= 0.04*$plantPopulation/$herbivorePopulation;
		}
		elseif($herbivore=="Tapir"){
				$increaseCarn= 0.03;
				$increaseHerb= 0.03; 
				$decreasePret= 0.015;
				$decreasePrey= 0.003;
				$rateplants= 0.07*$plantPopulation/$herbivorePopulation;
		}
	}
	elseif($carnivore =="Lion"){
				if($herbivore=="Lizard"){
				$increaseCarn= 0.01;
				$increaseHerb= 0.04; 
				$decreasePret= 0.04;
				$decreasePrey= 00.002;
				$rateplants= 0.9*$plantPopulation/$herbivorePopulation;
		}
		elseif($herbivore=="Bison"){
				$increaseCarn= 0.035;
				$increaseHerb= 0.035; 
				$decreasePret= 0.01;
				$decreasePrey= 0.004;
				$rateplants= 0.04*$plantPopulation/$herbivorePopulation;
		}
		elseif($herbivore=="Tapir"){
				$increaseCarn= 0.027;
				$increaseHerb= 0.025; 
				$decreasePret= 0.02;
				$decreasePrey= 0.006;
				$rateplants= 0.07*$plantPopulation/$herbivorePopulation;
		}
	}
	
	
if($plantPopulation <   $herbivorePopulation*5){
	$rateplants=($rateplants*-1*$herbivorePopulation*$herbivorePopulation)/($plantPopulation*$plantPopulation);
	$increaseHerb=   $rateplants- $increaseHerb  ;
}


 

$dHerb= ($herbivorePopulation*  $increaseHerb)						-	($decreasePrey*  $carnivorePopulation*  $herbivorePopulation/10);
$dCarn=	($increaseCarn*  $carnivorePopulation*  $herbivorePopulation)	-	($carnivorePopulation*  $decreasePret);
$dplants= ($plantPopulation*  $rateplants)/30 - ($herbivorePopulation* $dHerb)/30;



			if($fact == "Flood"){$rainlevel=$rainlevel+50;
			$dplants=$dplants*1.1;}


//--------------------------------------------------------------------------------------


if($rainlevel <=25){
//desert
											$dplants= -0.16;
}elseif($rainlevel < 50.8){
//rainforest
											$dplants= $dplants * 0.9;
}elseif(  $rainlevel<=101.6){
//savanna
	
}elseif( $rainlevel<125){
//rainforest
										$dplants= $dplants  * 1.25;
}elseif( $rainlevel<=660){
//rainforest
									$dplants= $dplants * 1.45;
}elseif($rainlevel > 660){
//rainforest
										$dplants= $dplants * 0.8;
}


//--------------------------------------------------------------------------------------


$next_carnivore =$carnivorePopulation+($dCarn/50);
$next_herbivore =$herbivorePopulation+($dHerb);
$next_plants=$plantPopulation+($dplants/30);


					if($fact == "Volcano Erupts"){
$next_carnivore =$next_carnivore-150;
$next_herbivore =$next_herbivore-500;
$next_plants=$next_plants-1300;
}


if($next_herbivore <0){
   $next_herbivore=0;
}
if($next_carnivore<0 ){
   $next_carnivore=0;
}
if($next_plants<0){
   $next_plants=0;
}

mysqli_query($connection,"UPDATE mjholton_MySQL.ecosystemtable SET animal3population= '$next_herbivore' Where generation = 2");
mysqli_query($connection,"UPDATE mjholton_MySQL.ecosystemtable SET animal2population= '$next_carnivore' Where generation = 2");
mysqli_query($connection,"UPDATE mjholton_MySQL.ecosystemtable SET ferns= '$next_plants' Where generation = 2");


mysqli_close($connection);
}

?>




<?php
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<form method="post" action="zBioInput.php">
	Carnivore:&nbsp; <select name="animal2" style="width: 117px; display: inline;">
    	<option value="Coyote">Coyote</option>
    	<option value="Jaguar">Jaguar</option>
    	<option value="Lion">Lion</option>
  	</select>
	<br>
	Initial Carnivore Population:&nbsp; 
		<input name="animal2population" type="text" style="width: 95px;display: inline;">
		<br>
   Herbivore:&nbsp;<select name="animal3" style="width: 112px;display: inline; ">
    	<option value="Lizard">Lizard</option>
    	<option value="Bison">Bison</option>
    	<option value="Tapir">Tapir</option>
  	</select>
	<br>
	Initial Herbivore/Omnivore Population:&nbsp;<input name="animal3population" type="text" style="display: inline; width: 101px;">
	<br>
 	Initial Plants Population:&nbsp;<input name="ferns" type="text" style="width: 92px;display: inline;">
 	<br>
  	Mean Rainfall (cm):&nbsp;<input name="averageRainfall_1" type="text" style="width: 100px;display: inline;"> 
  	<br>
	Extra Factor:&nbsp; <select name="extraFactor_1" style="width: 24%;display: inline;">
     	<option value="None">None</option>
     	<option value="Flood">Flood</option>
    	<option value="Volcano Erupts">Volcano Erupts</option>
  		<option value="Hunters Arive">Hunters Arive</option>
  	</select>
  	<br><br>
  	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  	<input name="update" type="submit" id="update" value="Update" style="width: 163px; height: 53px"><br>
</form>
 
<br><br><br><br><br><br><br><br><br><br><br><br><br>
</div></div>
<script src="jquery-2.1.4.min.js"></script>
<script src="foundation.js"></script>
<script>
      $(document).foundation();
    </script>
<script src="JavaScript.js">
</script>
</body>
</html>
