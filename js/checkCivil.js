// JavaScript Document
function checkCivil() {
	if(document.getElementById("civilstatus").value != "1"){
		document.getElementById("spouse").disabled = false;
	}else{
		document.getElementById("spouse").disabled = true;
	}
}