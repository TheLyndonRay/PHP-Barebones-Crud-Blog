<!DOCTYPE html>

<!--
Name: Lyndon R. Labayan
Displays the new post section
-->
<?php

	// Asks for authentication
	require("authenticate.php");

	// Checks if an error was sent, displays if it was
    function check_error()
    {
        if(isset($_GET["error"]))
        {
            $the_error = $_GET["error"];

            echo "<p class='error'>";
            echo "{$the_error}";
            echo "</p>";
        }
    }
?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
        <title>My Blog - Home Page</title>
        <link rel="stylesheet" type="text/css" href="assignment4.css" />
    </head>

   	<body>
   		<div id="topPart">
   			<h1>BSOD BLOG</h1>
   			<?php check_error(); ?>
   			<div id="neckPart">
   				<a href="index.php">Home</a>
   				<a href="archive.php">Archives</a>
   				<a href="newpost.php">New Post</a>
   			</div>
   		</div>
   		<div id="main">
   			<form id = "post" action = "validate_update_delete.php" method = "post">
	   			<fieldset>
	   				<legend>New Blog Post</legend>
	   				<ul>
	   					<li>
	   						<label for = "title">Title</label>
	   					</li>
	   					<li>
		   					<input id = "title" name = "title" type = "text" placeholder = "" autofocus  />
		   				</li>
		   				<li>
		   					<label for = "content">Content</label>
		   				</li>
		   				<li>
							<textarea id = "content" name = "content" rows = "10" cols = "50" ></textarea>	   					
		   				</li>
		                <li>
		                	<button type = "submit" name ="submit" value = "New">Submit</button>
		                </li>
	            	</ul>
	   			</fieldset>
	   		</form>
   		</div>
   	</body>
</html>