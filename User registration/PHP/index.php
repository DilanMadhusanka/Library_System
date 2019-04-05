<?php 
	session_start();
	if(!isset($_SESSION['username'])) {
		header('location:login.php');
	}

 ?>

 <?php 
	$my_con = mysqli_connect("localhost", "root", "") or die("Could not connect!");
	mysqli_select_db($my_con,"search_test") or die("Could not find database!");
	
	//$output = '';

	if(isset($_POST['search'])) {
		$searchq = $_POST['search'];
		//$search = preg_replace("#[^0-9a-z]#i","", $searchq);

		$query = mysqli_query($my_con,"SELECT * FROM books WHERE Book_Name LIKE '%$searchq%' OR Author LIKE '%$searchq%' ") or die("Could not search!");
		$count = mysqli_num_rows($query);
		if($count == 0) {
			$output = 'There was no search result';
		}
		else {
			while($row = mysqli_fetch_array($query)) {
				$bookN = $row['Book_Name'];
				$bookA = $row['Author'];
				$id = $row['Id'];

				$output .= '<div>'.$id.'. '.$bookN.' written by '.$bookA.'</div>';
			}
		}

		//passing output to another webpage
				$_SESSION['output'] = $output;
				header("location:result.php");
	}

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Online Shoping System</title>
	<link rel="stylesheet" type="text/css" href="Css/main.css">
</head>
<body>
	<div class="wrapper">
		
		<div class="main">
			<div class="top-bar clearfix">

				<div class="top-bar-list">
					<p>The online library is a part of the &nbsp &nbsp<a href="http://ureddit.com/user/sirax">University of Sirax</a></p>
					<ul>
						<!--<li><a href="">Sign Up</a></li>
						<li><a href="">Login</a></li>-->
						<li><a href="">RSS Feeds</a></li>
						<li><a href="logout.php">Log Out</a></li>
					</ul>
				</div> <!--top-bar-list-->

				<!--<div class="site-search">
					<form action="" method="get">
						<input type="text" name="text">
						<button type="submit">Search</button>
					</form>
				</div> <!--site-search-->
			</div> <!--top-bar-->

			<header class="clearfix">
				<div class="logo">
					<img src="Pictures/library_logo.jpeg" style="width: 200px; height: 200px;">
				</div> <!--logo-->

				<div class="library-name">
					<h1>Godzila</h1>
					<h3>Online Library System</h3>
				</div> <!--library-name-->
			</header>

			<br/>
			<div>
				
			</div>

			<nav>
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="../Html/about.html">About Us</a></li>
					<li><a href="../Html/service.html">Student Support</a></li>
					<li><a href="../Html/contact.html">Contact us</a></li>
				</ul>
			</nav>

			<div class="container">
				<div class="intro">
					<h1>Welcome to the Online Library</h1>
					<p>
						A service dedicated to students of the University of London's Distance learning community. We provide online resources, professional support and guidance to all our students whenever, and from wherever they have chosen to study.
					</p>
				</div> 	<!--intro-->

				<div class="search-book">
					<h3>Search the book you want</h3>
					<form action="index.php" method="post">
						<input type="text" name="search">
						<button>Search</button>
					</form>
					<!--<?php print("$output"); ?>-->
				</div> <!--search-box-->

				<div class="famous">
					<h3>Most Famous Book in world</h3>
						<ul>
							<li><a href="https://thegreatestbooks.org/items/225">In Search of Lost Time by Marcel Proust</a></li>
							<li><a href="https://thegreatestbooks.org/items/190">Don Quixote by Miguel de Cervantes</a></li>
							<li><a href="https://thegreatestbooks.org/items/122">Ulysses by James Joyce</a></li>
							<li><a href="https://thegreatestbooks.org/items/38"> The Great Gatsby by F. Scott Fitzgerald</a></li>
						</ul>
				</div> <!--famous-->
				
			</div> <!--container-->

			<div class="home-content">
				<div class="home-col" style="padding-bottom: 25px;">
					<h4>We believe that: </h4>
					<ul>
						<li>Access to adequate library services and resources is essential for the attainment of superior academic skills in post-secondary education, regardless of where students, faculty, and programs are located.</li>
						<li>Members of the distance learning community are entitled to library services and resources equivalent to those provided for students and faculty in traditional campus settings.</li>
					</ul>
				</div> <!--home-col-->

				<div class="home-col" style="padding-bottom: 78px;">
					<h4>Some of our service</h4>
					<ul>
						<li>You can access the library catalogue, renew your items and manage your library account online.</li>
						<li>You can be delivered the book from library delivery service</li>
						<li>If there is some book not available here you can buy the book after you contact us</li>
					</ul>
				</div> <!--home-col-->

				<div class="home-col">
					<h4>Some kind of books we have</h4>
					<ul>
						<li>ICT & Computer science</li>
						<li>Educational books for school Student</li>
						<li>Languages & Dictionaries</li>
						<li>History of defferent culture</li>
						<li>Phylosophies</li>
						<li>Fictions</li>
						<li>Novels & Short stories</li>
						<li>Art</li>
					</ul>
				</div> <!--home-col-->
			</div> <!--home-content-->

			<hr/>

			<div class="social-media">
				<h4>Follow us on:</h4>
				<ul>
					<li><a href="https://www.facebook.com/"><img src="Pictures/social media/facebook.png"></a></li>
					<li><a href="https://twitter.com/Twitter?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><img src="Pictures/social media/twitter.png"></a></li>
					<li><a href="https://www.youtube.com/"><img src="Pictures/social media/youtube.png"  style="width: 100px;"></a></li>
					<li><a href="https://plus.google.com/discover"><img src="Pictures/social media/google+.png"  style="width: 100px;"></a></li>
				</ul>
			</div>

			<!--<footer>
				&copy Copywrite 2016 Software Engineering Teaching Unit, University of Kelaniya
			</footer>-->

		</div> <!--main-->
		<footer>
				&copy Copywrite 2016 Software Engineering Teaching Unit, University of Kelaniya
			</footer>
	</div> <!--wrapper-->
	

</body>
</html>