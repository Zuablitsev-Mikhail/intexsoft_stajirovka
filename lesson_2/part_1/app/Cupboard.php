<?php


namespace liw\app;


class Cupboard
{
    public $color;
    public $weight;
    private $shelf;

    public function __construct(string $color,float $weight,Shelf $shelf)
    {
        $this->color = $color;
        $this->weight = $weight;
        $this->shelf = $shelf;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @param string $color
     */
    public function setColor(string $color)
    {
        $this->color = $color;
    }

    /**
     * @return float
     */
    public function getWeight(): float
    {
        return $this->weight;
    }

    /**
     * @param float $weight
     */
    public function setWeight(float $weight)
    {
        $this->weight = $weight;
    }

    /**
     * @return Shelf
     */
    public function getShelf(): Shelf
    {
        return $this->shelf;
    }

    /**
     * @param Shelf $shelf
     */
    public function setShelf(Shelf $shelf)
    {
        $this->shelf = $shelf;
    }


}