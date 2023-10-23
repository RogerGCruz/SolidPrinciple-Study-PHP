<?php 
/*
Dessa maneira, não obrigamos nenhuma classe a implementar algo que não irá utilizar. Sendo assim, não violamos o princípio da segregação de interface.
*/
interface ContractorInterface
{
  public function calcWorkedHours(array $hours);
}

?>