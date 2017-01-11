<?php

/**
 * Created by PhpStorm.
 * User: megapc
 * Date: 12/24/2016
 * Time: 7:24 PM
 */

require_once 'Connexion.inc';
include_once 'DAO.php';

class Card implements DAO
{
    private $num;
    private $type;
    private $expdate;
    private $cvv;

    const TABLE = 'card';

    public function __construct($num=null, $type=null, $expdate=null, $cvv=null)
    {
        $this->num = $num;
        $this->type = $type;
        $this->expdate = $expdate;
        $this->cvv = $cvv;
    }

    /**
     * @return null
     */
    public function getNum()
    {
        return $this->num;
    }

    /**
     * @param null $num
     */
    public function setNum($num)
    {
        $this->num = $num;
    }

    /**
     * @return null
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param null $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return null
     */
    public function getExpdate()
    {
        return $this->expdate;
    }

    /**
     * @param null $expdate
     */
    public function setExpdate($expdate)
    {
        $this->expdate = $expdate;
    }

    /**
     * @return null
     */
    public function getCvv()
    {
        return $this->cvv;
    }

    /**
     * @param null $cvv
     */
    public function setCvv($cvv)
    {
        $this->cvv = $cvv;
    }

    public static function find($id)
    {
        $bdd = new Connexion();
        $req = $bdd->prepare('SELECT * FROM ' . self::TABLE . ' WHERE num=:num');
        $req->bindParam(":num",$id);
        $req->execute();
        $result = $req->fetch(PDO::FETCH_BOTH);
        $bdd = null;
        if ($result) {
            return new self($result['num'],$result['type'],$result['expdate']);
        } else {
            return false;
        }
    }

    public static function all()
    {
        $bdd = new Connexion();
        $req = $bdd->prepare('SELECT * FROM ' . self::TABLE );
        $req->execute();
        $cards = $req->fetchAll();
        $bdd = null;
        return $cards;
    }

    public function create()
    {
        $bdd = new Connexion();
        $req = $bdd->prepare('INSERT INTO ' . self::TABLE . ' (num, type, expdate, cvv) VALUES(:num, :type, :expdate, :cvv)');
        $req->bindParam(':num', $this->num);
        $req->bindParam(':type', $this->type);
        $req->bindParam(':expdate', $this->expdate);
        $req->bindParam(':cvv', $this->cvv);
        $req->execute();
        $bdd = null;
    }

    public function update()
    {
        $bdd = new Connexion();
        $req = $bdd->prepare('UPDATE ' . self::TABLE . ' SET type = :type, expdate = :expdate, cvv = :cvv WHERE num = :num');
        $req->bindParam(':type', $this->type);
        $req->bindParam(':expdate', $this->expdate);
        $req->bindParam(':cvv', $this->cvv);
        $req->bindParam(':num', $this->num);
        $req->execute();
        $bdd = null;
    }

    public function delete()
    {
        $bdd = new Connexion();
        $req = $bdd->prepare('DELETE FROM ' . self::TABLE . ' WHERE num = :num');
        $req->bindParam(':num', $this->num);
        $req->execute();
        $bdd = null;
    }
}