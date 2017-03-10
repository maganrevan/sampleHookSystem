<?php

/**
 * Eine Beispiel Klasse
 */

include_once 'class.hook.php';

class User{
    
    protected $hook;
    
    public function __construct(){
        global $hooks;
        $this->hook = $hooks;
    }
	
	public function update(){
		
		echo 'User wurde editiert! </br>';
		$this->hook->subscribe('onUserUpdate');

	}
	
	public function destroy(){
		
		//bevor Methode aufgerufen wird
		$this->hook->subscribe('beforeUserDestroy');

		echo 'Lösche den User! </br>';

		//nachdem Methode aufgerufen worden ist
		$this->hook->subscribe('afterUserDestroy');
		
	}
	
	public function add(){
		
		echo 'Füge einen User hinzu! </br>';
		$this->hook->subscribe('onUserInsert');
	
	}
	
}