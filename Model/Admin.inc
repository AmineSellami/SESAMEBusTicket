<?php

/**
 * Created by PhpStorm.
 * User: megapc
 * Date: 12/24/2016
 * Time: 7:00 PM
 */

require_once 'Connexion.inc';
include 'DAO.php';

class Admin implements DAO
{
    private $uname;
    private $password;
    private $name;

    const TABLE = 'admin';

    public function __construct($uname=null, $password=null, $name=null){
        $this->uname = $uname;
        $this->password = $password;
        $this->name = $name;
    }

    /**
     * @return null
     */
    public function getUname()
    {
        return $this->uname;
    }

    /**
     * @param null $uname
     */
    public function setUname($uname)
    {
        $this->uname = $uname;
    }

    /**
     * @return null
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param null $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
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

    public function find($id)
    {
        $bdd = new Connexion();
        $req = $bdd->prepare('SELECT * FROM ' . self::TABLE . ' WHERE uname=:var');
        $req->bindParam(":var",$id);
        $req->execute();
        $result = $req->fetch(PDO::FETCH_BOTH);
        $bdd = null;
        if ($result) {
            return new self($result['uname'],$result['password'],$result['name']);
        } else {
            return false;
        }
    }

    public function all()
    {
        $bdd = new Connexion();
        $req = $bdd->prepare('SELECT * FROM ' . self::TABLE );
        $req->execute();
        $admins = $req->fetchAll();
        $bdd = null;
        return $admins;
    }

    public function create()
    {
        $bdd = new Connexion();
        $req = $bdd->prepare('INSERT INTO ' . self::TABLE . ' (uname, password, name) VALUES(:uname, :password, :name)');
        $req->bindParam(':uname', $this->uname);
        $req->bindParam(':password', $this->password);
        $req->bindParam(':name', $this->name);
        $req->execute();
        $bdd = null;
        /**$this->uname = $bdd->lastInsertId();*/
    }

    public function update()
    {
        $bdd = new Connexion();
        $req = $bdd->prepare('UPDATE ' . self::TABLE . ' SET password = :password, name = :name WHERE uname = :id');
        $req->bindParam(':password', $this->password);
        $req->bindParam(':name', $this->name);
        $req->bindParam(':id', $this->uname);
        $req->execute();
        $bdd = null;
    }

    public function delete()
    {
        $bdd = new Connexion();
        $req = $bdd->prepare('DELETE FROM ' . self::TABLE . ' WHERE uname = :id');
        $req->bindParam(':id', $this->uname);
        $req->execute();
        $bdd = null;
    }
}