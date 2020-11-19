<?php


namespace liw\app;


class Table
{
    public $form;
    public $color;
    private $leg;

    public function __construct(string $form, string $color,Leg $leg)
    {
        $this->form = $form;
        $this->color = $color;
        $this->leg = $leg;
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
     * @return Leg
     */
    public function getLeg(): Leg
    {
        return $this->leg;
    }

    /**
     * @param Leg $leg
     */
    public function setLeg(Leg $leg)
    {
        $this->leg = $leg;
    }


}