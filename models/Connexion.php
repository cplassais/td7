<?php
//$servername = 'localhost';
//$username = 'student';
//$password = 'student';
//$bddname = 'student';
//
//try {
//    $dbc = new PDO("mysql:host=$servername;dbname=$bddname", $username,
//        $password);
//    $dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    //echo "Connexion réussie"." ";
//} catch (PDOException $e) {
//    echo $e->getMessage();
//    // on peut utiliser getCode() pour identifier l'erreur
//}


class Connexion
{
    private $servername;
    private $username;
    private $password;
    private $bddname;

    public function __construct()
    {
        $this->username = 'student';
        $this->password = 'student';
        $this->bddname = 'student';
        $this->servername = 'localhost';
        $this->Connexion();
    }

    public function Connexion()
    {
        try {
            $dbc = new PDO('mysql:host='.$this->servername.';dbname='.$this->bddname, $this->username, $this->password);
            $dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connexion réussie"." ";
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}
