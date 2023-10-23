<?php 

interface ContractorInterface extends ServiceInterface
{
  public function calcWorkedHours(array $hours);
}

?>