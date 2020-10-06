<?php

session_start();
if(isset($_SESSION['name'])){
	$_SESSION['msg']="You must create a profile to view this page"
	header("location:profile.php")
}

if (isset($GET['Llogout'])){
	session_destroy();
	unset($_SESSION['name']);
	header("location: profile.php")
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>HomePage</title>
</head>
<body>
	<h1>Homepage</h1>
	<?php
	if (isset($_SESSION['success']));?>

	<div>
		<h3>
			<?php
				echo $_SESSION['success'];
				unset($_SESSION['success']);
		</h3>
	</div>

			<?php endif ?>

// if the user logs in print infos about him

<? php if isset($_SESSION['name'])) : ?>

	<h3> Welcome <strong><?php echo $_SESSION['name']; ?></strong></h3>

	<button><a href="index.php?logout='1'"></a></button>

<?php endif  ?>
</body>
</html>