<?php
	
	include_once('modele/m_connection.php');

	//On regarde quel est le formulaire qui a été posté si il y en a eu un
	if($_GET['type']=='login'){
	//On vérifie les champs
		error_reporting(E_ALL);

		if(!empty($_POST)){
				$retour=1;
			foreach($_POST as $cle=>$val){
				if(empty($val)){
					echo '<span class="error">Le champ ',$cle,' est obligatoire.</span>';
					$retour=0;
				}
			}
			if($retour==0){
				echo '<a href="javascript:history.go(-1);"><span class="error" style=""></br>Cliquez ici pour corriger le formulaire</span></a>';
			}
			else{
				echo '<div class="formInfo">Vous êtes désormais connecté avec succes ! Vous allez être redirigé d\'ici quelques secondes...</div>';
			}
		}

		
	}
	else if($_GET['type']=='loginadmin'){
	//On vérifie les champs
		error_reporting(E_ALL);

		if(!empty($_POST)){
				$retour=1;
			foreach($_POST as $cle=>$val){
				if(empty($val)){
					echo '<span class="error">Le champ ',$cle,' est obligatoire.</span>';
					$retour=0;
				}
			}
			if($retour==0){
				echo '<a href="javascript:history.go(-1);"><span class="error" style=""></br>Cliquez ici pour corriger le formulaire</span></a>';
			}
			else{
				echo '<div class="formInfo">Vous êtes désormais connecté avec succes ! Vous allez être redirigé d\'ici quelques secondes...</div>';
			}
		}
	}
	else if($_GET['type']=='register'){
	//On vérifie les champs
		error_reporting(E_ALL);

		if(!empty($_POST)){
				$retour=1;
			foreach($_POST as $cle=>$val){
				if(empty($val)){
					echo '<span class="error">Le champ ',$cle,' est obligatoire.</span>';
					$retour=0;
				}
			}
			if($retour==0){
				echo '<a href="javascript:history.go(-1);"><span class="error" style=""></br>Cliquez ici pour corriger le formulaire</span></a>';
			}
			else{
				echo '<div class="formInfo">Vous êtes désormais connecté avec succes ! Vous allez être redirigé d\'ici quelques secondes...</div>';
			}
		}
	}

	include_once('vue/v_connection.php');