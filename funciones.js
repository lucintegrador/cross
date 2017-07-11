function foco(idElemento){
	document.getElementById(idElemento).focus();
}

function sgte(id){
	document.getElementById(id).style.display = '';
}

function saltar(e,id) {
	(e.keyCode)?k=e.keyCode:k=e.which;
 
	if(k==13) {
		document.getElementById(id).focus();
	}
}