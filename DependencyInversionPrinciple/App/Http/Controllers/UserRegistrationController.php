<?php 
/*
Percebam que mesmo o nosso atributo seja nomeado como $userService, ele é do tipo ServiceInterface. E dessa forma evitamos um forte acoplamento entre as camadas concretas, deixando todo serviço a cargo da abstração, que no nosso caso é a ServiceInterface.
*/
class UserRegistrationController extends Controller
{
    protected $userService;

    public function __construct(ServiceInterface $userService)
    {
        $this->userService = $userService;
    }

    // implementação do código
}


?>