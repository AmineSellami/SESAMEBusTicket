<?php

/**
 * Created by PhpStorm.
 * User: megapc
 * Date: 12/24/2016
 * Time: 7:29 PM
 */

require_once 'Connexion.inc';
include_once 'DAO.php';

class Reserves implements DAO
{
    private $pnr;
    private $pid;
    private $rid;
    private $status;
    private $DOT;

    const TABLE = 'reserves';

    public function __construct($pnr=null, $pid=null, $rid=null, $status=null, $DOT=null)
    {
        $this->pnr = $pnr;
        $this->pid = $pid;
        $this->rid = $rid;
        $this->status = $status;
        $this->DOT = $DOT;
    }

    /**
     * @return null
     */
    public function getPnr()
    {
        return $this->pnr;
    }

    /**
     * @param null $pnr
     */
    public function setPnr($pnr)
    {
        $this->pnr = $pnr;
    }

    /**
     * @return null
     */
    public function getPid()
    {
        return $this->pid;
    }

    /**
     * @param null $pid
     */
    public function setPid($pid)
    {
        $this->pid = $pid;
    }

    /**
     * @return null
     */
    public function getRid()
    {
        return $this->rid;
    }

    /**
     * @param null $rid
     */
    public function setRid($rid)
    {
        $this->rid = $rid;
    }

    /**
     * @return null
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param null $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return null
     */
    public function getDOT()
    {
        return $this->DOT;
    }

    /**
     * @param null $DOT
     */
    public function setDOT($DOT)
    {
        $this->DOT = $DOT;
    }


    public static function find($id)
    {
        $bdd = new Connexion();
        $req = $bdd->prepare('SELECT * FROM ' . self::TABLE . ' WHERE pnr=:pnr');
        $req->bindParam(":pnr",$id);
        $req->execute();
        $result = $req->fetch(PDO::FETCH_BOTH);
        $bdd = null;
        if ($result) {
            return new self($result['pnr'],$result['rid'],$result['pid'],$result['status'],$result['DOT']);
        } else {
            return false;
        }
    }

    public static function all()
    {
        $bdd = new Connexion();
        $req = $bdd->prepare('SELECT * FROM ' . self::TABLE );
        $req->execute();
        $reservations = $req->fetchAll();
        $bdd = null;
        foreach($reservations as $reservation) {
        $list[] = new self($reservation['pnr'],$reservation['pid'],$reservation['rid'],$reservation['status'],$reservation['DOT']);
    }
        return $list;
    }

    public function create()
    {
        $bdd = new Connexion();
        $req = $bdd->prepare('INSERT INTO ' . self::TABLE . ' (pnr, rid, pid, status, DOT) VALUES(:pnr, :rid, :pid, :status, :DOT)');
        $req->bindParam(':pid', $this->pid);
        $req->bindParam(':pnr', $this->pnr);
        $req->bindParam(':rid', $this->rid);
        $req->bindParam(':status', $this->status);
        $req->bindParam(':DOT', $this->DOT);
        $req->execute();
        $bdd = null;
    }

    public function update()
    {
        $bdd = new Connexion();
        $req = $bdd->prepare('UPDATE ' . self::TABLE . ' SET status = :status, DOT = :DOT WHERE pnr = :pnr');
        $req->bindParam(':status', $this->status);
        $req->bindParam(':DOT', $this->DOT);
        $req->bindParam(':pnr', $this->pnr);
        $req->execute();
        $bdd = null;
    }

    public function delete()
    {
        $bdd = new Connexion();
        $req = $bdd->prepare('DELETE FROM ' . self::TABLE . ' WHERE pnr = :pnr');
        $req->bindParam(':pnr', $this->pnr);
        $req->execute();
        $bdd = null;
    }
}