<?php

/*
Como o Model é a representação da tabela do banco dentro da aplicação, e o Repository é reponsável 
pela operação de banco de cada Model, nada mais coerente mantê-los separados.
Em ambos os Repositories utilizamos a mesma estrutura: injeção de dependência com o respectivos Models, e um método save().
Dessa maneira, separamos as responsabilidades em camadas, deixando o código mais legível e com uma arquitetura mais correta.
*/
class EmployeeRespository
{
    protected $employee;

    public function __construct(Employee $employee)
    {
        $this->employee = $employee;
    }

    public function save(array $attributes)
    {
        $this->employee->insert($attributes);
    }
}

?>