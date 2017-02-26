function userInitiateConnexion() {
	var req = new XMLHttpRequest();
	
	var form = document.getElementById("formConnect");
	var email = form.email.value;
	var password = form.password.value;
	
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
			form.email.style.border = "1px solid #e74c3c";
		} else {
			changeIHMErrorMessage("Champ mot de passe manquant ...");	
			form.password.style.border = "1px solid #e74c3c";
		}
	}
}

function deleteBordersInputForms() {
	var form = document.getElementById("formConnect");
	
	form.email.style.border = "";
	form.password.style.border = "";
}

function changeIHMErrorMessage(valueToSet) {
	document.getElementById("spanForm").innerHTML = valueToSet;
}

function clearPasswordField() {
	document.getElementById("password").value = "";
}

window.addEventListener("load", function() {
	var form = document.getElementById("formConnect");

	(form.connect).addEventListener("click", userInitiateConnexion);
});