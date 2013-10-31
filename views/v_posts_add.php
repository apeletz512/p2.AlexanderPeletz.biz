<form method='POST' action='/posts/p_add'>

    <label for='content'>Contribute a new post:</label>
    <textarea name='content' id='content'></textarea>

    <br><br>
    <input type='submit' value='Contribute'>

</form> 

<div>

<?php if(isset($somePosts)) {
	
		var_dump($_POST);
	}
?>

</div>