<?php
/**
 * Created by PhpStorm.
 * User: megapc
 * Date: 1/10/2017
 * Time: 3:29 PM
 */

echo '<h3>Reservations</h3>';
echo '<hr>';
echo '<table class="table">';
echo '<tr><th>Pnr</th><th>Pid</th><th>Rid</th><th>status</th><th>Date</th><th>Actions</th></tr>';
foreach ($reservations as $reservation) {
    if ($reservation->getPid() == $_SESSION['id']) {
        echo '<tr>';
        echo '<td>' . $reservation->getPnr() . '</td>';
        echo '<td>' . $reservation->getPid() . '</td>';
        echo '<td>' . $reservation->getRid() . '</td>';
        echo '<td>' . $reservation->getStatus() . '</td>';
        echo '<td>' . $reservation->getDOT() . '</td>';
        echo '<td><a href="?controller=reservation&action=toUpdate&id=' . $reservation->getPnr() . '" class="btn btn-primary">Modify</a> <a href="?controller=passengers&action=delete&id=' . $reservation->getPnr() . '"class="btn btn-danger">Delete</a> </td>';
        echo '</tr>';

    }
}

echo '</table>';