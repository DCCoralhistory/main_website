<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">

		<title>DCC Oral History</title>

		<!-- Bootstrap core CSS -->
		<link href="css/projects.css" rel="stylesheet">

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="quick_fixes.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script>
		$(document).ready(function(){
			var get_schoolClass = '<?php print $_GET['schoolClass']; ?>';
				switch (get_schoolClass) {
					case "A":
						$("#classMenu").html('<li class="active"><a href="projects.php?schoolClass=A">Class 71A</a></li><li><a href="projects.php?schoolClass=B">Class 71B</a></li><li><a href="projects.php?schoolClass=C">Class 71C</a></li><li><a href="projects.php?schoolClass=D">Class 71D</a></li>');
						break;
					case "B":
						$("#classMenu").html('<li><a href="projects.php?schoolClass=A">Class 71A</a></li><li class="active"><a href="projects.php?schoolClass=B">Class 71B</a></li><li><a href="projects.php?schoolClass=C">Class 71C</a></li><li><a href="projects.php?schoolClass=D">Class 71D</a></li>');
						break;
					case "C":
						$("#classMenu").html('<li><a href="projects.php?schoolClass=A">Class 71A</a></li><li><a href="projects.php?schoolClass=B">Class 71B</a></li><li class="active"><a href="projects.php?schoolClass=C">Class 71C</a></li><li><a href="projects.php?schoolClass=D">Class 71D</a></li>');
						break;
					case "D":
						$("#classMenu").html('<li><a href="projects.php?schoolClass=A">Class 71A</a></li><li><a href="projects.php?schoolClass=B">Class 71B</a></li><li><a href="projects.php?schoolClass=C">Class 71C</a></li><li class="active"><a href="projects.php?schoolClass=D">Class 71D</a></li>');
						break;
					default:
						$("#classMenu").html(get_schoolClass);
						break; // always break on default to keep consistency 
				}
			});
		</script>
	</head>

	<body>

		<div class="container">
			<?php require_once 'includes/header_file.php';?>

			<div class="header">
				<ul class="nav nav-tabs" id="classMenu">
				</ul>
			</div>

			<div class="row marketing">
				<div class="col-lg-3">
					<?php
					require_once 'db_connect.php';
					while($row = mysqli_fetch_array($result)) {
					/* $row = mysqli_fetch_array($result, MYSQLI_ASSOC);*/
					echo "<div class='list-group'><a href='profile.php?q=" . $row['id'] . "'> <img src='" . $row[interviewed.img.loc] . "' class='img-rounded' alt='Nelson Mandela'/> <h4>Albert Einstein</h4><p>Interviewed by Cian O'Donnell. </p><button type='button' class='btn btn-success'>Click to view profile &raquo;</button></a></div>";
					}
					?>
					<a href="profile.php?q=1"> <img src="database/einstein-albert.jpg.jpg" class="img-rounded" alt="Nelson Mandela"/> <h4>Albert Einstein</h4>
					<p>
						Interviewed by Cian O'Donnell.
					</p>
					<button type="button" class="btn btn-success">
						Click to view profile &raquo;
					</button></a>

					<img src="database/nelson-madela.jpg" class="img-rounded" alt="Nelson Mandela"/>
					<h4>Nelson Mandela</h4>
					<p>
						Interviewed by Cian O'Donnell.
					</p>
					<a href="profile.php?q=2">
					<button type="button" class="btn btn-success">
						Click to view profile &raquo;
					</button></a>
					<h4></h4>

					<img src="database/nelson-madela.jpg" class="img-rounded" alt="Nelson Mandela"/>
					<h4>Nelson Mandela</h4>
					<p>
						Interviewed by Cian O'Donnell.
					</p>
					<a href="profile.php?q=3">
					<button type="button" class="btn btn-success">
						Click to view profile &raquo;
					</button></a>
					<h4></h4>

					<img src="database/nelson-madela.jpg" class="img-rounded" alt="Nelson Mandela"/>
					<h4>Nelson Mandela</h4>
					<p>
						Interviewed by Cian O'Donnell.
					</p>
					<button type="button" class="btn btn-success">
						Click to view profile &raquo;
					</button>
					<h4></h4>

					<img src="database/nelson-madela.jpg" class="img-rounded" alt="Nelson Mandela"/>
					<h4>Nelson Mandela</h4>
					<p>
						Interviewed by Cian O'Donnell.
					</p>
					<button type="button" class="btn btn-success">
						Click to view profile &raquo;
					</button>
					<h4></h4>

					<img src="database/nelson-madela.jpg" class="img-rounded" alt="Nelson Mandela"/>
					<h4>Nelson Mandela</h4>
					<p>
						Interviewed by Cian O'Donnell.
					</p>
					<button type="button" class="btn btn-success">
						Click to view profile &raquo;
					</button>
					<h4></h4>

					<img src="database/nelson-madela.jpg" class="img-rounded" alt="Nelson Mandela"/>
					<h4>Nelson Mandela</h4>
					<p>
						Interviewed by Cian O'Donnell.
					</p>
					<button type="button" class="btn btn-success">
						Click to view profile &raquo;
					</button>
					<h4></h4>
				</div>

				<div class="col-lg-3">
					<img src="database/nelson-madela.jpg" class="img-rounded" alt="Nelson Mandela"/>
					<h4>Nelson Mandela</h4>
					<p>
						Interviewed by Cian O'Donnell.
					</p>
					<button type="button" class="btn btn-success">
						Click to view profile &raquo;
					</button>
					<h4></h4>

					<img src="database/nelson-madela.jpg" class="img-rounded" alt="Nelson Mandela"/>
					<h4>Nelson Mandela</h4>
					<p>
						Interviewed by Cian O'Donnell.
					</p>
					<button type="button" class="btn btn-success">
						Click to view profile &raquo;
					</button>
					<h4></h4>

					<img src="database/nelson-madela.jpg" class="img-rounded" alt="Nelson Mandela"/>
					<h4>Nelson Mandela</h4>
					<p>
						Interviewed by Cian O'Donnell.
					</p>
					<button type="button" class="btn btn-success">
						Click to view profile &raquo;
					</button>
					<h4></h4>

					<img src="database/nelson-madela.jpg" class="img-rounded" alt="Nelson Mandela"/>
					<h4>Nelson Mandela</h4>
					<p>
						Interviewed by Cian O'Donnell.
					</p>
					<button type="button" class="btn btn-success">
						Click to view profile &raquo;
					</button>
					<h4></h4>

					<img src="database/nelson-madela.jpg" class="img-rounded" alt="Nelson Mandela"/>
					<h4>Nelson Mandela</h4>
					<p>
						Interviewed by Cian O'Donnell.
					</p>
					<button type="button" class="btn btn-success">
						Click to view profile &raquo;
					</button>
					<h4></h4>

					<img src="database/nelson-madela.jpg" class="img-rounded" alt="Nelson Mandela"/>
					<h4>Nelson Mandela</h4>
					<p>
						Interviewed by Cian O'Donnell.
					</p>
					<button type="button" class="btn btn-success">
						Click to view profile &raquo;
					</button>
					<h4></h4>

					<img src="database/nelson-madela.jpg" class="img-rounded" alt="Nelson Mandela"/>
					<h4>Nelson Mandela</h4>
					<p>
						Interviewed by Cian O'Donnell.
					</p>
					<button type="button" class="btn btn-success">
						Click to view profile &raquo;
					</button>
					<h4></h4>

				</div>

				<div class="col-lg-3">
					<img src="database/nelson-madela.jpg" class="img-rounded" alt="Nelson Mandela"/>
					<h4>Nelson Mandela</h4>
					<p>
						Interviewed by Cian O'Donnell.
					</p>
					<button type="button" class="btn btn-success">
						Click to view profile &raquo;
					</button>
					<h4></h4>

					<img src="database/nelson-madela.jpg" class="img-rounded" alt="Nelson Mandela"/>
					<h4>Nelson Mandela</h4>
					<p>
						Interviewed by Cian O'Donnell.
					</p>
					<button type="button" class="btn btn-success">
						Click to view profile &raquo;
					</button>
					<h4></h4>

					<img src="database/nelson-madela.jpg" class="img-rounded" alt="Nelson Mandela"/>
					<h4>Nelson Mandela</h4>
					<p>
						Interviewed by Cian O'Donnell.
					</p>
					<button type="button" class="btn btn-success">
						Click to view profile &raquo;
					</button>
					<h4></h4>

					<img src="database/nelson-madela.jpg" class="img-rounded" alt="Nelson Mandela"/>
					<h4>Nelson Mandela</h4>
					<p>
						Interviewed by Cian O'Donnell.
					</p>
					<button type="button" class="btn btn-success">
						Click to view profile &raquo;
					</button>
					<h4></h4>

					<img src="database/nelson-madela.jpg" class="img-rounded" alt="Nelson Mandela"/>
					<h4>Nelson Mandela</h4>
					<p>
						Interviewed by Cian O'Donnell.
					</p>
					<button type="button" class="btn btn-success">
						Click to view profile &raquo;
					</button>
					<h4></h4>

					<img src="database/nelson-madela.jpg" class="img-rounded" alt="Nelson Mandela"/>
					<h4>Nelson Mandela</h4>
					<p>
						Interviewed by Cian O'Donnell.
					</p>
					<button type="button" class="btn btn-success">
						Click to view profile &raquo;
					</button>
					<h4></h4>

					<img src="database/nelson-madela.jpg" class="img-rounded" alt="Nelson Mandela"/>
					<h4>Nelson Mandela</h4>
					<p>
						Interviewed by Cian O'Donnell.
					</p>
					<button type="button" class="btn btn-success">
						Click to view profile &raquo;
					</button>
					<h4></h4>
				</div>

				<div class="col-lg-3">
					<img src="database/nelson-madela.jpg" class="img-rounded" alt="Nelson Mandela"/>
					<h4>Nelson Mandela</h4>
					<p>
						Interviewed by Cian O'Donnell.
					</p>
					<button type="button" class="btn btn-success">
						Click to view profile &raquo;
					</button>
					<h4></h4>

					<img src="database/nelson-madela.jpg" class="img-rounded" alt="Nelson Mandela"/>
					<h4>Nelson Mandela</h4>
					<p>
						Interviewed by Cian O'Donnell.
					</p>
					<button type="button" class="btn btn-success">
						Click to view profile &raquo;
					</button>
					<h4></h4>

					<img src="database/nelson-madela.jpg" class="img-rounded" alt="Nelson Mandela"/>
					<h4>Nelson Mandela</h4>
					<p>
						Interviewed by Cian O'Donnell.
					</p>
					<button type="button" class="btn btn-success">
						Click to view profile &raquo;
					</button>
					<h4></h4>

					<img src="database/nelson-madela.jpg" class="img-rounded" alt="Nelson Mandela"/>
					<h4>Nelson Mandela</h4>
					<p>
						Interviewed by Cian O'Donnell.
					</p>
					<button type="button" class="btn btn-success">
						Click to view profile &raquo;
					</button>
					<h4></h4>

					<img src="database/nelson-madela.jpg" class="img-rounded" alt="Nelson Mandela"/>
					<h4>Nelson Mandela</h4>
					<p>
						Interviewed by Cian O'Donnell.
					</p>
					<button type="button" class="btn btn-success">
						Click to view profile &raquo;
					</button>
					<h4></h4>

					<img src="database/nelson-madela.jpg" class="img-rounded" alt="Nelson Mandela"/>
					<h4>Nelson Mandela</h4>
					<p>
						Interviewed by Cian O'Donnell.
					</p>
					<button type="button" class="btn btn-success">
						Click to view profile &raquo;
					</button>
					<h4></h4>

					<img src="database/nelson-madela.jpg" class="img-rounded" alt="Nelson Mandela"/>
					<h4>Nelson Mandela</h4>
					<p>
						Interviewed by Cian O'Donnell.
					</p>
					<button type="button" class="btn btn-success">
						Click to view profile &raquo;
					</button>
					<h4></h4>
				</div>

			</div>

			<div class="footer">
				<p>
					&copy; DCC Oral History 2014
				</p>
			</div>

		</div>

	</body>
</html>