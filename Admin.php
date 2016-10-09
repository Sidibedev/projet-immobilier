
<!DOCTYPE html>
<html>
<head>
	<title>Connexion</title>
	<link rel="stylesheet" type="text/css" href="dist/css/bootstrap.min.css">
	
	
	<link rel="stylesheet" type="text/css" href="dist/css/style.css">
	<style type="text/css">
	body{

		background-color: black;


	}


	</style>
	
</head>

	
<body style="background-color:black;">



 <a class="navbar-brand" href="index.php">SEN<em><small class="text-primary">immobilier <span class="glyphicon glyphicon-home"></span></small></em></a>


				<div id="centre">
					<h1  align="center" style="color: white;">Bienvenue admin ,connectez vous </h1>
					<br/>
					<div align="center">
								<div  id="meenu"  align="center">
									<form action="" method="post">
										<TABLE  align="center" >
											<div class="centrer" align="center">

												</div>
													<TR>
														<TD align="right" style="color: white;"><label for="login"><span><i class="fa fa-user"></i></span> Login</label></TD>
														<TD>
														<INPUT type="text" class="form-control" placeholder="Votre login" id="login" name="login" />
														</TD>
													</TR>


													<TR>
														<TD align="right" style="color: white;"><br/><label for="mdp"><span><i class="fa fa-lock"></i></span> Password </label></TD>
														<TD>
														<br/>
														<INPUT type="password" class="form-control" placeholder="Votre mot de passe" id="mdp" name="mdp">
														</TD>
													</TR>

													<TR>
														<TD COLSPAN=2><br/>

														 <p align="center"> <tr><td><input type="submit" value="Connexion" class="btn btn-primary active hvr-buzz" name="connecter" /></td></tr> </p>
														 
														</TD>
													</TR>

										</TABLE>
								</form>
								<?php 
				
										session_start();				
													
                                    if (isset($_POST['connecter'])){

                                    	$login=$_POST['login'];
                                    	$mdp=$_POST['mdp'];

                                    	if ($login&&$mdp){
                                    		if (($login=='admin') && ($mdp=='passer')){
                                    			
                                    			header('location:agence.html');
                                    	}else echo "</br> <p style='color: white;'> Login and password do not match. Try Again </p> ";
                                     }
                                    }


													?>
							</div>
					</div>


						</div>

</body>
</html>