<?php


namespace liw\app;


class Room
{
    public $CountBeds;
    public $Number;
    private $Door;

    public function __construct(int $CountBeds,int $Number,Door $Door)
    {
        $this->CountBeds = $CountBeds;
        $this->Number = $Number;
        $this->Door = $Door;
    }

    /**
     * @return int
     */
    public function getCountBeds(): int
    {
        return $this->CountBeds;
    }

    /**
     * @param int $CountBeds
     */
    public function setCountBeds(int $CountBeds)
    {
        $this->CountBeds = $CountBeds;
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
     * @return Door
     */
    public function getDoor(): Door
    {
        return $this->Door;
    }

    /**
     * @param Door $Door
     */
    public function setDoor(Door $Door)
    {
        $this->Door = $Door;
    }


}