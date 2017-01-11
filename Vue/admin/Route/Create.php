<?php
/**
 * Created by PhpStorm.
 * User: megapc
 * Date: 1/10/2017
 * Time: 4:54 PM
 */

if(isset($route)){
    echo '<form method="post" action="?controller=route&action=update">';
    echo '<input type="text" required placeholder="Id" disabled value="'.$route->getRid().'" name="rid" />';
    echo '<select name="bid">';
    foreach ($buses as $bus) {
        if($bus->getBid() == $route->getBid()){
            echo '<option value="' . $bus->getBid() . '" selected="selected">'.$bus->getBname().'</option>';
        } else {
            echo '<option value="' . $bus->getBid() . '">'.$bus->getBname().'</option>';
        }
    }
    echo '</select>';
    echo '<input type="text" required placeholder="from location" value="'.$route->getfromLoc().'" name="fromLoc" />';
    echo '<input type="text" required placeholder="to location" value="'.$route->gettoLoc().'" name="toLoc" />';
    echo '<input type="number" required placeholder="fare KM" value="'.$route->getFare().'" name="fare" />';
    echo '<input type="Date" required placeholder="Date Depart" value="'.$route->getDepDate().'" name="dep_date" />';
    echo '<input type="time" required placeholder="Time Depart" value="'.$route->getDepTime().'" name="dep_time" />';
    echo '<input type="Date" required placeholder="Date Arrive" value="'.$route->getArrDate().'" name="arr_date" />';
    echo '<input type="time" required placeholder="Time Arrive" value="'.$route->getArrTime().'" name="arr_time" />';
    echo '<input type="number" required placeholder="Place Dispo" value="'.$route->getAvalseats().'" name="avalseats" />';
    echo '<input type="number" required placeholder="Max Places" value="'.$route->getMaxseats().'" name="maxseats" />';
    echo '<input type="submit"  Value="OK" />';
    echo '</form>';
} else {
    echo '<form method="post" action="?controller=route&action=create">';
    echo '<input type="text" required placeholder="Id" name="rid" />';
    echo '<select name="bid">';
    foreach ($buses as $bus) {
        echo '<option value="' . $bus->getBid() . '">' . $bus->getBname() . '</option>';
    }
    echo '</select>';
    echo '<input type="text" required placeholder="from location" name="fromLoc" />';
    echo '<input type="text" required placeholder="to location" name="toLoc" />';
    echo '<input type="number" required placeholder="fare KM" name="fare" />';
    echo '<input type="Date" required placeholder="Date Depart" name="dep_date" />';
    echo '<input type="time" required placeholder="Time Depart" name="dep_time" />';
    echo '<input type="Date" required placeholder="Date Arrive" name="arr_date" />';
    echo '<input type="time" required placeholder="Time Arrive" name="arr_time" />';
    echo '<input type="number" required placeholder="Place Dispo" name="avalseats" />';
    echo '<input type="number" required placeholder="Max Places" name="maxseats" />';
    echo '<input type="submit"  Value="OK" />';
    echo '</form>';
}