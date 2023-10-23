<?php 

/*
EmployeeRepository eu fiz uma sobreposição do método all() onde quase tudo é igual à classe pai (nome, parâmetros, retorno) exceto a implementação.
*/

class EmployeeRepository extends BaseRepository
{
    protected $employee;

    public function __construct(Employee $employee)
    {
        parent::__construct($employee);
    }

    public function all(): object
    {
        $except = [3,17,22];
        return $this->employee->whereNotIn('id', $except)->get();
    }
}

?>