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
	
			   <!-- Acheter Vendre-->
		       <div id="bloc_page_middle">
				  <div id="bloc_page_middle_carre">
                    <img class="fade" src="images/img_sell.png"><a class="button" href="vendre.php"><span>Vendre Mon Article</span></a>
                 </div>
				 
                <div id="bloc_page_middle_carre">
                   <img class="fade" src="images/img_buy.png"><a class="button" href=""><span>Articles en ligne</span></a>
                 </div><br>
		       </div><br>
		
				<!-- Slogan achat sérénité-->
		<div id="bloc_texte_center">
		   <p><li>sécurité</li><li>confidentialité</li><li>rapidité</li></p><br>
          <h3>Avec <B>URBAN CASH, </B>Achetez, vendez, autrement!</h3>
	    </div><br>

		         <!-- Aujourd'hui Produits magasin-->
                 <div id="bloc_title">
                   <h1><B>Aujourd'hui dans votre Magasin</B></h1>
                 </div>
				 
                 <div id="bloc_aujourdhui">
                    <h1><B>Playstation 4</B><br><img class="fade" src="images/products/ps4.png"></h1>
                      <div id="bloc_aujourdhui_description">
                       <p><h2>Description</h2></p> 
                       <p>Sony Playstation 4 capacité: 500 GB, occasion très bon état.</p>
                       <p>Produit testé, verifié, garanti 1 an à saisir en magasin.</p>
                     <h1 class="texte_gros">299<sup class="texte_petit">€</sup></h1>
                        <p><a class="button" href=""><span>Réserver ce produit dès aujourd'hui</span></a></p>
                </div>
                </div><br>

				<!-- A propos de nous-->
				 <div id="bloc_title">
                   <h1><B>URBAN CASH</B> C'est aussi...</h1>
                </div>
				
		        <div id="bloc_page_bas">
				 <div id="bloc_page_bas_menus">	
				  <img class="fade" src="images/carte_fidelite.png"> 
				    <h1>Fidélité</h1> 
				      <p><b>Chez nous, la fidélité n'a pas de prix! C'est pourquoi la carte de Fidélité est entièrement gratuite toute l'année. Cette carte vous ouvre le droit à des remises et promotions exceptionnelles</b></p>
			       <a class="transit" href="">En savoir+</a>
                </div>
					
					<div id="bloc_page_bas_menus">
				    <img class="fade" src="images/img_garanties.png"> 
						<h1>Garanti</h1>
						  <p><b>La Garantie permet d'assurer le bon fontionnement d'un produit sur une période indiquée. Tous nos produits sont testés, vérifiés et garantis de 6 à 12 mois.</b></p>
						<a class="transit" href="">En savoir+  </a>
                    </div>
					
			<div id="bloc_page_bas_menus">
				<img class="fade" src="images/transportation.png">
				<h1>Service</h1>
				<p><b>Votre produit est encombrant? Vous ne pouvez pas venir en magasin? URBAN CASH se déplace chez vous! Pour cela, il suffit d'estimer la valeur de votre produit sur notre site et prendre un rendez-vous pour le retrait chez vous!.</b></p>
				<a class="transit"  href="">En savoir+</a>
				
			</div>
	
		</div>
								
		<!-- Pied de Page-->
        <?php include("includes/menu_pied_de_page.php");?>

  <script defer src="script.js"></script>
  <!-- You can create a js file and link it to your html doc. "defer" makes your script load last -->
</body>

</html>
