<?php 
/*
Seja Φ(x) uma provável propriedade sobre objetos x do tipo T. Então Φ(y) deve ser verdadeira para objetos y do tipo S, em que S é um subtipo de T.
*/
class UserService
{
    protected $employeeRepository;
    protected $contractorRepository;

    public function __construct(
        EmployeeRepository $employeeRepository,
        ContractorRepository $contractorRepository
    )
    {
        $this->userRepository = $userRepository;
        $this->contractorRepository = $contractorRepository;
    }

    public function checkUserType(Request $request)
    {
        $attributes = $request->all();
        if($attributes['type'] === 'employee') {
            $this->register($attributes, $this->employeeRepository);
        }

        if($attributes['type'] === 'contractor') {
            $this->register($attributes, $this->contractorRepository);
        }
    }

    public function register(array $attributes, UserRepository $userRepository)
    {
        $userRepository->save($attributes);
    }
}

?>