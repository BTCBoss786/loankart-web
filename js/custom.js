$(function(){
	$("form").submit(function(event){
		var $form = $(this);
		var submitButton = $form.find("button[type=submit]");
		var submitButtonText = $form.find("button[type=submit]").text();
		$("#responseModal").modal({
			backdrop: 'static',
			keyboard: false,
			show: false
		});
		$("#responseModalLongTitle").html("");
		$(".modal-body").html("");
		submitButton.attr("disabled", true);
		submitButton.text(submitButtonText+'ing...');
		$.ajax({
			url: $form.attr("action"),
			type: $form.attr("method"),
			data: $form.serialize(),
			dataType: 'json'
		}).done(function(response){
			if (response.status) {
				$("#responseModalLongTitle").html('<span class="text-success">Success</span>');
				$(".modal-body").append('<p class="text-success text-center">'+response.message+'</p>');
				$("#responseModal").modal("show");
				$form.trigger("reset");
				submitButton.removeAttr("disabled");
				submitButton.text(submitButtonText);
			} else {
				$("#responseModalLongTitle").html('<span class="text-danger">Oops! Something went wrong</span>');
				$.each(response.message, function(errName, errMsg){
					$(".modal-body").append('<p class="text-danger"> * '+errMsg+'</p>');
				});
				$("#responseModal").modal("show");
				submitButton.removeAttr("disabled");
				submitButton.text(submitButtonText);
			}
		});
		return false;
	});
});