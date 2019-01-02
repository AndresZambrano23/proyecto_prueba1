<?php 
require('./head.php');
$head = head();
print_r($head);
echo "
<div class='container'>
			<div class='row main'>
				<div class='main-login main-center'>
				<h5>INGRESE SUS DATOS.</h5>
					<form>
						
						<div class='form-group'>
							<label for='name' class='cols-sm-2 control-label'>Your Name</label>
							<div class='cols-sm-10'>
								<div class='input-group'>
									<span class='input-group-addon'><i class='fa fa-user fa' aria-hidden='true'></i></span>
									<input type='text' class='form-control' name='name' id='name'  placeholder='Enter your Name'/>
								</div>
							</div>
						</div>

						<div class='form-group'>
							<label for='email' class='cols-sm-2 control-label'>Your Address</label>
							<div class='cols-sm-10'>
								<div class='input-group'>
									<span class='input-group-addon'><i class='fa fa-envelope fa' aria-hidden='true'></i></span>
									<input type='text' class='form-control' name='apellido' id='apellido'  placeholder='Enter your Address'/>
								</div>
							</div>
						</div>


						<div class='form-group'>
							<label for='confirm' class='cols-sm-2 control-label'>Phone</label>
							<div class='cols-sm-10'>
								<div class='input-group'>
									<span class='input-group-addon'><i class='fa fa-lock fa-lg' aria-hidden='true'></i></span>
									<input type='text' class='form-control' name='tel' id='tel'  placeholder='Enter your Phone'/>
								</div>
							</div>
						</div>

						<div class='form-group '>
							<input target='_blank' type='submit' id='btnregistrar' value='REGISTRARSE' class='btn btn-primary btn-lg btn-block login-button'>
							<input type='submit' value='Atras' class='btn btn-info' id='btnregresar'>
						</div>
						
					</form>
				</div>
			</div>
		</div>";





?>