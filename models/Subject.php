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
public function getDescription(): mixed
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
 * @return mixed|string
 */
public function getDuration(): mixed
{
    return $this->duration;
}

/**
 * @param mixed|string $duration
 */
public function setDuration(mixed $duration): void
{
    $this->duration = $duration;
}

/**
 * @return int|mixed
 */
public function getCoefficient(): mixed
{
    return $this->coefficient;
}

/**
 * @param int|mixed $coefficient
 */
public function setCoefficient(mixed $coefficient): void
{
    $this->coefficient = $coefficient;
}

public function getListSubjects($dbc)
{
    $query = ("SELECT * FROM `subject` ORDER BY name");
    $response = $dbc->query($query);
    $subjects = $response->fetchAll();
    return $subjects;
}
public function getSingleSubjects($dbc,$index){
$query = "SELECT * FROM `subject` WHERE id LIKE $index";
$response = $dbc->query($query);
$subject = $response->fetch(PDO::FETCH_ASSOC);
return $subject;
}
    public function updateSubject($dbc, $id, $name,$description,$duration,$coefficient){
        $query = 'UPDATE subject 
                    SET 
                    name = :name,
                    description = :description,
                    duration = :duration,
                    coefficient = :coefficient
                    WHERE id = :id';

        $sth = $dbc->prepare($query);

        $sth->bindParam(':id', $id);
        $sth->bindParam(':name', $name);
        $sth->bindParam(':description', $description);
        $sth->bindParam(':duration', $duration);
        $sth->bindParam(':coefficient', $coefficient);

        $sth->execute();
    }
    public function deleteSubject($dbc, $id) {
        $query = "DELETE FROM `subject` WHERE `subject`.`id` = $id";
        $dbc->query($query);
    }
}