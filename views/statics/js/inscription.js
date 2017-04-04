function changeIHMErrorMessage(valueToSet) {
    'use strict';
    document.getElementById("errorInsc").innerHTML = valueToSet;
}

function checkEmail(formInscription) {
    'use strict';
    if (formInscription.confirm_email_inscription.value !== "" && formInscription.email_inscription.value !== "") {
        if (formInscription.confirm_email_inscription.value !== formInscription.email_inscription.value) {
            formInscription.confirm_email_inscription.setCustomValidity("Les e-mails entrés ne sont pas identiques");
            changeIHMErrorMessage("Les e-mails entrés ne sont pas identiques");
        } else {
            formInscription.confirm_email_inscription.setCustomValidity("");
            changeIHMErrorMessage("");
        }
    }
}

function checkPassword(formInscription) {
    'use strict';
    if (formInscription.confirm_password_inscription.value !== "" && formInscription.password_inscription.value !== "") {
        if (formInscription.confirm_password_inscription.value !== formInscription.password_inscription.value) {
            formInscription.confirm_password_inscription.setCustomValidity("Les mot de passe entrés ne sont pas identiques");
            changeIHMErrorMessage("Les mot de passe entrés ne sont pas identiques");
        } else {
            formInscription.confirm_password_inscription.setCustomValidity("");
            changeIHMErrorMessage("");
        }
    }
}

function checkUserDispoOrCreateUser(formInscription) {
    'use strict';
    var req, identifiant, email, password;
    req = new XMLHttpRequest();
    identifiant = formInscription.identifiant_inscription.value;
    email = formInscription.email_inscription.value;
    password = formInscription.password_inscription.value;	
	var test = new Date();
    console.log("get");
    req.open('GET', 'scripts_php/forms/inscription.php?identifiant_inscription='.concat(identifiant).concat("&&email_inscription=").concat(email).concat("&&password_inscription=").concat(calcMD5(password)), true);
    req.onreadystatechange = function (aEvt) {
        if (req.readyState === 4) {
            if (req.status === 200) {
                if (req.responseText === "userCreated") {
                    // none display the form
                    formInscription.style.display = "None";
                    document.getElementById("successInsc").innerHTML = "Utilisateur créé";
                    return false;
                } else if (req.responseText === "emailAndPseudoAlreadyExist") {
                    formInscription.identifiant_inscription.setCustomValidity("Ce pseudo est déjà utilisé.");
                    formInscription.email_inscription.setCustomValidity("Cet email est déjà utilisé.");
                    changeIHMErrorMessage("Cet email et ce pseudo sont déjà utilisés.");
                    return false;
                } else if (req.responseText === "emailAlreadyExist") {
                    formInscription.identifiant_inscription.setCustomValidity("");
                    formInscription.email_inscription.setCustomValidity("Cet email est déjà utilisé.");
                    changeIHMErrorMessage("Cet email est déjà utilisé.");
                    return false;
                } else if (req.responseText === "PseudoAlreadyExist") {
                    formInscription.email_inscription.setCustomValidity("");
                    formInscription.identifiant_inscription.setCustomValidity("Ce pseudo est déjà utilisé.");
                    changeIHMErrorMessage("Ce pseudo est déjà utilisé.");
                    return false;
                }
            }
        }
    };
    req.send(null);
    formInscription.identifiant_inscription.setCustomValidity("");
    return false;
}

window.addEventListener("load", function () {
    'use strict';
	var formInscription = document.getElementById("Inscription");
	formInscription.confirm_email_inscription.addEventListener("input", checkEmail(formInscription));
    formInscription.confirm_password_inscription.addEventListener("input", checkPassword(formInscription));
});