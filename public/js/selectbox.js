$(document).ready(function() {
	try {
		$("#customSelect").msDropDown();
		//$("#websites2").msDropDown({mainCSS:'dd2'});
		//alert($.msDropDown.version);
		//$.msDropDown.create("body select");
		//$("#ver").html($.msDropDown.version);
		} catch(e) {
			alert("Error: "+e.message);
	}
})
	