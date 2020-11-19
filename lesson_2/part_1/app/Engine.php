<?php

namespace liw\app;

class Engine
{
    public $mark;
    private $idNumber;
    public $power;

    public function __construct(string $mark, int $idNumber, int $power)
    {
        $this->mark = $mark;
        $this->idNumber = $idNumber;
        $this->power = $power;
    }

    /**
     * @return string
     */
    public function getMark(): string
    {
        return $this->mark;
    }

    /**
     * @param string $mark
     */
    public function setMark(string $mark)
    {
        $this->mark = $mark;
    }

    /**
     * @return int
     */
    public function getIdNumber(): int
    {
        return $this->idNumber;
    }

    /**
     * @param int $idNumber
     */
    public function setIdNumber(int $idNumber)
    {
        $this->idNumber = $idNumber;
    }

    /**
     * @return int
     */
    public function getPower(): int
    {
        return $this->power;
    }

    /**
     * @param int $power
     */
    public function setPower(int $power)
    {
        $this->power = $power;
    }

}