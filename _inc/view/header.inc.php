<?php
// Social Media Application Header
?>
<html>
	<head>
		<?php 
        // Load required javascript and css files
            require("js.inc.php");
            require("css.inc.php");
        // Check to see if user just completed sign up
		if (isset ( $_GET['userSignUp'] )) {  
        // If they have just signed up, then show alert 
?>
		<script>
			alert("Thank you for signing up, you can now use the app!");
		</script>
<?php
		}
?>
	</head>
	<body>
		<header>
			<?php 
                // Load navigation bar
                require("nav.inc.php"); 
            ?>
		</header>
		
			<div class="jumbotron">
				<h1>GC Social Utopia</h1>
			</div>
			<div class="container">