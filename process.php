<?php

//  $_POST['test'] --> yung ibinato ng script.js
$search = $_POST['test'];

// if($search == "") {
// 	echo "<p style='color:red;'>Empty!</p>";
// }else {
// 	echo $search;
// }


if($search == "") {
	echo true;
} else {
	echo false;
}



$pikachu = ["name" => "Pikachu",
			"type" => "Electric",
			"moves" => ["basic" => "Thundershock", 
						"special" => "Thunderbolt"
						]

			];


$bulbasaur = ["name" => "Bulbasaur",
			"type" => "Grass",
			"moves" => ["basic" => "Vine Whip", 
						"special" => "Solar Beam"
						]

			];


$squirtle = ["name" => "Squirtle",
			"type" => "Water",
			"moves" => ["basic" => "Bubble", 
						"special" => "Hydro Pump"
						]

			];


$charmander = ["name" => "Charmander",
			"type" => "Fire",
			"moves" => ["basic" => "Ember", 
						"special" => "Fire Blast"
						]

			];



$pokedex = ["pikachu" => $pikachu,
			"bulbasaur" => $bulbasaur,
			"squirtle" => $squirtle,
			"charmander" => $charmander
			];


// SEARCHING FOR POKEDEX KEYS: MEMORY EXTENSIVE
// foreach($pokedex as $i) {
// 	if($search == $i){
// 		echo $pokedex[$i];
// 	}
// }

// SHORTHAND
if(array_key_exists($search, $pokedex)){
	echo json_encode ($pokedex[$search]);
} else {
	echo "";
} 


?>