<?php
require('./head.php');
$head= head();
print_r($head);
echo "
<div class='container'>
	<div class='d-flex justify-content-center h-100'>
		<div class='card'>
			<div class='card-header'>
				<h3>Sign In</h3>
				<div class='d-flex justify-content-end social_icon'>
					<span><i class='fab fa-facebook-square'></i></span>
					<span><i class='fab fa-google-plus-square'></i></span>
					<span><i class='fab fa-twitter-square'></i></span>
				</div>
			</div>
			<div class='card-body'>
				<form action='ingreso.php' method='POST'>
					<div class='input-group form-group'>
						<div class='input-group-prepend'>
							<span class='input-group-text'><i class='fas fa-user'></i></span>
						</div>
						<input type='text' class='form-control' placeholder='username' id='nombre' name='nombre'>
						
					</div><br><br><br><br>
					<div class='row align-items-center remember'>
						<input type='checkbox'>Remember Me
					</div>
					<div class='form-group'>
                        <input type='submit' value='Login' class='btn float-right login_btn' onclick='validarusuario()'>
                        <a href='register.php' class='btn float-left login_btn'>Check In</a>
					</div>
				</form>
			</div>
			<div class='card-footer'>
				<div class='d-flex justify-content-center links'>
					Don't have an account?<a href='register.php'>Sign Up</a>
				</div>
			</div>
		</div>
	</div>
</div>";
?>