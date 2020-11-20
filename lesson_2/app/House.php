<?php


namespace liw\app;


class House
{
    public $Number;
    public $color;
    private $Window;

    /**
     * House constructor.
     * @param $Number
     * @param $color
     * @param $Window
     */
    public function __construct(int $Number,string $color,Window $Window)
    {
        $this->Number = $Number;
        $this->color = $color;
        $this->Window = $Window;
    }

    /**
     * @return int
     */
    public function getNumber(): int
    {
        return $this->Number;
    }

    /**
     * @param int $Number
     */
    public function setNumber(int $Number)
    {
        $this->Number = $Number;
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
     * @return Window
     */
    public function getWindow(): Window
    {
        return $this->Window;
    }

    /**
     * @param Window $Window
     */
    public function setWindow(Window $Window)
    {
        $this->Window = $Window;
    }


}