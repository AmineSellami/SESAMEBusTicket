<?php

/**
 * Created by PhpStorm.
 * User: megapc
 * Date: 12/24/2016
 * Time: 7:07 PM
 */

require_once 'Connexion.inc';
include 'DAO.php';

class Bus implements DAO
{
    private $bid;
    private $bname;
    private $type_ac;
    private $type_sl;

    const TABLE = 'bus';


    public function __construct($bid=null, $bname=null, $type_ac=null, $type_sl=null)
    {
        $this->bid = $bid;
        $this->bname = $bname;
        $this->type_ac = $type_ac;
        $this->type_sl = $type_sl;
    }

    /**
     * @return null
     */
    public function getBid()
    {
        return $this->bid;
    }

    /**
     * @param null $bid
     */
    public function setBid($bid)
    {
        $this->bid = $bid;
    }

    /**
     * @return null
     */
    public function getBname()
    {
        return $this->bname;
    }

    /**
     * @param null $bname
     */
    public function setBname($bname)
    {
        $this->bname = $bname;
    }

    /**
     * @return null
     */
    public function getTypeAc()
    {
        return $this->type_ac;
    }

    /**
     * @param null $type_ac
     */
    public function setTypeAc($type_ac)
    {
        $this->type_ac = $type_ac;
    }

    /**
     * @return null
     */
    public function getTypesl()
    {
        return $this->type_sl;
    }

    /**
     * @param null $type_sl
     */
    public function setTypesl($type_sl)
    {
        $this->type_sl = $type_sl;
    }


    public function find($id)
    {
        $bdd = new Connexion();
        $req = $bdd->prepare('SELECT * FROM ' . self::TABLE . ' WHERE bid=:id');
        $req->bindParam(":id",$id);
        $req->execute();
        $result = $req->fetch(PDO::FETCH_BOTH);
        $bdd = null;
        if ($result) {
            return new self($result['bid'],$result['bname'],$result['type_ac'],$result['type_sl']);
        } else {
            return false;
        }
    }

    public function all()
    {
        $bdd = new Connexion();
        $req = $bdd->prepare('SELECT * FROM ' . self::TABLE );
        $req->execute();
        $buses = $req->fetchAll();
        $bdd = null;
        return $buses;
    }

    public function create()
    {
        $bdd = new Connexion();
        $req = $bdd->prepare('INSERT INTO ' . self::TABLE . ' (bid, bname, type_ac, type_sl) VALUES(:bid, :bname, :type_ac, :type_sl)');
        $req->bindParam(':bid', $this->bid);
        $req->bindParam(':bname', $this->bname);
        $req->bindParam(':type_ac', $this->type_ac);
        $req->bindParam(':type_sl', $this->type_sl);
        $req->execute();
        $bdd = null;
    }

    public function update()
    {
        $bdd = new Connexion();
        $req = $bdd->prepare('UPDATE ' . self::TABLE . ' SET bname = :bname, type_ac = :type_ac, type_sl = :type_sl WHERE bid = :bid');
        $req->bindParam(':type_ac', $this->type_ac);
        $req->bindParam(':type_sl', $this->type_sl);
        $req->bindParam(':bname', $this->bname);
        $req->bindParam(':bid', $this->bid);
        $req->execute();
        $bdd = null;
    }

    public function delete()
    {
        $bdd = new Connexion();
        $req = $bdd->prepare('DELETE FROM ' . self::TABLE . ' WHERE bid = :bid');
        $req->bindParam(':bid', $this->bid);
        $req->execute();
        $bdd = null;
    }
}