<div class="row">
        <div class="span12">
            <form method="post" action="?controller=route&action=getRoutes" class="form-inline" >
                <input name="from" class="span5" type="text"  placeholder="From" required value="<?php if(isset($from)){echo $from;}?>">
                <input name="to" class="span5" type="text"  placeholder="To"  value="<?php if(isset($to)){echo $to;}?>">
                <input name="nb" class="span5" type="number"  placeholder="nb place" required  value="<?php if(isset($nb)){echo $nb;}?>">
                <button type="submit" class="btn btn-primary"> <span class="glyphicon glyphicon-search"></span></button>
            </form>
        </div>
</div>

<?php
if(isset($routes)) {
    echo '<h3>Routes</h3>';
    echo '<hr>';
    echo '<table class="table">';
    echo '<tr><th>Rid</th><th>Bid</th><th>From Loc</th><th>To Loc</th><th>Fare</th><th>Date Depart</th><th>Temp Depart</th><th>Date Arrive</th><th>Temp Arrive</th><th>Place Dispo </th><th>Max Place</th><th>Actions</th></tr>';
    foreach ($routes as $route) {
        if(isset($from) && isset($to) && $to!="" && $nb < $route->getAvalseats()) {
            if($from == $route->getFromloc() && $to == $route->getToloc()) {
                echo '<tr>';
                echo '<td>' . $route->getRid() . '</td>';
                echo '<td>' . $route->getBid() . '</td>';
                echo '<td>' . $route->getFromloc() . '</td>';
                echo '<td>' . $route->getToloc() . '</td>';
                echo '<td>' . $route->getFare() . '</td>';
                echo '<td>' . $route->getDepDate() . '</td>';
                echo '<td>' . $route->getDepTime() . '</td>';
                echo '<td>' . $route->getArrDate() . '</td>';
                echo '<td>' . $route->getArrTime() . '</td>';
                echo '<td>' . $route->getAvalseats() . '</td>';
                echo '<td>' . $route->getMaxseats() . '</td>';
                echo '<td><a href="?controller=reservation&action=toPay&id=' . $route->getRid() . '"" class="btn btn-primary">Reserver</a></td>';
                echo '</tr>';
            }
        } else {
            if($from == $route->getFromloc() && $nb < $route->getAvalseats()) {
                echo '<tr>';
                echo '<td>' . $route->getRid() . '</td>';
                echo '<td>' . $route->getBid() . '</td>';
                echo '<td>' . $route->getFromloc() . '</td>';
                echo '<td>' . $route->getToloc() . '</td>';
                echo '<td>' . $route->getFare() . '</td>';
                echo '<td>' . $route->getDepDate() . '</td>';
                echo '<td>' . $route->getDepTime() . '</td>';
                echo '<td>' . $route->getArrDate() . '</td>';
                echo '<td>' . $route->getArrTime() . '</td>';
                echo '<td>' . $route->getAvalseats() . '</td>';
                echo '<td>' . $route->getMaxseats() . '</td>';
                echo '<td><a href="?controller=reservation&action=toPay&id=' . $route->getRid() . '"" class="btn btn-primary">Reserver</a></td>';
                echo '</tr>';
            }
        }
    }

    echo '</table>';
}
?>