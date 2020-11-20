<?php


namespace liw\app;


class Shelf
{
    public $color;
    private $form;
    public $width;

    public function __construct(string $color,string $form,float $width)
    {
        $this->color = $color;
        $this->form = $form;
        $this->width = $width;
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
     * @return string
     */
    public function getForm(): string
    {
        return $this->form;
    }

    /**
     * @param string $form
     */
    public function setForm(string $form)
    {
        $this->form = $form;
    }

    /**
     * @return float
     */
    public function getWidth(): float
    {
        return $this->width;
    }

    /**
     * @param float $width
     */
    public function setWidth(float $width)
    {
        $this->width = $width;
    }


}