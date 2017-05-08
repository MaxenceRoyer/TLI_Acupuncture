function userDestroySession() {
	var req = new XMLHttpRequest();
	
	req.open('GET', 'http://localhost/tli-acupuncture/scripts_php/forms/disconnection.php', true);
	req.onreadystatechange = function (aEvt) {
	  if (req.readyState == 4) {
		 if (req.status == 200) {
			 if (req.responseText == "true") {
				 // Reload of the page - because the session is destroyed
				 window.location.reload(true);
			 } else {
				 changeIHMErrorMessage("Mauvaise combinaison e-mail / mot de passe");
			 }
		 } else {
			changeIHMErrorMessage("Erreur pendant le chargement de la page.");
		 }
	  }
	};
	req.send(null);
}

window.addEventListener("load", function() {
	document.getElementById("disconnect").addEventListener("click", userDestroySession);
});