<?php
/*
Vamos criar um repository intermediário entre a classe pai e as classes filhas.
Dessa forma, a BaseRepository continua sendo "base" para outros repositories também, e a UserRepository vira a classe pai das outras duas.
Agora vamos fazer uma pequena alteração no classe UserService.
*/

class UserRepository extends BaseRepository 
{
}

?>