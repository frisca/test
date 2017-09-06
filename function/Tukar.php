<?php

/**
* 
*/
class Tukar
{

	public function change($a, $b)
	{
		$a ^= $b;
		$b ^= $a;
		$a ^= $b;
		return array('a' => $a , 'b' => $b);
	}
}