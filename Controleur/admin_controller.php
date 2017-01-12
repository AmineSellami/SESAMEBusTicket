<?php
/**
 * Created by PhpStorm.
 * User: megapc
 * Date: 12/27/2016
 * Time: 2:18 PM
 */

class AdminController
{
    public function index(){
        if(isset($_Session['role'])) {
            if ($_SESSION['role'] != 'admin') {
                require_once('/Vue/admin/login.php');
            } else {
                require_once('/Vue/admin/Passengers/index.php');
            }
        }else{
            require_once('/Vue/admin/login.php');
        }
    }

    public function login(){
         if(!isset($_POST['username']) || !isset($_POST['password']) ){
            return call('pages','error');
        } else {
            $admin = Admin::find($_POST['username']);
             if (isset($admin) && $admin->getPassword()!=null && $admin->getPassword() === $_POST['password']){
                $_SESSION['role'] = 'admin';
                 require_once('/Vue/admin/Passengers/index.php');
             } else {
                 require_once('/Vue/admin/login.php');
             }
        }
    }
}