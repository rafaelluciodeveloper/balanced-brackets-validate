$(function() {
	$( "#valid" ).click(function() {
		let val = $("#expression").val();
		let result  = $("#result");
		$.post( "http://localhost:8080/Valid.php", { expression: val})
			.done(function( data ) {
				result.empty(); 
		  		result.text(data);
		});
	});
});

