//use to implement jquery ajax functionality.
$( document ).ready(function() {
	$("#ajaxform").submit(function(){
		var postData = "text";
		var client_id = $("#client_id").val();
		$.ajax({
			type: "post",
			url: "/product_invoice",
			data: {'client_id':client_id},
			success: function(responseData) {
				
			}
		})
	});
})