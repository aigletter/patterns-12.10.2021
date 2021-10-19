<?php


namespace Patterns\Builder;


class Building
{
    protected $floors;

    protected $color;

    protected $height;

    protected $under;

    protected $type;

    protected $roof;

    protected $facade;

    /*public function __construct(
        int $floors,
        string $color = '',
        int $height = 35,
        string $type = 'simple',
        bool $under = false,
        string $roof = 'some',
        string $facade = null
    ) {
        $this->floors = $floors;
        $this->color = $color;
        $this->height = $height;
        $this->under = $under;
        $this->type = $type;
        $this->roof = $roof;
        $this->facade = $facade;
    }*/

    public function __construct(BuildingBuilder $builder)
    {
        $this->floors = $builder->getFloors();
        $this->color = $builder->getColor();
        $this->height = $builder->getHeight();
        $this->under = $builder->isUnder();
        $this->roof = $builder->getRoof();
        $this->facade = $builder->getFacade();
    }
}