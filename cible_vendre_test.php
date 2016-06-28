<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html  xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >

<head>
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <title>URBAN CASH - Le Site internet</title>
  <!-- To adapt your page to mobile devices screen -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Enter a brief description of your page -->
  <meta name="description" content="Achat vente de produits d'occasions depuis 10 ans!">

  <!-- You can create and link files within Espresso Html -->
  <link rel="stylesheet" href="style.css">

  <!-- IE Fix for HTML5 Tags -->
  <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

  <style>
    @media screen and (max-width: 480px) { 
      /* you can write css inside media queries to address specific devices */ 
    }
    @media  (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) { 
      /* Retina-specific stuff here */
    }
  </style>
<link rel="shortcut icon" href="favicon.ico"> 
</head>

<body>









		<!-- Menus haut de page-->
        <?php include("includes/menu_entete.php");?>
		
					   <!-- Connexion, bienvenue-->
						<div id="bloc_texte_center">
                           <p>Bienvenue sur <B>urbancash.fr</B><a href=""><?php echo "Connexion Client"; ?></a></p>
		                </div>
				  
				  <div id="bloc_form_resultat">
				  <p>
				  <h1>Récapitulatif de vente</h1>
				  </p><br />
				  
				  <div id="bloc_form_resultat_image">
			     <?php 
				  if (isset($_FILES['monfichier']) AND $_FILES['monfichier']['error'] ==0) // tester fichier existence
				  {
					  if ($_FILES['monfichier']['size'] <= 1000000) // limiter taille
					  {
						  $infosfichier = pathinfo($_FILES['monfichier']['name']); // autorisations d'extensions
						  $extension_upload = $infosfichier['extension'];
						  $extensions_autorisees = array( 'jpg' , 'jpeg' , 'gif' , 'png' );
						  
						  if (in_array($extension_upload, $extensions_autorisees)) // on valide le fichier
						  {
							  move_uploaded_file($_FILES['monfichier']['tmp_name'], 
							  'uploads/' . basename($_FILES['monfichier']['name']));
						  }					  
					  }					  
				  }
				  ?>			  
				  
				  <img width="120px" src="<?php echo 'uploads/' . basename($_FILES['monfichier']['name']);// recupere dimension, enregistre image  ?>"  alt="" />
				  <?php echo $_FILES['monfichier']['name'];// nom image ?>
				  </div>
			  
                <div id="bloc_form_resultat_elements">
				
	         <?php
			 
              if (isset($_POST['ref_produit']) AND (isset($_POST['nom_produit']))) //verifie si la page à été initier
			  
			  {
				  
				 // if(!empty($nom_produit, $ref_produit, $categories, $etat, $age))
				 //{
                 // }
				 
				 
				 
				  echo '<p>' . htmlspecialchars($_POST['nom_produit']) .' - ' . htmlspecialchars($_POST['ref_produit']) . ' (' . $_POST['categories'] .')' . '</p>'; 
                 
				 if ($_POST['garantie'] =="oui") // avec garantie
				 {
				  echo '<p>' . $_POST['etat'] .', sous garanti ' .' (' . 'datant de ' . $_POST['age'] .') ' .'</p>' ;//. htmlspecialchars($_POST['garantie']); 		  

		  }
				 if ($_POST['garantie'] =="non")  // sans garantie
				 {
				  echo '<p>' . $_POST['etat'] .', non garanti ' .' (' . 'datant de ' . $_POST['age'] .') ' .'</p>' ; //. htmlspecialchars($_POST['garantie']); 		  
				  
		  }
		  	     if (($_POST['debattre'] =="non") AND ($_POST['prix_vente_produit'] >=1)) // verifie si le prix est correcte
				  {
				  echo '<p>' . htmlspecialchars($_POST['prix_vente_produit']) .'<sup class="Prix_sup">€</sup>' . ' (prix ferme)' .'</p>' .'<br />'; 
				  //echo ' (prix ferme)' ; //.htmlspecialchars($_POST['debattre'])
				  echo '<span class="petit">' .'Description: ' .'<br />' . htmlspecialchars($_POST['descriptif']) . '</span>' .'<br />' .'<br />'; 				  
				 // echo '<label for="nom_produit">' .'E-mail (obligatoire) :'. '<br />' . '<input type="text" id="e_mail_client" name="e_mail_client" maxlength="50" value="">' .'</label>' .'<br/ >' .'<br/ >'.'<br/ >';
				  echo  '<B class="attention">' .' Attention:' .'</B>' . ' <span class="attention"> ' .' une fois valider, votre proposition sera etudiée par l\'un de nos acheteurs, vous recevrez une réponse sous 24H (maximum). En cas d\'acception de l\'offre, nous vous enverrons un e-mail de confirmation vous demandant de vous présenter à notre comptoir achat avec vos produits. Nous les testons ensemble et vous repartez avec votre CASH. ' . '</span> ' .'<br />' .'<br />' .'<br />';				  
				  echo '<a href="" class="button_rouge">Valider la vente</a>' .'<br />'.'<br />';		
				  echo '<a href="javascript:history.go(-1);" class="attention">Corriger une erreur ?</a>' .'<br/ >' .'<br/ >';						  
                 }
				 
		  	     if (($_POST['debattre'] =="non") AND ($_POST['prix_vente_produit'] <=0)) // si prix inferieur à 0 avec "non" comme option debattre
				  {
				  echo '<span class="attention">ERREUR: veuillez indiquer un prix supérieur à 0.</span>' . '<a href="javascript:history.go(-1);" class="attention"> - Cliquez ici pour revenir en arrière</a>' .'<br/ >' .'<br/ >';							  
                 }				 

				 if (($_POST['debattre'] =="oui") AND ($_POST['prix_vente_produit'] <=0)) // si prix inferieur à 0 avec "oui" comme option debattre
				 {
				  echo '<span class="attention">ERREUR: veuillez indiquer un prix supérieur à 0.</span>' . '<a href="javascript:history.go(-1);" class="attention"> - Cliquez ici pour revenir en arrière</a>' .'<br/ >' .'<br/ >';					  
                 }

			  }
			  else  // si la page n'a pas été initier 
			  {
				  echo 'Vous n\'avez pas renseigner toutes les cases';
			  }
			  ?> 					
				  </div><br />
		    </div>


								
		<!-- Pied de Page-->
        <?php include("includes/menu_pied_de_page.php");?>

  <script defer src="script.js"></script>
  <!-- You can create a js file and link it to your html doc. "defer" makes your script load last -->
</body>

</html>
