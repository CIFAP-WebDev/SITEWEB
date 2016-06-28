	<?php 
	     function estimation($pachat, $usure)
	 {
		 $resultat = $pachat * 0.7/2 - $usure;
		 return $resultat;
	 }
	 $resultat = estimation(100,10);
	 echo 'Votre produit est estimé à ' . $resultat . '<span>€</span>. '; 
	 
	?>