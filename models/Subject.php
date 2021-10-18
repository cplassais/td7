<?php

class Subject
{
// déclaration d'une propriété
    private $id = 'id';
    private $name = 'name';
    private $description = 'description';
    private $duration = 0;
    private $coefficient = 0;

    public function __construct($id = '', $name = '', $description = '', $duration = 0, $coefficient = 0)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->duration = $duration;
        $this->coefficient = $coefficient;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId(string $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed|string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param mixed|string $description
     */
    public function setDescription(mixed $description): void
    {
        $this->description = $description;
    }

    /**
     * @return int|mixed
     */
    public function getDuration(): int
    {
        return $this->duration;
    }

    /**
     * @param int|mixed $duration
     */
    public function setDuration($duration): int
    {
        return $this->duration = $duration;
    }

    /**
     * @return int|mixed
     */
    public function getCoefficient(): int
    {
        return $this->coefficient;
    }

    /**
     * @param int|mixed $coefficient
     */
    public function setCoefficient(int $coefficient): int
    {
        return $this->coefficient = $coefficient;
    }

    /**
     * @param $dbc
     * @return array
     */
    public function getDurationByDay()
    {
        $days = floor($this->duration / 7);
        $msg = $days . ' jour';
        if ($days > 1):
            $msg .= 's';
        endif;
        return $msg;
    }

    public function coefMessage()
    {
        if ($this->coefficient <= 1):
            $msg = 'Compétence transverse';
        elseif ($this->coefficient > 1 and $this->coefficient <=2):
            $msg = 'Compétence initiale';
        else:
            $msg = 'Competence indispensable';
        endif;
        return $msg;
    }

    public function getListSubjects($dbc)
    {
        $query = ("SELECT * FROM `subject` ORDER BY name");
        $response = $dbc->query($query);
        $subjects = $response->fetchAll(PDO::FETCH_ASSOC);

        $aSubjects = array();

        foreach ($subjects as $subject):
            $oSubject = new Subject($subject['id'], $subject['name'], $subject['description'], $subject['duration'], $subject['coefficient']);
            array_push($aSubjects, $oSubject);
        endforeach;
        return $aSubjects;
    }

//    public function getSubject($dbc, $index)
//    {
//        $query = "SELECT * FROM `subject` WHERE id LIKE $index";
//        $response = $dbc->query($query);
//        $subject = $response->fetch(PDO::FETCH_ASSOC);
//        return $subject;
//    }
    public function getSubject($dbc, $index)
    {
        $query = 'SELECT * FROM subject WHERE id = :id';
        $sth = $dbc->prepare($query);
        $sth->bindParam(':id', $index);
        $sth->execute();
        $subject = $sth->fetch(PDO::FETCH_ASSOC);

        $this->id = $subject['id'];
        $this->name = $subject['name'];
        $this->description = $subject['description'];
        $this->duration = $subject['duration'];
        $this->coefficient = $subject['coefficient'];

        //return $subject;
    }

    public function updateSubject($dbc, $id, $name, $description, $duration, $coefficient)
    {
        $query = 'UPDATE subject SET name = :name, description = :description, duration = :duration, coefficient = :coefficient WHERE id = :id';
        $sth = $dbc->prepare($query);
        $sth->bindParam(':id', $id);
        $sth->bindParam(':name', $name);
        $sth->bindParam(':description', $description);
        $sth->bindParam(':duration', $duration);
        $sth->bindParam(':coefficient', $coefficient);

        $sth->execute();
    }

    public function deleteSubject($dbc, $id)
    {
        $query = "DELETE FROM `subject` WHERE `subject`.`id` = $id";
        $dbc->query($query);
    }

    public function addSubject($dbc, $name, $description, $duration, $coefficient)
    {
        $query = 'INSERT INTO `subject` 
                    SET 
                    name = :name,
                    description = :description,
                    duration = :duration,
                    coefficient = :coefficient';

        $sth = $dbc->prepare($query);

        $sth->bindParam(':name', $name);
        $sth->bindParam(':description', $description);
        $sth->bindParam(':duration', $duration);
        $sth->bindParam(':coefficient', $coefficient);

        $sth->execute();
    }
    //$query = "INSERT INTO student (id, name, firstname, birthdate) VALUES (NULL, 'AMPOULE', 'Machine', '2021-10-12')";
    //$student= $dbc->prepare($query);
    //$student->execute(['name','firstname','birthdate']);

}