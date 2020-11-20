<?php
    require '../vendor/autoload.php';
    echo "Комнаты";
    echo "<br> \n";
    $room = new \liw\app\Room(true, true, []);

    $room->AddPerson("Иван");
    $room->AddPerson("Алексей");
    $room->Condition();

    $room1 = new \liw\app\Room(true, true, []);
    $room1->AddPerson("Иван");
    $room1->AddPerson("Алексей");
    echo "<br> \n";
    echo "<br> \n";
    echo "Квартиры";
    echo "<br> \n";
    $apartment = new \liw\app\Apartment($room,"15151","Nod");
    $apartment->AddRoom($room1);
    echo "<br> \n";
    $apartment->ApartmentInfo();
    echo "<br> \n";
    $apartment->RoomsCondition();
