$(function () {

	/*
	 * Plugin slider "Superslides" (http://nicinabox.com/superslides/)
	 * Documentation : https://github.com/nicinabox/superslides
	 */
	 
	// Activation et configuration du slider #home-slider (page d'accueil)

	$('#slides').superslides({
		//play: 5000,							// Vitesse de défilement (ms)
		//slide_easing: 'easeInOutCubic',		// Type de transition
		//slide_speed: 800,					 Vitesse de transition (ms)
		pagination: true,					// Génère un système de pagination
		hashchange: true,					// Modifie l'URL (permet de charger la page à la slide voulue)				
	});
  
});