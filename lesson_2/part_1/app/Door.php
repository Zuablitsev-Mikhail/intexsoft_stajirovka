<?php


namespace liw\app;


class Door
{
    public $material;
    public $color;
    private $KeyForm;

    public function __construct(string $material,string $color,string $KeyForm)
    {
        $this->material = $material;
        $this->color = $color;
        $this->KeyForm = $KeyForm;
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
    public function getKeyForm(): string
    {
        return $this->KeyForm;
    }

    /**
     * @param string $KeyForm
     */
    public function setKeyForm(string $KeyForm)
    {
        $this->KeyForm = $KeyForm;
    }


}