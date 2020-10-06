<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>profile</title>
</head>
<body>
	<div class="container">

		<div class="header">

			<h2>profile</h2>
			
		</div>
		<form action="profile.php" method="post">
			<div>

				<label for="name">Name : </label>
				<input type="text" name="name" required>

			</div>

			<div>
				<label for="company name">Company Name : </label>
				<input type="text" name="Company Name">

			</div>

			<div>

				<label for="email address">Email address : </label>
				<input type="email" name="email">

			</div>

			<div>

				<label for="telephone number">Telephone number : </label>
				<input type="text" name="telephone number">

			</div>

			<div>

				<label for="password">Password : </label>
				<input type="password" name="Password">

			</div>

			<button type="submit"> Submit </button>

			<p> Add new business cards to your library? <a href="library.php"><b>Add new bsuiness cards</a></p>


		</form>
		

	</div>





</body>
</html>