<?php
//scropit de registration
	$lien=mysql_connect('localhost','root','root')or die(mysql_error());//coonection à la base de donnees
	$db_selected = mysql_select_db('utilisateurs', $lien);//choisir la BDD
	if (!$db_selected) {
		die ('NOT SELECTED DATABASE: ' . mysql_error());//erreur
	}
	if(isset($_POST["submit"])){//si nous avons soumis la registration,on recupere les infos
		$surname=$_POST["surname"];
		$name=$_POST["name"];
		$country=$_POST["country"];
		$mail=$_POST["mail"];
		$login=$_POST["login"];
		$password=$_POST["password"];
		$c_password=$_POST["c_password"];//confirmer mot de passe
		if($password==$c_password){//si les mots de passe sont egaux on ajoute user
			$res='INSERT INTO users VALUES("","'.$surname.'","'.$name.'" ,"'.$country.'","'.$mail.'","'.$login.'","'.$password.'")'or die(mysql_error());
			mysql_query($res);
			echo "cest bon";
		}
		else{
		die("Connection ERROR");//sinon erreur
		}
	}
	mysql_close();//fermer la BDD
	
	//script connexion
	$lien=mysql_connect('localhost','root','root')or die(mysql_error());//on se connecte
	$db_selected = mysql_select_db('utilisateurs', $lien);//choisir BDD
	if (!$db_selected) {
		die ('NOT SELECTED DATABASE: ' . mysql_error());
	}
	if(isset($_POST["valider"])){//si on valide connection, on reccupere les infos(login et mot de passe)
		$e_login=$_POST["e_login"];
		$e_password=$_POST["e_password"];
		$query=mysql_query('SELECT id FROM users WHERE login="'.$e_login.'" and password="'.$e_password.'"');//on fait appel à BDDD
	if(mysql_num_rows($query)==0){//si nous avons rien trouvé donc:
		echo "1.Mot de passe ou login incorrect\n
		2.Vous etes pas enregistré";
	}
	else{//sinon page d'accueil
		echo "Page d'accueil";
	}
	}
	mysql_close();

	?>
<form method="post" action="registerV2.php">
  <input type="text" name="e_login" placeholder ="login" required / ><br>
  <input type="text" name="e_password" placeholder ="password" required / ><br>
  <input type="submit" name="valider"value="Connecter"  / >
 </form>
 
<form method="post" action="registerV2.php">
  <input type="text" name="surname" placeholder ="Surname" required / ><br>
  <input type="text" name="name" placeholder ="name" required / ><br>
  <input type="text" name="country" placeholder ="country" required / ><br>
  <input type="text" name="mail" placeholder ="mail" required / ><br>
  <input type="text" name="login" placeholder ="login" required / ><br>
  <input type="password" name="password" placeholder ="password" required / ><br>
  <input type="password" name="c_password" placeholder ="Confirmer password" required / ><br>
  <input type="submit" name="submit"value="Register"  / >
   <input type="reset" name="reset"value="Annuler"  / >
 </form>
