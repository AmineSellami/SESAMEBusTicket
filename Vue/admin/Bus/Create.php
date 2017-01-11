<?php
/**
 * Created by PhpStorm.
 * User: megapc
 * Date: 1/10/2017
 * Time: 4:53 PM
 */

if(isset($bus)){

    echo '<form method="post" action="?controller=bus&action=update">';
    echo '<input type="text" required placeholder="Id" disabled value="'.$bus->getBid().'" name="bid" />';
    echo '<input type="text" required placeholder="Bus Name" value="'.$bus->getBname().'" name="bname" />';
    echo '<select name="type_ac">';
    if($bus->getTypeAC() == "yes") {
        echo '<option value="yes" slected>YES</option>';
        echo '<option value="no">NO</option>';
    }else{
        echo '<option value="yes" >YES</option>';
        echo '<option value="no" slected>NO</option>';
    }
    echo '</select>';
    echo '<select name="type_sl">';
    if($bus->getTypeSl() == "yes") {
        echo '<option value="yes" selected>YES</option>';
        echo '<option value="no">NO</option>';
    }else{
        echo '<option value="yes" >YES</option>';
        echo '<option value="no" selected>NO</option>';
    }
    echo '</select>';
    echo '<input type="submit"  Value="OK" />';
    echo '</form>';

}else {

    echo '<form method="post" action="?controller=bus&action=create">';
    echo '<input type="text" required placeholder="Id" name="bid" />';
    echo '<input type="text" required placeholder="Bus Name" name="bname" />';
    echo '<select name="type_ac">';
    echo '<option value="yes">YES</option>';
    echo '<option value="no">NO</option>';
    echo '</select>';
    echo '<select name="type_sl">';
    echo '<option value="yes">YES</option>';
    echo '<option value="no">NO</option>';
    echo '</select>';
    echo '<input type="submit"  Value="OK" />';
    echo '</form>';
}
