<!DOCTYPE html>

<!--
Name: Lyndon R. Labayan
Displays main page
 -->
<?php
	// connects to DB
    require("connect.php");

    $sql="SELECT * FROM blog 
                   ORDER BY id DESC"; //Formatting this way to match how I used to do it in SQL

    $result = $db->query($sql);

    // obtains and posts the last 5 posts
    function get_previous_posts($result)
    {
        if ($result->num_rows == 0)
        {
            echo "<ul><li> There are no posts </li></ul>"; 
        }
        else
        {
            echo "<ul>";

           for ($i = 0; $i < 5; $i++)
            {
            	$row = $result->fetch_assoc();

            	if (strlen($row["content"]) > 200)
            	{

            		$content_200 = substr($row["content"], 0, 200);

            		echo "<li>" . "<h2>" . "<a href='fullpost.php?id={$row["id"]}'>" . $row["title"] . "</a>" . "</h2>" .
                         "<span class='tiny'>" . date_format(date_create($row["date"]), 'F jS\, Y\, g:ia') . 
                         " - <a href='editpost.php?id={$row["id"]}'>" . "Edit post" . "</a>" . "</span>" .
		             	 "<p>" . $content_200 . "... <a href='fullpost.php?id={$row["id"]}'>" . 
		            	 "Read Full Post" . "</a>" . "</p>" . "</li>";
            	}
            	elseif (strlen($row["content"]) > 0)
            	{
	                echo "<li>" . "<h2>" . "<a href='fullpost.php?id={$row["id"]}'>" . $row["title"] . "</a>" . "</h2>" .
		                 "<span class='tiny'>" . date_format(date_create($row["date"]), 'F jS\, Y\, g:ia') . 
                         " - <a href='editpost.php?id={$row["id"]}'>" . "Edit post" . "</a>" . "</span>" .
		                 "<p>" . $row["content"] . "</p>" . "</li>";
	            }
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
   				<legend>Recently Posted Blog Entries</legend>
   				<?php get_previous_posts($result)?>
   			</fieldset>
   		</div>
   	</body>
</html>
