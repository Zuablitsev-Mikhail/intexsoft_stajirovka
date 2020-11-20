<?php

namespace liw\app;

interface IApartment
{
    public function AddRoom(Room $Room);
    public function RemoveRoom(int $id);
    public function ApartmentInfo();
    public function RoomsCondition();
}