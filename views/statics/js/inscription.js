function userInscription(var formInscription) {
	var req = new XMLHttpRequest();
	
	var email = formInscription.email.value;
	var password = formInscription.password.value;
	
	if (email.length > 0 && password.length > 0) {
		deleteBordersInputForms();
		changeIHMErrorMessage("");
		
		req.open('GET', 'http://localhost/tli-acupuncture/scripts_php/forms/connection.php?email='.concat(email).concat("&&password=").concat(calcMD5(password)), true);
		req.onreadystatechange = function (aEvt) {
		  if (req.readyState == 4) {
			 if (req.status == 200) {
				 if (req.responseText == "true") {
					 // Reload of the page - because the session is created
					 window.location.reload(true);
				 } else {
				     clearPasswordField();
					 changeIHMErrorMessage("Mauvaise combinaison e-mail / mot de passe");
				 }
			 } else {
				 changeIHMErrorMessage("Erreur pendant le chargement de la page.");
			 }
		  }
		};
		req.send(null);
	} else { 
		deleteBordersInputForms();
		changeIHMErrorMessage("");

		if (email.length == 0) {
			changeIHMErrorMessage("Champ adresse e-mail manquant ...");	
			formInscription.email.style.border = "1px solid #e74c3c";
		} else {
			changeIHMErrorMessage("Champ mot de passe manquant ...");	
			formInscription.password.style.border = "1px solid #e74c3c";
		}
	}
}

function checkEmail(var formInscription) {
	if (formInscription.confirm_email_addr.value != formInscription.email_addr.value) {
		formInscription.confirm_email_addr.setCustomValidity("Les e-mails entrés ne sont pas identiques");
	} else {
		formInscription.confirm_email_addr.setCustomValidity("");
	}
}

function checkPassword(var formInscription) {
	if (formInscription.confirm_password.value != formInscription.password.value) {
		formInscription.confirm_password.setCustomValidity("Les mot de passe entrés ne sont pas identiques");
	} else {
		formInscription.confirm_password.setCustomValidity("");
	}
}

window.addEventListener("load", function() {
	var formInscription = document.getElementById("Inscription");
	formInscription.confirm_email_addr.addEventListener("input", checkEmail(formInscription));
    
    formInscription.confirm_password.addEventListener("input", checkPassword(formInscription));
});