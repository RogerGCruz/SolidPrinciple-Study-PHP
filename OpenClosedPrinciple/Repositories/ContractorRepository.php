<?php 

/*
ContractorRepository eu fiz uma sobrecarga do método save() onde o nome do método é o mesmo da classe pai, mas a quantidade e/ou tipo dos parâmetros é diferente.
*/

class ContractorRepository extends BaseRepository
{
    protected $contractor;

    public function __construct(Contractor $contractor)
    {
        parent::__construct($contractor);
    }

    public function save(array $attributes, int $hoursPerWeek): bool
    {
        $attributes['hours_per_week'] = $hoursPerWeek;
        return $this->contractor->insert($attributes);
    }
    
}

?>