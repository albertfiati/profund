function createProgram(){
	var form-field = get-form();
	$("#program-title").html(form-field[0].value);
	$("#program-code").html(form-field[1].value);
	$("#start-date").html(form-field[2].value);
	$("#end-date").html(form-field[3].value);
	$("#currency").html(form-field[4].value);
	$("#amount").html(form-field[5].value);
	$("#objective").html(form-field[6].value);
}

function getForm(){
	return documents.getElementByTagName(form[0]).elements
}

