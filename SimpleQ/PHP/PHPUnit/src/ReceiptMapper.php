<?php
namespace TDD ;
class ReceiptMapper {
	public function __construct(\QuizApp\Mapper\QuizInterface $mapper)
    {
        $this->mapper = $mapper;
    }
}
?>