<?php
/**
 * Created by PhpStorm.
 * User: megapc
 * Date: 1/10/2017
 * Time: 4:25 PM
 */

echo '<h3>Routes</h3>';
echo '<hr>';
echo '<a href="?controller=route&action=toCreate" class="btn btn-success">Create</a>';
echo '<table class="table">';
echo '<tr><th>Rid</th><th>Bid</th><th>From Loc</th><th>To Loc</th><th>Fare</th><th>Date Depart</th><th>Temp Depart</th><th>Date Arrive</th><th>Temp Arrive</th><th>Place Dispo </th><th>Max Place</th><th>Actions</th></tr>';
foreach ($routes as $route){
    echo '<tr>';
    echo '<td>' .$route->getRid() . '</td>';
    echo '<td>' .$route->getBid() . '</td>';
    echo '<td>' .$route->getFromloc() . '</td>';
    echo '<td>' .$route->getToloc() . '</td>';
    echo '<td>' .$route->getFare() . '</td>';
    echo '<td>' .$route->getDepDate() . '</td>';
    echo '<td>' .$route->getDepTime() . '</td>';
    echo '<td>' .$route->getArrDate() . '</td>';
    echo '<td>' .$route->getArrTime() . '</td>';
    echo '<td>' .$route->getAvalseats() . '</td>';
    echo '<td>' .$route->getMaxseats() . '</td>';
    echo '<td><a href="?controller=route&action=toUpdate&id='. $route->getRid() .'"" class="btn btn-primary">Modify</a> <a href="?controller=routes&action=delete&id='. $route->getRid() .'"class="btn btn-danger">Delete</a> </td>';
    echo '</tr>';
}

echo '</table>';