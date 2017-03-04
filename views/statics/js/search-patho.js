function searchPathoFunction() {
	var URL_script = "http://localhost/tli-acupuncture/scripts_php/forms/search-patho.php";	
	var keyword = document.getElementById("searchPatho").value;
	var tablePathos = document.getElementById("containerPathoTable");
	
	if (keyword.length >= 3) {
		changeIHMErrorMessage("");
		getXMLHttpRequest_GET(URL_script, keyword);
	} else {
		changeIHMErrorMessage("Merci d'entrer 3 caractères minimum...");
		
		if (keyword.length == 0) {
			getXMLHttpRequest_GET(URL_script, null);
		}
	}
}

function changeIHMErrorMessage(valueToSet) {
	document.getElementById("spanSearchPathoError").innerHTML = valueToSet;
}

function tableAddRowsContent(table, arrayPathos) {
	if (arrayPathos.length > 0) {
		changeIHMErrorMessage("");
		addHeaderTable(table);
		
		for (var i = 0; i < arrayPathos.length; i++) {
			var row = table.insertRow(i+1);

			var cell1 = row.insertCell(0);
			var cell2 = row.insertCell(1);
			var cell3 = row.insertCell(2);
			var cell4 = row.insertCell(3);

			cell1.innerHTML = arrayPathos[i]['idP'];
			cell1.classList.add("idPatho");
			cell2.innerHTML = arrayPathos[i]['mer'];
			cell2.classList.add("merPatho");
			cell3.innerHTML = arrayPathos[i]['type'];
			cell3.classList.add("typePatho");
			cell4.innerHTML = arrayPathos[i]['desc'];
			cell4.classList.add("descPatho");
		}
	} else {
		changeIHMErrorMessage("Aucun résultat pour ce mot-clé !");
	}
}

function addHeaderTable(table) {
	var row = table.insertRow(0);

	var cell1 = row.insertCell(0);
	var cell2 = row.insertCell(1);
	var cell3 = row.insertCell(2);
	var cell4 = row.insertCell(3);
	
	cell1.innerHTML = "<b>Identifiant</b>";
	cell2.innerHTML = "<b>Méridien</b>";
	cell3.innerHTML = "<b>Type</b>";
	cell4.innerHTML = "<b>Description</b>";
}

function getXMLHttpRequest_GET(url_page, keyword) {
	var req = new XMLHttpRequest();
	
	if (keyword != null && keyword.length != 0) {
		req.open('GET', url_page + "?keyword=" + keyword, true);
	} else {
		req.open('GET', url_page, true);
	}
	
	req.onreadystatechange = function (aEvt) {
	  if (req.readyState == 4) {
		 if (req.status == 200) {
			 if (req.responseText != "false") {
				 var tablePathos = document.getElementById("containerPathoTable");

				 // Deletion of childs
				 while (tablePathos.firstChild) {
					tablePathos.removeChild(tablePathos.firstChild);
				 }

				 tableAddRowsContent(tablePathos, JSON.parse(req.responseText));
			 } else {
				 changeIHMErrorMessage("Une erreur est survenue. (Mauvaise requête, déconnexion...)");
			 }
		 } else {
			changeIHMErrorMessage("Erreur pendant le chargement de la page.");
		 }
	  }
	};
	req.send(null);
}

window.addEventListener("load", function() {
	document.getElementById("searchPatho").addEventListener("input", searchPathoFunction);
});