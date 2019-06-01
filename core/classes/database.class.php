<?php


Class database
{
    private $pdo;

    public function __construct()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $this->pdo = new \PDO("mysql:host=$servername;dbname=eff;charset=utf8", $username, $password);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $this->pdo;
    }

    public function requete($q, $params = array())
    {
        if ($params) {
            $req = $this->pdo->prepare($q);
            $req->execute($params);
        } else {
            $req = $this->pdo->query($q);
        }

        return $req;
    }

}

?>