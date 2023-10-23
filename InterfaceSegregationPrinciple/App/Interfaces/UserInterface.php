<?php 
/*
Dessa maneira, não obrigamos nenhuma classe a implementar algo que não irá utilizar. Sendo assim, não violamos o princípio da segregação de interface.
*/
interface UserInterface
{
  public function register(array $attributes, UserRepository $userRepository);
}

?>