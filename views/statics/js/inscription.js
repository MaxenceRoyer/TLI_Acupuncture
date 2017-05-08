function changeIHMErrorMessageInsc(valueToSet) {
    'use strict';
    document.getElementById("errorInsc").innerHTML = valueToSet;
}

function errorMessage(value, contentToEdit) {
	'use strict';
	document.getElementById(contentToEdit).innerHTML = value;
}

function borderInput(form, input, value) {
	document.getElementById(input).style.border = value;
}

function checkEmail(formInscription) {
    'use strict';
	if (formInscription.email_inscription.value !== "") {
		if (isEmail(formInscription.email_inscription.value) === true) {
			borderInput(formInscription, "email_inscription", "");
			errorMessage("" , "email_error");
			if (formInscription.confirm_email_inscription.value !== formInscription.email_inscription.value && 				formInscription.confirm_email_inscription.value !== "") {
				errorMessage("Les emails entrés ne sont pas identiques !" , "email_error");
				borderInput(formInscription, "confirm_email_inscription", "1px solid #e74c3c");
				return false;
			} else {
				errorMessage("" , "email_error");
				borderInput(formInscription, "confirm_email_inscription", "");
				return true;
			}
		} else {
			errorMessage("Merci d'entrer un e-mail valide" , "email_error");
			borderInput(formInscription, "email_inscription", "1px solid #e74c3c");
			return true;
		}
	}
}

function isEmail(emailTest) {
	'use strict';
	var reg = new RegExp('^[a-z0-9]+([_|\.|-]{1}[a-z0-9]+)*@[a-z0-9]+([_|\.|-]{1}[a-z0-9]+)*[\.]{1}[a-z]{2,6}$', 'i');
	if (reg.test(emailTest)) {
		return true;
	} else {
		return false;
	}
}

function checkPassword(formInscription) {
    'use strict';
    if (formInscription.confirm_password_inscription.value !== "" && formInscription.password_inscription.value !== "") {
        if (formInscription.confirm_password_inscription.value !== formInscription.password_inscription.value) {
			errorMessage("Les mot de passe entrés ne sont pas identiques" , "password_error");
			borderInput(formInscription, "confirm_password_inscription", "1px solid #e74c3c");
			return false;
        } else {
            errorMessage("", "password_error");
			borderInput(formInscription, "confirm_password_inscription", "");
			return true;
        }
    }
}

function checkIdentifiant(formInscription) {
	'use strict';
	if ((formInscription.identifiant_inscription.value).length >= 3) {
		errorMessage("" , "id_error");
		borderInput(formInscription, "identifiant_inscription", "");
		return true;
	} else {
		errorMessage("L'identifiant doit faire 3 caractères minimum." , "id_error");
		borderInput(formInscription, "identifiant_inscription", "1px solid #e74c3c");
		return false;
	}
}

function checkIfSubmitPossible(formInscription) {
	'use strict';
	if (checkEmail(formInscription) === true && checkPassword(formInscription) === true && checkIdentifiant(formInscription)) {
		formInscription.confirm_inscription.disabled = false;
	} else {
		formInscription.confirm_inscription.disabled = true;
	}
}

function checkUserDispoOrCreateUser(formInscription) {
    'use strict';
	if (checkPassword(formInscription) === true && checkEmail(formInscription) === true) {
		var req = new XMLHttpRequest(), 
			identifiant = formInscription.identifiant_inscription.value, 
			email = formInscription.email_inscription.value, 
			password = formInscription.password_inscription.value;
		req.open('GET', '/tli-acupuncture/scripts_php/forms/inscription.php?identifiant_inscription='.concat(identifiant).concat("&&email_inscription=").concat(email).concat("&&password_inscription=").concat(calcMD5(password)), true);
		req.onreadystatechange = function (aEvt) {
			if (req.readyState === 4) {
				if (req.status === 200) {
					if (req.responseText === "userCreated") {
						formInscription.style.display = "None";
						changeIHMErrorMessageInsc("");
						document.getElementById("successInsc").innerHTML = "Utilisateur créé !\n Vous pouvez maintenant vous connecter. (" + formInscription.email_inscription.value + ")";
					} else if (req.responseText === "emailAndPseudoAlreadyExist") {
						changeIHMErrorMessageInsc("Cet email et ce pseudo sont déjà utilisés.");
					} else if (req.responseText === "emailAlreadyExist") {
						changeIHMErrorMessageInsc("Cet email est déjà utilisé.");
					} else if (req.responseText === "PseudoAlreadyExist") {
						changeIHMErrorMessageInsc("Ce pseudo est déjà utilisé.");
					}
				}
			}
		};
		req.send(null);
		formInscription.identifiant_inscription.setCustomValidity("");
	} else {
		return false;
	}
}

window.addEventListener("load", function() {
    'use strict';
	var formInscription = document.getElementById("Inscription");
	formInscription.addEventListener("submit", function() {
		checkUserDispoOrCreateUser(formInscription);
	});
	formInscription.addEventListener("input", function() {
		formInscription.submit;
		checkIfSubmitPossible(formInscription);
		return false;
	});
	formInscription.email_inscription.addEventListener("input", function() {
		checkEmail(formInscription);
	});
	formInscription.confirm_email_inscription.addEventListener("input", function() {
		checkEmail(formInscription);
	});
	formInscription.confirm_password_inscription.addEventListener("input", function() {
		checkPassword(formInscription);
	});
	formInscription.password_inscription.addEventListener("input", function() {
		checkPassword(formInscription);
	});
	formInscription.identifiant_inscription.addEventListener("input", function() {
		checkIdentifiant(formInscription);
	});
});