<?php
session_start();
require_once('class.user.php');
$user = new USER();

if($user->is_loggedin()!="")
{
	$user->redirect('home.php');
}

if(isset($_POST['btn-signup']))
{
	$uname = strip_tags($_POST['txt_uname']);
	$umail = strip_tags($_POST['txt_umail']);
	$upass = strip_tags($_POST['txt_upass']);	
	
	if($uname=="")	{
		$error[] = "Inscrivez le nom d'utilsateur !";	
	}
	else if($umail=="")	{
		$error[] = "Inscrivez l'adresse email !";	
	}
	else if(!filter_var($umail, FILTER_VALIDATE_EMAIL))	{
		$error[] = 'Entrez une adresse email valide !';
	}
	else if($upass=="")	{
		$error[] = "Inscrivez le mot de passe !";
	}
	else if(strlen($upass) < 6){
		$error[] = "Le mot de passe doit faire au moins 6 charactères.";	
	}
	else
	{
		try
		{
			$stmt = $user->runQuery("SELECT user_name, user_email FROM users WHERE user_name=:uname OR user_email=:umail");
			$stmt->execute(array(':uname'=>$uname, ':umail'=>$umail));
			$row=$stmt->fetch(PDO::FETCH_ASSOC);
			
			if($row['user_name']==$uname) {
				$error[] = "Nom d'utilisateur déjà pris !";
			}
			else if($row['user_email']==$umail) {
				$error[] = "Email déjà utilisé !";
			}
			else
			{
				if($user->register($uname,$umail,$upass)){	
					$user->redirect('sign-up.php?joined');
				}
			}
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}	
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Kourter : Inscription</title>
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen">
	<link rel="stylesheet" href="style.css" type="text/css"  />
</head>
<body>

	<div class="signin-form">

		<div class="container">
			
			<form method="post" class="form-signin">
				<h2 class="form-signin-heading">Inscription</h2><hr />
				<?php
				if(isset($error))
				{
					foreach($error as $error)
					{
						?>
						<div class="alert alert-danger">
							<i class="glyphicon glyphicon-warning-sign"></i> &nbsp; <?php echo $error; ?>
						</div>
						<?php
					}
				}
				else if(isset($_GET['joined']))
				{
					?>
					<div class="alert alert-info">
						<i class="glyphicon glyphicon-log-in"></i> &nbsp; Inscription réussie <a href='index.php'>connectez-vous</a>
					</div>
					<?php
				}
				?>
				<div class="form-group">
					<input type="text" class="form-control" name="txt_uname" placeholder="Nom d'utilisateur" value="<?php if(isset($error)){echo $uname;}?>" />
				</div>
				<div class="form-group">
					<input type="text" class="form-control" name="txt_umail" placeholder="E-Mail" value="<?php if(isset($error)){echo $umail;}?>" />
				</div>
				<div class="form-group">
					<input type="password" class="form-control" name="txt_upass" placeholder="Entrer Mot de Passe" />
				</div>
				<div class="clearfix"></div><hr />
				<div class="form-group">
					<button type="submit" class="btn btn-primary" name="btn-signup">
						<i class="glyphicon glyphicon-open-file"></i>&nbsp;Inscription
					</button>
				</div>
				<br />
				<label>Bienvenue chez Kourter ! <a href="index.php">Connexion</a></label>
			</form>
		</div>
	</div>

</div>

</body>
</html>