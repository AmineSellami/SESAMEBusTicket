<?php

/**
 * Created by PhpStorm.
 * User: megapc
 * Date: 12/24/2016
 * Time: 7:32 PM
 */

require_once 'Connexion.inc';
include_once 'DAO.php';

class Route implements DAO
{
    private $rid;
    private $bid;
    private $fromLoc;
    private $toLoc;
    private $fare;
    private $dep_date;
    private $dep_time;
    private $arr_date;
    private $arr_time;
    private $avalseats;
    private $maxseats;

    const TABLE = 'route';

    public function __construct($rid=null, $bid=null, $fromLoc=null, $toLoc=null, $fare=null, $dep_date=null, $dep_time=null, $arr_date=null, $arr_time=null, $avalseats=null, $maxseats=null)
    {
        $this->rid = $rid;
        $this->bid = $bid;
        $this->fromLoc = $fromLoc;
        $this->toLoc = $toLoc;
        $this->fare = $fare;
        $this->dep_date = $dep_date;
        $this->dep_time = $dep_time;
        $this->arr_date = $arr_date;
        $this->arr_time = $arr_time;
        $this->avalseats = $avalseats;
        $this->maxseats = $maxseats;
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
    public function getfromLoc()
    {
        return $this->fromLoc;
    }

    /**
     * @param null $fromLoc
     */
    public function setfromLoc($fromLoc)
    {
        $this->fromLoc = $fromLoc;
    }

    /**
     * @return null
     */
    public function gettoLoc()
    {
        return $this->toLoc;
    }

    /**
     * @param null $toLoc
     */
    public function settoLoc($toLoc)
    {
        $this->toLoc = $toLoc;
    }

    /**
     * @return null
     */
    public function getFare()
    {
        return $this->fare;
    }

    /**
     * @param null $fare
     */
    public function setFare($fare)
    {
        $this->fare = $fare;
    }

    /**
     * @return null
     */
    public function getDepDate()
    {
        return $this->dep_date;
    }

    /**
     * @param null $dep_date
     */
    public function setDepDate($dep_date)
    {
        $this->dep_date = $dep_date;
    }

    /**
     * @return null
     */
    public function getDepTime()
    {
        return $this->dep_time;
    }

    /**
     * @param null $dep_time
     */
    public function setDepTime($dep_time)
    {
        $this->dep_time = $dep_time;
    }

    /**
     * @return null
     */
    public function getArrDate()
    {
        return $this->arr_date;
    }

    /**
     * @param null $arr_date
     */
    public function setArrDate($arr_date)
    {
        $this->arr_date = $arr_date;
    }

    /**
     * @return null
     */
    public function getArrTime()
    {
        return $this->arr_time;
    }

    /**
     * @param null $arr_time
     */
    public function setArrTime($arr_time)
    {
        $this->arr_time = $arr_time;
    }

    /**
     * @return null
     */
    public function getAvalseats()
    {
        return $this->avalseats;
    }

    /**
     * @param null $avalseats
     */
    public function setAvalseats($avalseats)
    {
        $this->avalseats = $avalseats;
    }

    /**
     * @return null
     */
    public function getMaxseats()
    {
        return $this->maxseats;
    }

    /**
     * @param null $maxseats
     */
    public function setMaxseats($maxseats)
    {
        $this->maxseats = $maxseats;
    }


    public static function find($id)
    {
        $bdd = new Connexion();
        $req = $bdd->prepare('SELECT * FROM ' . self::TABLE . ' WHERE rid=:rid');
        $req->bindParam(":rid",$id);
        $req->execute();
        $result = $req->fetch(PDO::FETCH_BOTH);
        $bdd = null;
        if ($result) {
            return new self($result['rid'],$result['bid'],$result['fromLoc'],$result['toLoc'],$result['fare'],$result['dep_date'],$result['dep_time'],$result['arr_date'],$result['arr_time'],$result['avalseats'],$result['maxseats']);
        } else {
            return false;
        }
    }

    public static function all()
    {
        $bdd = new Connexion();
        $req = $bdd->prepare('SELECT * FROM ' . self::TABLE );
        $req->execute();
        $routes = $req->fetchAll();
        $bdd = null;
        foreach($routes as $route){
            $list[] =  new self($route['rid'],$route['bid'],$route['fromLoc'],$route['toLoc'],$route['fare'],$route['dep_date'],$route['dep_time'],$route['arr_date'],$route['arr_time'],$route['avalseats'],$route['maxseats']);
        }
        return $list;
    }

    public function create()
    {
        $bdd = new Connexion();
        $req = $bdd->prepare('INSERT INTO ' . self::TABLE . ' (rid, bid, fromLoc, toLoc, fare, dep_date, dep_time, arr_date, arr_time, avalseats, maxseats) VALUES(:rid, :bid, :fromLoc, :toLoc, :fare, :dep_date, :dep_time, :arr_date, :arr_time, :avalseats, :maxseats');
        $req->bindParam(':rid', $this->rid);
        $req->bindParam(':bid', $this->bid);
        $req->bindParam(':fromLoc', $this->fromLoc);
        $req->bindParam(':toLoc', $this->toLoc);
        $req->bindParam(':fare', $this->fare);
        $req->bindParam(':dep_date', $this->dep_date);
        $req->bindParam(':dep_time', $this->dep_time);
        $req->bindParam(':arr_date', $this->arr_date);
        $req->bindParam(':arr_time', $this->arr_time);
        $req->bindParam(':avalseats', $this->avalseats);
        $req->bindParam(':maxseats', $this->maxseats);
        $req->execute();
        $bdd = null;
    }

    public function update()
    {
        $bdd = new Connexion();
        $req = $bdd->prepare('UPDATE ' . self::TABLE . ' SET bid = :bid, fromLoc = :fromLoc, toLoc = :toLoc, dep_date = :dep_date, dep_time = :deptime, arr_date = :arr_date, arr_time = :arr_time, avalseats = :avalseats, maxseats = :maxseats WHERE rid = :rid');
        $req->bindParam(':bid', $this->bid);
        $req->bindParam(':fromLoc', $this->fromLoc);
        $req->bindParam(':toLoc', $this->toLoc);
        $req->bindParam(':fare', $this->fare);
        $req->bindParam(':dep_date', $this->dep_date);
        $req->bindParam(':dep_time', $this->dep_time);
        $req->bindParam(':arr_date', $this->arr_date);
        $req->bindParam(':arr_time', $this->arr_time);
        $req->bindParam(':avalseats', $this->avalseats);
        $req->bindParam(':maxseats', $this->maxseats);;
        $req->bindParam(':rid', $this->rid);
        $req->execute();
        $bdd = null;
    }

    public function delete()
    {
        $bdd = new Connexion();
        $req = $bdd->prepare('DELETE FROM ' . self::TABLE . ' WHERE rid = :rid');
        $req->bindParam(':rid', $this->rid);
        $req->execute();
        $bdd = null;
    }
}