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
	
		         <!-- Titre vendre article-->
     <div id="bloc_title">
     <h1><B>Vendre mon article</B></h1>

				 
				  <div id="bloc_form">	
			<form method="POST" action="cible_vendre_test.php" enctype="multipart/form-data">				
				 <p>
				 Catégorie de produit <br />
                  <select name="categories" id="categories" class="select">
                    <option value="0">«Choisissez une catégorie»</option>
                    <option value="1" style="background-color:#E6E6E6" disabled="" id="cat1">-- MULTIMEDIA --</option>
                    <option value="Informatique" id="cat2">Informatique</option>
                    <option value="Consoles &amp; Jeux vidéo" id="cat3">Consoles &amp; Jeux vidéo</option>
                    <option value="Image &amp; Son" id="cat4">Image &amp; Son</option>
                    <option value="Téléphonie" id="c5">Téléphonie</option>
                    <option value="6" style="background-color:#E6E6E6" disabled="" id="cat6">-- MAISON --</option>
                    <option value="Ameublement" id="cat7">Ameublement</option>
                    <option value="Electroménager" id="cat8">Electroménager</option>
                    <option value="Décoration" id="cat9">Décoration</option>
                    <option value="Bricolage" id="cat10">Bricolage</option>
                    <option value="Accessoires &amp; Bagagerie" id="cat11">Accessoires &amp; Bagagerie</option>
                    <option value="Montres &amp; Bijoux" id="cat12">Montres &amp; Bijoux</option>
                    <option value="13" style="background-color:#E6E6E6" disabled="" id="cat13">-- LOISIRS --</option>
                    <option value="DVD / Films" id="cat14">DVD / Films</option>
                    <option value="CD / Musique" id="cat15">CD / Musique</option>
                    <option value="Livres" id="cat16">Livres</option>
                    <option value="Vélos" id="cat17">Vélos</option>
                    <option value="Sports &amp; Hobbies" id="cat18">Sports &amp; Hobbies</option>
                    <option value="Instruments de musique<" id="cat19">Instruments de musique</option>
                    <option value="Collection" id="cat20">Collection</option>
                    <option value="Jeux &amp; Jouets" id="cat21">Jeux &amp; Jouets</option>
                    <option value="22" style="background-color:#E6E6E6" disabled="" id="cat22">
                    <option value="Autres" id="cat23">Autres</option>
                      </select>
				 </p><br />
				 
				 <p> 
				 <label for="nom_produit">
                 Marque:
				 <input type="text" id="nom_produit" name="nom_produit" maxlength="50" value="">
				 </label>	 
				 <label for="ref_produit">
				 Modèle/Réf:
				 <input type="text" id="ref_produit" name="ref_produit" maxlength="50" value="">
				 </label>
				 </p>
				 
				 <p>
				 Description:<br /> 
				 <TEXTAREA class="textarea" id="descriptif" name="descriptif" maxlength="500" value="Une courte description de l'article..."></TEXTAREA>
				 </p>				 
				 
				 <p>
				 Le Produit est-il sous garantie ?<br />
				 <label class="radio">
                 <input id="garantie" name="garantie" value="oui" type="radio" checked="checked"> Oui
                 </label>
				 
                 <label class="radio">
                 <input id="garantie" name="garantie" value="non" type="radio"> Non
                 </label>
				 </p>

				 
				 <p>
				 Etat de votre produit:<br />
				 <select name="etat" id="etat" class="select">
                    <option value="etat0">«Etat de l'article»</option>
                    <option value="etat1" style="background-color:#E6E6E6" disabled="" id="cat14">-- Etat de l'article --</option>
                    <option value="Neuf" >Neuf</option>
                    <option value="Bon état" >Bon état</option>
                    <option value="Occasion" >Occasion</option>
                 </select>
				 </p>
				 
				 <p>
				 l'age de votre produit:<br />
				 <select name="age" id="age" class="select">
                    <option value="age0">«Age de l'article»</option>
                    <option value="age1" style="background-color:#E6E6E6" disabled="" id="cat14">-- Age de l'article --</option>
                    <option value="moins d'un an" >Moins d'un an</option>
                    <option value="plus d'un an" >Plus d'un an</option>
                 </select>
				 </p>
				 
				 <p>
				 Prix de vente:<br /> 
				 <input type="number" class="petit"  id="prix_vente_produit" name="prix_vente_produit" maxlength="50" value="">
				 </p>
				 
				 <p>
				 Le Prix est-il à débattre?<br />
				 <label class="radio">
                 <input id="oui" name="debattre" value="oui" type="radio" checked="checked"> Oui
                 </label>
				 
                 <label class="radio">
                 <input id="non" name="debattre" value="non" type="radio"> Non
                 </label>
				 </p>

                 <p>
				 Joindre une photo:<br />
                 <!-- Le contenu du formulaire est à placer ici... -->
	             <input type="file" class="custom-file-input" name="monfichier"/> 
                 </p>
				 <p> 
				  <?php echo  '<B class="attention">' .' Attention:' .'</B>' . ' <span class="attention"> ' .'vous devez être majeur pour vendre chez nous. la présentation d\'une pièce d\'identité en cours de validité sera obligatoire lors de l\'opération de vente à notre comptoir achat. ' . '</span> ' .'<br />' .'<br />' .'<br />'; ?>				 
				 </p>
                 <p>				 
				 <input type="submit" value="Valider" class="button_rouge"/>	
                 </p><br />				 
                 </form> 		 
		</div>
	</div>	 
								
		<!-- Pied de Page-->
        <?php include("includes/menu_pied_de_page.php");?>

  <script defer src="script.js"></script>
  <!-- You can create a js file and link it to your html doc. "defer" makes your script load last -->
</body>

</html>
