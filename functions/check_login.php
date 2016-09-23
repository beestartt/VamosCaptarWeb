<?php 
	
	$logged = false;

	if ($logged){//Verificar se o usuário já está cadastrado (escolheu perfil dele). Caso positivo ir direto para o dashboard do mesmo

	}
	else {//Logou mas nao tem perfil escolhido ainda.
		header("Location:../users_profile.php");
	}
?>