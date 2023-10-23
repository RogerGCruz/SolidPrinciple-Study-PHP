<?php

/*
No Laravel, para podermos adicionar uma camada de comunicação com a classe atual, nós usamos a injeção de dependência nativa do framework. 
Basta adicionar a classe desejada como parâmetro no construtor e atribuí-la em uma propriedade da classe. E eu fiz isso adicionando a classe UserService.
O Service é o local onde colocamos toda a regra de negócio, como é o caso do condicional que usamos para identificar o tipo de usuário.
Aqui também usamos a injeção de dependência, mas importamos 2 classes. Exatamente os Repositories dos tipos de usuário.
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
        $this->employeeRepository = $employeeRepository;
        $this->contractorRepository = $contractorRepository;
    }

    public function register(Request $request)
    {
        $attributes = $request->all();
        if($attributes['type'] === 'employee') {
            $this->employeeRepository->save($attributes);
        }

        if($attributes['type'] === 'contractor') {
            $this->contractorRepository->save($attributes);
        }
    }
}

