var form = document.getElementById("Inscription");

function checkEmail() {
	console.log("ici");
	if (form.confirm_email_addr.value != form.email_addr.value) {
		form.confirm_email_addr.setCustomValidity("Les e-mails entrés ne sont pas identiques");
	} else {
		form.confirm_email_addr.setCustomValidity("");
	}
}

function checkPassword() {
	if (form.confirm_password.value != form.password.value) {
		form.confirm_password.setCustomValidity("Les mot de passe entrés ne sont pas identiques");
	} else {
		form.confirm_password.setCustomValidity("");
	}
}

window.addEventListener("load", function() {
	form.confirm_email_addr.addEventListener("change", checkEmail);
    
    form.confirm_password.addEventListener("input", checkPassword);
});