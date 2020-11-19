<?php


namespace liw\app;


class Leg
{
    public $color;
    public $form;
    private $material;

    public function __construct(string $color, string $form, string $material)
    {
        $this->color = $color;
        $this->form = $form;
        $this->material = $material;
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
     * @return string
     */
    public function getMaterial(): string
    {
        return $this->material;
    }

    /**
     * @param string $material
     */
    public function setMaterial(string $material)
    {
        $this->material = $material;
    }


}