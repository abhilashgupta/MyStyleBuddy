<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>My Style Buddy</title>
	<link href="css/reset.css" rel="stylesheet" media="screen">
	<link href="css/style.css" rel="stylesheet" media="screen">
	<link rel="stylesheet" type="text/css"
	href="fancybox/jquery.fancybox-1.3.4.css" media="screen" />

<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

</head>

<body>
	<div id="page">
		<aside id="sidebar">
			<nav>
				<a class="logo" href="#top" id="nav-logo"><span>Foobar</span>My
					Style Buddy</a>
					<ul>
						<li class="active" id="nav-1"><a href="./index.php">Home</a></li>

          				<li id="nav-3"><a href="#about">App Link</a></li>
						<li id="nav-4"><a href="#contact">Contact</a></li>
					</ul>
					<div class="bg_bottom"></div>
				</nav>
			</aside>
			<div id="main-content">
				<section id="top"></section>
				<!-- do not remove ;)-->
				<section id="home">
					<div id="loader" class="loader"></div>
					<div id="ps_container" class="ps_container">
						<span class="ribbon"></span>
						<div class="ps_image_wrapper">
							<!-- First initial image -->
							<img src="images/1.jpg" alt="" />
						</div>
						<!-- Navigation items -->
						<div class="ps_next"></div>
						<div class="ps_prev"></div>
						<!-- Dot list with thumbnail preview -->
						<ul class="ps_nav">
							<li class="selected"><a href="images/1.jpg"
								rel="images/thumbs/1.jpg">Image 1</a></li>
								<li><a href="images/2.jpg" rel="images/thumbs/2.jpg">Image 2</a></li>
								<li><a href="images/3.jpg" rel="images/thumbs/3.jpg">Image 3</a></li>
								<li><a href="images/4.jpg" rel="images/thumbs/4.jpg">Image 4</a></li>
								<li><a href="images/5.jpg" rel="images/thumbs/5.jpg">Image 5</a></li>
								<li class="ps_preview">
									<div class="ps_preview_wrapper">
										<!-- Thumbnail comes here -->
									</div> <!-- Little triangle --> <span></span>
								</li>
							</ul>
						</div>
						<!--end ps_container-->
						<?php 
						session_start();

				//Database Connectivity
						include "./include/config.inc.php";
						include "./include/db.connect.php";

						$BT=$_POST["Body_Type"];
						$Age=$_POST["Age"];
						$HT=$_POST["Height"];
						$SC=$_POST["Skin_Color"];
						$occasion=$_POST["Occassion"];
;

						if($occasion=="casual"){
							if($BT=="Fat" && $SC=="Dark")
							{
								if($Age=="16-20"){
									$select_query="SELECT * FROM women_shirts_tops_tees where ((color='black' OR color='blue') ) LIMIT 10";
									$query_db=mysql_query($select_query);
									echo "<table >
									<th>Preview</th>

									<th>Name</th>
									<th>Color</th>
									";
									while($search_result=mysql_fetch_array($query_db)){
										$db_name=$search_result['name'];
										$db_image=$search_result['image'];
										$db_color=$search_result['color'];
										$db_occasion=$search_result['occasion'];

										$stringData="<tr><td>".$db_image."</td><td>".$db_name."</td><td>".strtoupper($db_color)."</td></tr>";

										echo $stringData;
									}

									$select_query="SELECT * FROM women_trousers where ((color='black' OR color='blue') AND occasion='$occasion') LIMIT 10";
									$query_db=mysql_query($select_query);

									while($search_result=mysql_fetch_array($query_db)){
										$db_name=$search_result['name'];
										$db_image=$search_result['image'];
										$db_color=$search_result['color'];
										$db_occasion=$search_result['occasion'];

										$stringData="<tr><td>".$db_image."</td><td>".$db_name."</td><td>".strtoupper($db_color)."</td></tr>";

										echo $stringData;
									}
									echo "</table>";
								}

								if($Age=="20-25"){


									echo "<table >
									<th>Preview</th>

									<th>Name</th>
									<th>Color</th>
									";

									$select_query="SELECT * FROM women_sarees where ((color='navy' OR color='purple' OR color='blue' OR color='maroon') ) LIMIT 10";
									$query_db=mysql_query($select_query);

									while($search_result=mysql_fetch_array($query_db)){
										$db_name=$search_result['name'];
										$db_image=$search_result['image'];
										$db_color=$search_result['color'];
										$db_occasion=$search_result['occasion'];

										$stringData="<tr><td>".$db_image."</td><td>".$db_name."</td><td>".strtoupper($db_color)."</td></tr>";

										echo $stringData;

										$select_query="SELECT * FROM women_shirts_tops_tees where ((color='black' OR color='blue') ) LIMIT 10";
										$query_db=mysql_query($select_query);

										while($search_result=mysql_fetch_array($query_db)){
											$db_name=$search_result['name'];
											$db_image=$search_result['image'];
											$db_color=$search_result['color'];
											$db_occasion=$search_result['occasion'];

											$stringData="<tr><td>".$db_image."</td><td>".$db_name."</td><td>".strtoupper($db_color)."</td></tr>";

											echo $stringData;
										}

										$select_query="SELECT * FROM women_trousers where ((color='black' OR color='blue') AND occasion='$occasion') LIMIT 10";
										$query_db=mysql_query($select_query);

										while($search_result=mysql_fetch_array($query_db)){
											$db_name=$search_result['name'];
											$db_image=$search_result['image'];
											$db_color=$search_result['color'];
											$db_occasion=$search_result['occasion'];

											$stringData="<tr><td>".$db_image."</td><td>".$db_name."</td><td>".strtoupper($db_color)."</td></tr>";

											echo $stringData;
										}
									}
									echo "</table>";

								}
								if($Age=="26-30"){

									echo "<table >
									<th>Preview</th>

									<th>Name</th>
									<th>Color</th>
									";

									$select_query="SELECT * FROM women_sarees where ((color='navy' OR color='purple' OR color='blue' OR color='maroon') ) LIMIT 10";
									$query_db=mysql_query($select_query);

									while($search_result=mysql_fetch_array($query_db)){
										$db_name=$search_result['name'];
										$db_image=$search_result['image'];
										$db_color=$search_result['color'];
										$db_occasion=$search_result['occasion'];

										$stringData="<tr><td>".$db_image."</td><td>".$db_name."</td><td>".strtoupper($db_color)."</td></tr>";

										echo $stringData;

										$select_query="SELECT * FROM women_shirts_tops_tees where ((color='black' OR color='blue') ) LIMIT 10";
										$query_db=mysql_query($select_query);

										while($search_result=mysql_fetch_array($query_db)){
											$db_name=$search_result['name'];
											$db_image=$search_result['image'];
											$db_color=$search_result['color'];
											$db_occasion=$search_result['occasion'];

											$stringData="<tr><td>".$db_image."</td><td>".$db_name."</td><td>".strtoupper($db_color)."</td></tr>";

											echo $stringData;
										}

										$select_query="SELECT * FROM women_trousers where ((color='black' OR color='blue') AND occasion='$occasion') LIMIT 10";
										$query_db=mysql_query($select_query);

										while($search_result=mysql_fetch_array($query_db)){
											$db_name=$search_result['name'];
											$db_image=$search_result['image'];
											$db_color=$search_result['color'];
											$db_occasion=$search_result['occasion'];

											$stringData="<tr><td>".$db_image."</td><td>".$db_name."</td><td>".strtoupper($db_color)."</td></tr>";

											echo $stringData;
										}

									}
									echo "</table>";

								}
								if($Age=="30-40"){
									echo "<table>
									<th>Preview</th>

									<th>Name</th>
									<th>Color</th>
									";

									$select_query="SELECT * FROM women_sarees where ((color='navy' OR color='purple' OR color='blue' OR color='maroon') ) LIMIT 10";
									$query_db=mysql_query($select_query);

									while($search_result=mysql_fetch_array($query_db)){
										$db_name=$search_result['name'];
										$db_image=$search_result['image'];
										$db_color=$search_result['color'];
										$db_occasion=$search_result['occasion'];

										$stringData="<tr><td>".$db_image."</td><td>".$db_name."</td><td>".strtoupper($db_color)."</td></tr>";

										echo $stringData;

										$select_query="SELECT * FROM women_shirts_tops_tees where ((color='black' OR color='blue') ) LIMIT 10";
										$query_db=mysql_query($select_query);

										while($search_result=mysql_fetch_array($query_db)){
											$db_name=$search_result['name'];
											$db_image=$search_result['image'];
											$db_color=$search_result['color'];
											$db_occasion=$search_result['occasion'];

											$stringData="<tr><td>".$db_image."</td><td>".$db_name."</td><td>".strtoupper($db_color)."</td></tr>";

											echo $stringData;
										}

										$select_query="SELECT * FROM women_trousers where ((color='black' OR color='blue') AND occasion='$occasion') LIMIT 10";
										$query_db=mysql_query($select_query);

										while($search_result=mysql_fetch_array($query_db)){
											$db_name=$search_result['name'];
											$db_image=$search_result['image'];
											$db_color=$search_result['color'];
											$db_occasion=$search_result['occasion'];

											$stringData="<tr><td>".$db_image."</td><td>".$db_name."</td><td>".strtoupper($db_color)."</td></tr>";

											echo $stringData;
										}

									}
									echo "</table>";

								}


								if($Age=="40+"){

									echo "<table >
									<th>Preview</th>

									<th>Name</th>
									<th>Color</th>
									";

									$select_query="SELECT * FROM women_sarees where ((color='navy' OR color='purple' OR color='maroon') ) LIMIT 50";
									$query_db=mysql_query($select_query);

									while($search_result=mysql_fetch_array($query_db)){
										$db_name=$search_result['name'];
										$db_image=$search_result['image'];
										$db_color=$search_result['color'];
										$db_occasion=$search_result['occasion'];

										if ((strpos($db_name, 'saree') || strpos($db_name, 'Saree') )== TRUE){
											$stringData="<tr><td>".$db_image."</td><td>".$db_name."</td><td>".strtoupper($db_color)."</td></tr>";
										}
										echo $stringData;
									}
								}
								echo "</table>";


							}
if($BT=="Thin" && $SC=="Fair")
							{
								if($Age=="16-20"){
									$select_query="SELECT * FROM women_dresses LIMIT 10";
									$query_db=mysql_query($select_query);
									echo "<table >
									<th>Preview</th>

									<th>Name</th>
									<th>Color</th>
									";
									while($search_result=mysql_fetch_array($query_db)){
										$db_name=$search_result['name'];
										$db_image=$search_result['image'];
										$db_color=$search_result['color'];
										$db_occasion=$search_result['occasion'];

										$stringData="<tr><td>".$db_image."</td><td>".$db_name."</td><td>".strtoupper($db_color)."</td></tr>";

										echo $stringData;
									}

									$select_query="SELECT * FROM women_trousers LIMIT 10";
									$query_db=mysql_query($select_query);

									while($search_result=mysql_fetch_array($query_db)){
										$db_name=$search_result['name'];
										$db_image=$search_result['image'];
										$db_color=$search_result['color'];
										$db_occasion=$search_result['occasion'];

										$stringData="<tr><td>".$db_image."</td><td>".$db_name."</td><td>".strtoupper($db_color)."</td></tr>";

										echo $stringData;
									}
									echo "</table>";
								}

								if($Age=="20-25"){


									echo "<table >
									<th>Preview</th>

									<th>Name</th>
									<th>Color</th>
									";

									$select_query="SELECT * FROM women_sarees LIMIT 10";
									$query_db=mysql_query($select_query);

									while($search_result=mysql_fetch_array($query_db)){
										$db_name=$search_result['name'];
										$db_image=$search_result['image'];
										$db_color=$search_result['color'];
										$db_occasion=$search_result['occasion'];

										$stringData="<tr><td>".$db_image."</td><td>".$db_name."</td><td>".strtoupper($db_color)."</td></tr>";

										echo $stringData;

										$select_query="SELECT * FROM women_shirts_tops_tees  LIMIT 10";
										$query_db=mysql_query($select_query);

										while($search_result=mysql_fetch_array($query_db)){
											$db_name=$search_result['name'];
											$db_image=$search_result['image'];
											$db_color=$search_result['color'];
											$db_occasion=$search_result['occasion'];

											$stringData="<tr><td>".$db_image."</td><td>".$db_name."</td><td>".strtoupper($db_color)."</td></tr>";

											echo $stringData;
										}

										$select_query="SELECT * FROM women_trousers LIMIT 10";
										$query_db=mysql_query($select_query);

										while($search_result=mysql_fetch_array($query_db)){
											$db_name=$search_result['name'];
											$db_image=$search_result['image'];
											$db_color=$search_result['color'];
											$db_occasion=$search_result['occasion'];

											$stringData="<tr><td>".$db_image."</td><td>".$db_name."</td><td>".strtoupper($db_color)."</td></tr>";

											echo $stringData;
										}
									}
									echo "</table>";

								}
								if($Age=="26-30"){

									echo "<table >
									<th>Preview</th>

									<th>Name</th>
									<th>Color</th>
									";

									$select_query="SELECT * FROM women_sarees LIMIT 10";
									$query_db=mysql_query($select_query);

									while($search_result=mysql_fetch_array($query_db)){
										$db_name=$search_result['name'];
										$db_image=$search_result['image'];
										$db_color=$search_result['color'];
										$db_occasion=$search_result['occasion'];

										$stringData="<tr><td>".$db_image."</td><td>".$db_name."</td><td>".strtoupper($db_color)."</td></tr>";

										echo $stringData;

										$select_query="SELECT * FROM women_shirts_tops_tees LIMIT 10";
										$query_db=mysql_query($select_query);

										while($search_result=mysql_fetch_array($query_db)){
											$db_name=$search_result['name'];
											$db_image=$search_result['image'];
											$db_color=$search_result['color'];
											$db_occasion=$search_result['occasion'];

											$stringData="<tr><td>".$db_image."</td><td>".$db_name."</td><td>".strtoupper($db_color)."</td></tr>";

											echo $stringData;
										}

										$select_query="SELECT * FROM women_dresses LIMIT 30";
										$query_db=mysql_query($select_query);

										while($search_result=mysql_fetch_array($query_db)){
											$db_name=$search_result['name'];
											$db_image=$search_result['image'];
											$db_color=$search_result['color'];
											$db_occasion=$search_result['occasion'];

											$stringData="<tr><td>".$db_image."</td><td>".$db_name."</td><td>".strtoupper($db_color)."</td></tr>";

											echo $stringData;
		
										}

									}
									echo "</table>";

								}
								if($Age=="30-40"){
									echo "<table>
									<th>Preview</th>

									<th>Name</th>
									<th>Color</th>
									";

									$select_query="SELECT * FROM women_sarees LIMIT 10";
									$query_db=mysql_query($select_query);

									while($search_result=mysql_fetch_array($query_db)){
										$db_name=$search_result['name'];
										$db_image=$search_result['image'];
										$db_color=$search_result['color'];
										$db_occasion=$search_result['occasion'];

										$stringData="<tr><td>".$db_image."</td><td>".$db_name."</td><td>".strtoupper($db_color)."</td></tr>";

										echo $stringData;

										$select_query="SELECT * FROM women_shirts_tops_tees LIMIT 30";
										$query_db=mysql_query($select_query);

										while($search_result=mysql_fetch_array($query_db)){
											$db_name=$search_result['name'];
											$db_image=$search_result['image'];
											$db_color=$search_result['color'];
											$db_occasion=$search_result['occasion'];

											$stringData="<tr><td>".$db_image."</td><td>".$db_name."</td><td>".strtoupper($db_color)."</td></tr>";

											echo $stringData;
										}

										$select_query="SELECT * FROM women_dresses LIMIT 30";
										$query_db=mysql_query($select_query);

										while($search_result=mysql_fetch_array($query_db)){
											$db_name=$search_result['name'];
											$db_image=$search_result['image'];
											$db_color=$search_result['color'];
											$db_occasion=$search_result['occasion'];

											$stringData="<tr><td>".$db_image."</td><td>".$db_name."</td><td>".strtoupper($db_color)."</td></tr>";

											echo $stringData;

										}

									}
									echo "</table>";

								}


								if($Age=="40+"){

									echo "<table >
									<th>Preview</th>

									<th>Name</th>
									<th>Color</th>
									";

									$select_query="SELECT * FROM women_sarees LIMIT 50";
									$query_db=mysql_query($select_query);

									while($search_result=mysql_fetch_array($query_db)){
										$db_name=$search_result['name'];
										$db_image=$search_result['image'];
										$db_color=$search_result['color'];
										$db_occasion=$search_result['occasion'];

										if ((strpos($db_name, 'saree') || strpos($db_name, 'Saree') )== TRUE){
											$stringData="<tr><td>".$db_image."</td><td>".$db_name."</td><td>".strtoupper($db_color)."</td></tr>";
										}
										echo $stringData;
									}
								}
								echo "</table>";
}
							if($BT=="Fat" && $SC=="Fair")
							{
								if($Age=="16-20"){
									$select_query="SELECT * FROM women_dresses LIMIT 10";
									$query_db=mysql_query($select_query);
									echo "<table >
									<th>Preview</th>

									<th>Name</th>
									<th>Color</th>
									";
									while($search_result=mysql_fetch_array($query_db)){
										$db_name=$search_result['name'];
										$db_image=$search_result['image'];
										$db_color=$search_result['color'];
										$db_occasion=$search_result['occasion'];

										$stringData="<tr><td>".$db_image."</td><td>".$db_name."</td><td>".strtoupper($db_color)."</td></tr>";

										echo $stringData;
									}

									$select_query="SELECT * FROM women_trousers LIMIT 10";
									$query_db=mysql_query($select_query);

									while($search_result=mysql_fetch_array($query_db)){
										$db_name=$search_result['name'];
										$db_image=$search_result['image'];
										$db_color=$search_result['color'];
										$db_occasion=$search_result['occasion'];

										$stringData="<tr><td>".$db_image."</td><td>".$db_name."</td><td>".strtoupper($db_color)."</td></tr>";

										echo $stringData;
									}
									echo "</table>";
								}

								if($Age=="20-25"){


									echo "<table >
									<th>Preview</th>

									<th>Name</th>
									<th>Color</th>
									";

									$select_query="SELECT * FROM women_sarees LIMIT 10";
									$query_db=mysql_query($select_query);

									while($search_result=mysql_fetch_array($query_db)){
										$db_name=$search_result['name'];
										$db_image=$search_result['image'];
										$db_color=$search_result['color'];
										$db_occasion=$search_result['occasion'];

										$stringData="<tr><td>".$db_image."</td><td>".$db_name."</td><td>".strtoupper($db_color)."</td></tr>";

										echo $stringData;

										$select_query="SELECT * FROM women_shirts_tops_tees  LIMIT 10";
										$query_db=mysql_query($select_query);

										while($search_result=mysql_fetch_array($query_db)){
											$db_name=$search_result['name'];
											$db_image=$search_result['image'];
											$db_color=$search_result['color'];
											$db_occasion=$search_result['occasion'];

											$stringData="<tr><td>".$db_image."</td><td>".$db_name."</td><td>".strtoupper($db_color)."</td></tr>";

											echo $stringData;
										}

										$select_query="SELECT * FROM women_trousers LIMIT 10";
										$query_db=mysql_query($select_query);

										while($search_result=mysql_fetch_array($query_db)){
											$db_name=$search_result['name'];
											$db_image=$search_result['image'];
											$db_color=$search_result['color'];
											$db_occasion=$search_result['occasion'];

											$stringData="<tr><td>".$db_image."</td><td>".$db_name."</td><td>".strtoupper($db_color)."</td></tr>";

											echo $stringData;
										}
									}
									echo "</table>";

								}
								if($Age=="26-30"){

									echo "<table >
									<th>Preview</th>

									<th>Name</th>
									<th>Color</th>
									";

									$select_query="SELECT * FROM women_sarees LIMIT 10";
									$query_db=mysql_query($select_query);

									while($search_result=mysql_fetch_array($query_db)){
										$db_name=$search_result['name'];
										$db_image=$search_result['image'];
										$db_color=$search_result['color'];
										$db_occasion=$search_result['occasion'];

										$stringData="<tr><td>".$db_image."</td><td>".$db_name."</td><td>".strtoupper($db_color)."</td></tr>";

										echo $stringData;

										$select_query="SELECT * FROM women_shirts_tops_tees LIMIT 10";
										$query_db=mysql_query($select_query);

										while($search_result=mysql_fetch_array($query_db)){
											$db_name=$search_result['name'];
											$db_image=$search_result['image'];
											$db_color=$search_result['color'];
											$db_occasion=$search_result['occasion'];

											$stringData="<tr><td>".$db_image."</td><td>".$db_name."</td><td>".strtoupper($db_color)."</td></tr>";

											echo $stringData;
										}

										$select_query="SELECT * FROM women_dresses LIMIT 30";
										$query_db=mysql_query($select_query);

										while($search_result=mysql_fetch_array($query_db)){
											$db_name=$search_result['name'];
											$db_image=$search_result['image'];
											$db_color=$search_result['color'];
											$db_occasion=$search_result['occasion'];

											$stringData="<tr><td>".$db_image."</td><td>".$db_name."</td><td>".strtoupper($db_color)."</td></tr>";

											echo $stringData;
		
										}

									}
									echo "</table>";

								}
								if($Age=="30-40"){
									echo "<table>
									<th>Preview</th>

									<th>Name</th>
									<th>Color</th>
									";

									$select_query="SELECT * FROM women_sarees LIMIT 10";
									$query_db=mysql_query($select_query);

									while($search_result=mysql_fetch_array($query_db)){
										$db_name=$search_result['name'];
										$db_image=$search_result['image'];
										$db_color=$search_result['color'];
										$db_occasion=$search_result['occasion'];

										$stringData="<tr><td>".$db_image."</td><td>".$db_name."</td><td>".strtoupper($db_color)."</td></tr>";

										echo $stringData;

										$select_query="SELECT * FROM women_shirts_tops_tees LIMIT 30";
										$query_db=mysql_query($select_query);

										while($search_result=mysql_fetch_array($query_db)){
											$db_name=$search_result['name'];
											$db_image=$search_result['image'];
											$db_color=$search_result['color'];
											$db_occasion=$search_result['occasion'];

											$stringData="<tr><td>".$db_image."</td><td>".$db_name."</td><td>".strtoupper($db_color)."</td></tr>";

											echo $stringData;
										}

										$select_query="SELECT * FROM women_dresses LIMIT 30";
										$query_db=mysql_query($select_query);

										while($search_result=mysql_fetch_array($query_db)){
											$db_name=$search_result['name'];
											$db_image=$search_result['image'];
											$db_color=$search_result['color'];
											$db_occasion=$search_result['occasion'];

											$stringData="<tr><td>".$db_image."</td><td>".$db_name."</td><td>".strtoupper($db_color)."</td></tr>";

											echo $stringData;

										}

									}
									echo "</table>";

								}


								if($Age=="40+"){

									echo "<table >
									<th>Preview</th>

									<th>Name</th>
									<th>Color</th>
									";

									$select_query="SELECT DISTINCT * FROM women_sarees LIMIT 50";
									$query_db=mysql_query($select_query);

									while($search_result=mysql_fetch_array($query_db)){
										$db_name=$search_result['name'];
										$db_image=$search_result['image'];
										$db_color=$search_result['color'];
										$db_occasion=$search_result['occasion'];

										if ((strpos($db_name, 'saree') || strpos($db_name, 'Saree') )== TRUE){
											$stringData="<tr><td>".$db_image."</td><td>".$db_name."</td><td>".strtoupper($db_color)."</td></tr>";
										}
										echo $stringData;
									}
								}
								echo "</table>";




						}
}
						?>

					</body>
					</html>
