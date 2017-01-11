<?php

/**
 * Created by PhpStorm.
 * User: megapc
 * Date: 1/10/2017
 * Time: 3:05 AM
 */
class BusController
{
    public function index(){
        $buses = Bus::all();
        require_once('/Vue/admin/Bus/index.php');
    }

    public function toCreate(){
        require_once('/Vue/admin/Bus/Create.php');
    }

    public function create(){
        $bus= new Bus($_POST['bid'],$_POST['bname'],$_POST['type_ac'],$_POST['type_sl']);
        $bus->create();
        call('bus','index');
    }

    public function toUpdate(){
        $bus = Bus::find($_GET['id']);
        require_once('/Vue/admin/Bus/Create.php');
    }

    public function update(){
        $bus= new Bus($_POST['bid'],$_POST['bname'],$_POST['type_ac'],$_POST['type_sl']);
        $bus->update();
        call('bus','index');
    }

    public function delete(){
        if(isset($_GET['id'])) {
            $bus = Bus::find($_GET['id']);
            $bus->delete();
            call('bus','index');
        }
    }
}