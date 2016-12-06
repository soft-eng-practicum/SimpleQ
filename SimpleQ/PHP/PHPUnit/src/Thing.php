<?php
namespace TDD ;
class Thing 
{
	public function total(array $items = []) 
	{
		return array_sum($items);
	}
}
?>