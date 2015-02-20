jQuery( document ).ready(function() {
	jQuery("#ajaxform").submit(function(){
		var postData = "text";
		var client_id = jQuery("#client_id").val();
		alert(client_id);
		return false;
		jQuery.ajax({
			type: "post",
			url: "/product_invoice",
			data: postData,
			contentType: "application/x-www-form-urlencoded",
			success: function(responseData, textStatus, jqXHR) {
				alert("data saved")
			},
			error: function(jqXHR, textStatus, errorThrown) {
				console.log(errorThrown);
			}
		})
	});
})