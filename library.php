<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>library</title>
</head>
<body>
	<div class="container">

		<div class="header">

			<h2>Library</h2>
			
		</div>
		<form action="library.php" method="post">
			<div>

				<label for="name">Name : </label>
				<input type="text" name="name">

			</div>

			<div>
				<label for="company name">Company Name : </label>
				<input type="text" name="Company Name">

			</div>

			<div>

				<label for="email address">Email address : </label>
				<input type="email" name="email" required >

			</div>

			<div>

				<label for="telephone number">Telephone number : </label>
				<input type="text" name="telephone number">

			</div>

			<div>

				<label for="password">Password : </label>
				<input type="password" name="Password">

			</div>

			<button type="submit"> Add business card </button>

			 <p><a href="profile.php"><b>Return to profile</a></p>


		</form>
		

	</div>


</body>
</html>