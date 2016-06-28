<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
   <head>
       <title>Réception de paramètres dans l'URL</title>
       <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   </head>
   <body>
   
   <p>Bonjour <?php 
              if (isset($_GET['prenom']) AND (isset($_GET['nom'])) AND isset($_GET['repeter']))
			  {
				  $_GET['repeter'] = (int) $_GET['repeter']; // on declare l'entier
				  
				  if ($_GET['repeter'] >= 1 AND $_GET['repeter'] <= 100) // s'il est entre 0 et 100
				  {
					  
				  for ($i = 0; $i < $_GET['repeter']; $i++)
				  {
					echo 'Bonjour' . $_GET['nom'] . ' ' . $_GET['prenom'] . ' ! <br />';
				  }
			  }
			  }
			  else
			  {
				  echo 'Vous n\'avez pas renseigner de nom, prenom et nombre de repetition';
			  }
			  ?> 
   </p>
   
   </body>
</html>
