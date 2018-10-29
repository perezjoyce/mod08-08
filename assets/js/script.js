$(document).ready(()=> {


	// DISPLAYING TEXT FROM #SEARCH TO #SUMMARY
	$("#search").keypress((e)=>{
		// e is the event listener
		// .which is an attribute or property of the event (sa keypress lang sya)
		// 13 = enter
		if(e.which == 13) {
			let search = $("#search").val();


			//AJAX
			$.ajax({
				// url represents action
				"url" : "process.php",  
				// left is yung ipapasa sa process.php. right is the variable (let search earlier)
				"data" : { "test" : search}, 
				// method
				"type" : "POST", 
				// ano gagawin pagtrigger yung ajax. only key that accepts a function
				// data will hold all value echoed by process.php
				"success" :(data)=> {

					if (data == true) {
						$("#summary").css("color","red");
						$("#summary").html("Empty!");
					} 

					else if (data == false) { 
						$("#summary").html("");
						$("#summary").css("color","green");
						$("#summary").html("Sorry, no info.");
					}

					else {
						let pokemonCaught = JSON.parse(data);
						$("#summary").html(""); // TO PREVENT FROM CONCATINATION TO EMPTY
						$("#summary").css("color","gray");
						$("#summary").append("Name: " + pokemonCaught.name + "<br>");
						$("#summary").append("Type: " + pokemonCaught.type + "<br>");
						$("#summary").append("Basic Move: " + pokemonCaught.moves.basic + "<br>");
						$("#summary").append("Special Move: " + pokemonCaught.moves.special + "<br>");
					}

				}		
			});
			//END OF AJAX

		
		} 
		
	});


	$("#btnDelete").click(()=>{
		
		$("#search").val("");
		$("#summary").html("");
			
	});

	// 1. CASE SENSITIVE OF THE POKEMONS DOESN'T MATTER
	// 2. IF NO POKEMON WAS FOUND, DISPLAY NO INFO





	
});