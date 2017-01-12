<?php

/**
 * Created by PhpStorm.
 * User: megapc
 * Date: 1/10/2017
 * Time: 3:05 AM
 */
class RouteController
{
    public function index(){
        $routes = Route::all();
        require_once('/Vue/admin/Route/index.php');
    }

    public function toCreate(){
        include_once('/Model/Bus.inc');
        $buses = Bus::all();
        require_once('/Vue/admin/Route/Create.php');
    }

    public function create(){
        $route = new Route($_POST['rid'],$_POST['bid'],$_POST['fromLoc'],$_POST['toLoc'],$_POST['fare'],$_POST['dep_date'],$_POST['dep_time'],$_POST['arr_date'],$_POST['arr_time'],$_POST['avalseats'],$_POST['maxseats']);
        $route->create();
        call('route','index');
    }

    public function toUpdate(){
        include_once('/Model/Bus.inc');
        $buses = Bus::all();
        $route = Route::find($_GET['id']);
        require_once('/Vue/admin/Route/Create.php');
    }

    public function update(){
        $route = new Route($_POST['rid'],$_POST['bid'],$_POST['fromLoc'],$_POST['toLoc'],$_POST['fare'],$_POST['dep_date'],$_POST['dep_time'],$_POST['arr_date'],$_POST['arr_time'],$_POST['avalseats'],$_POST['maxseats']);
        $route->update();
        call('route','index');
    }

    public function delete(){
        if(isset($_GET['id'])) {
            $route = Route::find($_GET['id']);
            $route->delete();
            call('route','index');
        }
    }

    public function getRoutes(){
        $routes = Route::all();
        if(isset($_POST['from'])) {
            $from = $_POST['from'];
        }
        if(isset($_POST['to'])) {

            $to = $_POST['to'];
        }

        if(isset($_POST['nb'])) {

            $nb = $_POST['nb'];
        }
        require_once('/Vue/public/home.php');
        
    }
}