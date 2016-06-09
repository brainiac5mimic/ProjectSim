<!doctype html>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Science Exploration | Mini Ecosystem
</title>

<link rel="stylesheet" href="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
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
<h2 class="subheader"> Simulated Ecosystem</h2>
</div>
</div>
 
<div class="row medium-8 large-7 columns">
<div class="blog-post">


<table style="width:100%" border='1'>
<?php
   // index, animal1, animal1population, animal2, animal2population, animal3, animal3population, moss, ferns, conifers, flowerPlants, climate, averageRainfall, extraFactor 
$host="216.119.113.102";
$username="mjhol_Admin";
$password="20mjholton**";
$db_name="mjholton_MySQL";
$tbl_name="ecosystemtable";
$connection=mysqli_connect("$host","$username","$password","$db_name");
if (mysqli_connect_errno())
    {
    echo "The application has failed to connect to the mysql database server: " .mysqli_connect_error();
    }
    
        
$result = mysqli_query($connection, "SELECT * FROM $tbl_name")or die("Error: " . mysqli_error($connection));

$row=mysqli_fetch_array($result);

			echo ("<tr>"
			. "<td style='width: 55px'>"
			."Generation"
			. "</td>"
						
			. "<td style='width: 55px'>"
			."<div class = 'animal2'>"
            .$row['animal2']
            ."</div>"
			. "</td>"
			
			. "<td style='width: 55px'>"
			."<div class = 'animal3'>"
            .$row['animal3']
            ."</div>"
			. "</td>"
			
			. "<td style='width: 55px'>"
			."Plants"
			. "</td>"
			
			
			. "<td style='width: 55px'>"
			."Mean Rainfall (cm)"
			. "</td>"
			
			. "<td style='width: 55px'>"
			."Extra Factor"
			. "</td>"
			
			."</tr>"
			);
			
			echo "<tr>";
                echo
                    (
                    "<td style='width: 55px'>"
					
					."<div class = 'generation'>"
                    .$row['generation']
                    ."</div>"."</td>"
					
					
					."<td style='width: 55px'>"
                    ."<div class = 'animal2population'>"
                    .$row['animal2population']
                    ."</div>"."</td>"
					
					."<td style='width: 55px'>"
					."<div class = 'animal3population'>"
                    .$row['animal3population']
                    ."</div>"."</td>"
										
					."<td style='width: 55px'>"
					."<div class = 'ferns'>"
                    .$row['ferns']
                    ."</div>"."</td>"
								
					."<td style='width: 55px'>"
					."<div class = 'averageRainfall'>"
                    .$row['averageRainfall']
                    ."</div>"
					."</td>"
					
					."<td style='width: 55px'>"
					."<div class = 'extraFactor'>"
                    .$row['extraFactor']
                    ."</div>"
					
                    ."</td>"
                    );
                    
                    
                    echo "</tr>";
                    
                    
                    
//for($i=1; $i<=$rows ; $i++)
    //{
    
            while($row = mysqli_fetch_array($result))
            {
            
            echo "<tr>";
                echo(
                
                    "<td style='width: 55px'>"
					
					."<div class = 'generation'>"
                    .$row['generation']
                    ."</div>"."</td>"
					
										
					."<td style='width: 55px'>"
                    ."<div class = 'animal2population'>"
                    .$row['animal2population']
                    ."</div>"."</td>"
					
					."<td style='width: 55px'>"
					."<div class = 'animal3population'>"
                    .$row['animal3population']
                    ."</div>"."</td>"
					
					."<td style='width: 55px'>"
					."<div class = 'ferns'>"
                    .$row['ferns']
                    ."</div>"."</td>"
										
					."<td style='width: 55px'>"
					."<div class = 'averageRainfall'>"
                    .$row['averageRainfall']
                    ."</div>"
					."</td>"
					
					."<td style='width: 55px'>"
					."<div class = 'extraFactor'>"
                    .$row['extraFactor']
                    ."</div>"
					
                    ."</td>"
                    );
                    
                    
                    echo "</tr>";
                }
           
        
        //}

mysqli_close($connection);
?>
</table>


</div>
</div>






<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>

<script>
      $(document).foundation();
    </script>
<script src="JavaScript.js">
</script>

<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>

</body>
</html>
