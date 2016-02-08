<?php

class book
{
    static private $connection = null;

    static function SetConnection(mysqli $newConnection)
    {
        book::$connection = $newConnection;
    }

    protected $id;
    protected $name;
    protected $autor;
    protected $opis;

    public function __construct($newid, $newname, $newautor, $newopis)
    {
        $this->id = intval($newid) - 1;
        $this->setname = $newname;
        $this->setautor = $newautor;
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

    public function loadFromDB($id = null)
    {
        if (is_null($id)) {
            $sql = "SELECT * FROM book ORDER BY post_d desc";
        } else {
            $sql = "SELECT * FROM book WHERE book_id='$id' ORDER BY post_d desc";
        }

        $ret = [];
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

    public function Createbook( $name, $autor, $opis)
    {
        $sql = "INSERT INTO book($this->name, $this->autor, $this->opis)
                VALUE ($name,$autor,$opis)";
        $result = self::$connection->query($sql);
        if ($result === TRUE) {
            $newbook = new book (self::$connection->insert_id, $name, $autor, $opis);
            return $newbook;
        }

        return false;
    }

    public function UpDateBook($conn, $newname, $newautor, $newopis)
    {

        $request ="UPDATE book SET name=$newname OR autor=$newautor OR opis=$newopis WHERE id=$this->id";
        $requestResult=$conn->query($request);
        return $requestResult;

    }

    public function DelteFromDB($conn,$id)
    {
        $request ="DELETE * FROM book WHERE  id=$id";
        $requestResult=$conn->query($request);
        return $requestResult;
    }




}
