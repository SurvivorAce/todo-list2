<?php
	require_once(__DIR__ . "/../model/config.php"); 
?>

<h1 style="color:black">Give me your info ;)</h1>

<form method="post" action="<?php echo $path . "controller/create-user.php"; ?>">
	<div>
		<label for="username" style="color:black">Username: </label>
		<input type="text" name="username" />
	</div>

	<div>
		<label for="password" style="color:black">Password: </label> 
		<input type="password" name="password" /> 
	</div>

	<div>
		<button type="submit" style="color:black">Submit-URU</button> 
	</div>
</form>