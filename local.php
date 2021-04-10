<?php
class Animal
 {
 	var $breed;
	 var $color;

 	 function set_Breed($breed)
 {
 $this->breed = $breed;

 }
 	function get_Breed()
 {

 return $this->breed;
}
    function set_Color($color) 
	{
		$this->color = $color;

	}
	function get_Color()
	{
		return $this->color;
	}
}

class Dog extends Animal
{
var $owner;

function __construct($breed,$color)
{
$this->breed = $breed;
$this->color = $color;
}
function set_Owner($owner)	
{
	$this->owner = $owner;
}

function get_Owner()
{
    return $this->owner; 
}
		
}


class Tiger extends Animal
{
	function __construct($breed,$color)
{
	$this->breed = $breed;
	$this->color = $color;
}

}
?>