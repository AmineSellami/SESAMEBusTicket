<?php

/**
 * Created by PhpStorm.
 * User: megapc
 * Date: 12/24/2016
 * Time: 7:27 PM
 */
require_once 'Connexion.inc';
include 'DAO.php';

class Passenger implements DAO
{
    private $pid;
    private $name;
    private $email;
    private $mob;
    private $uname;
    private $password;

    const TABLE = 'passenger';

    public function __construct($pid=null, $name=null, $email=null, $mob=null)
    {
        $this->pid = $pid;
        $this->name = $name;
        $this->email = $email;
        $this->mob = $mob;
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
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param null $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return null
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param null $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return null
     */
    public function getMob()
    {
        return $this->mob;
    }

    /**
     * @param null $mob
     */
    public function setMob($mob)
    {
        $this->mob = $mob;
    }

    /**
     * @return mixed
     */
    public function getUname()
    {
        return $this->uname;
    }

    /**
     * @param mixed $uname
     */
    public function setUname($uname)
    {
        $this->uname = $uname;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }


    public function find($id)
    {
        $bdd = new Connexion();
        $req = $bdd->prepare('SELECT * FROM ' . self::TABLE . ' WHERE pid=:pid');
        $req->bindParam(":pid",$id);
        $req->execute();
        $result = $req->fetch(PDO::FETCH_BOTH);
        $bdd = null;
        if ($result) {
            return new self($result['pid'],$result['name'],$result['email'],$result['mob'],$result['uname'],$result['password']);
        } else {
            return false;
        }
    }

    public function all()
    {
        $bdd = new Connexion();
        $req = $bdd->prepare('SELECT * FROM ' . self::TABLE );
        $req->execute();
        $passengers = $req->fetchAll();
        $bdd = null;
        return $passengers;
    }

    public function create()
    {
        $bdd = new Connexion();
        $req = $bdd->prepare('INSERT INTO ' . self::TABLE . ' (pid, name, email, mob, uname, password) VALUES(:pid, :name, :email, :mob, :uname, :password)');
        $req->bindParam(':pid', $this->pid);
        $req->bindParam(':name', $this->name);
        $req->bindParam(':email', $this->email);
        $req->bindParam(':mob', $this->mob);
        $req->bindParam(':uname', $this->uname);
        $req->bindParam(':password', $this->password);
        $req->execute();
        $bdd = null;
    }

    public function update()
    {
        $bdd = new Connexion();
        $req = $bdd->prepare('UPDATE ' . self::TABLE . ' SET name = :name, email = :email, mob = :mob, uname = :uname, password = :password WHERE pid = :pid');
        $req->bindParam(':name', $this->name);
        $req->bindParam(':email', $this->email);
        $req->bindParam(':mob', $this->mob);
        $req->bindParam(':pid', $this->pid);
        $req->bindParam(':uname', $this->uname);
        $req->bindParam(':password', $this->password);
        $req->execute();
        $bdd = null;
    }

    public function delete()
    {
        $bdd = new Connexion();
        $req = $bdd->prepare('DELETE FROM ' . self::TABLE . ' WHERE pid = :pid');
        $req->bindParam(':pid', $this->pid);
        $req->execute();
        $bdd = null;
    }
}