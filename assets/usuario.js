
 $(window).ready(function(){
 	//edit us
 	//
 	//
 	
	$("#editar").click(function(event){
		
		let rs =  [""];
		var id = $("#editar").val();		
		rs = [id.split(",")];
		let us = rs[0];
		 $("#cod").val(us[0]);
		 $("#name").val(us[1]);
		 $("#email").val(us[2]);
		 $("#phone").val(us[3]);		 
		 $("#profile").val(us[4]);
		
		console.log(us);
		


	});
		//add us
	$("#btnadd").click(function(event){
		 $("#cod").val("0");
		 $("#name").val("");
		 $("#email").val("");
		 $("#phone").val("");		 
		 $("#profile").val("usuario");


	});

	$("#btndelete").click(function(event){
		 let cod = $("#btndelete").val();
		console.log(cod);


	});

	$( "#saveus" ).submit(function( event ) {
		 var param = $(this).serialize();

		 console.log(param);
		/*$.ajax({
					type: "POST",
					url: "ajax/crudus.php",
					data: param,
					 beforeSend: function(objeto){
						//$("#resultados").html("Enviando...");
					  },
					success: function(datos){
					//$("#resultados").html(datos);

					//$('#modaledit').modal('hide');

					console.log(datos);
				  }
			});*/
		 // event.preventDefault();

	});
});
		