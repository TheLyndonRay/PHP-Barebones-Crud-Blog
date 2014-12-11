<!DOCTYPE HTML>

<!--
Name: Lyndon R. Labayan
Displays the edit post section
-->
<?php

	// connects to DB and asks for authentication
    require("authenticate.php");
    require("connect.php");
    $sql="SELECT * FROM blog WHERE id = ('{$_GET["id"]}')"; # Selects the specific post based on the id passed
       
    $result = $db->query($sql);
    $row = $result->fetch_assoc();
    
    // prints out the title of the specified post
    function get_title($row)
    {
        echo $row["title"];
    }
        
    // prints out the content of the specified post
    function get_content($row)
    {
        echo $row["content"];
    }

    // prints the rid which was initially passed in via $_GET
    function get_id($row)
    {
        echo $row["id"];
    }

    // function that posts error if an error was triggered
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
                            <input id = "title" name = "title" type = "text" value = "<?php get_title($row)?>" />
                        </li>
                        <li>
                            <label for = "content">Content</label>
                        </li>
                        <li>
                            <textarea id = "content" name = "content" rows = "10" cols = "50"><?php get_content($row)?></textarea>                      
                        </li>
                        <li>
                            <input id="id" name = "id" type="hidden" value= "<?php get_id($row)?>" />
                            <button type = "submit" name = "submit" value = "Edit">Submit</button>
                            <button type = "submit" name = "submit" value = "Delete">Delete</button>
                        </li>
                    </ul>
                </fieldset>
            </form>
        </div>
    </body>
</html>