<?php
/**
 * Created by PhpStorm.
 * User: megapc
 * Date: 1/10/2017
 * Time: 4:53 PM
 */

if(isset($reservation)){
    echo '<form method="post" action="?controller=reservation&action=update">';
    echo '<select name="rid">';
    foreach ($routes as $route) {
        if($route->getRid() == $reservation->getRid()){
            echo '<option value="'.$route->getRid().'" selected="selected">'.$route->getfromLoc()."-".$route->gettoLoc() .'</option>';
        } else{
            echo '<option value="'.$route->getRid().'">'.$route->getfromLoc()."-".$route->gettoLoc() .'</option>';
        }
    }
    echo '</select>';
    echo '<select name="pid">';
    foreach ($passengers as $passenger) {
        if($passenger->getPid() == $reservation->getPid()) {
            echo '<option value="' . $passenger->getPid() . '" selected="selected">' . $passenger->getName() . '</option>';
        } else{
            echo '<option value="' . $passenger->getPid() . '">' . $passenger->getName() . '</option>';
        }
    }
    echo '</select>';
    echo '<select name="status">';
    if($reservation->getStatus() == "booked") {
        echo '<option value="booked" selected="selected">Booked</option>';
        echo '<option value="cancelled">Cancelled</option>';
    } else{
        echo '<option value="booked">Booked</option>';
        echo '<option value="cancelled" selected="selected">Cancelled</option>';
    }
    echo '</select>';
    echo '<input type="datetime" placeholder="dateTime" value="'.$reservation->getDOT().'" required  name="dot" />';
    echo '<input type="submit"  Value="OK" />';
    echo '</form>';

} else {

    echo '<form method="post" action="?controller=reservation&action=create">';
    echo '<select name="rid">';
    foreach ($routes as $route) {
        echo '<option value="'.$route->getRid().'">'.$route->getfromLoc()."-".$route->gettoLoc() .'</option>';
    }
    echo '</select>';
    echo '<select name="pid">';
    foreach ($passengers as $passenger) {
        echo '<option value="'.$passenger->getPid().'">'.$passenger->getName().'</option>';
    }
    echo '</select>';
    echo '<select name="status">';
    echo '<option value="booked">Booked</option>';
    echo '<option value="cancelled">Cancelled</option>';
    echo '</select>';
    echo '<input type="datetime" placeholder="dateTime" required  name="dot" />';
    echo '<input type="submit"  Value="OK" />';
    echo '</form>';
}