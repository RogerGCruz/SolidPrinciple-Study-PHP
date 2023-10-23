<?php

/*
Aqui deixamos o Controller isolado com a sua única responsabilidade: gerenciar a request e a response.
*/
class UserRegistrationController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function register(Request $request)
    {
        $userService->register($request);

        return view('user.register');

    }
}

?>