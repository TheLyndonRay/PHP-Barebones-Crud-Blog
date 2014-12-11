<!DOCTYPE html>

<!-- 
Name: Lyndon R. Labayan
Displays a single full post
-->
<?php

	// retrieves full post if post exists - returns to main page if not
    function get_full_post()
    {

    	require("connect.php");

        $sql="SELECT * FROM blog WHERE id = ('{$_GET["id"]}')";

        $result = $db->query($sql);

        if (isset($_GET["id"]) and is_numeric($_GET["id"]))
     	{

     		$row = $result->fetch_assoc();

            echo "<ul>";

            if ($row == null)
            {
                header("Location: index.php");
            }
            else
            {
       			echo "<li>" . "<h2>" . "<a href='fullpost.php?id={$row["id"]}'>" . $row["title"] . "</a>" . "</h2>" .
                     "<span class='tiny'>" . date_format(date_create($row["date"]), 'F jS\, Y\, g:ia') . 
                     " - <a href='editpost.php?id={$row["id"]}'>" . "Edit post" . "</a>" . "</span>" . "<p>" . $row["content"] . 
                     "</p>" . "</li>";
            }

            echo "</ul>";
     	}
        else
        {
            header("Location: index.php");
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
   			<div id="neckPart">
   				<a href="index.php">Home</a>
   				<a href="archive.php">Archives</a>
   				<a href="newpost.php">New Post</a>
   			</div>
   		</div>
   		<div id="main">
   			<fieldset>
   				<legend>Recently Posted Blog Entries</legend>
   				<?php get_full_post()?>
   			</fieldset>
   		</div>
   	</body>
</html>