<!doctype html>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Science Exploration | Welcome</title>

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
<h2 class="subheader"> Milgram Experiment </h2>
</div>
</div>
 <?php 
   if ( ! empty( $_POST ) ) {   
$host="216.119.113.102";
$username="mjhol_Admin";
$password="20mjholton**";
$db_name="mjholton_MySQL";
$tbl_name="comparing_results";
$connection=mysqli_connect("$host","$username","$password","$db_name");

if (mysqli_connect_error())
    {
    echo "The application has failed to connect to the mysql database server: " .mysqli_connect_error();
    }


$result = mysqli_query($connection, "SELECT * FROM $tbl_name")or die("Error: " . mysqli_error($connection));
$rowY=mysqli_fetch_array($result);

  
	$y    = "y";
    $n    = "n";
$ans1   = test_input($_POST["shock1"]);
$ans2   = test_input($_POST["continue1"]);
$ans3   = test_input($_POST["shock2"]);
$ans4   = test_input($_POST["continue2"]);
$ans5   = test_input($_POST["shock3"]);
$ans6   = test_input($_POST["continue3"]);

   
   $y1= $rowY['button_1'] +1;
   $y2= $rowY['button_2'] +1;
   $y3= $rowY['button_3'] +1;
   $y4= $rowY['button_4'] +1;
   $y5= $rowY['button_5'] +1;
   $y6= $rowY['button_6'] +1;
   $rowN=mysqli_fetch_array($result);
   $n1= $rowN['button_1'] +1;
   $n2= $rowN['button_2'] +1;
   $n3= $rowN['button_3'] +1;
   $n4= $rowN['button_4'] +1;
   $n5= $rowN['button_5'] +1;
   $n6= $rowN['button_6'] +1;


  if($ans1=="y"){mysqli_query($connection,"UPDATE mjholton_MySQL.comparing_results SET button_1 = '$y1' Where answer= '$y'");}  
  else{mysqli_query($connection,"UPDATE mjholton_MySQL.comparing_results SET button_1 = '$n1' Where answer = '$n'");
}


if($ans2=="y"){mysqli_query($connection,"UPDATE mjholton_MySQL.comparing_results  SET button_2= '$y2' Where answer = '$y'");
}  
  else{mysqli_query($connection,"UPDATE mjholton_MySQL.comparing_results  SET button_2= '$n2' Where answer = '$n'");
}


if($ans3   =="y"){mysqli_query($connection,"UPDATE mjholton_MySQL.comparing_results SET button_3= '$y3' Where answer = '$y'");
}  
  else{mysqli_query($connection,"UPDATE mjholton_MySQL.comparing_results SET button_3= '$n3' Where answer = '$n'");
}


if($ans4   =="y"){mysqli_query($connection,"UPDATE mjholton_MySQL.comparing_results SET   button_4= '$y4' Where answer = '$y'");
}  
  else{mysqli_query($connection,"UPDATE mjholton_MySQL.comparing_results SET   button_4= '$n4' Where answer = '$n'");
}


if($ans5   =="y"){mysqli_query($connection,"UPDATE mjholton_MySQL.comparing_results SET button_5= '$y5' Where answer = '$y'");
}  
  else{mysqli_query($connection,"UPDATE mjholton_MySQL.comparing_results SET button_5= '$n5' Where answer = '$n'");
}


if($ans6   =="y"){mysqli_query($connection,"UPDATE mjholton_MySQL.comparing_results SET button_6= '$y6' Where answer = '$y'");
}  
  else{mysqli_query($connection,"UPDATE mjholton_MySQL.comparing_results SET button_6= '$n6' Where answer = '$n'");
}


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

<div class="row medium-8 large-7 columns">
<div class="blog-post">

<p>

</p><a href="#">  </a> 

<br>
<form method="post" action="zMilgramExperimentInput.php">
Tape 1<br>
<audio controls >
  <source src="Audio_1.mp3" >

Your browser does not support the audio element.
</audio>

<br>
Would You Shock Him?:&nbsp; <select name="shock1" style="width: 117px; display: inline;">
    	<option value="y">Yes</option>
    	<option value="n">No</option>
  	</select>
	<br>
	<br>

Tape 2<br><audio controls > 
  <source src="Audio_2.mp3" >
Your browser does not support the audio element.
</audio>
 <br>
Would You Continue?:&nbsp; <select name="continue1" style="width: 117px; display: inline;">
    	<option value="y">Yes</option>
    	<option value="n">No</option>
  	</select>
	<br>
	<br>
Tape 3<br>
<audio controls >
  <source src="Audio_3.mp3" >

Your browser does not support the audio element.
</audio>
<br>
Would You Shock Him?:&nbsp; <select name="shock2" style="width: 117px; display: inline;">
    	<option value="y">Yes</option>
    	<option value="n">No</option>
  	</select>
	<br>
	<br>
Tape 4<br>
<audio controls >
  <source src="Audio_4.mp3" >

Your browser does not support the audio element.
</audio>
 <br>
Would You Continue?:&nbsp; <select name="continue2" style="width: 117px; display: inline;">
    	<option value="y">Yes</option>
    	<option value="n">No</option>
  	</select>
	<br>
	<br>
Tape 5<br><audio controls >
  <source src="Audio_5.mp3" >

Your browser does not support the audio element.
</audio>
 <br>
Would You Shock Him?:&nbsp; <select name="shock3" style="width: 117px; display: inline;">
    	<option value="y">Yes</option>
    	<option value="n">No</option>
  	</select>
	<br>
	<br>
Tape 6 <br><audio controls >
  <source src="Audio_6.mp3" >
Your browser does not support the audio element.
</audio>
<br>
Would You Continue?:&nbsp; <select name="continue3" style="width: 117px; display: inline;">
    	<option value="y">Yes</option>
    	<option value="n">No</option>
  	</select>
	<br>

<br>
  	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  	<input name="update" type="submit" id="update" value="Update" style="width: 163px; height: 53px"><br>


</form><br>
<br>

<a href="http://www.simplypsychology.org/milgram.html">Audio Source  </a> 

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>



</div>
</div>







<script src="jquery-2.1.4.min.js"></script>
<script src="foundation.js"></script>

<script>
      $(document).foundation();
    </script>
<script src="JavaScript.js">
</script>
</body>
</html>
