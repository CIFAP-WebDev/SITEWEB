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
							  echo $_FILES['monfichier']['name']; // nom image ;
						  }					  
					  }					  
				  }
				  ?>			  
				  
				  <img WIDTH="200" HEIGHT="200" src="<?php echo 'uploads/' . basename($_FILES['monfichier']['name']); ?>"  alt="" />
				  </div><br />
				  
                <div id="bloc_form_resultat_elements">
				 <h3>Catégorie:</h3>				  
				 <p>
				  <?php echo $_POST['categories']; ?>
				  </p>
				 
				 <h3>Marque:</h3>				 
				 <p>
				  <?php echo htmlspecialchars($_POST['nom_produit']); ?>
				  </p>
				  
				 <h3>Références:</h3>
				 <p>
				  <?php echo htmlspecialchars($_POST['ref_produit']); ?>
				  </p>
				  
				 <h3>Garantie:</h3>				 
				 <p>
				  <?php echo htmlspecialchars($_POST['garantie']); ?>
				  </p>	
				 
				 <h3>Etat du produit:</h3>				  
				 <p>
				  <?php echo $_POST['etat']; ?>
				  </p>	
				 
				 <h3>Age du produit:</h3> 
				 <p>
				  <?php echo $_POST['age']; ?>
				  </p>	
				  
				  <h3>Votre prix de vente:</h3>
				  <p class="Prix_gros">
				  <?php echo htmlspecialchars($_POST['prix_vente_produit']) .'<sup class="Prix_sup">€</sup>'; ?>
				  </p>
				  
				 <h3>Prix à débatre?:</h3>				  
				 <p>
				  <?php echo htmlspecialchars($_POST['debattre']); ?>
				  </p><br />	
				  
				 <p>
				  <a class="button" href="vendre.php"><span>Vendre l'article</span></a> ou <a href="vendre.php" class="button_rouge"><span>Corriger</span></a>
				  </p><br />					  
				  
				  </div>
		    </div>


								
		<!-- Pied de Page-->
        <?php include("includes/menu_pied_de_page.php");?>

  <script defer src="script.js"></script>
  <!-- You can create a js file and link it to your html doc. "defer" makes your script load last -->
</body>

</html>
