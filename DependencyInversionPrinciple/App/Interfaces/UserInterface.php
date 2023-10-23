<?php

interface UserInterface extends ServiceInterface
{
  public function register(array $attributes, UserRepository $userRepository);
}

?>