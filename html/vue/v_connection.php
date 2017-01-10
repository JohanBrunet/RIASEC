<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>Riasec</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script src="includes/jquery-3.1.1.min.js"></script>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>		
	</head>
	<body style="background-color: #34495e;">
	
	<div class="titre">
		Bienvenue
		<div class="sousTitre">
		sur le Riasec Test
		</div>
	</div>
	<div class="buttonHandler ">
		<span type="button" class="boutton" style="background-color: #27ae60;" data-toggle="modal" data-target="#modalLogin">Se connecter</span>
		<span type="button" class="boutton" style="background-color: #2980b9;" data-toggle="modal" data-target="#modalRegister">S'inscrire</span>
	</div>

<!-- Modal Login -->
<div id="modalLogin" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Connection</h4>
      </div>
      <div class="modal-body">
     	 <form action="index.php?section=index&type=login" method="post" >
	   		<input type="text" class="form-control" placeholder="Identifiant" name="username" style="width: 45%; margin: 0em auto 0em auto; border-color: #3498db; ">
	   		<input type="password" class="form-control" placeholder="Mot de passe" name="password" style="width: 45%; margin: 1em auto 0em auto; border-color: #3498db; ">
	   		<input type="submit" class="boutton" style="background-color: #27ae60; font-size: 1em; padding: 0.3em 0.3em 0.3em 0.3em; color:white;" Value="Se connecter">
	   	 </form>
      </div>
      <div class="modal-footer">
      	<button type="button" class="btn btn-default"  data-toggle="modal" data-target="#modalLoginAdmin" >Je suis admin</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
      </div>
    </div>

  </div>
</div>

<!-- Modal Login ADMIN -->
<div id="modalLoginAdmin" class="modal fade" role="dialog">
  <div class="modal-dialog" >
    <div class="modal-content">
      <div class="modal-header" style="background-color: #2c3e50;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="color:#ecf0f1;">Connection Admin</h4>
      </div>
      <div class="modal-body" style="background-color: #2c3e50;">
      	<form action="index.php?section=index&type=loginadmin" method="post" >
	   		<input type="text" class="form-control" placeholder="Identifiant" name="username" style="width: 45%; margin: 0em auto 0em auto; border-color: #3498db; ">
	   		<input type="password" class="form-control" placeholder="Mot de passe" name="password" style="width: 45%; margin: 1em auto 0em auto; border-color: #3498db; ">
	   		<input type="submit" class="boutton" style="background-color: #27ae60; font-size: 1em; padding: 0.3em 0.3em 0.3em 0.3em; color:white;" Value="Se connecter">
	   	</form>
      </div>
      <div class="modal-footer" style="background-color: #2c3e50;">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
      </div>
    </div>

  </div>
</div>


<!-- Modal Register -->
<div id="modalRegister" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Inscription</h4>
      </div>
      <div class="modal-body">
      	<form action="index.php?section=index&type=register" method="post" >
	   		<input type="text" class="form-control" placeholder="Identifiant" name="username" style="width: 45%; margin: 0em auto 0em auto; border-color: #3498db; ">
	   		<input type="password" class="form-control" placeholder="Mot de passe" name="password" style="width: 45%; margin: 1em auto 0em auto; border-color: #3498db; ">
	   		<input type="text" class="form-control" placeholder="Nom" name="first_name" style="width: 45%; margin: 1em auto 0em auto; border-color: #3498db; ">
	   		<input type="text" class="form-control" placeholder="Prénom" name="last_name" style="width: 45%; margin: 1em auto 0em auto; border-color: #3498db; ">
	   		<div style="text-align:center; margin: 1em auto 0em auto;">
	   		<select class="form-control" id="section" style="width: auto; display: inline;">
        		<option>GBA</option>
        		<option>IG</option>
      			<option>MAT</option>
     		 	<option>MEA</option>
     		 	<option>MI</option>
     		 	<option>MSI</option>
     		 	<option>SE</option>
     		 	<option>STE</option>
     		</select>
            <select class="form-control" name="section2" style="width: auto; display: inline;">
		        <option>3</option>
		        <option>4</option>
		        <option>5</option>
		     </select>
		     <select class="form-control" name="annee" style="width: auto; display: inline;">
		        <option>2016-2017</option>
		        <option>2017-2018</option>
		        <option>2018-2019</option>
		       	<option>2019-2020</option>
		        <option>2020-2021</option>
		        <option>2021-2022</option>
		        <option>2022-2023</option>
		        <option>2023-2024</option>
		        <option>2024-2025</option>
		        <option>2025-2026</option>
		        <option>2026-2027</option>
		        <option>2027-2028</option>
		        <option>2028-2029</option>
		        <option>2029-2030</option>
		        <option>2030-2031</option>
		     </select>
		     </div>
	   		<input type="submit" class="boutton" style="background-color: #2980b9; font-size: 1em; padding: 0.3em 0.3em 0.3em 0.3em; color:white;" Value="S'inscrire">
      	</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
      </div>
    </div>

  </div>
</div>




	</body>
</html>