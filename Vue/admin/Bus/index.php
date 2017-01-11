<?php
/**
 * Created by PhpStorm.
 * User: megapc
 * Date: 1/10/2017
 * Time: 4:05 PM
 */

echo '<h3>Buses</h3>';
echo '<hr>';
echo '<a href="?controller=bus&action=toCreate" class="btn btn-success">Create</a>';
echo '<table class="table">';
echo '<tr><th>Bid</th><th>Bus Name</th><th>Climatisation</th><th>Energie</th><th>Actions</th></tr>';
foreach ($buses as $bus){
    echo '<tr>';
    echo '<td>' .$bus->getBid() . '</td>';
    echo '<td>' .$bus->getBname() . '</td>';
    echo '<td>' .$bus->getTypeAc() . '</td>';
    echo '<td>' .$bus->getTypeSl() . '</td>';
    echo '<td><a href="?controller=bus&action=toUpdate&id='. $bus->getBid() .'" class="btn btn-primary">Modify</a> <a href="?controller=buss&action=delete&id='. $bus->getBid() .'"class="btn btn-danger">Delete</a> </td>';
    echo '</tr>';
}
echo '</table>';

echo '';