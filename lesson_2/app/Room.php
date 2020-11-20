<?php


namespace liw\app;

class Room implements IRoom
{
    private $Windows;
    private $Doors;
    public $Peoples;

    public function __construct(bool $Windows, bool $Doors,array $Peoples)
    {
        $this->Windows = $Windows;
        $this->Doors = $Doors;
        $this->Peoples = $Peoples;
    }

    public function AddPerson(string $Person){
        if($this->Doors) $this->Peoples[] = $Person;
    }
    public function RemovePerson(string $Person){
        if($this->Doors) if(($key = array_search($Person,$this->Peoples)) !== FALSE){
	     unset($this->Peoples[$key]);
	    };
    }
    public function isLight(){
        if(count($this->Peoples) > 0) return "Свет включён";
        else return "Свет выключен";
    }
    public function Condition(){
        echo "В комнате ".count($this->Peoples)." человек/a, Свет: ".$this->isLight();
    }
}