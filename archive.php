<!DOCTYPE html>

<!--
Name: Lyndon R. Labayan
Displays the archives
-->
<?php
	//connects to DB
    require("connect.php");

    $sql="SELECT * FROM blog ORDER BY id DESC";
    $result = $db->query($sql);

    // Displays archived posts if they exist
    function get_archived_posts($result)
    {
        if ($result->num_rows == 0)
        {
            echo "<ul><li> There are no posts </li></ul>";
        }
        else
        {
            echo "<ul>";
            while ($row = $result->fetch_assoc())
            {
            	echo "<li>" . "<h3>" . "<a href='fullpost.php?id={$row["id"]}'>" . $row["title"] . "</a>" . "</h3>" .
	                 "<span class='tiny'>" . date_format(date_create($row["date"]), 'F jS\, Y\, g:ia') . 
                     " - <a href='editpost.php?id={$row["id"]}'>" . "Edit post" . "</a>" . "</span>" . "</li>";
            }
            echo "</ul>";
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
   				<legend>Archived posts</legend>
   				<?php get_archived_posts($result)?>
   			</fieldset>
   		</div>
   	</body>
</html>