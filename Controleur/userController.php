<?php
/**
 * Created by PhpStorm.
 * User: megapc
 * Date: 12/25/2016
 * Time: 3:10 PM
 */

include_once '../Model/Passenger.inc';


getAll();
// return all passengers
function getAll(){
    $p = new Passenger();
    $passengers = $p->all();
    foreach($passengers as $item => $passenger)
    {
        $passengers[$item]['titre'] = htmlspecialchars($passenger['pid']);
        $passengers[$item]['name'] = nl2br(htmlspecialchars($passenger['name']));
        $passengers[$item]['email'] = nl2br(htmlspecialchars($passenger['email']));
        $passengers[$item]['mob'] = nl2br(htmlspecialchars($passenger['mob']));
        $passengers[$item]['uname'] = nl2br(htmlspecialchars($passenger['uname']));
        $passengers[$item]['password'] = nl2br(htmlspecialchars($passenger['password']));
    }

    include_once('../Vue/index.php');
}

