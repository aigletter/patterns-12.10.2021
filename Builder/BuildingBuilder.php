<?php


namespace Patterns\Builder;


class BuildingBuilder implements BuilderInterface
{
    protected $color = '';

    protected $height = 35;

    protected $floors;

    protected $under = false;

    protected $type = 'simple';

    protected $roof = 'some';

    protected $facade;

    /**
     * @param mixed $color
     */
    public function setColor($color): void
    {
        $this->color = $color;
    }

    /**
     * @param mixed $height
     */
    public function setHeight($height): void
    {
        $this->height = $height;
    }

    /**
     * @param mixed $floors
     */
    public function setFloors($floors): void
    {
        $this->floors = $floors;
    }

    /**
     * @param mixed $under
     */
    public function setUnder($under): void
    {
        $this->under = $under;
    }

    /**
     * @param mixed $type
     */
    public function setType($type): void
    {
        $this->type = $type;
    }

    /**
     * @param mixed $roof
     */
    public function setRoof($roof): void
    {
        $this->roof = $roof;
    }

    /**
     * @param mixed $facade
     */
    public function setFacade($facade): void
    {
        $this->facade = $facade;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @return int
     */
    public function getHeight(): int
    {
        return $this->height;
    }

    /**
     * @return mixed
     */
    public function getFloors()
    {
        return $this->floors;
    }

    /**
     * @return bool
     */
    public function isUnder(): bool
    {
        return $this->under;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return string
     */
    public function getRoof(): string
    {
        return $this->roof;
    }

    /**
     * @return mixed
     */
    public function getFacade()
    {
        return $this->facade;
    }

    public function build()
    {
        if ($this->floors === null) {

        }

        return new Building($this);

        /*return new Building(
            $this->floors,
            $this->color,
            $this->height,
            $this->type,
            $this->under,
            $this->roof,
            $this->facade
        );*/
    }
}