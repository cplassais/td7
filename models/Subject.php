<?php

class Subject extends Db
{
    private $id;
    private $name;
    private $description;
    private $duration;
    private $coefficient;

    public function __construct(){}

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
     * @return string
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
    /**
     * @return string
     */
    public function coefMessage()
    {
        if ($this->coefficient <= 1):
            $msg = 'Compétence transverse';
        elseif ($this->coefficient > 1 and $this->coefficient <= 2):
            $msg = 'Compétence initiale';
        else:
            $msg = 'Competence indispensable';
        endif;
        return $msg;
    }

    /**
     * @param $dbc
     * @return mixed
     */
    static function getListSubjects($dbc)
    {
        $query = ("SELECT * FROM subject ORDER BY name");
        $sth = $dbc->query($query);
        $subjects = $sth->fetchAll(PDO::FETCH_CLASS, __CLASS__); //ou
        //$subjects = $sth->fetchAll(PDO::FETCH_CLASS, 'Subject');
        return $subjects;
    }

    /**
     * @param $dbc
     * @param $id
     * @return mixed
     */
    public static function getSubject($dbc, $id)
    {

        $query = 'SELECT * FROM subject WHERE id = :id';
        $aBindParam = array('id' => $id);
        $oSubject = $dbc->select($query, $aBindParam);

        return $oSubject;
    }

    /**
     * @param $dbc
     * @param $id
     * @param $name
     * @param $description
     * @param $duration
     * @param $coefficient
     * @return mixed
     */
    public function updateSubject($dbc, $id, $name, $description, $duration, $coefficient)
    {
        $query = 'UPDATE subject SET name = :name, description = :description, duration = :duration, coefficient = :coefficient WHERE id = :id';
        $aBindParam = array('id' => $id, 'name' => $name, 'description' => $description, 'duration' => $duration, 'coefficient' => $coefficient);
        $oSubject = $dbc->update($query, $aBindParam);

        return $oSubject;
    }

    /**
     * @param $dbc
     * @param $id
     */
    public static function deleteSubject($dbc, $id)
    {
        $query = "DELETE FROM `subject` WHERE `subject`.`id` = $id";
        $aBindParam = array('id' => $id);
        $oSubject = $dbc->delete($query, $aBindParam);

    }

    /**
     * @param $dbc
     * @param $name
     * @param $description
     * @param $duration
     * @param $coefficient
     * @return mixed
     */
    public static function addSubject($dbc, $name, $description, $duration, $coefficient)
    {
        $query = 'INSERT INTO `subject` 
                    SET 
                    name = :name,
                    description = :description,
                    duration = :duration,
                    coefficient = :coefficient';
        $aBindParam = array('name' => $name, 'description' => $description, 'duration' => $duration, 'coefficient' => $coefficient);
        $oSubject = $dbc->select($query, $aBindParam);
        return $oSubject;
    }
}