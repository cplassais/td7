<?php

class Student
{
    private $id = 'id ';
    private $name = 'name ';
    private $birthdate = 'birthdate';

    public function __construct($id = '', $name = '', $birthdate = '')
    {
        $this->id = $id;
        $this->name = $name;
        $this->birthdate = $birthdate;
    }
}
