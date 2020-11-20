<?php

namespace liw\app;

interface IRoom
{
    public function AddPerson(string $Person);
    public function RemovePerson(string $Person);
    public function isLight();
    public function Condition();
}