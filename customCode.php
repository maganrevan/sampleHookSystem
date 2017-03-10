<?php

/**
 * so könnte der code aussehen von einem entwickler, 
 * der versucht unsere User Klasse zu erweitern
 */
global $hooks;


$hooks->watch('beforeUserDestroy', function(){

	//code
	echo 'HOOK: Mache was bevor du den User löscht! </br>';

});

$hooks->watch('afterUserDestroy', function(){

	//code
	echo 'HOOK: Mache was nachdem du den User gelöscht hast! </br>';

});

$hooks->watch('onUserInsert', function(){ 

	//code
	echo 'HOOK: Mache was wenn ein User Hinzugefügt wird! </br>';

});


$hooks->watch('onUserUpdate', function(){ 

	//code
	echo 'HOOK: Mache was wenn ein User editiert wird! </br>';

 });