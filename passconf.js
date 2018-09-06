$('#inputCPassword4').blur(function () {
	if ($('#inputPassword4').val()!=$('#inputCPassword4').val()) {
		alert ('passwords do not match');
	}
});