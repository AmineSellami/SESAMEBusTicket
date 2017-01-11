<?php

/**
 * Created by PhpStorm.
 * User: megapc
 * Date: 12/26/2016
 * Time: 7:18 PM
 */
class PassengersController
{
    public function index(){
        $passengers = Passenger::all();
        require_once('/Vue/admin/Passengers/index.php');
    }

    public function toCreate(){
        require_once('/Vue/admin/Passengers/Create.php');
    }

    public function create(){
        $passenger = new Passenger($_POST['id'],$_POST['name'],$_POST['email'],$_POST['mob'],$_POST['uname'],$_POST['password']);
        $passenger->create();
        call('passengers','index');
    }

    public function toUpdate(){
        $passenger = Passenger::find($_GET['id']);
        require_once('/Vue/admin/Passengers/Create.php');
    }

    public function update(){
        $passenger = new Passenger($_POST['id'],$_POST['name'],$_POST['email'],$_POST['mob'],$_POST['uname'],$_POST['password']);
        $passenger->update();
        call('passengers','index');
    }



    public function login(){

    }

    public function signUp(){

    }
    
    public function delete(){
        if(isset($_GET['id'])) {
            $pass = Passenger::find($_GET['id']);
            $pass->delete();
            call('passengers','index');
        }
    }

}