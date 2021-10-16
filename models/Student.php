<?php

class Student
{
    private $id = 'id';
    private $name = 'name';
    private $firstname = 'firstname';
    private $birthdate = 'birthdate';

    public function __construct($id = '', $name = '', $firstname = '', $birthdate = '')
    {
        $this->id = $id;
        $this->name = $name;
        $this->firstname = $firstname;
        $this->birthdate = $birthdate;
    }

    /**
     * @return mixed|string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param mixed|string $id
     */
    public function setId(mixed $id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed|string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param mixed|string $name
     */
    public function setName(mixed $name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed|string
     */
    public function getFirstname(): string
    {
        return $this->firstname;
    }

    /**
     * @param mixed|string $firstname
     */
    public function setFirstname(mixed $firstname): void
    {
        $this->firstname = $firstname;
    }

    /**
     * @return mixed|string
     */
    public function getBirthdate(): string
    {
        return $this->birthdate;
    }

    /**
     * @param mixed|string $birthdate
     */
    public function setBirthdate(mixed $birthdate): void
    {
        $this->birthdate = $birthdate;
    }
    public function getStudent($dbc, $index)
    {
        $query = 'SELECT * FROM student WHERE id = :id';
        $sth = $dbc->prepare($query);
        $sth->bindParam(':id', $index);
        $sth->execute();
        $student = $sth->fetch(PDO::FETCH_ASSOC);

        $this->id = $student['id'];
        $this->name = $student['name'];
        $this->firstname = $student['firstname'];
        $this->birthdate = $student['birthdate'];

        //return $student;
    }

    public function getListStudents($dbc)
    {
        $query = ("SELECT * FROM `student` ORDER BY name");
        $response = $dbc->query($query);
        $students = $response->fetchAll(PDO::FETCH_ASSOC);

        $aStudents = array();

        foreach ($students as $student):
            $oStudent = new Student($student['id'], $student['name'], $student['firstname'], $student['birthdate']);
            array_push($aStudents, $oStudent);
        endforeach;
        return $aStudents;
    }

}
