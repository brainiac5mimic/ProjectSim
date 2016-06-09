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
<h2 class="subheader"> Compare Your Answers </h2>
</div>
</div>
 


<div class="row medium-8 large-7 columns">
<div class="blog-post">

<table style="width:100%" border='1'>
<?php 
    
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
$row=mysqli_fetch_array($result);
echo ("<tr>"
					
. "<td style='width: 55px'>"
			."Answer"
			. "</td>"
				
			. "<td style='width: 55px'>"
			."Question 1"
			. "</td>"
			
			. "<td style='width: 55px'>"
			."Question 2"
			. "</td>"

. "<td style='width: 55px'>"
			."Question 3"
			. "</td>"

. "<td style='width: 55px'>"
			."Question 4"
			. "</td>"

. "<td style='width: 55px'>"
			."Question 5"
			. "</td>"

. "<td style='width: 55px'>"
			."Question 6"
			. "</td>"

                     );
                    
                    echo "</tr>";



			echo ("<tr>"
					
. "<td style='width: 55px'>"
			."Yes"
			. "</td>"
				
			. "<td style='width: 55px'>"
			."<div class = 'button_1'>"
            .$row['button_1']
            ."</div>"
			. "</td>"
			
			. "<td style='width: 55px'>"
			."<div class = 'button_2'>"
            .$row['button_2']
            ."</div>"
			. "</td>"

. "<td style='width: 55px'>"
			."<div class = 'button_3'>"
            .$row['button_3']
            ."</div>"
			. "</td>"

. "<td style='width: 55px'>"
			."<div class = 'button_4'>"
            .$row['button_4']
            ."</div>"
			. "</td>"

. "<td style='width: 55px'>"
			."<div class = 'button_5'>"
            .$row['button_5']
            ."</div>"
			. "</td>"

. "<td style='width: 55px'>"
			."<div class = 'button_6'>"
            .$row['button_6']
            ."</div>"
			. "</td>"

                     );
                    
                    
                    echo "</tr>";
                    $row=mysqli_fetch_array($result);
echo ("<tr>"
					
. "<td style='width: 55px'>"
			."No"
			. "</td>"
				
			. "<td style='width: 55px'>"
			."<div class = 'button_1'>"
            .$row['button_1']
            ."</div>"
			. "</td>"
			
			. "<td style='width: 55px'>"
			."<div class = 'button_2'>"
            .$row['button_2']
            ."</div>"
			. "</td>"

. "<td style='width: 55px'>"
			."<div class = 'button_3'>"
            .$row['button_3']
            ."</div>"
			. "</td>"

. "<td style='width: 55px'>"
			."<div class = 'button_4'>"
            .$row['button_4']
            ."</div>"
			. "</td>"

. "<td style='width: 55px'>"
			."<div class = 'button_5'>"
            .$row['button_5']
            ."</div>"
			. "</td>"

. "<td style='width: 55px'>"
			."<div class = 'button_6'>"
            .$row['button_6']
            ."</div>"
			. "</td>"

                     );
                    
                    
                    echo "</tr>";


mysqli_close($connection);


?>


</table>
<br><br>
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
