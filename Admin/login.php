<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sign In</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://kit.fontawesome.com/e9688ae4d3.js" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		<div class="form-box">
			<h1 id="title">Sign In</h1>
			<form>
				<div class="input-group">
					<label for="Pf no"><strong> PF Number: </strong></label>
					<div class="input-field">
						<i class="fa-solid fa-user"></i>
						<input type="text" name="user" placeholder="Enter PF No." autocomplete="off">
					</div>

					<label for="pwd"><strong> Password: </strong></label>
					<div class="input-field">
						<i class="fa-solid fa-lock"></i>
						<input type="password" name="password" placeholder="Enter Password">
					</div>

				</div>
				<div class="btn-field">
					<button type="button" id="signinBtn" >Sign in</button>
				</div>
			</form>
		</div>
	</div>
</body>
</html>