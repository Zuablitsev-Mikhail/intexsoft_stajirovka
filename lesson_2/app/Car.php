<?php

namespace liw\app;

class Car
{
    public $color;
    private $Engine;
    public $price;

    public function __construct(string $color, Engine $engine,float $price)
    {
        $this->color = $color;
        $this->Engine = $engine;
        $this->price = $price;
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
     * @return Engine
     */
    public function getEngine(): Engine
    {
        return $this->Engine;
    }

    /**
     * @param Engine $Engine
     */
    public function setEngine(Engine $Engine)
    {
        $this->Engine = $Engine;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param float $price
     */
    public function setPrice(float $price)
    {
        $this->price = $price;
    }

}

