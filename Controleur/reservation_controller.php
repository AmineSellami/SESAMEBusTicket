<?php

/**
 * Created by PhpStorm.
 * User: megapc
 * Date: 1/10/2017
 * Time: 3:06 AM
 */
class ReservationController
{
    public function index(){
        $reservations = Reserves::all();
        require_once('/Vue/admin/Reservation/index.php');
    }

    public function toCreate(){
        include_once('/Model/Route.inc');
        include_once('/Model/Passenger.inc');
        $routes = Route::all();
        $passengers = Passenger::all();
        require_once('/Vue/admin/Reservation/Create.php');
    }

    public function create(){
        $reservation = new Reserves($_POST['pnr'],$_POST['rid'],$_POST['pid'],$_POST['status'],$_POST['dot']);
        $reservation->create();
        call('reservation','index');
    }

    public function toUpdate(){
        include_once('/Model/Route.inc');
        include_once('/Model/Passenger.inc');
        $routes = Route::all();
        $passengers = Passenger::all();
        $reservation = Reserves::find($_GET['id']);
        require_once('/Vue/admin/Reservation/Create.php');
    }

    public function update(){
        $reservation = new Reserves($_POST['pnr'],$_POST['rid'],$_POST['pid'],$_POST['status'],$_POST['dot']);
        $reservation->update();
        call('reservation','index');
    }

    public function delete(){
        if(isset($_GET['id'])) {
            $reservation = Reserves::find($_GET['id']);
            $reservation->delete();
            call('reservation','index');
        }
    }
}