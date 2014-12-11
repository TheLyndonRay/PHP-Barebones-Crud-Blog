<!DOCTYPE html>

<!-- 
Name: Lyndon R. Labayan
Responsible for "handling" the insert, update and deleting of posts
-->
<?php

	/*
	If $_POST super global variable has anything in it, do the following:
	*/
	if ($_POST)
	{
		require("connect.php");

		/*
		If the submit variable passed contains the value of "New", verify that the "title" and
		"content" contain a character count greater than 0 and that "title" has less than 255 characters. Display
		error if not.

		Execute insert statement if validation passes.
		*/
		if ($_POST["submit"] == "New")
		{
			$new_post_error = false;

			$posted_title = addSlashes($_POST["title"]); //addSlashes will escape characters like ' for "I'm"
			$posted_content = addSlashes($_POST["content"]);

			if ( strlen($posted_title) > 0 and strlen($posted_title) < 255  and strlen($posted_content) > 0 )
			{
				$sql = "INSERT INTO blog (title
									,content)
						VALUES ('{$posted_title}'
							   ,'{$posted_content}')";

				$result = $db->query($sql);

				header("Location: index.php");
			}
			else
			{
				$new_post_error = "?error=" .urlencode("Please enter a title (max 255 character) and some content.");
				header("Location: newpost.php{$new_post_error}");
			}

			
		}

		/*
		If the submit variable passed contains the value of "Edit", verify that the "title" and
		"content" contain a character count greater than 0 and that "title" has less than 255 characters. Display
		error if not.

		Execute update statement if validation passes.
		*/
		if ($_POST["submit"] == "Edit")
		{

			$edit_post_error = false;
			$id = $_POST["id"];

			if (!is_numeric($id)) 
			{
				header('Location: index.php');
				exit;
			} 
			else 
			{
				$id = (int)$id;
			}

			$posted_title = addSlashes($_POST["title"]);
			$posted_content = addSlashes($_POST["content"]);


			if ( strlen($posted_title) > 0 and strlen($posted_title) < 255  and strlen($posted_content) > 0 )
			{
				$sql = "UPDATE blog
						SET    title = '{$posted_title}'
							  ,content = '{$posted_content}'
						WHERE  id = {$id}";

				$result = $db->query($sql);

				header("Location: fullpost.php?id={$id}");
			}
			else
			{
				$edit_post_error = "?error=" . urlencode("Please enter a title (max 255 character) and some content.");
				$id_for_url = "&id=" . urlencode("{$id}");
				header("Location: editpost.php{$edit_post_error}{$id_for_url}");
			}
	
		}

		if ($_POST["submit"] == "Delete")
		{
			$delete_post_error = false;
			$id = $_POST["id"];

			if (!is_numeric($id)) 
			{
				header('Location: index.php');
				exit;
			} 
			else 
			{
				$id = (int)$id;
			}

			$sql = "DELETE FROM blog
					WHERE id = {$id}";

			$result = $db->query($sql);

			if ($result == false)
			{
				$delete_post_error = "?error=" . urlencode("Delete didn't work out for some reason. dude!");
				$id_for_url = "&id=" . urlencode("{$id}");
				header("Location: fullpost.php{$delete_post_error}{$id_for_url}");
			}
			else
			{
				header("Location: index.php");
			}
			
		}

	}
	


?>