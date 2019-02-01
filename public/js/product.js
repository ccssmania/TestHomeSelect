$(document).ready(function(){
	$("#productDelete").on("submit", function(ev){
		ev.preventDefault();

		var $form = $(this);
		
		var $button =  $form.find("[type = 'submit']");

		//peticion AJAX
		if(confirm("Are you sure to delete this product?")){
			$.ajax({
				url: $form.attr("action"),
				method: $form.attr("method"),
				data: $form.serialize(),
				dataType: "JSON",
				beforeSend: function(){
					$button.val("Cargando...");
				},
				success: function(data){
					console.log("hola")
					location.reload();
				},
				error: function(err){
					console.log(err)
				}

				});

			return false;
		}else return false;
	});
});
