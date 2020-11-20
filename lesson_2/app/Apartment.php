<?php


namespace liw\app;

class Apartment implements IApartment
{
    protected $Rooms;
    public $Address;
    public $Owner;

    public function __construct(Room $Room,string $Address, string $Owner)
    {
        $this->Rooms[] = $Room;
        $this->Address = $Address;
        $this->Owner = $Owner;
    }

    public function AddRoom(Room $Room){
        $this->Rooms[] = $Room;
    }
    public function RemoveRoom(int $id){
        unset($this->Rooms[$id]);
    }
    public function ApartmentInfo(){
        echo "Адрес: ".$this->Address.", Владелец: ".$this->Owner.", Количество комнат: ".count($this->Rooms);
    }
    public function RoomsCondition(){
        foreach ($this->Rooms as $room){
           $room->Condition();
           echo "<br> \n";
        }
    }
}