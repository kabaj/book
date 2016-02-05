<?php

class book
{
    static private $connection = null;

    static function SetConnection(mysqli $newConnection)
    {
        book::$connection = $newConnection;
    }

    private $id;
    private $name;
    private $autor;
    private $opis;

    public function __construct($newid, $newname, $newautor, $newopis)
    {
        $this->id = intval($newid) - 1;
        $this->name = $newname;
        $this->autor = $newautor;
        $this->setopis($newopis);
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAutor()
    {
        return $this->autor;
    }

    public function getOpis()
    {
        return $this->opis;
    }

    public function setOpis($newopis)
    {
        if (is_string($newopis)) {
            $this->opis = $newopis;
        }
    }

    public function setName($newname)
    {
        if (is_string($newname)) {
            $this->name = $newname;
        }
    }

    public function setAutor($newautor)
    {
        if (is_string($newautor)) {
            $this->autor = $newautor;
        }
    }

    public function loadFromDB($id)
    {


        $ret = [];
        $sql = "SELECT * FROM book WHERE id='$id' ORDER BY post_d desc";
        $result = self::$connection->query($sql);
        if ($result !== false) {
            while ($row = $result->fetch_assoc()) {
                $ret[] = $row;
            }
            return $ret;
        }
        $ret = [];
        return $ret;
    }

    

}
