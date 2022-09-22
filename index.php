<?php
	session_start();
	if (count($_SESSION) != 0) {
		$username = $_SESSION["username"];
		$permit = $_SESSION["permitlvl"];
	} else {
		$username = "Login";
		$permit = 'To gain access, you have to sign in.';
	}
?>
<head>
    <link rel="stylesheet" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta charset="UTF-8" />
	<title> The Hub </title>
 </head>
<body>
	<script type="module" src="./main.js"></script>
    <header>
        <div class="topnav">
	    	<div class="kartoffel"><img src="kartoffelpc.png" style="width:4vw;height:4vw;" /></div>
            	<a class="active" href="/">Home</a>
            	<a href="projects.php">Projects</a>
            	<a href="info.php">Info</a>
				<a href="sources.php">Sources</a>
				<a href="/login/login.php">
					<?php
						echo($username);
					?>
				</a>
			</div>
		<div class="topnav2">
 	 		<a href="basicidea.html">Basic Idea</a>
  			<a href="news.html">News</a>
  			<a href="contact.html">Contact</a>
  			<a href="#about">About</a>
		</div>
    </header>
	<h1><?php echo($permit);?></h1>
</body>
</html>